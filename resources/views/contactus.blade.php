@extends('layouts.app')

@section('body-class', 'product-page')

@section('content')
<style type="text/css">
    .feedback {
  background-color : #31B0D5;
  color: white;
  padding: 5px 5px;
  border-radius: 4px;
  border-color: #46b8da;
}

div.mybutton {
  position: fixed;
  bottom: 0;
  float: left;
  /*right: 10px;*/
  z-index: 100;
  width: 100%;
  text-align:center;
  margin: 0 auto;
  text-align:center;
}

ul {
    text-align:center;
}

 .nav-pills{
    transform: scale(0.7,0.7);
 }

 .barra_horizontal_ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  /*background-color: rgba(0,0,0,0.3);*/
  display: flex;
  justify-content: center;
  
}
.barra_horizontal_li{
  float: left;
}
.barra_horizontal_li a{
    color: #bdbdbd;
  display: block;
    font-size: 10px;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  display: inline-flex;
  vertical-align: middle;
}

</style>
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('../assets/img/examples/city.jpg');"></div>

        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="profile">
                            <div class="avatar">
                                <img src="../assets/img/christian.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            <div class="name">
                                <h3 class="title">Christian Louboutin</h3>
                                <h6>Designer</h6>
                            </div>
                        </div>
                    </div>
                    <div class="description text-center">
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>

                    </div>

                </div>
                
            </div>

        </div>
        <div class="mybutton fixed ">
                    <ul class="nav nav-pills barra_horizontal_ul list-group" role="tablist">
                        <li class="active feedback barra_horizontal_li list-group-item">
                            <a href="{{ url('/') }}" role="tab" data-toggle="tab">
                                <i class="material-icons">home</i>
                                Inicio
                            </a>
                        </li>
                        <li class="feedback barra_horizontal_li list-group-item">
                            <a href="#work" role="tab" data-toggle="tab">
                                <i class="material-icons">shopping_basket</i>
                                Tienda
                            </a>
                        </li>
                        <li class="feedback barra_horizontal_li list-group-item">
                            <a  href="#shows" role="tab" data-toggle="tab">
                                <i class="material-icons">favorite</i>
                                Contacto
                            </a>
                        </li>
                        <li class="feedback barra_horizontal_li list-group-item">
                            <a href="#shows" role="tab" data-toggle="tab">
                                <i class="material-icons">info</i>
                                Acerca
                            </a>
                        </li>
                    </ul>
                </div>

    </div>



@include('includes.footer')
@endsection

@section('scripts')

@endsection
