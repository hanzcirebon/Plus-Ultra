<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>IT Explore</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    </head>
    <body>
        <x-navbar></x-navbar>

        {{ $slot }}

        <button id="scroll-to-top" onclick="scrollToTop()" class="scroll-to-top fixed bottom-4 right-4 border-4 px-4 bg-gray-600 border-gray-600 text-sky-50 hover:bg-gray-900 hover:border-gray-900 rounded-full transition-opacity duration-1000 ease-in-out opacity-0 invisible animate-bounce hover:animate-none">
            <span class="text-center align-middle text-5xl font-bold">&uarr;</span>
        </button>        

        <x-footer></x-footer>
    </body>
    <script>
        const scrollToTopButton = document.getElementById('scroll-to-top');
    
        // Toggle visibility classes based on scroll position
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 100) {
                scrollToTopButton.classList.remove('opacity-0', 'invisible');
                scrollToTopButton.classList.add('opacity-100');
            } else {
                scrollToTopButton.classList.remove('opacity-100');
                scrollToTopButton.classList.add('opacity-0', 'invisible');
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