<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="container d-flex">
            @foreach ($movies as $movie)
            <div class="card my-3 mx-2">
                <div class="card-title">
                    {{$movie ["title"]}}
                     {{$movie ["original_title"]}}
                </div>
                <div class="card-body">
                    {{$movie["nationality"]}}
                    {{$movie["date"]}}
                    {{$movie["vote"]}}
                </div>
            </div>
            @endforeach
    </div>

    

    
</body>
</html>