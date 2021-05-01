@extends('admin.layouts')
@section('title')
    @foreach($client as $clients )
        Diagnosticos {{ $clients->name }}
    @endforeach
@endsection

{{-- Contenido de la pagina --}}
@section('content')

    <!-- Page Heading -->
    @foreach($client as $clients)
        <h1 class="h3 mb-2 text-gray-800">Diagnostcos Capilares {{ $clients->name }}</h1>
    @endforeach
    @foreach($client as $clients )
        <p class="mb-4">Esta es la tlaba de los diagnosticos capilares del cliente {{ $clients->name }}.</p>
    @endforeach

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: #c65f01;">
            <h6 class="m-0 font-weight-bold text-white"><a href="{{ route('index.client') }}" class="btn btn-light" style="color: #c65f01;">Volver a la tabla cliente</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="color: #c65f01;">Foto</th>
                        <th style="color: #c65f01;">Creacion</th>
                        <th style="color: #c65f01;">Frecuencia de lavado</th>
                        <th style="color: #c65f01;">caracteristicas del peinado habitual</th>
                        <th style="color: #c65f01;">Tipo de secado y temperatura</th>
                        <th style="color: #c65f01;">Ver completo</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($diagnosed_client as $fact)
                        <tr>
                            <td><img class="bd-placeholder-img rounded-circle" src="{{ Storage::url($fact->photo) }}" width="50" height="50" alt=""></td>
                            <td>{{ $fact->created_at->diffForHumans() }}</td>
                            <td>{{ $fact->frequencies }}</td>
                            <td>{{ $fact->habitual_hairstyle }}</td>
                            <td>{{ $fact->dried_type }}</td>
                            <td>
                                <a href="{{ route('index.view.diagnosis', encrypt($fact->id)) }}" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
