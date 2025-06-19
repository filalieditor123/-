<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vak extends Model
{
    use HasFactory;

    protected $fillable = ['naam', 'beschrijving', 'docent_id'];

    public function docent()
    {
        return $this->belongsTo(Docent::class);
    }
}
