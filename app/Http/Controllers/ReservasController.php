<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\reservas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ReservasController extends Controller
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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = reservas::all();
        return view('reservas.listar', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Clientes::all();
        return view('reservas.crear', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_reserva'             =>  'required',
            'hora_reserva'    =>  'required',
            'valor_reserva'       =>  'required',
        ]);

        $form_data =  reservas::create([
            'fecha_reserva'             =>   $request->fecha_reserva,
            'hora_reserva'              =>   $request->hora_reserva,
            'numero_personas'           =>   $request->numero_personas,
            'mayores_18'                =>   $request->mayores_18,
            'menores_18'                =>   $request->menores_18,
            'tipo_plan'                 =>   $request->tipo_plan,
            'servicio_adicional'        =>   $request->servicio_adicional,
            'valor_reserva'             =>   $request->valor_reserva,
            'estado_pago'               =>   $request->estado_pago,
            'cliente_id'                =>   $request->cliente_id,
            'uuid' => (string) Str::orderedUuid(),
       ] );

        $form_data['uuid'] = (string) Str::uuid();

        // reservas::create($form_data);
        return redirect('reservas')->with('success', 'Datos guardados correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reserva = reservas::findOrFail($id);
        return view('reservas.detalles', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clientes = Clientes::all();
        $reserva = reservas::findOrFail($id);
        return view('reservas.editar', compact('reserva', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha_reserva'             =>  'required',
            'hora_reserva'    =>  'required',
            'valor_reserva'       =>  'required',
        ]);

        $form_data = array(
            'fecha_reserva'             =>   $request->fecha_reserva,
            'hora_reserva'              =>   $request->hora_reserva,
            'numero_personas'           =>   $request->numero_personas,
            'mayores_18'                =>   $request->mayores_18,
            'menores_18'                =>   $request->menores_18,
            'tipo_plan'                 =>   $request->tipo_plan,
            'servicio_adicional'        =>   $request->servicio_adicional,
            'valor_reserva'             =>   $request->valor_reserva,
            'estado_pago'               =>   $request->estado_pago,
            'cliente_id'                =>   $request->cliente_id,
        );

        reservas::whereid($id)->update($form_data);
        return redirect('reservas')->with('success', 'Datos editados correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id = reservas::findOrFail($id);
        $id->delete();
        return back()->with('success', 'Reserva eliminada correctamente');
    }
}
