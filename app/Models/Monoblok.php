<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monoblok extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function boshqarma_monoblok() {
        return $this->hasOne(Boshqarma::class);
    }
}
