@extends('admin.layouts.main')
@section('title' , 'Trang danh mục')
@section('content')
<div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Views Usres</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Views Users</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
<div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">STT </th>
                <th style="width: 20%">Tên sản phẩm</th>
                <th style="width: 20%">email</th>
                <th style="width: 8%" class="text-center">Quyền</th>
                <th style="width: 20%" class="text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                @if($u->role == 1)
                    <td class="project-state"> <span class="badge badge-danger">Admin</span></td>
                @elseif($u->role == 2)
                    <td class="project-state"> <span class="badge badge-warning">Quản trị</span></td>  
                @else   
                    <td class="project-state"> <span class="badge badge-success">Khách hàng</span></td>   
                @endif      
                <td class="project-actions text-center">  
                    @if(Auth::user()->role == 1)  
                    <a class="btn btn-info btn-sm" href="{{route('user.edit', ['id' => $u->id])}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    @else    
                        <p class="text-danger">Bạn cần đăng nhập  
                            <a href="{{route('login')}}"> Admin </a>
                            để edit Danh mục
                        </p>    
                    @endif    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div><!-- /.container-fluid -->
      </section>

@endsection