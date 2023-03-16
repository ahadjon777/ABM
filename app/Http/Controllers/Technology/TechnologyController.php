<?php

namespace App\Http\Controllers\Technology;

use App\Exports\TechnologyExport;
use App\Http\Controllers\Controller;
use App\Models\Boshqarma;
use App\Models\Technology;
use Illuminate\Http\Request;
use DB;
use Excel;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technology = Technology::all();
        $boshq=Boshqarma::with('technology')->get();
        $t=1;
        return view('admin.layout.technology.index',compact('technology','t','boshq'));
    }

   /* public function exportToExcel(){
        return Excel::download(new TechnologyExport,'technology-excel.xlsx');
    }*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $boshqarma=Boshqarma::with('technology')->get();
        return view('admin.layout.technology.create',compact('boshqarma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('hello');
        Technology::create([
            'boshqarma_id'=>$request->boshqarma_id,
            'qurilma_nomi'=>$request->qurilma_nomi,
            'formulyar_raqami'=>$request->formulyar_raqami,
            'model'=>$request->model,
            'seria_nomer'=>$request->seria_nomer,
            'ozu_hajmi'=>$request->ozu_hajmi,
            'qmd_model'=>$request->qmd_model,
            'qmd_nomer'=>$request->qmd_nomer,
            'ssd_nomer'=>$request->ssd_nomer,
            'ssd_model'=>$request->ssd_model,
            'monitor1_model'=>$request->monitor1_model,
            'monitor1_nomer'=>$request->monitor1_nomer,
            'monitor2_model'=>$request->monitor2_model,
            'monitor2_nomer'=>$request->monitor2_nomer,
            'ishlabchiqarilgan_sana'=>$request->ishlabchiqarilgan_sana,
            'hisobgaolingan_sana'=>$request->hisobgaolingan_sana,
            'olindi'=>$request->olindi,
            'topshirildi'=>$request->topshirildi
        ]);
        return redirect(route('admin.technology.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function show(Technology $technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function edit(Technology $technology)
    {
        $boshqarma=Boshqarma::with('technology')->get();
        return view('admin.layout.technology.edit',compact('technology','boshqarma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technology $technology)
    {
        $technology->update([
            'boshqarma_id'=>$request->boshqarma_id,
            'qurilma_nomi'=>$request->qurilma_nomi,
            'formulyar_raqami'=>$request->formulyar_raqami,
            'model'=>$request->model,
            'seria_nomer'=>$request->seria_nomer,
            'ozu_hajmi'=>$request->ozu_hajmi,
            'qmd_model'=>$request->qmd_model,
            'qmd_nomer'=>$request->qmd_nomer,
            'ssd_nomer'=>$request->ssd_nomer,
            'ssd_model'=>$request->ssd_model,
            'monitor1_model'=>$request->monitor1_model,
            'monitor1_nomer'=>$request->monitor1_nomer,
            'monitor2_model'=>$request->monitor2_model,
            'monitor2_nomer'=>$request->monitor2_nomer,
            'ishlabchiqarilgan_sana'=>$request->ishlabchiqarilgan_sana,
            'hisobgaolingan_sana'=>$request->hisobgaolingan_sana,
            'olindi'=>$request->olindi,
            'topshirildi'=>$request->topshirildi
        ]);
        return redirect(route('admin.technology.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();
        return redirect(route('admin.technology.index'));
    }
}
