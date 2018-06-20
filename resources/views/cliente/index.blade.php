@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')
{{!! Form::open(['method' => 'post', 'class' => 'form-padrao']) !!}}

  @include('templates.formulario.input', ['label' => 'Nome', 'input' => 'name', 'atributtes' => ['placeholder' => 'Nome']])
  @include('templates.formulario.input', ['label' => 'CNPJ', 'input' => 'cnpj', 'atributtes' => ['placeholder' => 'CNPJ']])
  @include('templates.formulario.input', ['label' => 'Funcionários', 'input' => 'funcionaries', 'atributtes' => ['placeholder' => 'Funcionários']])
  @include('templates.formulario.submit', ['input' => 'Cadastrar'])

{{!! Form::close() !!}}
@endsection

@section('js-view')
@endsection

name
cnpj
funcionaries
