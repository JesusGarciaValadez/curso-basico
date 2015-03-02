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
                                    <a href="{{ route( 'admin.users.edit', $user ) }}" title="Editar">Editar</a>
                                    <a href="{{ route( 'admin.users.destroy', $user ) }}" title="Eliminar">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>