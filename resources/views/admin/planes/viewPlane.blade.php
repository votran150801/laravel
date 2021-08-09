@extends('admin.layouts.main')
@section('title' , 'Quản trị sản phẩm')
@section('content')
<div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Views Planes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Views planes</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
<form action="" method="get">
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="">Tên máy bay:</label>
                <input type="text" name="keyword" class="form-control">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">Danh mục:</label>
                <select name="brands_id" class="form-control">
                    <option value="">Tất cả</option>
                    @foreach($brands as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">Sắp xếp theo</label>
                <select name="order_by" class="form-control">
                    <option value="">Mặc định</option>
                    @foreach(config('common.plane_order_by') as $k => $val)
                    <option value="{{$k}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-sm btn-primary" type="submit">Tìm kiếm</button>
        </div>
    </div>
</form>
<br>
<div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">STT </th>
                <th style="width: 20%">Tên sản phẩm</th>
                <th>Image</th>
                <th style="width: 30%" class="text-center">
                Mô tả
                </th>
                <th>Hãng máy bay</th>       
                <!-- <th style="width: 8%" class="text-center">Status</th> -->
                <th style="width: 15%" class="text-center">
                @if(Auth::user()->role == 1 || Auth::user()->role == 2)
                    <a class="btn btn-primary btn-sm" href="{{route('plane.add')}}">
                        <i class="fas fa-folder">
                        </i>
                        Thêm sản phẩm
                    </a>
                @else
                    action
                @endif     
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($plane as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>
                    <img src="{{asset('storage/' . $p->image )}}" width="70" alt="">
                </td>
                <td>{{$p->desc}}</td>
                <td>{{$p->brand->name}}</td>

                <!-- @if($p->status == 1)
                    <td class="project-state"> <span class="badge badge-success">Còn hàng</span></td>
                @else($p->status == 0)
                    <td class="project-state"> <span class="badge badge-danger">Hết hàng</span></td>  
                @endif
                 -->
                <td class="project-actions text-center">
                @if(Auth::user()->role == 1)
                    <a class="btn btn-info btn-sm" href="{{route('plane.edit', ['id' => $p->id])}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{route('plane.remove' , ['id' => $p->id])}}">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                @else
                    <p class="text-danger">Bạn cần đăng nhập  
                        <a href="{{route('login')}}"> Admin </a>
                        để edit 
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
<div class="row">
    <div class="col-6 offset-3 d-flex justify-content-center">
        {{$plane->links()}}
    </div>
</div>
</div>
@endsection