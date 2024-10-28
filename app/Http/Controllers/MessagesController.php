<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Auth\Events\Validated;

class MessagesController extends Controller
{
    //
    //metodo para mostrar el formulario para editar

    public function showEditForm()
    {
        $messages = Message::all(); // Obtén todos los mensajes de la base de datos
        return view('editar', compact('messages'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'text' => 'required|string',
            'negrita' => 'required|string',
            'subrayado' => 'required|string',
        ]);

        Message::create([
            'text' => $request->text,
            'negrita' => $request->input('negrita'),
            'subrayado'=>$request->input('subrayado'),
        ]);

        return redirect()->route('messages.create')->with('success','Mensaje Registrado');;
    }

    public function editar(){
        return view('editar');
    }
    
    public function actualizar(Request $request, $id)
    {
        // Validar los datos de entrada
        $request->validate([
            'text' => 'required|string',
            'negrita' => 'required|string',
            'subrayado' => 'required|string',
        ]);
    
        // Buscar la duda por ID y actualizarla
        $message = Message::find($id);
        $message->update($message);
    
        // Redirigir al listado de dudas con un mensaje de éxito
        return redirect()->route('dudas.listado')->with('success', 'Duda actualizada correctamente');
    }

}

