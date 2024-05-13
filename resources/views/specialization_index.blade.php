<x-mainLayout>
    {{-- BIG DIV --}}
    <div class="mx-auto max-w-screen-xl">
        <img src="{{asset('img/specialization image.JPG')}}" alt="specialization" class="object-fit rounded-2xl">
        <div class="text-2xl lg:text-3xl xl:text-4xl font-semibold px-4 py-2 m-10 text-center">
            <h1 class="text-black">Simple & Easy</h1>
            <h1 class="text-purple_template"><span class="text-pink_template">Specializing</span> in the IT Industry</h1>
            <div class="text-gray-500 text-base xl:text-lg pt-1">
                <p>We provide a guide and roadmap</p>
                <p>to explore and specialize in</p>
                <p>various IT career path</p>
            </div>
        </div>
        <div class="relative border-2 border-black rounded-3xl bg-stone-100 p-20 m-10 flex flex-wrap gap-10 justify-center font-semibold">
            <div class="absolute top-3">
                <span class="text-3xl font-semibold">Start <span class="text-pink_template">Specializing</span></span>
            </div>
            {{-- CARDS --}}
            <a href="{{route('specialization.content', "Artificial Intelligence")}}" class="rounded-2xl bg-indigo-200 p-5 min-w-[24rem] hover:scale-105 hover:shadow-lg transition-transform duration-300">
                <img src="{{asset('img/specialization/ai.png')}}" alt="Artificial Intelligence" class="h-40 w-full object-cover">
                <p class="text-base">Roadmap</p>
                <h1 class="text-2xl font-bold">Artificial Intelligence</h1>
            </a>
            
            <a href="{{route('specialization.content', "Cybersecurity")}}" class="rounded-2xl bg-red-200 p-5 min-w-[24rem] hover:scale-105 hover:shadow-lg transition-transform duration-300">
                <img src="{{asset('img/specialization/cyber.png')}}" alt="Cybersecurity" class="h-40 w-full object-cover">
                <p class="text-base">Roadmap</p>
                <h1 class="text-2xl font-bold">Cybersecurity</h1>
            </a>
            
            <a href="{{route('specialization.content', "Data Analysis")}}" class="rounded-2xl bg-yellow-200 p-5 min-w-[24rem] hover:scale-105 hover:shadow-lg transition-transform duration-300">
                <img src="{{asset('img/specialization/datanaly.png')}}" alt="Data Analysis" class="h-40 w-full object-cover">
                <p class="text-base">Roadmap</p>
                <h1 class="text-2xl font-bold">Data Analysis</h1>
            </a>
            
            <a href="{{route('specialization.content', "Data Science")}}" class="rounded-2xl bg-blue-200 p-5 min-w-[24rem] hover:scale-105 hover:shadow-lg transition-transform duration-300">
                <img src="{{asset('img/specialization/datasci.png')}}" alt="Data Science" class="h-40 w-full object-cover">
                <p class="text-base">Roadmap</p>
                <h1 class="text-2xl font-bold">Data Science</h1>
            </a>
            
            <a href="{{route('specialization.content', "Game Development")}}" class="rounded-2xl bg-green-200 p-5 min-w-[24rem] hover:scale-105 hover:shadow-lg transition-transform duration-300">
                <img src="{{asset('img/specialization/gamedev.png')}}" alt="Game Development" class="h-40 w-full object-cover">
                <p class="text-base">Roadmap</p>
                <h1 class="text-2xl font-bold">Game Development</h1>
            </a>
            
            <a href="{{route('specialization.content', "Information System")}}"  class="rounded-2xl bg-teal-200 p-5 min-w-[24rem] hover:scale-105 hover:shadow-lg transition-transform duration-300">
                <img src="{{asset('img/specialization/infosys.png')}}" alt="Information System" class="h-40 w-full object-cover">
                <p class="text-base">Roadmap</p>
                <h1 class="text-2xl font-bold">Information System</h1>
            </a>
            
            <a href="{{route('specialization.content', "Software Development")}}" class="rounded-2xl bg-pink-200 p-5 min-w-[24rem] hover:scale-105 hover:shadow-lg transition-transform duration-300">
                <img src="{{asset('img/specialization/softdev.png')}}" alt="Software Development" class="h-40 w-full object-cover">
                <p class="text-base">Roadmap</p>
                <h1 class="text-2xl font-bold">Software Development</h1>
            </a>
            
        </div>
    </div>
</x-mainLayout>