<?php

namespace App\Http\Controllers;

use App\Superheros;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all superheros.
        $superheros = Superheros::orderBy('created_at', 'desc')->paginate(5);

        return View('superheros.index')
            ->with('superheros', $superheros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('superheros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate form fields.
        $request->validate([
            'nickname'           => 'required',
            'real_name'          => 'required',
            'origin_description' => 'required',
            'superpowers'        => 'required',
            'catch_phrase'       => 'required',
        ]);

        // Create a new entry in database with values of form.
        Superheros::create($request->all());

        return redirect()->route('index')
            ->with('success','Superhero created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Superheros id $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get a specific superhero by $id.
        $superhero = Superheros::find($id);

        return View('superheros.show')
            ->with('superhero', $superhero);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Superheros  $superheros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get a specific superhero by $id.
        $superhero = Superheros::find($id);

        return View('superheros.edit')
            ->with('superhero', $superhero);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Superheros  $superheros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate form fields.
        $request->validate([
            'nickname'           => 'required',
            'real_name'          => 'required',
            'origin_description' => 'required',
            'superpowers'        => 'required',
            'catch_phrase'       => 'required',
        ]);

        // Get a specific superhero by $id.
        $superhero = Superheros::find($id);

        // Insert new form values in superhero entity.
        $superhero->nickname           = $request->nickname;
        $superhero->real_name          = $request->real_name;
        $superhero->origin_description = $request->origin_description;
        $superhero->superpowers        = $request->superpowers;
        $superhero->catch_phrase       = $request->catch_phrase;

        // Persist data.
        $superhero->save();

        return redirect()->route('index')
            ->with('success','Superhero edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Superheros  $superheros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get a specific superhero by $id.
        $superhero = Superheros::find($id);
        // Delete superhero.
        $superhero->delete();

        return redirect()->route('index')
            ->with('success', 'Superhero has been deleted.');
    }
}
