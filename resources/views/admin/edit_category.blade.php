@extends('admin_layout')
@section('content')
<div class="form-w3layouts">
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Cập nhật danh mục sách
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="{{route('update-category')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="category_id" value="{{$currenCategory -> category_id}}">
                            <div class="form-group">
                                <label for="category_name">Tên danh mục</label>
                                <input type="text" value="{{$currenCategory -> category_name}}" name="category_name" class="form-control" id="category_name" placeholder="Điền tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="category_desc">Mô tả danh mục</label>
                                <textarea style="resize: none;" rows="8" name="category_desc" class="form-control" id="category_desc" placeholder="Mô tả danh về danh mục" >{{$currenCategory -> category_desc}}</textarea> 
                            </div>
                            <div class="form-group">
                                <label for="category_status">Trạng thái</label>
                                <select name="category_status" class="form-control m-bot15">
                                    <option value="" selected="">Chọn</option>
                                    <option value="1">Sẵn sàng</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <button type="submit" name="edit_category_book" class="btn btn-info">Cập nhật</button>
                        </form>
                        </div>

                    </div>
                </section>
        </div>	
    </div>
</div>
@endsection