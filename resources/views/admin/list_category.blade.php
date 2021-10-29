@extends('admin_layout')
@section('content')
		<div class="table-agile-info">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    Liệt kê danh mục
                </div>
           <!--  <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
		        <select class="input-sm form-control w-sm inline v-middle">
		          <option value="0">Bulk action</option>
		          <option value="1">Delete selected</option>
		          <option value="2">Bulk edit</option>
		          <option value="3">Export</option>
		        </select>
		        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div> -->
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên</th>
            <th>Ngày tạo</th>
            <th>Trạng thái</th>
            <th style="width:60px;">Sửa</th>
            <th style="width:60px;">Xóa</th>
          </tr>
        </thead>
        <tbody>
        	@foreach ($list as $item)
        	<tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$item-> category_name}}</td>
            <td><span class="text-ellipsis">{{$item-> created_at}}</span></td>
            <td><span class="text-ellipsis">
            	{{ $item-> category_status == 1 ?'Sẵn sàng':'Không hoạt động'}}
            </span></td>
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
            </td>
            <td>
            	<a href="" class="active" ui-toggle-class=""><i class="fa fa-trash-o text-danger text"></i></a>
            </td>
          </tr>
        	@endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-12 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection