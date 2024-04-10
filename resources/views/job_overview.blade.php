<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<header>
    @include('header')
</header>

<body>
    
    @include('navbar')

    <div class="d-flex justify-content-center h-100" style="margin-top: 10px;margin-bottom: 10px;">
        <div class="search-container">
                <input type="text" id="job-input" class="search-input" placeholder="Job Name...">
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
                                <h5><span style="color: rgb(124, 118, 187);">Job Fields</span></h5>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-14"><label class="form-check-label" for="formCheck-14">Information Technology</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-15"><label class="form-check-label" for="formCheck-15">Data Structures</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-16"><label class="form-check-label" for="formCheck-16">Decision Support Systems</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Computer Science</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-14"><label class="form-check-label" for="formCheck-14">Security Science</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-15"><label class="form-check-label" for="formCheck-15">Artificial Intelligence</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-16"><label class="form-check-label" for="formCheck-16">Computer Graphics</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Database Management</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-14"><label class="form-check-label" for="formCheck-14">Information Systems</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-15"><label class="form-check-label" for="formCheck-15">Systems Analysis and Design</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-16"><label class="form-check-label" for="formCheck-16">Programming</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Networks and Communications</label></div>
                            </div>
                            <div class="filter-item" style="margin-top: 18px;margin-bottom: 19px;"></div>
                        </div>
                    </div>
                    <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-bs-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button" style="color: rgb(0,0,0);background: rgba(124,118,187,0.58);">Filters<i class="icon-arrow-down filter-caret"></i></a>
                        <div class="collapse" id="filters">
                            <div class="filters">
                                <div class="filter-item" style="margin-top: 23px;">
                                    <h5><span style="color: rgb(124, 118, 187);">Job Fields</span></h5>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-14"><label class="form-check-label" for="formCheck-14">Information Technology</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-15"><label class="form-check-label" for="formCheck-15">Data Structures</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-16"><label class="form-check-label" for="formCheck-16">Decision Support Systems</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Computer Science</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-14"><label class="form-check-label" for="formCheck-14">Security Science</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-15"><label class="form-check-label" for="formCheck-15">Artificial Intelligence</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-16"><label class="form-check-label" for="formCheck-16">Computer Graphics</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Database Management</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-14"><label class="form-check-label" for="formCheck-14">Information Systems</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-15"><label class="form-check-label" for="formCheck-15">Systems Analysis and Design</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-16"><label class="form-check-label" for="formCheck-16">Programming</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Networks and Communications</label></div>
                                </div>
                                <div class="filter-item" style="margin-top: 18px;margin-bottom: 19px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <section class="py-4 py-xl-5" style="padding-bottom: 76px;margin-top: -1px;">
                        <h1><span style="color: rgb(124, 118, 187);">Career Overview</span></h1>
                    </section>
                    @foreach($jobs as $job)
                    <a href="{{ route('job-overview.details', $job->job_title) }}" data-bss-hover-animate="pulse" class="card" data-aos="fade-up" data-aos-duration="400" style="margin-bottom: 15px; text-decoration: none;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">{{$job->job_title}}</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                    </a>
                    @endforeach
                    <div class="card" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">Data Scientist</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">These courses are designed for individuals with little to no prior experience in IT.</p>
                        </div>
                    </div>
                    <div class="card" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">Software Engineering</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">These courses are designed for individuals with little to no prior experience in IT.</p>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="400" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">Cybersecurity</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">These courses are designed for individuals with little to no prior experience in IT.</p>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="400" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">DevOps Engineering</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">These courses are designed for individuals with little to no prior experience in IT.</p>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="400" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">Machine Learning Engineer</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">These courses are designed for individuals with little to no prior experience in IT.</p>
                        </div>
                    </div>
                    <div data-bss-hover-animate="pulse" class="card" data-aos="fade-up" data-aos-duration="400" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">Database Administrator</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">These courses are designed for individuals with little to no prior experience in IT.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
    @include('script_js')
</body>

</html>