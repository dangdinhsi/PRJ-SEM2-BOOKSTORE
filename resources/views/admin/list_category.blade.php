@extends('admin_layout')
@section('content')
   {{ csrf_field() }}
		<div class="table-agile-info">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    Liệt kê danh mục
                </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="max-width: 150px;">
              <label class="i-checks m-b-none">
               Mã Danh Mục
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
            <td>{{$item-> category_id}}</td>
            <td>{{$item-> category_name}}</td>
            <td><span class="text-ellipsis">{{$item-> updated_at}}</span></td>
            <td><span class="text-ellipsis">
              @php
               if($item-> category_status == 0){
                echo '<p style="color:red;">Ẩn</p>';
              }else{
                echo '<p style="color:green;">Hiển thị</p>';
              }
              @endphp
            </span></td>
            <td>
              <a href="{{route('edit-category')}}?category_id={{$item-> category_id}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
            </td>
            <td>
            	<a href="#" onclick="return deleteCategory({{$item-> category_id}});" class="active" ui-toggle-class=""><i class="fa fa-trash-o text-danger text"></i></a>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">


  function deleteCategory(category_id){
    var x = confirm("Bạn chắc chắn muốn xóa danh mục ?");
    if(x){
         $.post("{{route('delete-category')}}",
         {
          category_id: category_id,
          '_token' : $('[name=_token]').val()
          },function(data,status){
              alert('Xóa thành công!!!');
              location.href = '{{route('list-category')}}';
              return true;
          });
          }else return false;
  }
</script>
@endsection