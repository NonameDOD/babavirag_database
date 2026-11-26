<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rendeles_tetelek extends Model
{
    use HasFactory;

    protected $table = 'rendeles_tetelek';
    protected $primaryKey = 'tetel_id';
    public $timestamps = false;

    protected $fillable = [
        'rendeles_id', 'termek_id', 'mennyiseg'
    ];

    public function rendeles()
    {
        return $this->belongsTo(Rendelesek::class, 'rendeles_id');
    }

    public function termek()
    {
        return $this->belongsTo(Termekek::class, 'termek_id');
    }
}