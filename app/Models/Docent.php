<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Docent extends Model
{
    use HasFactory;

    protected $fillable = ['naam', 'hobby'];

    public function vakken()
    {
        return $this->hasMany(Vak::class);
    }
}
