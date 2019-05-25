@extends('layouts.app')

@section('body-class', 'users-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/bg3.jpeg') }}');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Registrar nuevo usuario</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ url('/admin/users') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre del usuario</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Alias </label>
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}"> 
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">E-mail</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Dirección</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                    </div>
                

                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Tipo de usuario (0 Estándar, 1 Admin)</label>
                            <input type="boolean" class="form-control" name="admin" value="{{ old('admin') }}">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">      
                        <div class="col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label"> Teléfono </label>
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Registrar usuario</button>
                <a href="{{ url('/admin/users') }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>

    </div>
</div>

@include('includes.footer')
@endsection
