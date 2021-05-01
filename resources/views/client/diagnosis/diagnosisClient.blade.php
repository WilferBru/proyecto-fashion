@extends('admin.layouts')
@section('title')
    Fashion | Diagnostico Capilar
@endsection
{{--Contenido de la pagina--}}
@section('content')
    @foreach($diagnosed_client as $client )
        <!-- Page Heading --><h6 class="d-none d-sm-inline-block " style="color: #c65f01;">Creado {{ $client->created_at->diffForHumans() }} </h6>
        <center><div class="d-sm-flex align-items-center justify-content-between ">
                <h1 class="h3 mb-0 text-gray-800" style="color: #c65f01;">

                </h1>
                {{--            <h1 class="h3 mb-0 text-gray-800"> Diagnostico de {{ $client->name }}</h1>--}}

            </div></center>

        <!-- Content Row -->
        <div class="container">
            <center>
                <h1 class="d-none d-sm-inline-block " style="color: #c65f01;">Diagnostico de {{ $client->name }} </h1><br>
                <a href="sisa">
                    <img class="bd-placeholder-img rounded-circle" src="{{ Storage::url($client->photo) }}" width="200" height="200" alt="">
                </a>

            </center>
        </div>

        <!-- Content Row -->

        <div class="row" style="margin-top: 10px;">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #c65f01;">
                        <h4 class="m-0 font-weight-boldy" style="color: white;">Habitos</h4>
                        <div class="dropdown no-arrow">
                            <p style="color: #c65f01;" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-address-card" style="color: white;"></i>
                            </p>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Frecuencia de lavado:</h5>
                                    <p style="color: #1c294e">{{ $client->frequencies }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Caracteristicas de peinado habitual:</h5>
                                    <p style="color: #1c294e">{{ $client->habitual_hairstyle }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">tipo de secado y temperatura:</h5>
                                    <p style="color: #1c294e">{{ $client->dried_type }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Productos que usa regularmente:</h5>
                                    <p style="color: #1c294e">{{ $client->use_products }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #c65f01;">
                        <h4 class="m-0 font-weight-boldy" style="color: white;">Salud</h4>
                        <div class="dropdown no-arrow">
                            <p style="color: #c65f01;" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-heartbeat" style="color: white;"></i>
                            </p>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Enfermedades recientes:</h5>
                                    <p style="color: #1c294e">{{ $client->recent_illnesses }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Infecciones:</h5>
                                    <p style="color: #1c294e">{{ $client->infections }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Problemas Hormonales:</h5>
                                    <p style="color: #1c294e">{{ $client->hormonal_problems }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Intoxicación por farmacos:</h5>
                                    <p style="color: #1c294e">{{ $client->drug_poisoning }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Tencion emocional:</h5>
                                    <p style="color: #1c294e">{{ $client->emotional_ternure }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Operaciones recientes:</h5>
                                    <p style="color: #1c294e">{{ $client->recent_operations }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Embarazo:</h5>
                                    <p style="color: #1c294e">{{ $client->pregnancy }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Anticonceptivos Orales:</h5>
                                    <p style="color: #1c294e">{{ $client->oral_contraceptives }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Estres:</h5>
                                    <p style="color: #1c294e">{{ $client->stress }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Alergias:</h5>
                                    <p style="color: #1c294e">{{ $client->allergies }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Enfermedad:</h5>
                                    <p style="color: #1c294e">{{ $client->illness }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #c65f01;">
                        <h4 class="m-0 font-weight-boldy" style="color: white;">Cuero cabelludo</h4>
                        <div class="dropdown no-arrow">
                            <p style="color: #c65f01;" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-briefcase-medical" style="color: white;"></i>
                            </p>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Tipo:</h5>
                                    <p style="color: #1c294e">{{ $client->types }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Riego Sanguineo:</h5>
                                    <p style="color: #1c294e">{{ $client->irrigations }}</p>
                                </div>
                                <div style="width: 100%;">
                                    <center><h1 style="color: #994d05">Alteraciones:</h1></center>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Caspa Seca:</h5>
                                    <p style="color: #1c294e">{{ $client->dry_dandruff }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Caspa Grasa:</h5>
                                    <p style="color: #1c294e">{{ $client->oily_dandruff }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Grasa:</h5>
                                    <p style="color: #1c294e">{{ $client->oily }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Picor:</h5>
                                    <p style="color: #1c294e">{{ $client->itchiness }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Heridas:</h5>
                                    <p style="color: #1c294e">{{ $client->wounds }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Irritacion:</h5>
                                    <p style="color: #1c294e">{{ $client->soreness }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Descamacion:</h5>
                                    <p style="color: #1c294e">{{ $client->peeling }}</p>
                                </div>
                                <div style="width: 50%;">
                                    <h5 style="color: #c65f01">Zonas:</h5>
                                    <p style="color: #1c294e">{{ $client->zones }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: #c65f01;">
                        <h4 class="m-0 font-weight-boldy" style="color: white;">Cabello</h4>
                        <div class="dropdown no-arrow">
                            <p style="color: #c65f01;" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-hand-holding-medical" style="color: white;"></i>
                            </p>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Grosor:</h5>
                                    <p style="color: #1c294e">{{ $client->thicknesses }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Tacto:</h5>
                                    <p style="color: #1c294e">{{ $client->tact }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Brillo:</h5>
                                    <p style="color: #1c294e">{{ $client->brightness }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Raiz:</h5>
                                    <p style="color: #1c294e">{{ $client->root }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Tipo de Triconograma:</h5>
                                    <p style="color: #1c294e">{{ $client->type }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Estado Evolutivo:</h5>
                                    <p style="color: #1c294e">{{ $client->state }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Coeficiente de crecimiento:</h5>
                                    <p style="color: #1c294e">{{ $client->coefficient }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Num. De cabellos estraidos:</h5>
                                    <p style="color: #1c294e">{{ $client->number_hair_extracted }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Zona de Extraccion:</h5>
                                    <p style="color: #1c294e">{{ $client->zone_extracted }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Fecha de Ultimo Lavado:</h5>
                                    <p style="color: #1c294e">{{ $client->las_wast_date }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Medios:</h5>
                                    <p style="color: #1c294e">{{ $client->media }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Puntas:</h5>
                                    <p style="color: #1c294e">{{ $client->tips }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Porosidad:</h5>
                                    <p style="color: #1c294e">{{ $client->porosity }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Cantidad:</h5>
                                    <p style="color: #1c294e">{{ $client->quantity }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Longitud:</h5>
                                    <p style="color: #1c294e">{{ $client->longitude }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Elasticidad:</h5>
                                    <p style="color: #1c294e">{{ $client->elasticity }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Rizo:</h5>
                                    <p style="color: #1c294e">{{ $client->curl }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Forma:</h5>
                                    <p style="color: #1c294e">{{ $client->way }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Porcentaje de Canas:</h5>
                                    <p style="color: #1c294e">{{ $client->percentage }}</p>
                                </div>
                                <div style="width: 25%;">
                                    <h5 style="color: #c65f01">Color Cosmetico:</h5>
                                    <p style="color: #1c294e">{{ $client->cosmetic_color }}</p>
                                </div>
                                <div style="width: 75%;">
                                    <h5 style="color: #c65f01">Observaciones:</h5>
                                    <p style="color: #1c294e">{{ $client->remarks }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endforeach
@endsection
