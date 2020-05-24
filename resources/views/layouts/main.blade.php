<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie App</title>

    <link rel="stylesheet" href="resources/css/main.css">
    <livewire:styles>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 128 128"><path d="M106.5,13.5A11.763,11.763,0,0,1,94.75,1.747,1.749,1.749,0,0,0,93,0H77.5a1.749,1.749,0,0,0-1.75,1.75,11.75,11.75,0,0,1-23.5,0A1.749,1.749,0,0,0,50.5,0H35a1.749,1.749,0,0,0-1.75,1.75A11.764,11.764,0,0,1,21.5,13.5a1.749,1.749,0,0,0-1.75,1.75v97.5a1.749,1.749,0,0,0,1.75,1.75,11.765,11.765,0,0,1,11.75,11.75A1.749,1.749,0,0,0,35,128H50.5a1.749,1.749,0,0,0,1.75-1.75,11.75,11.75,0,0,1,23.5,0A1.749,1.749,0,0,0,77.5,128H93a1.749,1.749,0,0,0,1.75-1.75A11.764,11.764,0,0,1,106.5,114.5a1.749,1.749,0,0,0,1.75-1.75v-97.5A1.749,1.749,0,0,0,106.5,13.5Zm-1.75,97.6a15.277,15.277,0,0,0-13.4,13.4H79.15a15.251,15.251,0,0,0-30.3,0H36.65a15.277,15.277,0,0,0-13.4-13.4V16.9A15.277,15.277,0,0,0,36.65,3.5h12.2a15.251,15.251,0,0,0,30.3,0h12.2a15.277,15.277,0,0,0,13.4,13.4Z"/><path d="M29.75,23.015v81.97a1.749,1.749,0,0,0,1.75,1.75h65a1.749,1.749,0,0,0,1.75-1.75V23.015a1.749,1.749,0,0,0-1.75-1.75h-65A1.749,1.749,0,0,0,29.75,23.015Zm3.5,1.75h61.5v78.47H33.25Z"/><path d="M86.049,51.27a1.727,1.727,0,0,0-1.705-.865l-13.332,1.45L65.6,39.584a1.751,1.751,0,0,0-3.2,0l-5.41,12.271-13.332-1.45a1.727,1.727,0,0,0-1.7.865,1.748,1.748,0,0,0,.1,1.908L49.976,64,42.055,74.822a1.75,1.75,0,0,0,1.6,2.773l13.332-1.45L62.4,88.416a1.751,1.751,0,0,0,3.2,0l5.41-12.271L84.344,77.6a1.731,1.731,0,0,0,1.705-.865,1.752,1.752,0,0,0-.1-1.908L78.024,64l7.921-10.822A1.752,1.752,0,0,0,86.049,51.27Zm-11.606,11.7a1.75,1.75,0,0,0,0,2.066l6.334,8.653-10.66-1.159a1.743,1.743,0,0,0-1.791,1.033L64,83.372,59.674,73.56a1.751,1.751,0,0,0-1.6-1.043,1.728,1.728,0,0,0-.19.01l-10.66,1.159,6.334-8.653a1.75,1.75,0,0,0,0-2.066l-6.334-8.653,10.66,1.159a1.741,1.741,0,0,0,1.791-1.033L64,44.628l4.326,9.812a1.743,1.743,0,0,0,1.791,1.033l10.66-1.159Z"/></svg>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="border border-t border-gray-800">
        <div class="container mx-auto text-sm px-4 py-6">
            Powered by <a href="https://www.themoviedb.org/documentation/api" class="underline hover:text-gray-300">TMDb API</a>
        </div>
    </footer>
    <livewire:scripts>
    @yield('scripts')
</body>
</html>
