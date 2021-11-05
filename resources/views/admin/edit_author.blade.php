@extends('admin_layout')
@section('content')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Sửa tác giả
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form class="form-upload" role="form" action="{{route('update-author',$author->author_id)}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="author_name">Tên tác giả</label>
                                    <input type="text" name="author_name" class="form-control" id="author_name" value="{{$author->author_name}}">
                                    <span style="color: red">@error('author_name'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="author_desc">Thông tin tác giả</label>
                                    <textarea style="resize: none;" rows="8" name="author_desc" class="form-control" id="author_desc">{{$author->author_desc}}</textarea>
                                </div>
                                <div class="form-group uploaded">
                                    <input type="button" id="upload_widget" class="btn btn-primary" value="Ảnh đại diện" />
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
                                    <label for="author_status">Trạng thái</label>
                                    <select name="author_status" class="form-control m-bot15">
                                        <option selected value="1">Sẵn sàng</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                </div>
                                <button type="submit" name="edit_author_book" class="btn btn-info">Cập nhật tác giả</button>
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
