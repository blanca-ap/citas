<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Localizacion;


class LocalizacionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localizacions = Localizacion::all();

        return view('localizacions/index',['localizacions'=>$localizacions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('localizacions/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'latitud' => 'required|integer|min:0',
            'longitud' =>'required|integer|min:0',
            'nombre' => 'required|max:255',

        ]);

        $localizacion = new Localizacion($request->all());
        $localizacion->save();


        flash('Localizacion creada correctamente');

        return redirect()->route('localizacions.index');
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

        $localizacion = Localizacion::find($id);


        return view('localizacions/edit',['localizacion'=>$localizacion]);
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
        $this->validate($request, [
            'latitud' => 'required|integer|min:0',
            'longitud' =>'required|integer|min:0',
            'nombre' =>'required|max:255',

        ]);
        $localizacion= Localizacion::find($id);
        $localizacion->fill($request->all());

        $localizacion->save();

        flash('Localizacion modificada correctamente');

        return redirect()->route('localizacions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $localizacion = Localizacion::find($id);
        $localizacion->delete();
        flash('Localizacion borrada correctamente');

        return redirect()->route('localizacions.index');
    }
}