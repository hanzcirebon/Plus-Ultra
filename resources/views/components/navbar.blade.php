<nav>
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('img/Logo_new.jpeg')}}" class="h-32" alt="IT Explore Logo">
            <div class="hidden lg:block ">
                <span class="text-purple_template text-4xl font-bold">IT</span>
                <span class="text-pink_template text-4xl text-bold font-bold">Explore</span>
            </div>
        </a>
        <a class="block lg:hidden max-xs:hidden">
            <span class="text-purple_template text-4xl font-bold">IT</span>
            <span class="text-pink_template text-4xl text-bold font-bold">Explore</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>

        <div class="hidden w-full lg:block lg:w-auto" id="navbar-default">
            <ul class="font-medium flex max-lg:flex-col p-4 lg:p-0 mt-4 lg:flex-row lg:space-x-5 rtl:space-x-reverse lg:mt-0">
                <x-navbar-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-navbar-link>
                <x-navbar-link href="{{ route('course-overview.index') }}" :active="request()->routeIs('course-overview.index')">Course Overview</x-navbar-link>
                <x-navbar-link href="{{ route('global-trend.index') }}" :active="request()->routeIs('global-trend.index')">Global trends</x-navbar-link>
                <x-navbar-link href="{{ route('job-overview.index') }}" :active="request()->routeIs('job-overview.index')">Career Choices</x-navbar-link>
                <x-navbar-link href="{{ route('quick-questions') }}" :active="request()->routeIs('quick-questions')">Questions</x-navbar-link>
                <x-navbar-link href="/soft-skill" :active="request()->is('/soft-skill')">Soft Skills</x-navbar-link>
            </ul>
        </div>
    </div>

    <script>
    // Grab the burger button using its data attribute
    const burgerButton = document.querySelector('[data-collapse-toggle="navbar-default"]');

    // Grab the menu div by its id
    const navMenu = document.getElementById('navbar-default');

    // Add an event listener to the burger button
    burgerButton.addEventListener('click', function() {
        // Toggle the 'hidden' class on the navMenu each time the button is clicked
        navMenu.classList.toggle('hidden');

        // Update aria-expanded attribute based on visibility for accessibility
        const isExpanded = burgerButton.getAttribute('aria-expanded') === 'true';
        burgerButton.setAttribute('aria-expanded', !isExpanded);
    });
</script>

</nav>