<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Technology extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function boshqarma(){
        return $this->belongsTo(Boshqarma::class,'boshqarma_id','id');
    }

  /*  public static function getAllTechnology(){
        $boshq = DB::table('boshqarmas')->get('id');
        $result = Technology::where('boshqarma_id',$boshq)->select('id',
            'qurilma_nomi',
            'formulyar_raqami',
            'model',
            'seria_nomer',
            'ozu_hajmi',
            'qmd_model',
            'qmd_nomer',
            'ssd_model',
            'ssd_nomer',
            'monitor1_model',
            'monitor1_nomer',
            'monitor2_model',
            'monitor2_nomer',
            'ishlabchiqarilgan_sana',
            'hisobgaolingan_sana',
            'olindi',
            'topshirildi')->get()->toArray();
        return $result;
    }*/
}
