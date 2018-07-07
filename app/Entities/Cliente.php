<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    use softDeletes;
    use Notifiable;

    public $timestamps =true;

    protected $table   ='clientes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cnpj', 'funcionaries',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function getCNPJAttribute()
    {
      $cnpj = $this->attributes['cnpj'];

      return substr($cnpj, 0, 2) . '.' .substr($cnpj, 2, 3) . '.' .substr($cnpj, 5, 3) . '/' .substr($cnpj, 8, 4) . '-' .substr($cnpj, 12, 2);
    }
}
