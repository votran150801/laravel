@extends('admin.layouts.main');
@section('title' , 'Edit Sản phẩm')
@section('content')
<div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Brand</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit Brand</li>
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
                    <h3 class="card-title">Edit Hãng máy bay</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Tên hãng máy bay</label>
                        <input type="text" id="inputName" name="name" class="form-control" value="{{$brand->name}}">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" name="file_upload" id="formFile">
                    </div>
                    <div class="form-floating">
                        <label for="floatingTextarea2">Mô tả</label>
                        <textarea class="form-control" name="desc" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{$brand->desc}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Địa chỉ</label>
                        <input type="text" id="inputClientCompany" name="address" class="form-control" value="{{$brand->address}}">
                    </div>


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