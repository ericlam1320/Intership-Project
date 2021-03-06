@extends('layout.master')

@section ('title','Trang chủ')

@section('menu-trangchu', 'menu-top-active')

@section('content')

<div class="content-wrapper">
 <div class="container">

  <div class="row pad-botm">
    <div class="col-md-12">
      <h4 class="header-line">Sinh Viên</h4>
    </div>
  </div>

  <div class="row">
   <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-info back-widget-set text-center">
      <i class="fa fa-user fa-5x"></i>
      <h3>Vương Anh Kho</h3>
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-success back-widget-set text-center">
      <i class="fa fa-bookmark fa-5x"></i>
      <h3>DH51400553</h3>
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-warning back-widget-set text-center">
      <i class="fa fa-mortar-board fa-5x"></i>
      <h3>D14-TH02</h3>
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-danger back-widget-set text-center">
      <i class="fa fa-users fa-5x"></i>
      <h3>30+ </h3>
    </div>
  </div>



</div>              
<div class="row">

  <div class="col-md-8 col-sm-8 col-xs-12">
    <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >

      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/img/slide_1.jpg" alt="" />
        </div>

        <div class="item">
          <img src="assets/img/slide_2.png" alt="" />
        </div>

        <div class="item">
          <img src="assets/img/slide_3.png" alt="" />
        </div>
      </div>

      <!--INDICATORS-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example" data-slide-to="1"></li>
        <li data-target="#carousel-example" data-slide-to="2"></li>
      </ol>
      <!--PREVIUS-NEXT BUTTONS-->
      <a class="left carousel-control" href="#carousel-example" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>

      <a class="right carousel-control" href="#carousel-example" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>




  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12" >
      <div class="alert alert-info text-center">
        <h3>Thông báo Lớp</h3>
        <i class="fa fa-envelope fa-4x"></i>
        <hr />
        <p>
         Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
         Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
         Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
         Lorem ipsum dolor sit amet.
        </p>
        <hr />
        <a href="#" class="btn btn-info">Xem chi tiết</a> 
      </div>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12" >
      <div class="alert alert-success text-center">
        <h3>Thông báo Nhóm</h3> 
        <i class="fa fa-envelope fa-4x"></i>
        <hr />
        <p>
         Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
         Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
         Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
         Lorem ipsum dolor sit amet.
       </p>
       <hr />
       <a href="#" class="btn btn-success">Xem chi tiết</a> 
     </div>
    </div>


 <div class="col-md-8 col-sm-8 col-xs-12">
  <div class="panel panel-success">
    <div class="panel-heading">
     DANH SÁCH NHÓM THAM GIA
    </div>
   <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>User No.</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>100090</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

</div>


</div>



</div>

</div>
</div>

@endsection