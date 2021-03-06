<?php

namespace App\Http\Controllers;

use App\Sensor;
use Illuminate\Http\Request;

class SensoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Sensor::orderBy('id', 'DESC')->get();
        } else {
            return view('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $sensor = new Sensor();
        $sensor->temperatura = $request->Temperatura;
        $sensor->velocidad_viento = $request->VelocidadViento;
        $sensor->radiacion = $request->Radiacion;
        $sensor->presion_atmoferica = $request->PresionAtmoferica;
        $sensor->humedad = $request->Humedad;
        $sensor->precipitacion = $request->Precipitacion;
        $sensor->direccion_viento= $request->DireccionViento;
        $sensor->calidad_aire = $request->CalidadAire;
        $sensor->save();

        return $sensor;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sensor = Sensor::find($id);
        $sensor->delete();
        return 'Registro eliminado satisfactoriamente';
    }
}
