<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Train extends Model
{
    use HasFactory;

    protected $table = 'train';

    // Relacionando traino  com usuario (belongsTo é o inverso de 1 para muitos)
    public function user() {

        return $this->belongsTo(User::class);
    }
}
