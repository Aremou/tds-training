<?php

namespace App\Models;

use App\Models\Categorie;
use App\Models\SessionOuverte;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formation extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nom'
            ]
        ];
    }

    public $fillable = ['nom', 'slug', 'reference', 'niveau', 'duree', 'lieu', 'type_formation', 'description', 'objectif', 'acquis', 'public', 'points_forts', 'certification', 'programme', 'categorie_id', 'created_at', 'updated_at'];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function session_ouvertes(){
        return $this->hasMany(SessionOuverte::class);
    }

}
