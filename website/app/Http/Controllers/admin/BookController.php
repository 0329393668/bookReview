<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index(){
        $books = [
            ["id" => 1, "name" => "Muôn Kiếp Nhân Sinh", "img" => "https://cdn0.fahasa.com/media/catalog/product/m/u/muonkiepnhansinh.jpg", "category"=> "Tâm linh"],
            ["id" => 2, "name" => "Monster", "img" => "https://cdn0.fahasa.com/media/catalog/product/8/9/8935250711326.jpg", "category"=> "Kinh Dị"],
            ["id" => 3, "name" => "Sơn Trà Nở Muộn", "img" => "https://cdn0.fahasa.com/media/catalog/product/8/9/8935212360913.jpg", "category"=> "Tình Cảm"],
        ];
        return view("admin.content.book.index",["books"=>$books]);
    }
}
