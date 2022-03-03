<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Usuarios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .container{
            width: 50%;
        }
    </style>
        
    </head>
    <body class="antialiased">
        <div class="container">
            @foreach($arrayUsuarios as $usuario)
                <div class="panel panel-primary">
                    <div class="panel-heading">{{$usuario['name']}} ( {{$usuario['username']}} )</div>
                    <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">Email: {{$usuario['email']}}</li>
                        <li class="list-group-item">Phone: {{$usuario['phone']}}</li>
                        <li class="list-group-item">WebSite{{$usuario['website']}}</li>
                    </ul>
                        @foreach($usuario['company'] as $attributos => $value)
                            <li class="list-group-item">{{$attributos}}:{{$value}}</li>                        
                        @endforeach 
                    </ul>

                    </div>
                </div>           
            @endforeach
        </div>
    </body>
</html>
