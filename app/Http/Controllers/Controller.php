<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function homepage()
    {
      $var = "Título da página de teste da primeira aplicação Laravel";
      return view('welcome', [
        'title' => $var
      ]);
    }

    public function cadastrar()
    {
      echo 'Tela de Cadastro';
    }

    /*
    =======================rotas de autenticação=========================
    */
    public function fazerlogin()
    {
      return view('user.login');
      }
}
