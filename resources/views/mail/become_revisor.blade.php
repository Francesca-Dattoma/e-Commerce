<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail da YOeS</title>
</head>
<body>
    <h1>
        Richiesta di diventare revisore dell'utente {{$user->name}}
    </h1>
    <p>L'utente {{$user->name}}, con username {{$user->username}} ed email {{$user->email}} richiede di diventare revisore.</p>
    <hr>
    <a href="{{route('make.revisor',compact('user'))}}">Rendi l'utente un Revisore</a>
    
</body>
</html>