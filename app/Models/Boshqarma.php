<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boshqarma extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function computer(){
        return $this->belongsTo(Compyuter::class,'boshqarma_id');
    }

    public function monoblok() {
        return $this->belongsTo(Compyuter::class,'boshqarma_id');
    }
    public function printer(){
        return $this->belongsTo(Printer::class,'boshqarma_id');
    }

    public function technology(){
        return $this->belongsTo(Technology::class,'boshqarma_id');
    }
}
