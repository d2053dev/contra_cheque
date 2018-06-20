<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login | Nick</title>
    <link rel="stylesheet" href="{{ asset('/css/stylesheet.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  </head>
  <body>

    <div class="background">

    </div>

    <section id="conteudo-view" class="login">

      <h1>Contra Cheque</h1>
      <h3>Cálculo de Contra Cheque</h3>

      {!! Form::open(['route' =>'user.login', 'method' => 'post']) !!}

      <p>Acesse o Sistema</p>

      <label>
        {!! Form::text('user_name', null, ['class' => 'input', 'placeholder' => "Login"]) !!}
      </label>

      <label>
        {!! Form::password('pass', ['placeholder' => "Senha"]) !!}
      </label>

      {!! Form::submit('Entrar') !!}

      {!! Form::close() !!}

    </section>

  </body>
</html>
