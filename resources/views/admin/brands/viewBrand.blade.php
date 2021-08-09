@extends('admin.layouts.main')
@section('title' , 'Trang danh mục')
@section('content')
<div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Views Brands</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Views Brands</li>
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
                <th style="width: 15%">Tên Hãng</th>
                <th style="width: 10%">image</th>
                <th style="width: 20%">Mô tả</th>
                <th style="width: 10%">address</th>
                <th style="width: 15%">số lượng máy bay</th>
                <th style="width: 20%" class="text-center">
                @if(Auth::user()->role == 1 || Auth::user()->role == 2)
                    <a class="btn btn-primary btn-sm" href="{{route('brand.add')}}">
                        <i class="fas fa-folder">
                        </i>
                        Thêm Hãng
                    </a>
                @else
                    action
                @endif
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $b)
            <tr>
                <td>{{$b->id}}</td>
                <td>{{$b->name}}</td>
                <td>
                    <img src="{{asset('storage/' . $b->image)}}" width="70">
                </td>
                <td>{{$b->desc}}</td>
                <td>{{$b->address}}</td>
                <td>{{count($b->pland)}}</td>
                <td class="project-actions text-center">  
                    @if(Auth::user()->role == 1)  
                    <a class="btn btn-info btn-sm" href="{{route('brand.edit', ['id' => $b->id])}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{route('brand.remove' , ['id' => $b->id])}}">
                        <i class="fas fa-trash">
                        </i>
                        Delete
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
<br>

@endsection