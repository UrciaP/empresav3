<?php

namespace App\Http\Controllers;
// use DB;


use Illuminate\Http\Request;
use App\Models\Persona;


use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    public function servicios(){
        
        // $servicios = Servicio::paginate(10);


        $servicios = Persona::latest()->paginate();

        return view('servicios', compact('servicios')); 
    }
    public function show($id){

        return view('show',[
            'servicio'=>Servicio::find($id)
        ]);

        // return Servicio::find($id);
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
