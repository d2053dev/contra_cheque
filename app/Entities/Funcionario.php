<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Foundation\Auth\Funcionario as Authenticatable;

class Funcionario extends Authenticatable
{
    use softDeletes;
    use Notifiable;

    public $timestamps =true;

    protected $table   ='funcionarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cpf', 'phone', 'birth', 'gender', 'email', 'notes', 'salary', 'insal',
        'pericul', 'func', 'empresa',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

}
