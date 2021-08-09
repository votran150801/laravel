@extends('admin.layouts.main');
@section('title' , 'Edit san pham')
@section('content')
<div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit plane</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit plane</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <form class="card card-primary" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h3 class="card-title">Thêm máy bay</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Tên máy bay</label>
                        <input type="text" id="inputName" name="name" class="form-control" value="{{old('name', $planes->name)}}">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file"  name="file_upload" id="formFile">
                        @error('file_upload')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="floatingTextarea2">Mô tả</label>
                        <textarea class="form-control" name="desc"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{old('desc', $planes->desc)}}</textarea>
                    </div>
                    @error('desc')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="inputStatus">Hãng máy bay</label>
                        <select id="inputStatus" name="brands_id" class="form-control custom-select">
                            @foreach($brands as $b)
                            <option @if($b->id == old('brands_id', $planes->brands_id))
                                selected
                                @endif
                                value="{{$b->id}}"

                                >{{$b->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- <div class="form-group">
                            <label for="inputStatus">Trạng thái</label>
                            <select id="inputStatus" name="status" class="form-control custom-select" >
                                @if($planes->status == 1)
                                    <option selected  value="1">Còn Hàng</option>
                                    <option value="0">Hết Hàng</option>    
                                @else  
                                    <option value="1">Còn Hàng</option>
                                    <option  selected   value="0">Hết Hàng</option>   
                                @endif                        
                            </select>
                        </div> -->
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success float-right">Thêm sản phẩm</button>
                        </div>
                    </div>
            </form>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

</div>


<!-- /.content -->
</div>
</div><!-- /.container-fluid -->
      </section>
@endsection