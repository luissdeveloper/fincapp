@extends('layouts.app')

@section('body-class', 'user-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Editar usuario</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ url('/admin/users/'.$user->id.'/edit') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre del usuario</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name',$user->name) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Alias </label>
                            <input type="text" class="form-control" name="username" value="{{ old('username',$user->username) }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password',$user->password) }}"> 
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">E-mail</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email',$user->email) }}"> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Dirección</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address',$user->address) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Admin</label>
                            <input type="boolean" class="form-control" name="admin" value="{{ old('admin',$user->admin) }}">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">      
                        <div class="col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label"> Teléfono </label>
                                <input type="text" class="form-control" name="phone" value="{{ old('phone',$user->phone) }}">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Guardar cambios</button>
                <a href="{{ url('/admin/users') }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>

    </div>

</div>

@include('includes.footer')
@endsection
