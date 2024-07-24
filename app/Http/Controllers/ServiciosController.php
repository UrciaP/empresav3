<?php

namespace App\Http\Controllers;
// use DB;


use Illuminate\Http\Request;
use App\Models\Persona;

use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    public function index(){
        
        // $servicios = Servicio::paginate(10);

        $servicios = Persona::get();
        // $servicios = Persona::latest()->paginate();

        return view('servicios', compact('servicios'));
        // $servicios = Servicio::latest()->paginate(10);


        // $servicios=Servicio::latest('titulo')->get();
        // $servicios=Servicio::get();
        // $servicios = Servicio::latest()->paginate();
        
        // $servicios=[
        //     ['titulo'=>'Mantenimiento'],
        //     ['titulo'=>'Afinamiento'],
        //     ['titulo'=>'cambio de aceite'],
        //     ['titulo'=>'Lavado tipo salón'],
        // ];
        
    }
    public function show($id)
    {
        return view('show',
            ['persona'=>Persona::find($id)]
        );
        // return  Persona::find($id);
    }

    public function create(){
        return view('create');
    }
    public function store(CreateServicioRequest $request){
        
        Persona::create($request->validated());
        return redirect()->route('servicios');

        // $camposv = request()->validate([
        //     'cperApellido'=> 'required',
        //     'cPerNombre'=> 'required',
        //     'cPerDireccion'=> 'required',
        //     'dPerFecNac'=> 'required',
        //     'nPerEdad'=> 'required',
        //     'nPerSueldo'=> 'required',
        //     'nPerEstado' => 'required|in:0,1',
        // ]);

        // Persona::create($camposv);

        // return redirect()->route('servicios');     
    }
}
