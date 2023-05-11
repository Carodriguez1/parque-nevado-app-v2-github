<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\reservas;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.listar', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('clientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo_doc'             =>  'required',
            'numero_doc'    =>  'required',
            'nombre'       =>  'required',
            'fecha_nacimiento'       =>  'required',
        ]);

        $form_data = array(
            'tipo_doc'                  =>   $request->tipo_doc,
            'numero_doc'                =>   $request->numero_doc,
            'nombre'                    =>   $request->nombre,
            'correo'                    =>   $request->correo,
            'telefono'                  =>   $request->telefono,
            'departamento'              =>   $request->departamento,
            'ciudad'                    =>   $request->ciudad,
            'direccion'                 =>   $request->direccion,
            'fecha_nacimiento'          =>   $request->fecha_nacimiento,
            'edad'                      =>   $request->edad,
        );

        Clientes::create($form_data);
        return redirect('clientes')->with('success', 'Datos guardados correctamente.');

    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Clientes::findOrFail($id);
        $reserva = reservas::where('cliente_id', '=', $id)->get();
        return view('clientes.detalles', compact('cliente', 'reserva'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('clientes.editar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'tipo_doc'             =>  'required',
            // 'numero_doc'    =>  'required',
            'nombre'       =>  'required',
            'fecha_nacimiento'       =>  'required',
        ]);

        $form_data = array(
            'tipo_doc'                  =>   $request->tipo_doc,
            'numero_doc'                =>   $request->numero_doc,
            'nombre'                    =>   $request->nombre,
            'correo'                    =>   $request->correo,
            'telefono'                  =>   $request->telefono,
            'departamento'              =>   $request->departamento,
            'ciudad'                    =>   $request->ciudad,
            'direccion'                 =>   $request->direccion,
            'fecha_nacimiento'          =>   $request->fecha_nacimiento,
            'edad'                      =>   $request->edad,
        );

        Clientes::whereid($id)->update($form_data);
        return redirect('clientes')->with('success', 'Datos editados correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Clientes::findOrFail($id);
        $id->delete();
        return back()->with('success', 'Cliente eliminado correctamente');
    }


}
