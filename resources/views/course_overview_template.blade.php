<x-mainLayout>
    <div class="mb-32">
        <div class="flex flex-col justify-center items-center mb-10">
            <div class="text-center">
                <h1 class="text-pink_template text-3xl font-semibold mb-5">{{$course_content->course_name}}</h1>
                <img class="h-96" src="{{ asset('img/Slider_2.webp') }}">
            </div>
        </div>
        <div class="flex justify-evenly flex-wrap">
            <div class="text-gray-700 pb-10">
                <span>Quick Links:</span>
                <ul class="list-disc list-inside">
                    <li>
                        <a href="https://www.studyaustralia.gov.au/en/plan-your-studies/list-of-australian-universities" class="hover:underline" target="_blank">Australia University List</a>
                    </li>
                    <li>
                        <a href="https://www.studyassist.gov.au/you-study/how-get-higher-education" class="hover:underline" target="_blank">How to get into higher education</a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col gap-5">
                {{-- COURSE DESCRIPTION --}}
                <div class="border-2 w-[640px] hover:shadow-xl hover:shadow-sky-100 hover:bg-sky-50 info-card" id="course-description">
                    <div class="px-5 py-5">
                        <div class="flex justify-between items-center">
                            <h4 class="text-purple_template text-2xl text-center font-semibold">
                                Course Description
                            </h4>
                            <button id="expand-btn" class="text-2xl font-semibold focus:outline-none transition-transform transform duration-300">+</button>
                        </div>
                        <div id="course-description-info" class="hidden-info pt-5">
                            <p>{{$course_content->course_description}}</p>
                        </div>
                    </div>
                </div>
                {{-- SKILLS ACQUIRED --}}
                <div class="border-2 w-[640px] hover:shadow-xl hover:shadow-sky-100 hover:bg-sky-50 info-card" id="skills-acquired">
                    <div class="px-5 py-5">
                        <div class="flex justify-between items-center">
                            <h4 class="text-purple_template text-2xl text-center font-semibold">Skills Acquired</h4>
                            <button id="expand-btn" class="text-2xl font-semibold focus:outline-none transition-transform transform duration-300">+</button>
                        </div>
                        <div id="skills-acquired-info" class="hidden-info pt-5">
                            <!-- Detailed information about skills acquired -->
                            {!!$course_content->list_student_outcomes!!}
                        </div>
                    </div>
                </div>
                {{-- CAREER PATHWAY --}}
                <div class="border-2 w-[640px] hover:shadow-xl hover:shadow-sky-100 hover:bg-sky-50 info-card" id="career-pathway">
                    <div class="px-5 py-5">
                        <div class="flex justify-between items-center">
                            <h4 class="text-purple_template text-2xl text-center font-semibold">Career Pathways</h4>
                            <button id="expand-btn" class="text-2xl font-semibold focus:outline-none transition-transform transform duration-300">+</button>
                        </div>
                        <div id="career-pathway-info" class="hidden-info pt-5">
                            <!-- Detailed information about the course -->
                            <p>{!!$course_content->list_possible_jobs!!}</p>
                        </div>
                    </div>
                </div>
                {{-- IS IT FOR YOU --}}
                <div class="border-2 w-[640px] hover:shadow-xl hover:shadow-sky-100 hover:bg-sky-50 info-card" id="isit-foryou">
                    <div class="px-5 py-5">
                        <div class="flex justify-between items-center">
                            <h4 class="text-purple_template text-2xl text-center font-semibold">Is It For You ?</h4>
                            <button id="expand-btn" class="text-2xl font-semibold focus:outline-none transition-transform transform duration-300">+</button>
                        </div>
                        <div id="isit-foryou-info" class="hidden-info pt-5">
                            <!-- Detailed information about the course -->
                            <p>{{$course_content->is_it_for_you}}</p>
                        </div>
                    </div>
                </div>
                {{-- OFFERING UNIVERSITIES --}}
                <div class="border-2 w-[640px] hover:shadow-xl hover:shadow-sky-100 hover:bg-sky-50 info-card" id="offering-universities">
                    <div class="px-5 py-5">
                        <div class="flex justify-between items-center">
                            <h4 class="text-purple_template text-2xl text-center font-semibold">Offering Universities</h4>
                            <button id="expand-btn" class="text-2xl font-semibold focus:outline-none transition-transform transform duration-300">+</button>
                        </div>
                        <div id="offering-universities-info" class="hidden-info pt-5">
                            <!-- Detailed information about the course -->
                            <ul class="list-disc list-inside">
                            @foreach ($universities as $university)
                                <li>{{$university->institution_name}}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Initial state of the card */
        .info-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        /* Enlarged state of the card */
        .info-card.enlarged {
            transform: scale(1.05);
            z-index: 10;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            background-color: rgb(224 242 254);
        }

        .hidden-info {
            display: none;
        }

        .visible-info {
            display: block;
        }
    </style>

    <script>
        // JavaScript to handle the card clicks
        document.addEventListener('DOMContentLoaded', (event) => {
            var cards = document.getElementsByClassName('info-card');
            for (var i = 0; i < cards.length; i++) {
                cards[i].addEventListener('click', function() {
                    toggleCard(this);
                });
            }
        });

        function toggleCard(card) {
            var infoId = card.id + "-info";
            var info = document.getElementById(infoId);
            const expandBtn = card.querySelector('#expand-btn');

            card.classList.toggle('enlarged');
            if (info) {
                info.classList.toggle('visible-info');
                info.classList.toggle('hidden-info');
                expandBtn.textContent = info.classList.contains('visible-info') ? '-' : '+';
            }
        }
    </script>


</x-mainLayout>