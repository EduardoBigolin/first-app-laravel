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
    <header class="bg-slate-800 p-5 flex items-center justify-around text-white">
        <h1 class="text-2xl w-1/3 font-bold">MoviesSi</h1>
        <ul class="flex gap-5 w-1/3 text-[#9e9e9e]">
            <li class="hover:text-white"><a href="#">Home</a></li>
            <li class="hover:text-white"><a href="#">Create new</a></li>
            <li class="hover:text-white"><a href="#">Contact</a></li>
            <li class="hover:text-white"><a href="#">About</a></li>
        </ul>
        <div class="flex items-center">
            <input type="text" class="p-1 rounded-l-sm text-[#222]" placeholder="Search...">
            <button class="bg-slate-500 p-1 rounded-r-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </header>
    <main class="">
        <h2 class="text-4xl p-10 text-white text-center">List Movies</h2>
        @foreach ($movies as $movie)
        <div class="w-40 p-2 m-2 text-white gap-2 flex flex-col text-center">
            <img class="w-40 h-60" src={{ $movie->movieCover }} alt="" />
            <h4 class="font-bold">{{ $movie->title }}</h4>
            <p class="text-sm">{{ $movie->description }}</p>
            <a href=about/{{ $movie->id }} class="bg-slate-700 hover:bg-slate-600 p-1 rounded-sm px-4">About</a>
        </div>
        @endforeach
</body>

</html>