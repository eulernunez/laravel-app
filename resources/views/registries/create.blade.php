<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
    <div class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
    <form method="post" action="{{url('registries')}}" id="formRegistry">
    {{csrf_field()}}
        <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Primer Nombre:</label>
            <input type="text" class="form-control" name="first_name"  value={{old('first_name')}}>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Segundo Nombre:</label>
            <input type="text" class="form-control" name="second_name" value={{old('second_name')}}>
          </div>
        </div>
         <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Primer Apellido:</label>
            <input type="text" class="form-control" name="surename" value={{old('surename')}}>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Segundo Apellido:</label>
            <input type="text" class="form-control" name="second_surename" value={{old('second_surename')}}>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Email:</label>
            <input type="text" class="form-control" name="email"  value={{old('email')}}>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Edad:</label>
            <input type="text" class="form-control" name="age" value={{old('age')}}>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Télefono Residencial:</label>
            <input type="text" class="form-control" name="phone" value={{old('phone')}}> 
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Celular:</label>
            <input type="text" class="form-control" name="cell_phone" value={{old('cell_phone')}}>
          </div>
        </div>
        <div class="row">
        
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
          <label for="name">Desea recibir información de:</label>
          <div class="checkbox">
          
            <label> <input type="checkbox" name="flosspainfo" @if(old('flosspainfo') !== NULL ){{ 'checked' }}@endif> FLOSSPA</label>
          </div>
          <div class="checkbox">
            <label> <input type="checkbox" name="fedorainfo" @if(old('fedorainfo') !== NULL ){{ 'checked' }}@endif> FEDORA</label>
          </div>
          <div class="checkbox disabled">
            <label> <input type="checkbox" name="latansecinfo" @if(old('latansecinfo') !== NULL ){{ 'checked' }}@endif> LATANSEC</label>
          </div>
          </div>
          
        </div>
        
        <div class="row">
          <div class="form-group col-xs-12 col-sm-12 col-md-12">
            <label for="name">Comentarios:</label>
            <textarea class="form-control" rows="5" name="coments" >{{old('coments')}}</textarea>
          </div>
        </div>
        <div class="row">
          
          <div class="form-group col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-success">Agregar Asistencia</button>
          </div>
        </div>
      </form>
    </div>
    <div id="toast-container" class="toast-top-right">
    </div
  </body>
</html>