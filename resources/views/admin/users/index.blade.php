@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>

                <div class="panel-body">
                    <p>
                        <a href="{{ route( 'admin.users.create' ) }}" title="Nuevo usuario" class="btn btn-info" role="button">Nuevo usuario</a>
                    </p>
                    <p>Hay {{ $users->total() }} usuarios</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Tipo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach ( $users as $user )
                            <tr>
                                <td>{{ $user-> id }}</td>
                                <td>{{ $user->full_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type }}</td>
                                <td>
                                    <a href="" title="Editar">Editar</a>
                                    <a href="" title="Eliminar">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
