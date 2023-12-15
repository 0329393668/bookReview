<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Postcontroller extends Controller
{
    public function add(){
        return view('add_post');
    }
    public function store(Request $request)
    {
        $input = $request->all();
//        echo "<pre>";
//        print_r($input);
//        echo "</pre>";
//        exit;
        $post = new Post();
        $post->title = $input["title"];
        $post->slug = $input["slug"];
        $post->description = $input["description"];
        $post->content = $input["content"];
        $updatedContent = preg_replace('/(?<=src=")storage\//', '/storage/', $post->content);
        $post->content = $updatedContent;
// Tìm ảnh đầu tiên trong nội dung bài viết
        $firstImage = '';
        preg_match('/<img.*?src="(.*?)"/', $post->content, $matches);
        if (isset($matches[1])) {
            $firstImage = $matches[1];
        }
        $post->image = $firstImage; // Gán giá trị cho trường "image"
        $post->save();

        $seo = new Seo();
        $seo->seo_keywords = $input["seo_keywords"];
        $seo->seo_description = $input["seo_description"];
        $seo->seo_title = $input["seo_title"];
        $seo->post_id = $post->id;
        $post->seo()->save($seo);

        $posts = Post::paginate(10);
        return view('blog', ["posts" => $posts]);
    }
    public function edit($id){
        $post = Post::find($id);
        return view('edit_post', ["post"=>$post]);
    }
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if ($post) {
            $input = $request->all();
            $post->title = $input["title"];
            $post->slug = $input["slug"];
            $post->description = $input["description"];
            $post->content = $input["content"];
            $updatedContent = preg_replace('/(?<=src=")storage\//', '/storage/', $post->content);
            $post->content = $updatedContent;
            $firstImage = '';
            preg_match('/<img.*?src="(.*?)"/', $post->content, $matches);
            if (isset($matches[1])) {
                $firstImage = $matches[1];
            }
            $post->image = $firstImage;
            $post->save();
        }
        $posts = Post::paginate(10);
        return view('blog', ["posts" => $posts]);
    }
    public function destroy($id){
        // Tìm và xóa bài viết
        $post = Post::find($id);
        if ($post) {
            $post->delete();
        }
        // Xóa thông tin SEO liên quan đến bài viết
        $seo = Seo::where('post_id', $id)->first();
        if ($seo) {
            $seo->delete();
        }
        $posts = Post::paginate(10);
        return view('blog', ["posts" => $posts]);
    }
}
