<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;


class DashboardController extends Controller
{

  private $repository;
  private $validator;

  public function __construct(UserRepository $repository, UserValidator $validator)
  {
      $this->repository = $repository;
      $this->validator  = $validator;
  }


  public function index()
  {
    return "Estamos na index(dashboard)";
  }

  public function auth(Request $request)
  {

    $data = [
      'login'   => $request->get('user_name'),
      'pass'    => $request->get('pass')
    ];

    try
    {

      if(env('PASSWORD_HASH'))
      {
        \Auth::attempt($data, false);
      }
      else
      {
        $user = $this->repository->findWhere(['login' => $request->get('user_name')])->first();
        if(!$user)
          throw new \Exception("Usuário não Encontrado!");


        if($user->pass != $request->get('pass'))
          throw new \Exception("Senha Inválida!");


        \Auth::login($user);
      }

      return redirect()->route('user.dashboard');

    }
    catch (\Exception $e)
    {
      return $e->getMessage();
    }
  }
}
