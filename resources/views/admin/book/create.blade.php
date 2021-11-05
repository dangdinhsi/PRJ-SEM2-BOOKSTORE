@extends('admin_layout')
@section('content')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Thêm sách
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form class="form-upload" role="form" action="{{route('admin.save_book')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="book_name">Tên sách</label>
                                    <input type="text" name="book_name" class="form-control" id="book_name" placeholder="Điền tên sách">
                                    <span style="color: red">@error('book_name'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="description">Mô tả sách</label>
                                    <textarea style="resize: none;" rows="8" name="description" class="form-control" id="description" placeholder="Mô tả thông tin về cuốn sách" ></textarea>
                                    <span style="color: red">@error('description'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group uploaded">
                                    <input type="button" id="upload_widget" class="btn btn-primary" value="Ảnh bìa" />
                                    <span style="color: red">@error('photo'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="">Thể loại</label>
                                    <select name="category_id" class="form-control">
                                        <option value="">Chọn thể loại sách</option>
                                        @foreach($categories as $item)
                                            <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                        @endforeach
                                    </select>
                                    <span style="color: red">@error('category_id'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="">Tác giả</label>
                                    <select name="author_id" class="form-control">
                                        <option value="">Chọn tác giả</option>
                                        @foreach($authors as $item)
                                            <option value="{{$item->author_id}}">{{$item->author_name}}</option>
                                        @endforeach
                                    </select>
                                    <span style="color: red">@error('author_id'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="">Nhà xuất bản</label>
                                    <select name="publisher_id" class="form-control">
                                        <option value="">Chọn NXB</option>
                                        @foreach($publishers as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <span style="color: red">@error('publisher_id'){{$message}}@enderror</span>
                                </div>
                                <button type="submit" name="add_book" class="btn btn-info">Tạo sách</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        var arr = [];
        function showUploadWidget() {
            cloudinary.openUploadWidget({
                    cloudName: "siddd00474",
                    uploadPreset: "si03121993",
                    sources: [
                        "local",
                        "url"
                    ],
                    fieldName: "photo[]",
                    thumbnails: ".uploaded",
                    form: ".form-upload",
                    multiple: true,
                    return_delete_token: true
                },
                (error, result) => {
                    if (!error && result && result.event === "success") {
                        console.log(result.info.path);
                    }
                });
        };
        $('body').on('click','.cloudinary-delete',function(){
            var splitedLink = $(this).prev().attr('src').split('/');
            var imgId = splitedLink[splitedLink.length-1].split('.')[0];
            var tempData = 'input[data-cloudinary-public-id="'+imgId +'"]';
            $(tempData).remove();
        });
        document.getElementById("upload_widget").addEventListener("click", function () {
            showUploadWidget();
        }, false);

    </script>
@endsection
