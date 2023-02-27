<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>

    {{-- AppJs  --}}
    @vite('resources/js/app.js')

</head>
<body>
    <h1 class="text-center text-danger py-4">
        Trains: 
    </h1>

    <ul class="list-group d-flex justify-content-center align-items-center flex-wrap">
        @foreach ($trains as $train)
            <li>
                <ul class="mb-4 list-group text-center">
                    <li class="list-group-item">{{$train->Azienda}}</li>
                    <li class="list-group-item">{{$train->Stazione_di_partenza}}</li>
                    <li class="list-group-item">{{$train->Stazione_di_arrivo}}</li>
                    <li class="list-group-item">{{$train->Orario_di_partenza}}</li>
                    <li class="list-group-item">{{$train->Orario_di_arrivo}}</li>
                    <li class="list-group-item">{{$train->Codice_treno}}</li>
                    <li class="list-group-item"> {{$train->Carrozze}}</li>
                    <li class="list-group-item"> @if ($train->In_orario)             
                        {{$train->In_orario = 'Il treno è in orario'}}         
                        @else {{$train->In_orario = 'Il treno è in ritardo'}}
                    @endif
                    </li>
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>