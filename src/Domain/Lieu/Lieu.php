<?php

namespace App\Domain\Lieu;

use Illuminate\Database\Eloquent\Model;

class Lieu extends Model{
   protected $table = 'mcLieux';
   protected $fillable = ['id','nom','monde', 'x', 'y', 'z', 'joueur'];
}

?>