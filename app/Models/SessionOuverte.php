<?php

namespace App\Models;

use App\Models\Formation;
use App\Models\SessionOuverte;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SessionOuverte extends Model
{
    use HasFactory;

    public $fillable = ['image', 'montant', 'type_formation', 'lieu', 'certification','examen', 'formation_id', 'statut', 'date_debut', 'date_fin', 'created_at', 'updated_at'];

    public function formation(){
        return $this->belongsTo(Formation::class);
    }

    public function inscription_session_ouvertes(){
        return $this->hasMany(SessionOuverte::class);
    }
}
