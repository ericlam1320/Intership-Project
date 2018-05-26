@extends('layout.master_giangvien')

@section('menu-quanly','menu-top-active')

@section ('title','Quản Lý')

@section('content')

<div class="content-wrapper">
 <div class="container">

  <div class="row pad-botm">
    <div class="col-md-12">
      <h4 class="header-line">Quản Lý Sinh Viên</h4>
    </div>
  </div>

  <div class="row">
   <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-info back-widget-set text-center">
      <i class="fa fa-user fa-5x"></i>
      <h3>Bùi Nhật Bằng</h3>
      Họ & tên
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-success back-widget-set text-center">
      <i class="fa fa-bookmark fa-5x"></i>
      <h3>D14-TH02</h3>
      Lớp phụ trách
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-warning back-widget-set text-center">
      <i class="fa fa-comment-o fa-5x"></i>
      <h3>50</h3>
      Số yêu cầu
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-danger back-widget-set text-center">
      <i class="fa fa-users fa-5x"></i>
      <h3>3</h3>
      Số nhóm phụ trách
    </div>
  </div>




</div>              
<div class="col-md-6 col-sm-6 col-xs-12">
 <div class="panel panel-info">
  <div class="panel-heading">
    Thêm Sinh Viên
  </div>
  <div class="panel-body" >
    <form role="form" method="POST" action="giang-vien/quan-ly-sinh-vien/them">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label>Mã SV</label>
        <input class="form-control" type="text" name="masv" />
        <p class="help-block"></p>
      </div>

      <div class="form-group{{ $errors->has('tensv') ? ' has-error' : '' }}">
        <label>Tên SV</label>
        <input class="form-control" type="text" name="tensv" />

          @if ($errors->has('tensv'))
          <p class="help-block">
            <strong> {{ $errors->first('tensv') }}</strong>
          </p>
          @endif
        
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Ngày sinh</label>
            <input type="date" class="form-control date" placeholder="Ngày sinh"  name="ngaysinh" value="<?= date('Y-m-d') ?>">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Giới tính</label><br>
            <label class=""><input type="radio" name="gioitinh" value="1" checked> Nam</label>
            <label class=""><input type="radio" name="gioitinh" value="0"> Nữ</label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label>Chọn Lớp</label>
            <select class="form-control" name="lophoc">
              @foreach($lophoc as $lop)
              <option value="{{$lop->MaLop}}">{{$lop->TenLop}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label>Email</label>
        <input class="form-control" type="text" name="email" />
        @if ($errors->has('email'))
        <p class="help-block">
          <strong> {{ $errors->first('email') }}</strong>
        </p>
        @endif
      </div>

      <div class="form-group{{ $errors->has('diachi') ? ' has-error' : '' }}">
        <label>Địa chỉ</label>
        <input class="form-control" type="text" name="diachi" />

         @if ($errors->has('diachi'))
         <p class="help-block">
          <strong> {{ $errors->first('diachi') }}</strong>
        </p>
        @endif
     
    </div>

    <button type="submit" class="btn btn-info">Thêm</button>

  </form>
</div>
</div>
</div>

<div class="col-md-6">
 <!--    Context Classes  -->
 <div class="panel panel-default">

  <div class="panel-heading">
    Yêu cầu gần đây
  </div>

  <div class="panel-body">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Tên Lớp</th>
            <th>Số lượng SV</th>
            <th>Tên GV</th>
          </tr>
        </thead>
        <tbody>
          <tr class="success">
            <td>1</td>
            <td>Thi Trường Minh</td>
            <td>DH51400704</td>
            <td>Đã duyệt</td>
          </tr>
          <tr class="info">
            <td>2</td>
            <td>Vương Anh Kho</td>
            <td>DH51400553</td>
            <td>Chưa duyệt</td>
          </tr>
          <tr class="warning">
            <td>3</td>
            <td>Nguyễn Chung Tú</td>
            <td>DH51400553</td>
            <td>Đã duyệt</td>
          </tr>
          <tr class="danger">
            <td>4</td>
            <td>Thái Kim Thanh</td>
            <td>DH51400553</td>
            <td>Chưa duyệt</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--  end  Context Classes  -->
</div>

</div>
</div>

@endsection