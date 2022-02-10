<?php

namespace App\Http\Controllers;
use App\Models\Publicacion;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\PublicacionesRequest;
use Illuminate\Support\Facades\Auth;

class Publicaciones extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicacion::get();

        return view('index', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicacionesRequest $request)
    {
        Publicacion::create([
            'titulo'=> request('titulo'),
            'extracto' => request('extracto'),
            'contenido' => request('contenido'),
            'caducable' => request('caducable'),
            'comentable' => request('comentable'),
            'creacion' => request('creacion'),
            'acceso' => request('acceso'),
            'user_id' => Auth::id(),
            'creacion' => Carbon::now()
        ]);    
        return redirect('publicaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Publicacion::findOrFail($id);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
