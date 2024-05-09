<x-mainLayout>
    <div class="max-w-full flex justify-center">
        <div class="w-[762px] border-2 border-black shadow-[8px_8px_1px_0px_rgba(249,255,82)] hover:shadow-[10px_10px_5px_2px_rgba(249,255,82)] ring-offset-0 rounded py-5 px-20 mt-10 ease-out duration-150">
            <form class="max-w-md mx-auto" action="{{route('course-overview.index')}}", method="POST">
                @csrf
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-6 ps-10 text-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500" name="course_name" placeholder="Search IT Courses ..." required />
    
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-light_purple_template hover:bg-purple_template focus:ring-4 focus:outline-none focus:ring-purple-300 font-bold rounded-sm text-xl px-6 py-3.5">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="max-w-full flex justify-center gap-10 py-6 pb-32">
        {{-- FILTER BOX --}}
        <div class="px-2 py-5 min-w-xs max-w-xs w-full">
            <div id="accordion-collapse" data-accordion="collapse" class="">
                {{-- Accordion For FIELDS FILTER HEADER --}}
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right border border-gray-200 border-b-0 rounded-t-xl focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                        <span class="text-purple_template pb-2 text-lg font-semibold">Course Fields Filters</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                {{-- Accordion For FIELDS FILTER CONTENR --}}
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-gray-200 border-b-0">
                        <div class="text-md flex flex-col gap-1">
                            <span class="text-light_purple_template">Select all the fields that you want to include</span>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Information_Technology">
                                <label class="ms-2 text-gray-900" for="formCheck-Information_Technology">Information Technology</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Data_Structures">
                                <label class="ms-2 text-gray-900" for="formCheck-Data_Structures">Data Structures</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Decision_Support_Systems">
                                <label class="ms-2 text-gray-900" for="formCheck-Decision_Support_Systems">Decision Support Systems</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Computer_Science">
                                <label class="ms-2 text-gray-900" for="formCheck-Computer_Science">Computer Science</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Security_Science">
                                <label class="ms-2 text-gray-900" for="formCheck-Security_Science">Security Science</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Artificial_Intelligence">
                                <label class="ms-2 text-gray-900" for="formCheck-Artificial_Intelligence">Artificial Intelligence</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Computer_Graphics">
                                <label class="ms-2 text-gray-900" for="formCheck-Computer_Graphics">Computer Graphics</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Database_Management">
                                <label class="ms-2 text-gray-900" for="formCheck-Database_Management">Database Management</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Information_Systems">
                                <label class="ms-2 text-gray-900" for="formCheck-Information_Systems">Information Systems</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Systems_Analysis_and_Design">
                                <label class="ms-2 text-gray-900" for="formCheck-Systems_Analysis_and_Design">Systems Analysis and Design</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Programming">
                                <label class="ms-2 text-gray-900" for="formCheck-Programming">Programming</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-course w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-Networks_and_Communications">
                                <label class="ms-2 text-gray-900" for="formCheck-Networks_and_Communications">Networks and Communications</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Accordion for STATE FILTER --}}
                <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="true" aria-controls="accordion-collapse-body-2">
                        <span class="text-purple_template pb-2 text-lg font-semibold">State Filters</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-gray-200 border-b-0">
                        <div class="text-md flex flex-col gap-1">
                            <span class="text-light_purple_template">Select all the states you want to include</span>
                            <div class="flex items-center gap-1">
                                <input class="form-check-state w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-nsw">
                                <label class="ms-2 text-gray-900" for="formCheck-nsw">New South Wales</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-state w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-vic">
                                <label class="ms-2 text-gray-900" for="formCheck-vic">Victoria</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-state w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-vic">
                                <label class="ms-2 text-gray-900" for="formCheck-qld">Queensland</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-state w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-vic">
                                <label class="ms-2 text-gray-900" for="formCheck-wa">Western Australia</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-state w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-vic">
                                <label class="ms-2 text-gray-900" for="formCheck-sa">South Australia</label>
                            </div>
                            <div class="flex items-center gap-1">
                                <input class="form-check-state w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2" type="checkbox" id="formCheck-vic">
                                <label class="ms-2 text-gray-900" for="formCheck-tas">Tasmania</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- DATA BOX --}}
        <div class="px-2 py-5">
            <div class="text-lg">
                <h1 class="text-purple_template text-3xl font-semibold pb-10">Course List</h1>
                @isset($course_name)
                <span id="result-text">Result for {{$course_name}}</span> 
                @else
                <span id="result-text"></span>
                @endif
            </div>
            <div id="courses-container" class="flex flex-col gap-4">
                @foreach($courses as $course)
                <a href="{{route('courses-overview.detail', $course->course_name)}}" class="border-2 rounded-lg px-2 py-3 min-w-3xl max-w-3xl inline-block hover:shadow-2xl hover:shadow-sky-200 hover:border-4 ease-in duration-100 focus:bg-sky-100">
                    <div class="pb-2">
                        <span class="text-pink_template text-xl font-semibold">{{ $course->course_name }}</span>
                    </div>
                    <p>{{ $course->single_desc }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Function to perform AJAX search
            function performSearch() {
                var courseName = $('#course-input').val(); // Get the search input value
                var courseFields = $('.form-check-course:checked').map(function() {
                    return this.id.replace('formCheck-', ''); // Collecting selected checkbox values
                }).get();
                var dataContainer = $('#courses-container');
                var resultText = $('#result-text');

                console.log(courseName)
                console.log(courseFields)

                resultText.text(`Please wait while the system executing your request ....`);
                dataContainer.empty();

                // Perform the AJAX request
                $.ajax({
                    url: "{{ route('course-overview.index') }}",
                    type: "GET",
                    data: {
                        course_name: courseName,
                        course_fields: courseFields
                    },
                    success: function(data) {
                        console.log(data)
                        if (data.status === "empty") {
                            resultText.text(data.message);
                        } else {
                            resultText.text(``);
                            $.each(data.data, function(index, course) {
                                var courseHtml =`<a href="/course-overview/${course.course_name}" class="border-2 rounded-lg px-2 py-3 min-w-3xl max-w-3xl inline-block hover:shadow-2xl hover:shadow-sky-200 hover:border-4 ease-in duration-100 focus:bg-sky-100">
                                                    <div class="pb-2">
                                                        <span class="text-pink_template text-xl font-semibold">${course.course_name}</span>
                                                    </div>
                                                    <p>${course.single_desc}</p>
                                                </a>`;
                                dataContainer.append(courseHtml);
                            });
                        }
                    },
                    error: function(error) {
                        console.error("Error:", error);
                    }
                });
            }

            // Bind the search function to click event of the search button
            $('#search-course').click(function() {
                performSearch();
            });

            // Optionally, bind the search function to change event of the checkboxes
            $('.form-check-course').change(function() {
                performSearch();
            });
        });
    </script>
</x-mainLayout>