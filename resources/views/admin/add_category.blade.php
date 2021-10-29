@extends('admin_layout')
@section('content')
<div class="form-w3layouts">
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Thêm danh mục sách
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="{{route('save-category')}}" method="post">
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label for="category_name">Tên danh mục</label>
                                <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Điền tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="category_desc">Mô tả danh mục</label>
                                <textarea style="resize: none;" rows="8" name="category_desc" class="form-control" id="category_desc" placeholder="Mô tả danh về danh mục" ></textarea> 
                            </div>

                            <div class="form-group">
                                <label for="category_status">Trạng thái</label>
                                <select name="category_status" class="form-control m-bot15">
                                    <option value="1">Sẵn sàng</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div> -->
                            <button type="submit" name="add_category_book" class="btn btn-info">Tạo</button>
                        </form>
                        </div>

                    </div>
                </section>
        </div>	
    </div>
</div>
@endsection