@extends('admin_layout')
@section('content')
    {{ csrf_field() }}
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách đầu sách
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="max-width: 150px;">
                            <label class="i-checks m-b-none">
                                Mã Sách
                            </label>
                        </th>
                        <th>Tên</th>
                        <th>Ngày tạo</th>
                        <th>Tác giả</th>
                        <th>NXB</th>
                        <th>Thể loại</th>
                        <th>Ảnh minh họa</th>
                        <th>Trạng thái</th>
                        <th style="width:60px;">Sửa</th>
                        <th style="width:60px;">Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($books as $id => $item)
                        <tr>
                            <td>{{$item-> id}}</td>
                            <td>{{$item-> book_name}}</td>
                            <td><span class="text-ellipsis">{{$item-> updated_at}}</span></td>
                            <td>{{$item->author_name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->category_name}}</td>
                            <?php
                            $myCloudinaryDomain ='https://res.cloudinary.com/siddd00474/image/upload/c_limit,h_60/';
                            if(isset($item)){
                                $arr = explode(";",$item->images);
                            }
                            $urlDefault = $myCloudinaryDomain.$arr[0].'.jpg';
                            echo '<td><img src="'.$urlDefault.'" alt=""></td>';
                            ?>
                            <td><span class="text-ellipsis">
              @php
                  if($item-> status == 0){
                   echo '<p style="color:red;">Ẩn</p>';
                 }else{
                   echo '<p style="color:green;">Hiển thị</p>';
                 }
              @endphp
            </span></td>
                            <td>
                                <a href="{{route('admin.edit_book',$item-> id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                            </td>
                            <td>
                                DELETE
                                {{--                                <a href="#" onclick="return deleteAuthor({{$item-> author_id}});" class="active" ui-toggle-class=""><i class="fa fa-trash-o text-danger text"></i></a>--}}
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


        function deleteAuthor(author_id){
            var x = confirm("Bạn chắc chắn muốn xóa danh mục ?");
            if(x){
                $.post("{{route('delete-author')}}",
                    {
                        author_id: author_id,
                        '_token' : $('[name=_token]').val()
                    },function(data,status){
                        alert('Xóa thành công!!!');
                        location.href = '{{route('list-author')}}';
                        return true;
                    });
            }else return false;
        }
    </script>
@endsection
