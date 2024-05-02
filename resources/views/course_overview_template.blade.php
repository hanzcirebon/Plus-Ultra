<!DOCTYPE html>
<html lang="en">

<header>
    @include('header')
</header>

<body>
    @include('navbar')

    <section class="article-dual-column">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="intro">
                        <h1 class="text-center" id="inceput-1" style="font-family: Roboto, sans-serif;"><span style="color: rgb(255, 135, 176);">{{$course_content->course_name}}</span></h1>
                        <p class="text-center"> </p><img class="img-fluid" src="{{ asset('img/Slider_2.webp') }}" style="width: 670px;height: 434.388px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-3 offset-md-1">
                    <div class="toc">
                        <p>Quick Links</p>
                        <ul>
                            <li id="inceput-2"><a href="https://www.studyaustralia.gov.au/en/plan-your-studies/list-of-australian-universities">University List</a> </li>
                            <li id="detaliitehnice-1"><a href="#Offering-universities">Offering University</a></li>
                            <li id="detaliitehnice-1"><a href="https://www.studyassist.gov.au/you-study/how-get-higher-education">How to get into higher education</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Card for Course Description -->
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 19px;">
                    <div class="card border-secondary border-2 shadow-lg info-card" style="margin-top: 16px;" id="course-description">
                        <div class="card-body" style="margin-top: 20px;margin-bottom: 40px;">
                            <h4 class="card-title" style="text-align: center;"><strong><span style="color: rgb(124, 118, 187);">Course Description</span></strong></h4>
                            <div id="course-description-info" class="hidden-info">
                                <!-- Detailed information about the course -->
                                <p>{{$course_content->course_description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card for Skills Acquired -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-secondary border rounded border-2 shadow info-card" id="skills-acquired">
                        <div class="card-body border rounded border-2 border-light-subtle shadow-sm">
                            <h4 class="card-title" style="text-align: center;"><strong><span style="color: rgb(124, 118, 187);">Skills Acquired</span></strong></h4>
                            <div id="skills-acquired-info" class="hidden-info">
                                <!-- Detailed information about skills acquired -->
                                <p>{!!$course_content->list_student_outcomes!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-top: 18px;">
                <div class="col-md-12" style="margin-bottom: 19px;">
                    <div class="card border-secondary border-2 shadow info-card" style="padding-bottom: 0px;" id="career-pathway">
                        <div class="card-body" style="margin-top: 20px;margin-bottom: 40px;">
                            <h4 class="card-title" style="text-align: center;"><strong><span style="color: rgb(124, 118, 187);">Career Pathways</span></strong></h4>
                            <div id="career-pathway-info" class="hidden-info">
                                <!-- Detailed information about the course -->
                                <p>{!!$course_content->list_possible_jobs!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 22px;" >
                    <div class="card border-secondary border-2 shadow focus-ring info-card" id="isit-foryou">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;"><strong><span style="color: rgb(124, 118, 187);">Is It For You ?</span></strong></h4>
                            <div id="isit-foryou-info" class="hidden-info">
                                <!-- Detailed information about the course -->
                                <p>{{$course_content->is_it_for_you}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 22px;" >
                    <div class="card border-secondary border-2 shadow focus-ring info-card" id="offering-universities">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;"><strong><span style="color: rgb(124, 118, 187);">Offering Universities</span></strong></h4>
                            <div id="offering-universities-info" class="hidden-info">
                                <!-- Detailed information about the course -->
                                <ul>
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
    </section>

<style>
    /* Initial state of the card */
    .info-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    /* Enlarged state of the card */
    .info-card.enlarged {
        transform: scale(1.05); /* Scale up the card */
        z-index: 10; /* Ensure the card is above other elements */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add a shadow for effect */
        position: relative;
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

            card.classList.toggle('enlarged');
            if (info) {
                info.classList.toggle('visible-info');
                info.classList.toggle('hidden-info');
            }
        }
    </script>
    @include('footer')
    @include('script_js')
</body>
</html>