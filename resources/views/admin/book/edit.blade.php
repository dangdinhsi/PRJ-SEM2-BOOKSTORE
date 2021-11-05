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
                            <form class="form-upload" role="form" action="{{route('admin.update_book',$book->id)}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="book_name">Tên sách</label>
                                    <input type="text" name="book_name" class="form-control" id="book_name" value="{{$book->book_name}}">
                                    <span style="color: red">@error('book_name'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="description">Mô tả sách</label>
                                    <textarea style="resize: none;" rows="8" name="description" class="form-control" id="description">{{$book->description}}</textarea>
                                    <span style="color: red">@error('description'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group uploaded">
                                    <input type="button" id="upload_widget" class="btn btn-primary" value="Ảnh bìa" />
                                    <ul class="cloudinary-thumbnails">
                                        <?php
                                        if (isset($arr)) {
                                            foreach ($arr as $item){
                                                echo '<li class="cloudinary-thumbnail active" data-cloudinary="'.$item.'">';
                                                echo '<img src="https://res.cloudinary.com/siddd00474/image/upload/c_limit,h_60,w_90/'.$item.'.jpg">';
                                                echo '<a href="#" class="cloudinary-delete">x</a></li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <span style="color: red">@error('photo'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="">Thể loại</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $item)
                                            @if($item->category_id == $book->category_id)
                                                <option selected value="{{$item->category_id}}">{{$item->category_name}}</option>
                                            @else
                                                <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <span style="color: red">@error('category_id'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="">Tác giả</label>
                                    <select name="author_id" class="form-control">
                                        @foreach($authors as $item)
                                            @if($item->author_id == $book->author_id)
                                                <option selected value="{{$item->author_id}}">{{$item->author_name}}</option>
                                            @else
                                                <option value="{{$item->author_id}}">{{$item->author_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <span style="color: red">@error('author_id'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="">Nhà xuất bản</label>
                                    <select name="publisher_id" class="form-control">
                                        @foreach($publishers as $item)
                                            @if($item->id == $book->publisher_id)
                                                <option selected value="{{$item->id}}">{{$item->name}}</option>
                                            @else
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <span style="color: red">@error('publisher_id'){{$message}}@enderror</span>
                                </div>
                                <button type="submit" name="add_book" class="btn btn-info">Cập nhật sách</button>
                                <?php
                                if (isset($arr)) {
                                    foreach ($arr as $item){
                                        echo '<input type="hidden" name="photo[]" data-cloudinary-public-id="'.$item.'" value="image/upload/v1635842239/'.$item.'.jpg">';
                                    }
                                }
                                ?>
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
        $('body').on('click','.cloudinary-delete',function(event){
            event.preventDefault();
            var splitedLink = $(this).prev().attr('src').split('/');
            var imgId = splitedLink[splitedLink.length-1].split('.')[0];
            var tempData = 'input[data-cloudinary-public-id="'+imgId +'"]';
            $(tempData).remove();
            var liRemove = 'li[data-cloudinary="'+imgId+'"]';
            $(liRemove).remove();
        });
        document.getElementById("upload_widget").addEventListener("click", function () {
            showUploadWidget();
        }, false);

    </script>
@endsection
