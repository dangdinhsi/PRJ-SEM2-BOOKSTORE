@extends('admin_layout')
@section('content')
<div class="form-w3layouts">
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Thêm tác giả
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form class="form-upload" role="form" action="{{route('save-author')}}" method="post">
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label for="author_name">Tên tác giả</label>
                                <input type="text" name="author_name" class="form-control" id="author_name" placeholder="Điền tên tác giả">
                            </div>
                            <div class="form-group">
                                <label for="author_desc">Thông tin tác giả</label>
                                <textarea style="resize: none;" rows="8" name="author_desc" class="form-control" id="author_desc" placeholder="Mô tả thông tin về tác giả" ></textarea> 
                            </div>
                            <div class="form-group">
                                <input type="button" id="upload_widget" class="btn btn-primary" value="Ảnh đại diện" />
                            </div>
                            <div class="form-group uploaded">
                                <input type="hidden" id="images" class="form-control" />
                            </div>
                            <button type="submit" name="add_author_book" class="btn btn-info">Tạo tác giả</button>
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