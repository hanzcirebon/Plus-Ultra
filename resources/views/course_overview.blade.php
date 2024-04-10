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
                <button id="search-btn" class="search-btn">Search</button>
        </div>
    </div><input type="text" class="search_input" placeholder="Search...">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-3" style="border-style: solid;border-color: rgb(237,237,238);margin-top: 46px;">
                    <div class="d-none d-md-block">
                        <div class="filters">
                            <div class="filter-item" style="margin-top: 23px;">
                                <h5><span style="color: rgb(124, 118, 187);">Course Fields</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-IT">
                                    <label class="form-check-label" for="checkbox-IT">Information Technology</label></div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-DS">
                                    <label class="form-check-label" for="checkbox-DS">Data Structures</label></div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-DSS">
                                    <label class="form-check-label" for="checkbox-DSS">Decision Support Systems</label></div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-CS">
                                    <label class="form-check-label" for="checkbox-CS">Computer Science</label></div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-SS">
                                    <label class="form-check-label" for="checkbox-SS">Security Science</label></div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-AI">
                                    <label class="form-check-label" for="checkbox-AI">Artificial Intelligence</label></div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-CG">
                                    <label class="form-check-label" for="checkbox-CG">Computer Graphics</label></div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-DM">
                                    <label class="form-check-label" for="checkbox-DM">Database Management</label></div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-IS">
                                    <label class="form-check-label" for="checkbox-IS">Information Systems</label></div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-SAD">
                                    <label class="form-check-label" for="checkbox-SAD">Systems Analysis and Design</label></div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-P">
                                    <label class="form-check-label" for="checkbox-P">Programming</label></div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-NC">
                                    <label class="form-check-label" for="checkbox-NC">Networks and Communications</label></div>
                            </div>
                            <div class="filter-item" style="margin-top: 18px;margin-bottom: 19px;">
                                <h5><span style="color: rgb(124, 118, 187);">Tution Fee</span></h5><input type="email" name="Minimum" placeholder="Minimum $" style="width: 138px;"><button class="btn btn-primary ms-sm-2" type="submit" style="width: 95.9625px;height: 38.6px;background: rgb(124,118,187);margin: 0px 8px;margin-right: 8px;margin-left: 11px;padding: 6px 12px 6px 7px;padding-left: 7px;">Submit</button>
                            </div><input type="email" name="Maximum" placeholder="Maximum $$" style="width: 138px;"><button class="btn btn-primary ms-sm-2" type="submit" style="width: 95.9625px;height: 38.6px;background: rgb(124,118,187);margin: 0px 8px;margin-left: 11px;margin-right: 14px;padding: 6px 12px 6px 7px;padding-left: 8px;">Submit</button>
                        </div>
                    </div>
                    <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-bs-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button" style="color: rgb(0,0,0);background: rgba(124,118,187,0.58);">Filters<i class="icon-arrow-down filter-caret"></i></a>
                        <div class="collapse" id="filters">
                            <div class="filters">
                                <div class="filter-item" style="margin-top: 23px;">
                                    <h5><span style="color: rgb(124, 118, 187);">Course Fields</span></h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-IT">
                                        <label class="form-check-label" for="checkbox-IT">Information Technology</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-DS">
                                        <label class="form-check-label" for="checkbox-DS">Data Structures</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-DSS">
                                        <label class="form-check-label" for="checkbox-DSS">Decision Support Systems</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-CS">
                                        <label class="form-check-label" for="checkbox-CS">Computer Science</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-SS">
                                        <label class="form-check-label" for="checkbox-SS">Security Science</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-AI">
                                        <label class="form-check-label" for="checkbox-AI">Artificial Intelligence</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-CG">
                                        <label class="form-check-label" for="checkbox-CG">Computer Graphics</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-DM">
                                        <label class="form-check-label" for="checkbox-DM">Database Management</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-IS">
                                        <label class="form-check-label" for="checkbox-IS">Information Systems</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-SAD">
                                        <label class="form-check-label" for="checkbox-SAD">Systems Analysis and Design</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-P">
                                        <label class="form-check-label" for="checkbox-P">Programming</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-NC">
                                        <label class="form-check-label" for="checkbox-NC">Networks and Communications</label></div>
                                </div>
                                <div class="filter-item" style="margin-top: 18px;margin-bottom: 19px;">
                                    <h5><span style="color: rgb(124, 118, 187);">Tution Fee</span></h5><input type="email" name="Minimum" placeholder="Minimum $" style="width: 138px;"><button class="btn btn-primary ms-sm-2" type="submit" style="width: 95.9625px;height: 38.6px;background: rgb(124,118,187);margin: 0px 8px;margin-right: 8px;margin-left: 11px;padding: 6px 12px 6px 7px;padding-left: 7px;">Submit</button>
                                </div><input type="email" name="Maximum" placeholder="Maximum $$" style="width: 138px;"><button class="btn btn-primary ms-sm-2" type="submit" style="width: 95.9625px;height: 38.6px;background: rgb(124,118,187);margin: 0px 8px;margin-left: 11px;margin-right: 14px;padding: 6px 12px 6px 7px;padding-left: 8px;">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <section class="py-4 py-xl-5" style="padding-bottom: 76px;margin-top: -1px;">
                        <h1><span style="color: rgb(124, 118, 187);">Course Overview</span></h1>
                    </section>
                    <div id="courses-container">
                        @include('partials.courses', ['courses' => $courses])
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
    @include('script_js')
    <script>
        $(document).ready(function() {
            $('#search-btn').click(function() {
                // Get the input value entered by the user
                var courseName = $('#course-input').val().trim();

                // Perform a search for the course
                var foundCourse = false;
                $('.card').each(function() {
                    var cardCourseName = $(this).find('.card-header h5 span').text().trim();
                    if (cardCourseName === courseName) {
                        // Select the course or display a message if found
                        $(this).addClass('selected');
                        foundCourse = true;
                        return false; // Exit the loop once a course is found
                    }
                });

                // Display message if the course is not found
                if (!foundCourse) {
                    $('.search-container').append('<p class="course-not-found">Course not found</p>');
                } else {
                    $('.course-not-found').remove(); // Remove the "Course not found" message if it was previously displayed
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.category-checkbox').change(function() {
                var selectedCategories = $('.category-checkbox:checked').map(function() {
                    return $(this).val();
                }).get();
                
                $.ajax({
                    url: '/filter-courses', // Update with your server route
                    type: 'POST', // You can use GET if preferred
                    data: { categories: selectedCategories },
                    success: function(response) {
                        // Replace courses container with filtered courses
                        $('#courses-container').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error("An error occurred: " + status + " " + error);
                    }
                });
            });
        });
    </script>
    <!-- <script>
    $(function() {
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            fetchCourses(page);
        });

        function fetchCourses(page) {
            $.ajax({
                url: "{{ route('course-overview.index') }}?page=" + page,
                success: function(data) {
                    $('#courses-container').html(data);
                }
            });
        }
    });
    </script> -->
</body>
</html>