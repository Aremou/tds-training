<?php

namespace App\Models;

use App\Models\SessionOuverte;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InscriptionSessionOuverte extends Model
{
    use HasFactory;

    protected $fillable = [ 'nom', 'prenom', 'email', 'telephone', 'pays', 'ville', 'code_postal', 'profession', 'civilite', 'session_ouverte_id',  'created_at', 'updated_at'];

    public function session_ouverte(){
        return $this->belongsTo(SessionOuverte::class);
    }

}
