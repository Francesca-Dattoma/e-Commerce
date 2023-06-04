<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">

    <title>Mail da YOeS</title>

    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');
        
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');


        .logo{
            height: 150px;
            width: 170px;
            

        }

        .monoton-font{
            font-family: 'Monoton';
        }

        .montserrat-font{
            font-family: 'Montserrat', sans-serif;
        }

        .bg-blue{
           background-image: url('https://cdn.pixabay.com/photo/2023/04/30/23/49/abstract-7961924_1280.jpg');
           background-repeat: no-repeat;
           background-size: cover;

        }

        .bg-card{
            border: solid 1px cornflowerblue;
            color: white;
        }
    </style>

</head>
{{-- <body>
    <div class="justify-content-center">
        <img src="/public/media/blue_logo.png">
        <h1> Benvenuto in</h1> <br>
        <h1 class="monoton-font"> Yoes - Your Own e-shop</h1>
    </div>
    <h1>
        Richiesta di diventare revisore dell'utente {{$user->name}}
    </h1>
    <p>L'utente {{$user->name}}, con username {{$user->username}} ed email {{$user->email}} richiede di diventare revisore.</p>
    <hr>
    <a href="{{route('make.revisor',compact('user'))}}">Rendi l'utente un Revisore</a>
    
</body> --}}
<body>
    <div class="container">
        <div class="row justify-content-center mt-4">
            
                <img src="https://i.ibb.co/xM3yvqC/logo-img.png" class="logo" alt="YOeS Logo">
        </div>
    </div>

    <div class="container rounded bg-blue my-5 p-5">

        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center flex-column">
                <h3 class="display-3 monoton-font text-center text-white">Complimenti!</h3>
                <h5 class="montserrat-font mb-5 text-center text-white"> Ciao {{$user->name}}, un nostro admin ti ha appena accettato come revisore!</h5>
                <a class="btn btn-outline-dark text-white" href="{{route('revisor.index')}}">Clicca qui per iniziare!</a>
            </div>
            {{-- <div class="col-12 d-flex justify-content-center ">
               
                        <div class="card shadow  bg-transparent bg-card">
                            <div class="card-body">
                                <h3 class="card-title montserrat-font text-center fw-bold">{{$user->name}}</h3>
                        
                                    <p class="card-text montserrat-font fw-bold mt-4">DATI UTENTE: </p>
                                        <p class="card-text montserrat-font fw-bold">Username:</p>
                                        <p class="card-text montserrat-font">{{$user->username}} </p>
                                        <p class="card-text montserrat-font fw-bold"> Email: </p>
                                        <p class="card-text montserrat-font"> {{$user->email}} </p>

                                        <div class="d-flex justify-content-center">

                                            <a class="btn btn-outline-dark text-white" href="{{route('make.revisor',compact('user'))}}">Rendi l'utente un revisore</a> 
                                        </div>
                            </div>
                        </div>
            </div> --}}
      
    
        </div>
    </div>



</body>

    
    


</html>