<!DOCTYPE html>
<html lang="en">

<header>
    @include('header')
</header>

<body>
    @include('navbar')

    <div class="d-flex justify-content-center h-100" style="margin-top: 10px;margin-bottom: 10px;">
        <div class="search-container">
            <input type="text" id="course-input" class="search-input" placeholder="Course Name...">
            <button id="search-course" class="search-btn">Search</button>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-3" style="border-style: solid;border-color: rgb(237,237,238);margin-top: 46px;">
                    <div class="d-none d-md-block">
                        <div class="filters">
                            <div class="filter-item" style="margin-top: 23px;">
                                <h5><span style="color: rgb(124, 118, 187);">Course Fields</span></h5>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Information Technology"><label class="form-check-label" for="formCheck-1">Information Technology</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Data Structures"><label class="form-check-label" for="formCheck-2">Data Structures</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Decision Support Systems"><label class="form-check-label" for="formCheck-3">Decision Support Systems</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Computer Science"><label class="form-check-label" for="formCheck-4">Computer Science</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Security Science"><label class="form-check-label" for="formCheck-5">Security Science</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Artificial Intelligence"><label class="form-check-label" for="formCheck-6">Artificial Intelligence</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Computer Graphics"><label class="form-check-label" for="formCheck-7">Computer Graphics</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Database Management"><label class="form-check-label" for="formCheck-8">Database Management</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Information Systems"><label class="form-check-label" for="formCheck-9">Information Systems</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Systems Analysis and Design"><label class="form-check-label" for="formCheck-10">Systems Analysis and Design</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Programming"><label class="form-check-label" for="formCheck-11">Programming</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Networks and Communications"><label class="form-check-label" for="formCheck-12">Networks and Communications</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-bs-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button" style="color: rgb(0,0,0);background: rgba(124,118,187,0.58);">Filters<i class="icon-arrow-down filter-caret"></i></a>
                        <div class="collapse" id="filters">
                            <div class="filters">
                                <div class="filter-item" style="margin-top: 23px;">
                                    <h5><span style="color: rgb(124, 118, 187);">Course Fields</span></h5>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Information Technology"><label class="form-check-label" for="formCheck-1">Information Technology</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Data Structures"><label class="form-check-label" for="formCheck-2">Data Structures</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Decision Support Systems"><label class="form-check-label" for="formCheck-3">Decision Support Systems</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Computer Science"><label class="form-check-label" for="formCheck-4">Computer Science</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Security Science"><label class="form-check-label" for="formCheck-5">Security Science</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Artificial Intelligence"><label class="form-check-label" for="formCheck-6">Artificial Intelligence</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Computer Graphics"><label class="form-check-label" for="formCheck-7">Computer Graphics</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Database Management"><label class="form-check-label" for="formCheck-8">Database Management</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Information Systems"><label class="form-check-label" for="formCheck-9">Information Systems</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Systems Analysis and Design"><label class="form-check-label" for="formCheck-10">Systems Analysis and Design</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Programming"><label class="form-check-label" for="formCheck-11">Programming</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-Networks and Communications"><label class="form-check-label" for="formCheck-12">Networks and Communications</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <section class="py-4 py-xl-5" style="padding-bottom: 76px;margin-top: -1px;">
                        <h1><span style="color: rgb(124, 118, 187);">Course Overview</span></h1>
                        @isset($course_name)
                        <h5><span id="result-text">Result for {{$course_name}}</span></h5>
                        @else
                        <h5><span id="result-text"></span></h5>
                        @endif
                    </section>
                    <div id="courses-container">
                        @foreach($courses as $course)
                        <a href="{{route('courses-overview.detail', $course->course_name)}}" data-bss-hover-animate="pulse" class="card" style="margin-bottom: 15px; text-decoration: none;">
                            <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                                <h5 class="mb-0"><span style="color: rgb(255, 135, 176);">{{ $course->course_name }}</span></h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $course->course_single_desc }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
    @include('script_js')
    <script>
        $(document).ready(function() {
            // Function to perform AJAX search
            function performSearch() {
                var courseName = $('#course-input').val(); // Get the search input value
                var courseFields = $('.form-check-input:checked').map(function() {
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
                                var courseHtml = `<a href="/course-overview/${course.course_name}" data-bss-hover-animate="pulse" class="card" style="margin-bottom: 15px; text-decoration: none;">
                                                    <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                                                        <h5 class="mb-0"><span style="color: rgb(255, 135, 176);">${course.course_name}</span></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">${course.course_single_desc}</p>
                                                    </div>
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
            $('.form-check-input').change(function() {
                performSearch();
            });
        });
    </script>
</body>
</html>