<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleats;
use App\Http\Requests\empleatsRequest;



class empleatsController extends Controller
{
    public function index(Request $request) {
        $empleats = Empleats::all(); 

        //Modificación para el boton search
        $job = $request->get('buscar');
        $empleats = Empleats::where('job','like',"%$job%")->paginate();
        
        return view('empleats/index', compact('empleats'));
    }

    public function create() { 
        return view('empleats/create');
     }

    public function store(empleatsRequest $request) { 
        $empleats = Empleats::create($request->all());
        return redirect()->route('empleats.index');
     }

    public function edit(empleats $empleats) { 
        return view('empleats/edit', compact('empleats'));
    }

    public function update(Request $request, empleats $empleats) { 
        //dd($request->all());
        $request->validate([ //necesario para la validación de edit
            "name" => 'required | max:255',
            "last_name" => 'required | max:255',
            "email" => 'required | email | max:255',
            "phone" => 'required | max:15',
            "job" => 'required | max:255',
        ]);
        $empleats->update($request->all());
        return redirect()->route('empleats.index');
    }
  
    public function destroy(empleats $empleats) {
        $empleats->delete();
        return redirect()->route('empleats.index');
    }
}
