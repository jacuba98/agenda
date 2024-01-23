<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::with('hotel')->get();
        return view('index', compact('agenda'));
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $agenda = Agenda::where('name', 'like', '%' . $query . '%')
            ->orWhere('job', 'like', '%' . $query . '%')
            ->orWhere('departament', 'like', '%' . $query . '%')
            ->orWhere('extension', 'like', '%' . $query . '%')
            ->orWhere('email', 'like', '%' . $query . '%')
            ->get();

        return view('agenda._agenda_list', compact('agenda'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotels = Hotel::get();
        $agenda = Agenda::get();
        return view('agenda.create', compact('agenda', 'hotels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'name' => 'required',
            'job' => 'required',
            'departament' => 'required',
            'hotel_id' => 'required|exists:hotels,id',
            'extension' => 'required', 'unique', 'interger',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Agenda::class],
        ]);

        $registro = Agenda::create($data);

        toastr()->addSuccess("{$registro->name} CREADO.");

        return redirect()->route('index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        $hotels = Hotel::all(); // Obtén la lista de hoteles
        //dd($agenda);
        return view('agenda.edit', compact('agenda', 'hotels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'job' => 'required',
            'departament' => 'required',
            'hotel_id' => 'required|exists:hotels,id',
            'extension' => 'required', 'unique', 'interger',
            'email' => 'required|email',
        ]);

        $registro = Agenda::findOrFail($id);
        $registro->update($data);

        toastr()->addSuccess("{$registro->name} ACTUALIZADO.");
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registro = Agenda::findOrFail($id);
        $registro->delete();

        toastr()->addSuccess("{$registro->name} ELIMINADO.");
        return redirect()->route('index');
    }
}
