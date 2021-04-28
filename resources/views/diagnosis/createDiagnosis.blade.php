@extends('admin.layouts')

@section('title')
    Fashion | Diagnostico Capilar
@endsection
{{--Contenido de la pagina--}}
@section('content')
    <h1>Crear nuevo usuario</h1>
    <form class="user" action="{{ route('save.client') }}" method="POST">
        @csrf
        <input type="hidden" name="id_client" value="{{ decrypt($id) }}">
        <div class="container row">
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Nombre</label>
                <input type="text" name="name" class="form-control form-control-user"
                       id="exampleInputEmail" aria-describedby="emailHelp"
                       placeholder="Ingrese el nombre completo" value="{{ old('name') }}" required>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Fecha De Nacimiento</label>
                <input type="date" name="age" class="form-control form-control-user"
                       id="exampleInputPassword" placeholder="Ingrese la fecha de nacimiento" value="{{ old('age') }}" required>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Correo</label>
                <input type="email" name="email" class="form-control form-control-user"
                       id="exampleInputPassword" placeholder="Ingrese el correo electronico" value="{{ old('email') }}" required>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Direccion</label>
                <input type="text" name="address" class="form-control form-control-user"
                       id="exampleInputPassword" placeholder="Ingrese la direccion" value="{{ old('address') }}" required>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Celular</label>
                <input type="number" name="phone" class="form-control form-control-user"
                       id="exampleInputPassword" placeholder="Ingrese el numero celular" value="{{ old('phone') }}" required>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Profesion</label>
                <input type="text" name="profession" class="form-control form-control-user"
                       id="exampleInputPassword" placeholder="Ingrese la Profesion" value="{{ old('profession') }}" required>
            </div>
{{--            <div class="form-group" style="width: 50%;">--}}
{{--                <label style="color: #c65f01">Sexo</label>--}}
{{--                <select name="id_sex" class="form-control" required>--}}
{{--                    <option value="">Seleccione</option>--}}
{{--                    @foreach($sex as $sex)--}}
{{--                        <option value="{{ $sex->id }}" {{ old('tipoDocumento') == $sex->id ? 'selected' : ''}} >{{ $sex->sex }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
        </div>
        <hr>
        <center>
            <button type="submit" class="btn btn-primary btn-user btn-block" style="background-color: #c65f01;">
                Crear Usuario
            </button>
        </center>
    </form>
@endsection
