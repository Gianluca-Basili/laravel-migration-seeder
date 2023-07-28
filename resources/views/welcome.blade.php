<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach($trains as $train)
                    <div class=col-12>
                        {{$train->azienda}} - {{$train->codice_treno}}
                       @if($train->in_orario)
                            si
                        @else
                            no
                        @endif
                        
                    </div>
                    
                @endforeach
            </div>
        </div>
    </div>
  
    

</body>

</html>