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

    <ul class="list-group">
        @foreach ($trains as $train)
            <li class="d-flex flex-column w-25 mx-auto">
                <ul class="mb-4 list-group text-center">
                    <li class="list-group-item">Company: <strong> {{$train->Azienda}}</strong></li>
                    <li class="list-group-item">Stazione di partenza: {{$train->Stazione_di_partenza}}</li>
                    <li class="list-group-item"> Stazione di arrivo: {{$train->Stazione_di_arrivo}}</li>
                    <li class="list-group-item">Orario di partenza: {{$train->Orario_di_partenza}}</li>
                    <li class="list-group-item">Orario di arrivo: {{$train->Orario_di_arrivo}}</li>
                    <li class="list-group-item">Codice treno: {{$train->Codice_treno}}</li>
                    <li class="list-group-item">N° Carrozze:  {{$train->Carrozze}}</li>
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