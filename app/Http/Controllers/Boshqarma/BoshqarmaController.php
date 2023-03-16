<?php

namespace App\Http\Controllers\Boshqarma;

use App\Http\Controllers\Controller;
use App\Models\Boshqarma;
use App\Models\Compyuter;
use App\Models\Monoblok;
use App\Models\Technology;
use Illuminate\Http\Request;
use Vtiful\Kernel\Excel;
use function Pest\Laravel\get;

class BoshqarmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boshqarma = Boshqarma::all();
        $c = 1;
        return view('admin.layout.boshqarma.index',compact('boshqarma', 'c'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layout.boshqarma.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valideted = $request->validate(['name'=>'required']);
        Boshqarma::create([
            'name'=>$request->name,
        ]);
        return redirect(route('admin.boshqarma.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boshqarma  $boshqarma
     * @return \Illuminate\Http\Response
     */
    public function show(Boshqarma $boshqarma)
    {
        $bosh = $boshqarma->id;
        $bosh_nomi =$boshqarma->name;
        //dd($boshqarma->id);
        $b = 1;
       /* $comp = Compyuter::where('boshqarma_id', $bosh)->get();
        $mono = Monoblok::where('boshqarma_id',$bosh)->get();
        $printer = Printer::where('boshqarma_id',$bosh)->get();*/
        $technology = Technology::where('boshqarma_id',$bosh)->get();
        //dd($technology);
        return view('admin.layout.boshqarma.show', compact('technology', 'b','bosh_nomi'));
    }

//    public function getComputer(Request $request)
//    {
//          $comp = Compyuter::all();
//
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boshqarma  $boshqarma
     * @return \Illuminate\Http\Response
     */
    public function edit(Boshqarma $boshqarma)
    {
        return view('admin.layout.boshqarma.edit', compact('boshqarma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boshqarma  $boshqarma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boshqarma $boshqarma)
    {
        $boshqarma->update([
           'name'=>$request->name,
        ]);
        return redirect(route('admin.boshqarma.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boshqarma  $boshqarma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boshqarma $boshqarma)
    {
        $boshqarma->delete();
        return redirect(route('admin.boshqarma.index'));
    }
//    public function export(){
//        return Excel::download(new BoshqarmaExport(),boshqarma.xlsx);
//    }
//    public function export_view(){
//        return Excel::download(new BoshqarmaExportView(),boshqarma.xlsx);
//    }
}
