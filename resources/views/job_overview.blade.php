<x-mainLayout>
    <div class="max-w-full flex justify-center">
        <div class="w-[762px] border-2 border-black shadow-[8px_8px_1px_0px_rgba(249,255,82)] hover:shadow-[10px_10px_5px_2px_rgba(249,255,82)] ring-offset-0 rounded py-5 px-20 mt-10 ease-out duration-150">
            <label for="course-input" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="job-input" class="block w-full p-6 ps-10 text-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500" name="job_title" placeholder="Search Jobs ..." maxlength="50" required />
                <button type="submit" id="search-job" class="text-white absolute end-2.5 bottom-2.5 bg-light_purple_template hover:bg-purple_template focus:ring-4 focus:outline-none focus:ring-purple-300 font-bold rounded-sm text-xl px-6 py-3.5">Search</button>
            </div>
        </div>
    </div>

    <div class="max-w-full flex flex-wrap justify-center gap-10 py-6 pb-32">
        {{-- FILTER BOX --}}
        <div class="px-2 py-5 min-w-xs max-w-xs w-full">
            <div id="accordion-collapse" data-accordion="collapse" class="">
                {{-- Accordion For FIELDS FILTER HEADER --}}
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right border border-gray-200  rounded-t-xl focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                        <span class="text-purple_template pb-2 text-lg font-semibold">Salary Filters</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                {{-- Accordion For FIELDS FILTER CONTENT --}}
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-gray-200 ">
                        <div class="text-md flex flex-col gap-1">
                            <span class="text-slate-500 pb-2">Enter the minimum of annual salary that you want</span>
                            <div class="max-w-[18rem] mx-auto flex">
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                        A$
                                    </div>
                                    <input type="number" id="salary-input" class="block p-2.5 w-full z-20 ps-10 text-sm text-gray-900 bg-gray-50 rounded-s-lg border-e-gray-50 border-e-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-e-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Minimum Salary" min="0" maxlength="10" required />
                                </div>
                                <button id="salary-search" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-e-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="submit">
                                    Apply
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- DATA BOX --}}
        <div class="px-2 py-5 min-w-[784px]">
            <div class="text-lg">
                <h1 class="text-purple_template text-3xl font-semibold pb-10">Career Overview</h1>
                @isset($job_title)
                <span id="result-text">Result for {{$job_title}}</span> 
                @else
                <span id="result-text"></span>
                @endif
            </div>
            <div id="jobs-container" class="flex flex-col gap-4">
                @foreach($jobs as $job)
                <a href="{{route('job-overview.details', $job->job_title)}}" class="border-2 rounded-lg px-2 py-3 min-w-3xl max-w-3xl inline-block hover:shadow-2xl hover:shadow-sky-200 hover:border-4 ease-in duration-100 focus:bg-sky-100">
                    <div class="pb-2 flex flex-col">
                        <span class="text-pink_template text-xl font-semibold">{{ $job->job_title }}</span>
                        <span class="text-sm">Annual salary: ~A${{ $job->salary }}</span>
                    </div>
                    <p>{{ $job->job_description }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Function to perform AJAX search
            function performSearch() {
                var jobTitle = $('#job-input').val(); // Get the search input value
                var minSalary = $('#salary-input').val();
                
                var dataContainer = $('#jobs-container');
                var resultText = $('#result-text');

                // console.log(jobTitle);
                // console.log(minSalary);

                resultText.text(`Please wait while the system executing your request ....`);
                dataContainer.empty();

                // Perform the AJAX request
                $.ajax({
                    url: "{{ route('job-overview.index') }}",
                    type: "GET",
                    data: {
                        job_title: jobTitle,
                        job_salary: minSalary
                    },
                    success: function(data) {
                        // console.log(data.data)
                        if (data.status === "empty") {
                            resultText.text(data.message);
                        } else {
                            resultText.text(``);
                            $.each(data.data, function(index, job) {
                                // console.log(job.job_title)
                                var jobHtml = `
                                <a href="jobs-overview/${job.job_title}" class="border-2 rounded-lg px-2 py-3 min-w-3xl max-w-3xl inline-block hover:shadow-2xl hover:shadow-sky-200 hover:border-4 ease-in duration-100 focus:bg-sky-100">
                                    <div class="pb-2 flex flex-col">
                                        <span class="text-pink_template text-xl font-semibold">${job.job_title}</span>
                                        <span class="text-sm">Annual salary: ~A${ job.salary }</span>
                                    </div>
                                    <p>${job.job_description}</p>
                                </a>
                                `;
                                dataContainer.append(jobHtml);
                            });
                        }
                    },
                    error: function(error) {
                        console.error("Error:", error);
                        resultText.text("Oops, It seems that there is an error with our database. Please try again later.")
                    }
                });
            }

            // Bind the search function to click event of the search button
            $('#search-job').click(function() {
                performSearch();
            });

            // Bind the search function to the Enter key in the job input field
            $('#job-input').keypress(function(event) {
                // Check if the Enter key is pressed
                if (event.which === 13) {
                    performSearch();
                }
            });

            // Bind the search function to click event of the search button
            $('#salary-search').click(function() {
                performSearch();
            });

            // Bind the search function to the Enter key in the job input field
            $('#salary-input').keypress(function(event) {
                // Check if the Enter key is pressed
                if (event.which === 13) {
                    performSearch();
                }
            });
        });
    </script>
</x-mainLayout>