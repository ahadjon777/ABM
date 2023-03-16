<?php

namespace App\Http\Controllers\Monoblok;

use App\Http\Controllers\Controller;
use App\Models\Boshqarma;
use App\Models\Monoblok;
use Illuminate\Http\Request;

class MonoblokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mono= Monoblok::all();
//        dd($mono->all());
        $m = 1;
        return view('admin.layout.monoblok.index', compact('mono', 'm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $boshqar = Boshqarma::with('monoblok')->get();
        return view('admin.layout.monoblok.create',compact('boshqar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Monoblok::create([
            'model'=>$request->model,
            'seria_name'=>$request->seria_name,
            'ishlangan_sana'=>$request->ishlangan_sana,
            'hisob_sana'=>$request->hisob_sana,
            'olindi'=>$request->olindi,
            'topshirdi'=>$request->topshirdi,
            'ozu_hajmi'=>$request->ozu_hajmi,
            'boshqarma_id'=>$request->boshqarma_id
        ]);

        return redirect(route('admin.monoblok.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monoblok  $monoblok
     * @return \Illuminate\Http\Response
     */
    public function show(Monoblok $monoblok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monoblok  $monoblok
     * @return \Illuminate\Http\Response
     */
    public function edit(Monoblok $monoblok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monoblok  $monoblok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monoblok $monoblok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monoblok  $monoblok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monoblok $monoblok)
    {
        //
    }
}
