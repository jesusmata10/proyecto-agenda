<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenda=Agenda::paginate(5);
        //return dd($agenda);
        return view('agenda.agenda', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return dd($request);
        $input=$request->all();
        $agenda=Agenda::create($input);
        return back()->with('mensaje', 'Se ha agregado el nuevo Registro');

        return view('agenda.create');

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
        $agenda = Agenda::findOrFail($id);
        return view('agenda.edit', compact('agenda'));
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
        Agenda::updateOrCreate(
            ['id' => $id, 'id' => $id],
            $request->all()
        );
        return redirect()->route('agenda.index')->with('c', 'Se ha sctualizado el Registro');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda -> delete();
        return redirect()->route('agenda.index')->with('c','Registro Eliminado sastifatoriamente!');
    }


    public function confirm($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('agenda.confirm', compact('agenda'));
    }
}
