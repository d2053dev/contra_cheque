<?php

namespace App\Services;

use App\Repositories\FuncionarioRepository;
use App\Validators\FuncionarioValidator;


class FuncionarioService
{

  private $repository;
  private $validator;

  public function __construct(FuncionarioRepository $repository, FuncionarioValidator $validator)
  {
      $this->repository  = $repository;
      $this->validator   = $validator;
  }

  public function store(){}
  public function update(){}
  public function delete(){}

}


 ?>
