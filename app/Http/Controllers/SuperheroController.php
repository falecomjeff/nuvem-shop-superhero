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
        $superheros = Superheros::orderBy('created_at', 'desc')->paginate(10);

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
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Superheros  $superheros
     * @return \Illuminate\Http\Response
     */
    public function show(Superheros $superheros)
    {
        return View('superheros.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Superheros  $superheros
     * @return \Illuminate\Http\Response
     */
    public function edit(Superheros $superheros)
    {
        return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Superheros  $superheros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Superheros $superheros)
    {
        return null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Superheros  $superheros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Superheros $superheros)
    {
        return null;
    }
}
