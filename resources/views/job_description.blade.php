<x-mainLayout>
    <div class="flex flex-col justify-center items-center">
        <div class="flex justify-center items-center mb-10 w-5/6">
            <div class="flex flex-row justify-center gap-10 bg-sky-100 rounded-lg p-10">
                <div class="w-4/12">
                    <p class="mb-10">
                        <a href="{{route('job-overview.index')}}" class="text-blue-600 hover:underline">&larr; Back to jobs overview</a>
                    </p>
                    <h1 class="text-purple_template text-3xl font-semibold mb-5 text-center">{{$job->job_title}}</h1>
                    {{$job->job_description}}
                    <div class="pt-10">
                        <button type="button" onclick="copyUrlToClipboard()" class="text-blue-600 hover:underline">Copy link</button>
                        {{-- <a href="#">Share link</a> --}}
                        <!-- Display the current URL without query string -->
                    </div>
                </div>
                <img class="h-96 hover:scale-105 transition-all duration-250" src="{{asset('img/Job-listing.jpeg')}}">
            </div>
        </div>
        <div>
            <div class="flex flex-col gap-5 justify-center items-center">
                {{-- TECHNICAL SKILLS NEEDED --}}
                <div class="border-2 w-[640px] hover:shadow-xl hover:shadow-sky-100 hover:bg-sky-50 info-card" id="tech-skills">
                    <div class="px-5 py-5">
                        <div class="flex justify-between items-center">
                            <h4 class="text-purple_template text-2xl text-center font-semibold">Technical Skills Recommendation</h4>
                            <button id="expand-btn" class="text-2xl font-semibold focus:outline-none transition-transform transform duration-300">+</button>
                        </div>
                        <div id="tech-skills-info" class="hidden-info pt-5">
                            <!-- Detailed information about skills acquired -->
                            {!!$job->list_of_technical_skills!!}
                        </div>
                    </div>
                </div>
                {{-- SOFT SKILLS NEEDED --}}
                <div class="border-2 w-[640px] hover:shadow-xl hover:shadow-sky-100 hover:bg-sky-50 info-card" id="soft-skills">
                    <div class="px-5 py-5">
                        <div class="flex justify-between items-center">
                            <h4 class="text-purple_template text-2xl text-center font-semibold">Soft Skills Recommendation</h4>
                            <button id="expand-btn" class="text-2xl font-semibold focus:outline-none transition-transform transform duration-300">+</button>
                        </div>
                        <div id="soft-skills-info" class="hidden-info pt-5">
                            <!-- Detailed information about skills acquired -->
                            {!!$job->list_of_soft_skills!!}
                        </div>
                    </div>
                </div>
                {{-- QUALIFICATION NEEDED --}}
                <div class="border-2 w-[640px] hover:shadow-xl hover:shadow-sky-100 hover:bg-sky-50 info-card" id="qualification">
                    <div class="px-5 py-5">
                        <div class="flex justify-between items-center">
                            <h4 class="text-purple_template text-2xl text-center font-semibold">Recommended Qualification</h4>
                            <button id="expand-btn" class="text-2xl font-semibold focus:outline-none transition-transform transform duration-300">+</button>
                        </div>
                        <div id="qualification-info" class="hidden-info pt-5">
                            <!-- Detailed information about skills acquired -->
                            {!!$job->required_qualification!!}
                        </div>
                    </div>
                </div>
                {{-- QUALIFICATION NEEDED --}}
                <div class="border-2 w-[640px] hover:shadow-xl hover:shadow-sky-100 hover:bg-sky-50 info-card" id="est-salary">
                    <div class="px-5 py-5">
                        <div class="flex justify-between items-center">
                            <h4 class="text-purple_template text-2xl text-center font-semibold">Average Salary</h4>
                            <button id="expand-btn" class="text-2xl font-semibold focus:outline-none transition-transform transform duration-300">+</button>
                        </div>
                        <div id="est-salary-info" class="hidden-info pt-5">
                            <!-- Detailed information about skills acquired -->
                            {{$job->estimated_salary}}
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
        function copyUrlToClipboard() {
            // Copy the text inside the text field
            navigator.clipboard.writeText(`{{ request()->url() }}`);

            // Alert the copied text
            alert("URL Copied to clipboard");
        }
    </script>
</x-mainLayout>