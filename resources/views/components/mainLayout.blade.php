<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>IT Explore</title>
        {{-- <x-cssAsset></x-cssAsset> --}}
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        {{-- <x-jsAsset></x-jsAsset> --}}
    </head>
    <body>
        <x-navbar></x-navbar>

        {{ $slot }}

         <!-- Scroll-to-top button -->
        <button onclick="scrollToTop()" class="scroll-to-top fixed bottom-4 right-4 border-4 px-4 bg-gray-600 border-gray-600 text-sky-50 hover:bg-gray-900 hover:border-gray-900 rounded-full transition duration-300 animate-bounce">
            <span class="text-center align-middle text-5xl font-bold">&uarr;</span>
        </button>

        <x-footer></x-footer>
    </body>
    <script>
        const scrollToTopButton = 
              document.getElementById('scroll-to-top');
       
        // Show button when user scrolls down
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 100) {
                scrollToTopButton.style.display = 'block';
            } else {
                scrollToTopButton.style.display = 'none';
            }
        });
 
        // Smooth scroll to top
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }              
    </script>
</html>