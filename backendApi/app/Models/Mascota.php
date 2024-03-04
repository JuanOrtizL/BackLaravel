<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mascota extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function tipo():BelongsTo{
        return $this->belongsTo(Tipo::class);
    }

    public function actividad():BelongsTo{
        return $this->belongsTo(Actividad::class);
    }

    public function raza():BelongsTo{
        return $this->belongsTo(Raza::class);
    }
    public function tamano():BelongsTo{
        return $this->belongsTo(Tamano::class);
    }
}
