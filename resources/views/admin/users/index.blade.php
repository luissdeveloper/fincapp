@extends('layouts.app')

@section('title', 'Listado de usuarios')

@section('body-class', 'users-page')

@section('content')


<style>


.table-users {
    border: 1px solid #ccc;
    max-width: calc(100% - 2em);
    margin: 1em auto;
    width: 800px;
}
 
table { width: 100%; }
 
td, th { padding: 10%; }
 
td {
    text-align: left;
    vertical-align: middle;
}
td:last-child {
    font-size: 0.95em;
    line-height: 1.4;
    text-align: left;
}
 
th { background-color: #efefef; }
 
tr:nth-child(2n) { background-color: white; }
tr:nth-child(2n+1) { background-color: #fafafa; }



   .stacktable { width: 100%; }
    .stacktable tr td, .stacktable tr th { border: 1px solid #dfdfdf; padding: 10px; }
    .st-head-row { padding-top: 1em; }
    .st-head-row.st-head-row-main { font-size: 1.5em; padding-top: 0; }
    .st-key { width: 49%; text-align: left; padding-left: 15%; font-weight: bold; }
    .st-val { width: 49%; padding-left: 1%; }
    
    .stacktable.large-only { display: table; }
    .stacktable.small-only { display: none; }

    @media (max-width: 768px) {
        .stacktable.large-only { display: none; }
        .stacktable.small-only { display: table; }
    }

.word-wrap {
        word-break: break-all;
        // word-wrap: break-word;
        // overflow-wrap: break-word;
    }
    .no-wrap {
        white-space: nowrap;
    }
    .fixed {
        table-layout: fixed;
    }


</style>
   
<div class="header header-filter" style="background-image: url('{{ asset('img/bg3.jpeg') }}');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de usuarios</h2>

            <div class="team table-user">
                <div class="row header">
                    <a href="{{ url('/admin/users/create') }}" class="btn btn-primary btn-round">Nuevo usuario</a>

                    <table id="make-responsive" class="table" width = "100%" cellpadding="0">
                        <thead>
                            <tr>
                                <th class="text-left" >#</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-left">Alias</th>
                                <th class="text-left">Contraseña</th>
                                <th class="text-left">E-mail</th>
                                <th class="text-left">Tipo</th>
                                <th class="text-left">Teléfono</th>
                                <th class="text-left">Dirección</th>
                                <th class="text-left">Opciones</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td class="col-md-4">{{ $user->username }}</td>
                                <td class="word-wrap">{{ $user->password }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->admin }}</td>
                                <td>{{ $user->phone }}</td>
                                <td class="col-md-4">{{ $user->address }}</td>

                                <td class="td-actions text-right" >
                                    <form method="post" action="{{ url('/admin/users/'.$user->id) }}" class="form-group label floating">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        
                                        <a href="{{ url('/admin/users/'.$user->id.'/edit') }}" rel="tooltip" title="Editar usuario" class="btn btn-success btn-simple btn-xs form-group label floating">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <!-- <a href="#" rel="tooltip" title="Imágenes del usuario" class="btn btn-warning btn-simple btn-xs">
                                            <i class="fa fa-image"></i>
                                        </a> -->
                                        <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs form-group label floating" >
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>

@section('scripts')
<script src="{{ asset('/js/stacktable.js') }}" type="text/javascript"></script>
<script>
        $('#make-responsive').cardtable();
</script>
@endsection

@include('includes.footer')

@endsection
