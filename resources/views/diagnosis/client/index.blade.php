@extends('admin.layouts')
@section('title')
    Fashion | Clientes
@endsection

{{-- Contenido de la pagina --}}
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Clientes</h1>
    <p class="mb-4">Esta es la tlaba de clientes podra crearles un diagnostico capilar al igual que podra ver los diagnosticos pasados del cliente que elija.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: #c65f01;">
            <h6 class="m-0 font-weight-bold text-white"><a href="{{ route('create.client') }}" class="btn btn-light" style="color: #c65f01;">Nuevo Cliente</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="color: #c65f01;">Nombre</th>
                        <th style="color: #c65f01;">Edad</th>
                        <th style="color: #c65f01;">Correo</th>
                        <th style="color: #c65f01;">Direccion</th>
                        <th style="color: #c65f01;">Celular</th>
                        <th style="color: #c65f01;">Profesion</th>
                        <th style="color: #c65f01;">Sexo</th>
                        <th style="color: #c65f01;">Diagnostico</th>
                        <th style="color: #c65f01;">modi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($client as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->age }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->address }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->profession }}</td>
                        <td>{{ $client->sex }}</td>
                        <td>
                            <a href="{{ route('create.diagnosis', encrypt($client->id)) }}" class="btn btn-success btn-circle"><i class="fas fa-file-signature"></i></a>
                            <a href="{{ route('index.diagnosis', encrypt($client->id)) }}" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-circle"><i class="fas fa-user-edit"></i></a>
                            <a class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
