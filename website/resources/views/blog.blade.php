@extends("layout.adminLayoutPage")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh Sách Bài Viết</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div id="table" class="table-editable">
                              <span class="table-add float-right mb-3 mr-2">
                                  <a href="{{route('post.add')}}">
                                      <button class="btn btn-sm iq-bg-success"><i
                                              class="ri-add-fill"><span class="pl-1">Thêm Bài Viết Mới</span></i>
                              </button>
                                  </a>
                              </span>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên bài viết</th>
                                    <th>Hình ảnh</th>
                                    <th>Miêu tả ngắn</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $index = 1; ?>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td><img src="{{ $post->image }}" alt="Hình ảnh" width="100"></td>
                                        <td>{!! $post->description !!}</td>
                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-primary view-post" data-toggle="modal" data-target="#postModal"
                                                        data-title="{{ $post->title }}" data-content="{{ $post->content }}">Xem nội dung bài viết</button>
                                            </a>
                                            <a href="#">
                                                <button type="button"  class="btn btn-success view-seo" data-toggle="modal" data-target="#seoModal"
                                                        data-title="{{ $post->seo->seo_title }}" data-content="{{ $post->seo->seo_description }}">Xem nội dung Seo</button>
                                            </a>
                                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-warning">Sửa bài viết</a>
                                            <a href="{{route('post.destroy',$post->id)}}" onclick="return confirm('Bạn có muốn xóa không?');" class="btn btn-danger">Xóa bài viết</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="modal fade bd-example-modal-lg" id="postModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="postModalTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="postModalContent">
                                            <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade bd-example-modal-lg" id="seoModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="seoModalTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="seoModalContent">
                                            <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.view-post').click(function() {
                var title = $(this).data('title');
                var content = $(this).data('content');

                $('#postModalTitle').text(title);
                $('#postModalContent').html(content);
            });

            $('.view-seo').click(function() {
                var title = $(this).attr('data-title');
                var content = $(this).attr('data-content');

                $('#seoModalTitle').text(title);
                $('#seoModalContent').html(content);

            });
        });

    </script>

    {{ $posts->links() }}

@endsection
