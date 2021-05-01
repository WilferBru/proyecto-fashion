@extends('admin.layouts')
@section('title')
    Fashion | Diagnostico Capilar
@endsection
{{--Contenido de la pagina--}}
@section('content')
    @foreach($client as $client)
    <h1>Crear diagnoctico para {{ $client->name }}</h1>
    @endforeach
    <form class="user" action="{{ route('save.diagnosis') }}" method="POST" enctype="multipart/form-data" style="margin-top: 10px;">
        @csrf
        <center><h1 style="color: #c65f01">HÁBITOS</h1></center>
        <div class="container row">
            <div class="form-group custom-input-file col-md-6 col-sm-6 col-xs-6" style="width: 50%;">
                <label style="color: #c65f01">Subir Imagen</label><br>
                <input type="file" name="photo" placeholder="" value="{{ old('photo') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" >
            </div>
            <input type="hidden" name="id_discredit" value="normal">
            <input type="hidden" name="id_client" value="{{ decrypt($id) }}">
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Frecuencia de lavado</label>
                <select name="id_washing_frequency" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($washingFrequency as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_washing_frequency') == $fact->id ? 'selected' : ''}} >{{ $fact->frequencies }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Carcteristicas Peinado Habitual</label>
                <input type="text" name="habitual_hairstyle" class="form-control form-control-user"
                       id="exampleInputEmail" aria-describedby="emailHelp"
                       placeholder="Ingrese Las Caracteristicas" value="{{ old('habitual_hairstyle') }}" required>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Tipo De Secado y Temperatura</label>
                <input type="text" name="dried_type" class="form-control form-control-user"
                       id="exampleInputEmail" aria-describedby="emailHelp"
                       placeholder="Ingrese El Tipo De Secado" value="{{ old('dried_type') }}" required>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Productos Que Usa Regularmente</label>
                <input type="text" name="use_products" class="form-control form-control-user"
                       id="exampleInputEmail" aria-describedby="emailHelp"
                       placeholder="Ingrese El Producto" value="{{ old('use_products') }}" required>
            </div>
            <div style="width: 100%;">
                <hr>
                <center><h1 style="color: #c65f01">SALUD</h1></center>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Enfermedades Recientes</label>
                <select name="recent_illnesses" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('recent_illnesses') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('recent_illnesses') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Infecciones</label>
                <select name="infections" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('infections') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('infections') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Problemaas Hormonales</label>
                <select name="hormonal_problems" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('hormonal_problems') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('hormonal_problems') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Intoxicación por Fármacos</label>
                <select name="drug_poisoning" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('drug_poisoning') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('drug_poisoning') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Tensión Emociona</label>
                <select name="emotional_ternure" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('emotional_ternure') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('emotional_ternure') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Operaciones Recientes</label>
                <select name="recent_operations" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('recent_operations') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('recent_operations') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Embarazos y Partos</label>
                <select name="pregnancy" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('pregnancy') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('pregnancy') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Anticonceptivos orales</label>
                <select name="oral_contraceptives" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('oral_contraceptives') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('oral_contraceptives') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%">
                <label style="color: #c65f01">Estrés</label>
                <select name="stress" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('stress') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('stress') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%">
                <label style="color: #c65f01">Alergias</label>
                <input type="text" name="allergies" class="form-control form-control-user"
                       id="exampleInputEmail" aria-describedby="emailHelp"
                       placeholder="Ingrese Las Alergias" value="{{ old('allergies') }}" required>
            </div>
            <div class="form-group" style="width: 50%">
                <label style="color: #c65f01">Enfermedad</label>
                <input type="text" name="illness" class="form-control form-control-user"
                       id="exampleInputEmail" aria-describedby="emailHelp"
                       placeholder="Ingrese La Enfermedad" value="{{ old('illness') }}" required>
            </div>
            <div style="width: 100%;">
                <hr>
                <center><h1 style="color: #c65f01">CUERO CABELLUDO</h1></center>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Tipo De Cuero Cabelludo</label>
                <select name="id_hair_type" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($hairType as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_hair_type') == $fact->id ? 'selected' : ''}} >{{ $fact->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Riego Sanguineo</label>
                <select name="id_blood_irrigation" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($bloodIrrigation as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_blood_irrigation') == $fact->id ? 'selected' : ''}} >{{ $fact->irrigations }}</option>
                    @endforeach
                </select>
            </div>
            <div style="width: 100%;">
                <hr>
                <center><h5 style="color: #c65f01">Alteraciones Del cuero Cabelludo</h5></center>
            </div>
            <div class="form-group" style="width: 50%">
                <label style="color: #c65f01">Caspa Seca</label>
                <select name="dry_dandruff" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('dry_dandruff') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('dry_dandruff') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%">
                <label style="color: #c65f01">Caspa Grasa</label>
                <select name="oily_dandruff" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('oily_dandruff') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('oily_dandruff') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%">
                <label style="color: #c65f01">Grasa</label>
                <select name="oily" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('oily') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('oily') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%">
                <label style="color: #c65f01">Picor</label>
                <select name="itchiness" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('itchiness') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('itchiness') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%">
                <label style="color: #c65f01">Heridas</label>
                <select name="wounds" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('wounds') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('wounds') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%">
                <label style="color: #c65f01">Irritacion</label>
                <select name="soreness" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Si" {{ old('soreness') == 'Si' ? 'selected' : ''}} >Si</option>
                    <option value="No" {{ old('soreness') == 'No' ? 'selected' : ''}} >No</option>
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Descamacion</label>
                <select name="id_peeling" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($peeling as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_peeling') == $fact->id ? 'selected' : ''}} >{{ $fact->peeling }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%">
                <label style="color: #c65f01">Zonas</label>
                <input type="text" name="zones" class="form-control form-control-user"
                       id="exampleInputEmail" aria-describedby="emailHelp"
                       placeholder="Ingrese Las zonas" value="{{ old('zones') }}" required>
            </div>
            <div style="width: 100%;">
                <hr>
                <center><h1 style="color: #c65f01">CABELLO</h1></center>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Grosor</label>
                <select name="id_thickness" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($thickness as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_thickness') == $fact->id ? 'selected' : ''}} >{{ $fact->thicknesses }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Tacto</label>
                <select name="id_tact" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($tact as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_tact') == $fact->id ? 'selected' : ''}} >{{ $fact->tact }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Brillo</label>
                <select name="id_brightness" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($brightness as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_brightness') == $fact->id ? 'selected' : ''}} >{{ $fact->brightness }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Raiz</label>
                <select name="id_root" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($root as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_root') == $fact->id ? 'selected' : ''}} >{{ $fact->root }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Tipo de Trigonograma</label>
                <select name="id_triconogram_type" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($triconogram as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_triconogram_type') == $fact->id ? 'selected' : ''}} >{{ $fact->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Estado Evolutivo</label>
                <select name="id_evolutionary_state" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($evolutionaryState as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_evolutionary_state') == $fact->id ? 'selected' : ''}} >{{ $fact->state }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Coeficiente de Crecimiento</label>
                <select name="id_coefficient_growth" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($coefficientGrowth as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_coefficient_growth') == $fact->id ? 'selected' : ''}} >{{ $fact->coefficient }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Numero de Cebellos Extraidos</label>
                <input type="text" name="number_hair_extracted" class="form-control form-control-user"
                       id="exampleInputEmail" aria-describedby="emailHelp"
                       placeholder="Ingrese La cantidad de cabellos extraidos" value="{{ old('number_hair_extracted') }}" required>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Numero de Cebellos Extraidos</label>
                <input type="text" name="zone_extracted" class="form-control form-control-user"
                       id="exampleInputEmail" aria-describedby="emailHelp"
                       placeholder="Ingrese Las zonas dodne se extrajo" value="{{ old('zone_extracted') }}" required>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Fecha del ultimo lavado</label>
                <input type="date" name="las_wast_date" class="form-control form-control-user"
                       id="exampleInputEmail" aria-describedby="emailHelp"
                       placeholder="Ingrese Las zonas dodne se extrajo" value="{{ old('las_wast_date') }}" required>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Medios</label>
                <select name="id_media" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($media as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_media') == $fact->id ? 'selected' : ''}} >{{ $fact->media }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Puntas</label>
                <select name="id_tips" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($tips as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_tips') == $fact->id ? 'selected' : ''}} >{{ $fact->tips }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Porocidad</label>
                <select name="id_porosity" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($porosity as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_porosity') == $fact->id ? 'selected' : ''}} >{{ $fact->porosity }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Cantidad</label>
                <select name="id_quantity" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($quantity as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_quantity') == $fact->id ? 'selected' : ''}} >{{ $fact->quantity }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Longitud</label>
                <select name="id_longitude" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($longitude as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_longitude') == $fact->id ? 'selected' : ''}} >{{ $fact->longitude }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Elasticidad</label>
                <select name="id_elasticity" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($elasticity as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_elasticity') == $fact->id ? 'selected' : ''}} >{{ $fact->elasticity }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Rizo</label>
                <select name="id_curl" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($curl as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_curl') == $fact->id ? 'selected' : ''}} >{{ $fact->curl }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Forma</label>
                <select name="id_way" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($way as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_way') == $fact->id ? 'selected' : ''}} >{{ $fact->way }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Porcentaje de canas</label>
                <select name="id_percentage_greys" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($percentageGreys as $fact)
                        <option value="{{ $fact->id }}" {{ old('id_percentage_greys') == $fact->id ? 'selected' : ''}} >{{ $fact->percentage }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="width: 50%;">
                <label style="color: #c65f01">Color Cosmetico</label>
                <input type="text" name="cosmetic_color" class="form-control form-control-user"
                       id="exampleInputEmail" aria-describedby="emailHelp"
                       placeholder="Ingrese el nombre del color" value="{{ old('cosmetic_color') }}" required>
            </div>
            <div class="form-group" style="width: 100%;">
                <label style="color: #c65f01">Observaciones</label>
                <textarea class="form-control" aria-label="With textarea" name="remarks">{{ old('remarks') }}</textarea>
            </div>
        </div>
        <hr>
        <center>
            <button type="submit" class="btn btn-primary btn-user btn-block" style="background-color: #c65f01;">
                Crear Diagnostico capilar
            </button>
        </center>
    </form><br><br>
@endsection
@section('script')
    <script>
        {!! $errors->first('photo',
            'Swal.fire({
                icon: "error",
                title: "Oops...",
                text: ":message",
            })'
        )!!}
    </script>
    <script>
        {!! $errors->first('age',
            'Swal.fire({
                icon: "error",
                title: "Oops...",
                text: ":message",
            })'
        )!!}
    </script>
    <script>
        {!! $errors->first('email',
            'Swal.fire({
                icon: "error",
                title: "Oops...",
                text: ":message",
            })'
        )!!}
    </script>
    <script>
        {!! $errors->first('address',
            'Swal.fire({
                icon: "error",
                title: "Oops...",
                text: ":message",
            })'
        )!!}
    </script>
    <script>
        {!! $errors->first('phone',
            'Swal.fire({
                icon: "error",
                title: "Oops...",
                text: ":message",
            })'
        )!!}
    </script>
    <script>
        {!! $errors->first('profession',
            'Swal.fire({
                icon: "error",
                title: "Oops...",
                text: ":message",
            })'
        )!!}
    </script>
    <script>
        {!! $errors->first('id_sex',
            'Swal.fire({
                icon: "error",
                title: "Oops...",
                text: ":message",
            })'
        )!!}
    </script>
@endsection
