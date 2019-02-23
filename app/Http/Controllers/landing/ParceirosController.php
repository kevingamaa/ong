<?php

namespace App\Http\Controllers\landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Parceiro;
use Intervention\Image\ImageManagerStatic as image;
use Illuminate\Support\Facades\Storage;


class ParceirosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

        return view('landing.parceiros', compact('parceiros'));
    }


    public function index()
    {
        $parceiros = Parceiro::orderBy('created_at', 'desc') ->get();

        return view('dash.parceiros.index', compact('parceiros'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.parceiros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Parceiro $parceiro)
    {   
        if ($request->file->getMaxFilesize() < $request->file->getClientSize()) {
            return redirect()->back()->with('error', "Anexo muito grande !");
        }
        if (strstr('.jpg;.jpeg;.gif;.png;', $request->file->clientExtension())) {

            $parceiro->nome = $request->nome;
            $parceiro->referencia = $request->referencia;
            $parceiro->save();
            Storage::disk('public')->makeDirectory('parceiros');
            $imagename = md5( date('his') . $parceiro->id) . "." . $request->file->clientExtension();
            Image::make($request->file)->resize(280, 209, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save(storage_path('app/public') . "/parceiros/$imagename");

            $parceiro->logo = "parceiros/$imagename";
            $parceiro->save();

            return redirect()->route('parceiros.admin');
        }else{
            return redirect()->back()->with('error', "Extensão de imagem não permitida!");
        }

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
        $parceiro = Parceiro::find($id);
        if (isset($parceiro)) 
        {
            return view('dash.parceiros.edit', compact('parceiro'));
        }
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
        $parceiro = Parceiro::find($id);
        $parceiro->nome = $request->nome;
        $parceiro->referencia = $request->referencia;
        $parceiro->save();

        if(isset($request->file))
        {
            Storage::delete("public/$parceiro->logo");

            if ($request->file->getMaxFilesize() < $request->file->getClientSize()) {
                return redirect()->back()->with('error', "Anexo muito grande !");
            }

            if (strstr('.jpg;.jpeg;.gif;.png;', $request->file->clientExtension())) {
                $imagename = md5( date('his') . $parceiro->id) . "." . $request->file->clientExtension();
                Image::make($request->file)->resize(280, 209, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save(storage_path('app/public') . "/parceiros/$imagename");

                $parceiro->logo = "parceiros/$imagename";
                $parceiro->save();
            }else{
                return redirect()->back()->with('error', "Extensão de imagem não permitida!");
            }
        }

        return redirect()->route('parceiros.admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parceiro = Parceiro::find($id);
        if(isset($parceiro) ) 
        {
            $parceiro->delete();
        }

        return redirect()->route('parceiros.admin');
    }
}
