<x-mainLayout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <div class="bg-gray-100">
        <div class="wave">
            <h1 class="text-center text-white text-3xl md:text-4xl font-bold font-montserrat">
                Master soft skills to create a more perfect you
            </h1>
        </div>
        <div class="max-w-4xl flex flex-col justify-center items-center mx-auto py-12">
            <div class="border-2 border-black px-5 py-2 m-5 bg-white rounded-xl hover:bg-pink-50">
                <p class="text-center text-gray-900 max-w-screen-lg mx-auto font-roboto">
                    In today's highly competitive modern society, in addition to technical skills, soft skills are also the key to success. Teamwork, problem-solving skills, and communication skills, these soft skills determine a person's performance and achievements in work and life.
                </p>
            </div>
            <div class="relative w-full overflow-hidden">
                <div id="carousel" class="flex transition-transform duration-300 ease-in-out">
                    <!-- Previous Slide -->
                    <div class="min-w-full flex flex-col items-center justify-center text-center px-4 py-8">
                        <a href="{{route('soft-skill.teamwork')}}" class="hover:scale-110 transition-all duration-200 flex flex-col items-center hover:border-2 border-purple-100 hover:bg-purple-200 rounded-2xl p-2">
                            <img src="{{asset('img/soft_skills/team.png')}}" alt="Teamwork" class="w-24 h-24">
                            <h3 class="text-indigo-500 text-lg font-bold">Teamwork</h3>
                        </a>
                        <h5 class="font-semibold mt-1">Click on the above icon to view details</h5>
                        <p class="p-10">In a team, everyone is an indispensable puzzle piece, and only when we unite and work together
                            can we put these puzzle pieces together into a perfect picture. Want to know how to become the
                            soul of a team and make your team successful? Click to view and discover the secrets of
                            teamwork!
                        </p>
                    </div>
                    <!-- Current Slide -->
                    <div class="min-w-full flex flex-col items-center justify-center text-center px-4 py-8">
                        <a href="{{route('soft-skill.problem_solving')}}" class="hover:scale-110 transition-all duration-200 flex flex-col items-center hover:border-2 border-purple-100 hover:bg-purple-200 rounded-2xl p-2">
                            <img src="{{asset('img/soft_skills/prob.png')}}" alt="Problem-solving" class="w-24 h-24">
                            <h3 class="text-indigo-500 text-lg font-bold">Problem solving</h3>
                        </a>
                        <h5 class="font-semibold mt-1">Click on the above icon to view details</h5>
                        <p class="p-10">In the journey of life, we will always encounter various obstacles and challenges. However, every
                            difficulty is an opportunity for growth, and becoming an excellent problem solver means being
                            able to resolve difficulties, overcome challenges, and achieve oneself. Click to enter and
                            discover the magic of solving problems!
                        </p>
                    </div>
                    <!-- Next Slide -->
                    <div class="min-w-full flex flex-col items-center justify-center text-center px-4 py-8">
                        <a href="{{route('soft-skill.communication')}}" class="hover:scale-110 transition-all duration-200 flex flex-col items-center hover:border-2 border-purple-100 hover:bg-purple-200 rounded-2xl p-2">
                            <img src="{{asset('img/soft_skills/comm.png')}}" alt="Communication" class="w-24 h-24">
                            <h3 class="text-indigo-500 text-lg font-bold">Communication</h3>
                        </a>
                        <h5 class="font-semibold mt-1">Click on the above icon to view details</h5>
                        <p class="p-10">It is said that some people are born to speak, while others need to learn the art of
                            communication. In real life, communication skills are not just about talking and laughing, but
                            also a tool for building relationships and achieving goals. If you want to become a master of
                            communication, click here to explore the secrets of communication!
                        </p>
                    </div>
                </div>
                <!-- Arrows -->
                <button onclick="previousSlide()"
                    class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white p-2 rounded-full hover:bg-blue-200">
                    <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/icons/arrow-left.svg" alt="Previous"
                        class="w-6 h-6">
                </button>
                <button onclick="nextSlide()"
                    class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white p-2 rounded-full hover:bg-blue-200">
                    <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/icons/arrow-right.svg" alt="Next"
                        class="w-6 h-6">
                </button>
            </div>
            <a href="{{route('soft-skill.download')}}" class="relative inline-flex self-center items-center m-5 justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="relative px-5 py-2.5  transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Personalised Skill Up File
                </span>
            </a>
        </div>
    </div>
    <script>
        const carousel = document.getElementById('carousel');
        let slideIndex = 1; // start from the middle slide

        function nextSlide() {
            slideIndex = (slideIndex + 1) % 3;
            updateSlidePosition();
        }

        function previousSlide() {
            slideIndex = (slideIndex - 1 + 3) % 3; // ensure it wraps around correctly
            updateSlidePosition();
        }

        function updateSlidePosition() {
            const offset = slideIndex * -100; // move -100% per slide
            carousel.style.transform = `translateX(${offset}%)`;
        }

        updateSlidePosition(); // Set initial position correctly
    </script>
    <style>
        .wave {
            width: 100%;
            height: auto;
            /* Adjust the height of the SVG */
            background: linear-gradient(#ADA8D6 100%, transparent 50%);
            margin-bottom: 0;
            padding: 1rem;
            /* Removes space below the SVG */
        }
    </style>
</x-mainLayout>