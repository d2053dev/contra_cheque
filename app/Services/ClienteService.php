<?php

namespace App\Services;

use App\Repositories\ClienteRepository;
use App\Validators\ClienteValidator;
use Prettus\Validator\Contracts\ValidatorInterface;


class ClienteService
{

  private $repository;
  private $validator;

  public function __construct(ClienteRepository $repository, ClienteValidator $validator)
  {
      $this->repository  = $repository;
      $this->validator   = $validator;
  }

  public function store($data)
  {
    try
    {
      $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
      $cliente = $this->repository->create($data);

      return [
        'success'  => true,
        'messagem' => 'Cliente Cadastrado!',
        'data'     => $cliente,
      ];
    }
    catch(\Exception $e)
    {
      return [
        'success'  => false,
        'messagem' => 'Erro de execução!',
      ];
    }
  }

  public function update()
  {

  }

  public function delete()
  {

  }

}


 ?>
