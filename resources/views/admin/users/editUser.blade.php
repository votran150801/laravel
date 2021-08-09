@extends('admin.layouts.main');
@section('title' , 'Edit Sản phẩm')
@section('content')
<div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit User</li>
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
                    <h3 class="card-title">Edit User</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Tên User</label>
                        <input type="text" id="inputName" name="name" class="form-control" value="{{$user->name}}">
                    </div>


                    <div class="form-group">
                        <label for="inputClientCompany">email</label>
                        <input type="text" id="inputClientCompany" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                    @if($user->role == 1)
                        <div class="form-check">
                            <input checked class="form-check-input" value="1" type="radio" name="role" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Admin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="2" type="radio" name="role" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Quản trị
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="0" type="radio" name="role" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Khách hàng
                            </label>
                        </div>
                    @elseif($user->role == 2)
                        <div class="form-check">
                            <input class="form-check-input" value="1" type="radio" name="role" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Admin
                            </label>
                        </div>
                        <div class="form-check">
                            <input checked class="form-check-input" value="2" type="radio" name="role" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Quản trị
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="0" type="radio" name="role" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Khách hàng
                            </label>
                        </div>
                         
                    @else
                        <div class="form-check">
                            <input class="form-check-input" value="1" type="radio" name="role" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Admin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="2" type="radio" name="role" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Quản trị
                            </label>
                        </div>
                        <div  class="form-check">
                            <input  checked class="form-check-input" value="0" type="radio" name="role" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Khách hàng
                            </label>
                        </div>    
                    @endif       
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