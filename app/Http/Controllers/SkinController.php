<?php

namespace App\Http\Controllers;

use App\Models\Coleccione;
use App\Models\Skin;
use Illuminate\Http\Request;

/**
 * Class SkinController
 * @package App\Http\Controllers
 */
class SkinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skins = Skin::paginate();

        return view('skin.index', compact('skins'))
            ->with('i', (request()->input('page', 1) - 1) * $skins->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skin = new Skin();
        $colecciones = Coleccione::pluck('nombre', 'id');
        return view('skin.create', compact('skin', 'colecciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Skin::$rules);

        $skin = Skin::create($request->all());

        return redirect()->route('skins.index')
            ->with('success', 'Skin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skin = Skin::find($id);

        return view('skin.show', compact('skin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skin = Skin::find($id);

        $colecciones = Coleccione::pluck('nombre', 'id');
        return view('skin.edit', compact('skin', 'colecciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Skin $skin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skin $skin)
    {
        request()->validate(Skin::$rules);

        $skin->update($request->all());

        return redirect()->route('skins.index')
            ->with('success', 'Skin updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $skin = Skin::find($id)->delete();

        return redirect()->route('skins.index')
            ->with('success', 'Skin deleted successfully');
    }
}
