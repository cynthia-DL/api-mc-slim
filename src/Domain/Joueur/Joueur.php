<?php

namespace App\Domain\Joueur;

use Illuminate\Database\Eloquent\Model;

class Joueur extends Model{
   protected $table = 'mcJoueurs';
   protected $fillable = ['id','nom','pseudo', 'banniere'];
}

?>