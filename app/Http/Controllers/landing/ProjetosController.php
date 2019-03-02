<?php

namespace App\Http\Controllers\landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projeto;
use Intervention\Image\ImageManagerStatic as image;
use Illuminate\Support\Facades\Storage;

class ProjetosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        $projetos = Projeto::orderBy('created_at', 'desc')->paginate(1);
        return view('landing.projetos', compact('projetos') );
    }


    public function index()
    {
        $projetos = Projeto::orderBy('created_at', 'desc')->get();
        return view('dash.projetos.index', compact('projetos') );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'dash.projetos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Projeto $projeto)
    {
        if ($request->file->getMaxFilesize() < $request->file->getClientSize()) {
            return redirect()->back()->with('error', "Anexo muito grande !");
        }
        if (strstr('.jpg;.jpeg;.gif;.png;', $request->file->clientExtension())) {

            Storage::disk('public')->makeDirectory('projetos');

            $projeto= Projeto::create( $request->all() );

            $imagename = md5( date('his') . $projeto->id) . "." . $request->file->clientExtension();
            Image::make($request->file)->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save(storage_path('app/public') . "/projetos/$imagename");

            $projeto->photo = "projetos/$imagename";
            $projeto->save();

            return redirect()->route('projetos.admin');
        }else{
            return redirect()->back()->with('error', "Extensão de imagem não permitida!");
        }

        dd($request->all());
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
        $projeto = Projeto::findOrFail($id);

        return view('dash.projetos.edit', compact('projeto') );
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
        $projeto = Projeto::findOrFail($id);
        $projeto->update( $request->all() );
        if(isset($request->file))
        {
            if ($request->file->getMaxFilesize() < $request->file->getClientSize()) {
                return redirect()->back()->with('error', "Anexo muito grande !");
            }
            if (strstr('.jpg;.jpeg;.gif;.png;', $request->file->clientExtension())) {

                Storage::disk('public')->delete($projeto->photo);

                $imagename = md5(date('his') . $projeto->id) . "." . $request->file->clientExtension();
                Image::make($request->file)->resize(400, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save(storage_path('app/public') . "/projetos/$imagename");

                $projeto->photo = "projetos/$imagename";
                $projeto->save();

                return redirect()->route('projetos.admin');
            }else{
                return redirect()->back()->with('error', "Extensão de imagem não permitida!");
            }
        }
        return redirect()->route('projetos.admin');
        
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
