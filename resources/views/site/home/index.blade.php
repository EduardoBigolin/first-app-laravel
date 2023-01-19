<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-slate-900">
    <x-header />
    <h2 class="text-4xl p-10 text-white text-center">List Movies</h2>
    <main class="grid grid-cols-4 items-center">
        @foreach ($movies as $movie)
        <div class="w-40 p-2 text-white m-auto gap-2 flex flex-col text-center">
            <img class="w-40 h-60" src={{ $movie->movieCover }} alt="" />
            <h4 class="font-bold">{{ $movie->title }}</h4>
            <p class="text-sm">{{ $movie->description }}</p>
            <a href=about/{{ $movie->id }} class="bg-slate-700 hover:bg-slate-600 p-1 rounded-sm px-4">About</a>
        </div>
        @endforeach
</body>

</html>