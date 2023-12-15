@extends("layout.adminLayoutPage")
@section("content")

    <div class="container-fluid iq-card">
        <form action="{{route('post.store')}}" method="POST">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="iq-card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Bài viết đính kèm</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tên bài viết: *</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Tên bài viết...">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Slug bài viết *</label>
                                                    <input type="text" class="form-control" name="slug" placeholder="Slug bài viết...">
                                                </div>
                                            </div>
                                            <div class="iq-card-body">
                                                <div class="mb-3">
                                                    <label for="pwd">Mô tả ngắn:</label>
                                                    <textarea class="tinyMce" name="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Seo Title: *</label>
                                                    <input type="text" class="form-control" name="seo_title" placeholder="Seo Title...">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Seo Keywords: *</label>
                                                    <input type="text" class="form-control" name="seo_keywords" placeholder="Seo Keywords...">
                                                </div>
                                            </div>
                                            <div class="iq-card-body">
                                                <div class="mb-3">
                                                    <label for="pwd">Seo description:</label>
                                                    <textarea class="tinyMce" name="seo_description"></textarea>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="iq-card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Nội dung bài viết:</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="iq-card-body">
                                                <div class="mb-3">
                                                    <label for="pwd">Bài viết chi tiết:</label>
                                                    <textarea class="tinyMce" name="content"></textarea>
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
            <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Submit</button>
        </form>
    </div>

@endsection
