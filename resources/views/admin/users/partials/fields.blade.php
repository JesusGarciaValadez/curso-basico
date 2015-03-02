                        <div class="form-group">
                            {!! Form::label( 'first_name', 'Nombres' ) !!}
                            {!! Form::text( 'first_name', null, [ 'class' => 'form-control', 'placeholder' => 'Escribe tu nombre' ] ) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label( 'last_name', 'Apellidos' ) !!}
                            {!! Form::text( 'last_name', null, [ 'class' => 'form-control', 'placeholder' => 'Escribe tus apellidos' ] ) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label( 'email', 'Correo eletrónico' ) !!}
                            {!! Form::email( 'email', null, [ 'class' => 'form-control', 'placeholder' => 'Escribe tu correo eletrónico' ] ) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label( 'password', 'Password' ) !!}
                            {!! Form::password( 'password', [ 'class' => 'form-control', 'placeholder' => 'Contraseña' ] ) !!}
                        </div>
                        <div class="checkbox">
                            <label for="active">
                                {!! Form::checkbox( 'active', '1', true ) !!}Activo
                            </label>
                        </div>
                        <div class="form-group">
                            {!! Form::label( 'type', 'Tipo' ) !!}
                            {!! Form::select( 'type', [ '' => 'Seleccione tipo', 'user' => 'Usuario', 'admin' => 'Administrador' ], null, [ 'class' => 'form-control' ] ); !!}
                        </div>