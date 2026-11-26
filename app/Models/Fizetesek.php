<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fizetesek extends Model
{
    use HasFactory;

    protected $table = 'fizetesek';
    protected $primaryKey = 'fizetes_id';
    public $timestamps = false;

    protected $fillable = [
        'rendeles_id', 'fizetesi_mod',
        'statusz', 'fizetes_datuma'
    ];

    public function rendeles()
    {
        return $this->belongsTo(Rendelesek::class, 'rendeles_id');
    }
}