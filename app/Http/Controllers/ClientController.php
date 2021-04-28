<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Sex;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::join('sexes', 'sexes.id', '=', 'clients.id_sex')->select('clients.id','name','age','email','address','phone','profession','sexes.sex')->get();
        return view('client.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sex = Sex::all();
        return view('client.createClient', compact('sex'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'age'        => 'required',
            'email'      => 'required|email|unique:clients',
            'address'    => 'required',
            'phone'      => 'required',
            'profession' => 'required',
            'id_sex'     => 'required',
        ],[
            'name.required'        => 'El campo nombre es obligatorio',
            'age.required'         => 'El campo fecha de nacimiento es obligatorio',
            'email.required'       => 'El campo correo es obligatorio',
            'address.required'     => 'El campo direccion es obligatorio',
            'phone.required'       => 'El campo celular es obligatorio',
            'profession.required'  => 'El campo profesion es obligatorio',
            'id_sex.required'      => 'El campo sexo es obligatorio',
        ]);

        $newClient = new Client;

        $newClient->name=$request->name;
        $newClient->age=$request->age;
        $newClient->email=$request->email;
        $newClient->address=$request->address;
        $newClient->phone=$request->phone;
        $newClient->profession=$request->profession;
        $newClient->id_sex=$request->id_sex;

        $newClient->save();

        return redirect('/Clientes')->with('messages','Se ha creado el cliente corectamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
