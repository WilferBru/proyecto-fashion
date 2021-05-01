<?php

namespace App\Http\Controllers;

use App\Models\Alteration;
use App\Models\BlodyIrrigation;
use App\Models\Brightness;
use App\Models\CapillaryDiagnosi;
use App\Models\Client;
use App\Models\CoefficientGrowth;
use App\Models\Curl;
use App\Models\Discredit;
use App\Models\Elasticity;
use App\Models\EvolutionaryState;
use App\Models\HairType;
use App\Models\Longitude;
use App\Models\Media;
use App\Models\Peeling;
use App\Models\PercentageGray;
use App\Models\Porosity;
use App\Models\Quantity;
use App\Models\Root;
use App\Models\Tact;
use App\Models\Thickness;
use App\Models\Tip;
use App\Models\TriconogramType;
use App\Models\User;
use App\Models\Way;
use App\Models\WhasingFrequency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CapillaryDiagnosisController extends Controller
{

    public function index($id)
    {
//        $id_1 = CapillaryDiagnosi::select('id')->where('id_client','=',decrypt($id))->get();
        $client = Client::select('name')
            ->where('id','=',decrypt($id))->get();
        $diagnosed_client = CapillaryDiagnosi::join('whasing_frequencies', 'whasing_frequencies.id', '=', 'capillary_diagnosis.id_washing_frequency')
                                             ->select('capillary_diagnosis.id', 'capillary_diagnosis.created_at', 'photo', 'whasing_frequencies.frequencies', 'habitual_hairstyle', 'dried_type', 'use_products', 'recent_illnesses', 'infections', 'hormonal_problems', 'drug_poisoning', 'emotional_ternure', 'recent_operations', 'pregnancy', 'oral_contraceptives', 'stress')->where('id_client','=',decrypt($id))->get();

        return view('diagnosis.indexDiagnosisClient', compact('diagnosed_client', 'client'));
//        return $diagnosed_client;
    }

    public function indexView($id)
    {
//        $client = CapillaryDiagnosi::find(decrypt($id));

        $diagnosed_client = CapillaryDiagnosi::join('whasing_frequencies', 'whasing_frequencies.id', '=', 'capillary_diagnosis.id_washing_frequency')
            ->join('clients', 'clients.id', '=', 'capillary_diagnosis.id_client')
            ->join('hair_types', 'hair_types.id', '=', 'capillary_diagnosis.id_hair_type')
            ->join('blody_irrigations', 'blody_irrigations.id', '=', 'capillary_diagnosis.id_blood_irrigation')
            ->join('peelings', 'peelings.id', '=', 'capillary_diagnosis.id_peeling')
            ->join('thicknesses', 'thicknesses.id', '=', 'capillary_diagnosis.id_thickness')
            ->join('tacts', 'tacts.id', '=', 'capillary_diagnosis.id_tact')
            ->join('brightnesses', 'brightnesses.id', '=', 'capillary_diagnosis.id_brightness')
            ->join('roots', 'roots.id', '=', 'capillary_diagnosis.id_root')
            ->join('triconogram_types', 'triconogram_types.id', '=', 'capillary_diagnosis.id_triconogram_type')
            ->join('evolutionary_states', 'evolutionary_states.id', '=', 'capillary_diagnosis.id_evolutionary_state')
            ->join('coefficient_growths', 'coefficient_growths.id', '=', 'capillary_diagnosis.id_coefficient_growth')
            ->join('media', 'media.id', '=', 'capillary_diagnosis.id_media')
            ->join('tips', 'tips.id', '=', 'capillary_diagnosis.id_tips')
            ->join('porosities', 'porosities.id', '=', 'capillary_diagnosis.id_porosity')
            ->join('quantities', 'quantities.id', '=', 'capillary_diagnosis.id_quantity')
            ->join('longitudes', 'longitudes.id', '=', 'capillary_diagnosis.id_longitude')
            ->join('elasticities', 'elasticities.id', '=', 'capillary_diagnosis.id_elasticity')
            ->join('curls', 'curls.id', '=', 'capillary_diagnosis.id_curl')
            ->join('ways', 'ways.id', '=', 'capillary_diagnosis.id_way')
            ->join('percentage_grays', 'percentage_grays.id', '=', 'capillary_diagnosis.id_percentage_greys')
            ->select('capillary_diagnosis.id', 'clients.name', 'capillary_diagnosis.created_at', 'photo', 'whasing_frequencies.frequencies', 'habitual_hairstyle', 'dried_type', 'use_products', 'recent_illnesses', 'infections', 'hormonal_problems', 'drug_poisoning', 'emotional_ternure', 'recent_operations', 'pregnancy', 'oral_contraceptives', 'stress', 'allergies', 'illness', 'hair_types.types', 'blody_irrigations.irrigations', 'dry_dandruff', 'oily_dandruff', 'oily', 'itchiness', 'wounds', 'soreness', 'peelings.peeling', 'zones', 'thicknesses.thicknesses', 'tacts.tact', 'brightnesses.brightness', 'roots.root', 'triconogram_types.type', 'evolutionary_states.state', 'coefficient_growths.coefficient', 'zone_extracted', 'number_hair_extracted', 'las_wast_date', 'media.media', 'tips.tips', 'porosities.porosity', 'quantities.quantity', 'longitudes.longitude', 'elasticities.elasticity', 'curls.curl', 'ways.way', 'percentage_grays.percentage', 'cosmetic_color', 'remarks')->where('capillary_diagnosis.id','=',decrypt($id))->get();
        return view('diagnosis.diagnosisClient', compact('diagnosed_client'));
    }


    public function create($id)
    {
        $client = Client::select('name')
                          ->where('id','=',decrypt($id))->get();
        $washingFrequency  = WhasingFrequency::all();
        $hairType          = HairType::all();
        $bloodIrrigation   = BlodyIrrigation::all();
        $alteration        = Alteration::all();
        $peeling           = Peeling::all();
        $discredit         = Discredit::all();
        $thickness         = Thickness::all();
        $tact              = Tact::all();
        $brightness        = Brightness::all();
        $root              = Root::all();
        $triconogram       = TriconogramType::all();
        $evolutionaryState = EvolutionaryState::all();
        $coefficientGrowth = CoefficientGrowth::all();
        $media             = Media::all();
        $tips              = Tip::all();
        $porosity          = Porosity::all();
        $quantity          = Quantity::all();
        $longitude         = Longitude::all();
        $elasticity        = Elasticity::all();
        $curl              = Curl::all();
        $way               = Way::all();
        $percentageGreys   = PercentageGray::all();

        return view('diagnosis.createDiagnosis', compact('id'), compact('washingFrequency','hairType', 'bloodIrrigation', 'alteration', 'peeling', 'discredit', 'thickness', 'tact', 'brightness', 'root', 'triconogram', 'evolutionaryState', 'coefficientGrowth', 'media', 'tips', 'porosity', 'quantity', 'longitude', 'elasticity', 'curl', 'way', 'percentageGreys', 'client'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'photo'                 => 'required',
            'id_client'             => 'required',
            'id_discredit'             => 'required',
            'id_washing_frequency'  => 'required',
            'habitual_hairstyle'    => 'required',
            'dried_type'            => 'required',
            'use_products'          => 'required',
            'recent_illnesses'      => 'required',
            'infections'            => 'required',
            'hormonal_problems'     => 'required',
            'drug_poisoning'        => 'required',
            'emotional_ternure'     => 'required',
            'recent_operations'     => 'required',
            'pregnancy'             => 'required',
            'oral_contraceptives'   => 'required',
            'stress'                => 'required',
            'allergies'             => 'required',
            'illness'               => 'required',
            'id_hair_type'          => 'required',
            'id_blood_irrigation'   => 'required',
            'dry_dandruff'          => 'required',
            'oily_dandruff'         => 'required',
            'oily'                  => 'required',
            'itchiness'             => 'required',
            'wounds'                => 'required',
            'soreness'              => 'required',
            'id_peeling'            => 'required',
            'zones'                 => 'required',
            'id_thickness'          => 'required',
            'id_tact'               => 'required',
            'id_brightness'         => 'required',
            'id_root'               => 'required',
            'id_triconogram_type'   => 'required',
            'id_evolutionary_state' => 'required',
            'id_coefficient_growth' => 'required',
            'number_hair_extracted' => 'required',
            'zone_extracted'        => 'required',
            'las_wast_date'         => 'required',
            'id_media'              => 'required',
            'id_tips'               => 'required',
            'id_porosity'           => 'required',
            'id_quantity'           => 'required',
            'id_longitude'          => 'required',
            'id_elasticity'         => 'required',
            'id_curl'               => 'required',
            'id_way'                => 'required',
            'id_percentage_greys'   => 'required',
            'cosmetic_color'        => 'required',
            'remarks'               => 'required',
        ]);

        $diagnosis = new CapillaryDiagnosi;

            $diagnosis->photo=$request->file('photo')->store('public/photosDiagnosis');
            $diagnosis->id_client=$request->id_client;
            $diagnosis->id_discredit=$request->id_discredit;
            $diagnosis->id_washing_frequency=$request->id_washing_frequency;
            $diagnosis->habitual_hairstyle=$request->habitual_hairstyle;
            $diagnosis->dried_type=$request->dried_type;
            $diagnosis->use_products=$request->use_products;
            $diagnosis->recent_illnesses=$request->recent_illnesses;
            $diagnosis->infections=$request->infections;
            $diagnosis->hormonal_problems=$request->hormonal_problems;
            $diagnosis->drug_poisoning=$request->drug_poisoning;
            $diagnosis->emotional_ternure=$request->emotional_ternure;
            $diagnosis->recent_operations=$request->recent_operations;
            $diagnosis->pregnancy=$request->pregnancy;
            $diagnosis->oral_contraceptives=$request->oral_contraceptives;
            $diagnosis->stress=$request->stress;
            $diagnosis->allergies=$request->allergies;
            $diagnosis->illness=$request->illness;
            $diagnosis->id_hair_type=$request->id_hair_type;
            $diagnosis->id_blood_irrigation=$request->id_blood_irrigation;
            $diagnosis->dry_dandruff=$request->dry_dandruff;
            $diagnosis->oily_dandruff=$request->oily_dandruff;
            $diagnosis->oily=$request->oily;
            $diagnosis->itchiness=$request->itchiness;
            $diagnosis->wounds=$request->wounds;
            $diagnosis->soreness=$request->soreness;
            $diagnosis->id_peeling=$request->id_peeling;
            $diagnosis->zones=$request->zones;
            $diagnosis->id_thickness=$request->id_thickness;
            $diagnosis->id_tact=$request->id_tact;
            $diagnosis->id_brightness=$request->id_brightness;
            $diagnosis->id_root=$request->id_root;
            $diagnosis->id_triconogram_type=$request->id_triconogram_type;
            $diagnosis->id_evolutionary_state=$request->id_evolutionary_state;
            $diagnosis->id_coefficient_growth=$request->id_coefficient_growth;
            $diagnosis->number_hair_extracted=$request->number_hair_extracted;
            $diagnosis->zone_extracted=$request->zone_extracted;
            $diagnosis->las_wast_date=$request->las_wast_date;
            $diagnosis->id_media=$request->id_media;
            $diagnosis->id_tips=$request->id_tips;
            $diagnosis->id_porosity=$request->id_porosity;
            $diagnosis->id_quantity=$request->id_quantity;
            $diagnosis->id_longitude=$request->id_longitude;
            $diagnosis->id_elasticity=$request->id_elasticity;
            $diagnosis->id_curl=$request->id_curl;
            $diagnosis->id_way=$request->id_way;
            $diagnosis->id_percentage_greys=$request->id_percentage_greys;
            $diagnosis->cosmetic_color=$request->cosmetic_color;
            $diagnosis->remarks=$request->remarks;

            $diagnosis->save();

            return redirect('/Clientes')->with('messages', 'El diagnosico capilar se ha creado con exito!!');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
