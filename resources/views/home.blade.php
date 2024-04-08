<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<header>
    @include('header')
</header>

<body>
    
    @include('navbar')

    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center" style="padding-left: 20px;">
                <div style="max-width: 350px;">
                    <h1 class="text-uppercase fw-bold" style="font-size: 39.88px;text-align: left;font-weight: bold;position: relative;margin-right: 0px;padding: 0px;padding-right: 0px;padding-top: 0px;padding-bottom: 7px;padding-left: 1px;"><span style="color: rgb(124, 118, 187);">How to</span> <span style="color: rgb(255, 135, 176);">Explore</span> <span style="color: rgb(124, 118, 187);">Your IT Future</span></h1>
                    <p class="my-3" style="padding-right: 0px;padding-left: 0px;margin-left: 0px;">Your academic and career path should be clear and promising. Our platform guides learning paths for IT and digital creative fields to help you make informed choices.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="{{ asset('img/Body_new.jpeg') }}"></div>
            </div>
        </div>
        <div></div>
        <div class="d-flex justify-content-center h-100">
            <div class="searchbar"><input type="text" class="search_input" placeholder="Search..."><a class="search_icon" href="#"><i class="fas fa-search"></i></a></div>
        </div>
    </div>
    <div class="card" style="border-color: var(--bs-body-bg);">
        <form style="border-style: none;">
            <div class="container py-4 py-xl-5" data-aos="slide-up" data-aos-duration="700" style="padding-left: 16px;padding-right: 35px;border-left-color: #ededee;">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2><span style="color: rgb(124, 118, 187);">Explore By Your Interests</span></h2>
                        <a href="/course-overview" data-bss-hover-animate="pulse" class="w-lg-50"><span style="text-decoration: underline; color: rgb(124, 118, 187);">See All Courses&nbsp;</span></a>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <a href="{{ route('career-choices.details', 'Information Technology') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; margin-bottom: 4px;border-style: solid;border-color: rgb(237,237,238);margin-top: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-robot">
                                    <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.58 26.58 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.933.933 0 0 1-.765.935c-.845.147-2.34.346-4.235.346-1.895 0-3.39-.2-4.235-.346A.933.933 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a24.767 24.767 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25.286 25.286 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135Z"></path>
                                    <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"></path>
                                </svg></div>
                            <div class="px-2">
                                <h5 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Information Technology</span></h5>
                            </div>
                        </a>
                        <a href="{{ route('career-choices.details', 'Data Structures') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; border-style: solid;border-color: rgb(237,237,238);margin-bottom: 4px;margin-top: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                                    <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                                    <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h5 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Data Structures</span></h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('career-choices.details', 'Decision Support Systems') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; border-style: solid;border-color: rgb(237,237,238);margin-bottom: 4px;margin-top: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-terminal-fill">
                                    <path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9.5 5.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1m-6.354-.354a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2a.5.5 0 1 0-.708.708L4.793 6.5z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h5 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Decision Support Systems</span></h5>
                            </div>
                        </a>
                        <a href="{{ route('career-choices.details', 'Computer Science') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; margin-top: 4px;border-style: solid;border-color: rgb(237,237,238);margin-bottom: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-easel2-fill">
                                    <path d="M8.447.276a.5.5 0 0 0-.894 0L7.19 1H2.5A1.5 1.5 0 0 0 1 2.5V10h14V2.5A1.5 1.5 0 0 0 13.5 1H8.809z"></path>
                                    <path fill-rule="evenodd" d="M.5 11a.5.5 0 0 0 0 1h2.86l-.845 3.379a.5.5 0 0 0 .97.242L3.89 14h8.22l.405 1.621a.5.5 0 0 0 .97-.242L12.64 12h2.86a.5.5 0 0 0 0-1zm3.64 2 .25-1h7.22l.25 1z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h5 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Computer Science</span></h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('career-choices.details', 'Security Science') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; color: rgb(0,0,0);border-style: solid;border-color: rgb(237,237,238);border-left-color: rgb(237,237,238);margin-bottom: 4px;margin-top: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-amd">
                                    <path d="m.334 0 4.358 4.359h7.15v7.15l4.358 4.358V0H.334ZM.2 9.72l4.487-4.488v6.281h6.28L6.48 16H.2V9.72Z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h5 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Security Science</span></h5>
                            </div>
                        </a>
                        <a href="{{ route('career-choices.details', 'Artificial Intelligence') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; border-style: solid;border-color: rgb(237,237,238);margin-bottom: 4px;margin-top: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                                    <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                                    <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h5 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Artificial Intelligence</span></h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('career-choices.details', 'Computer Graphics') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; border-style: solid;border-color: rgb(237,237,238);border-top-color: rgb(33,;border-right-color: 37,;border-bottom-color: 41);border-left-color: 37,;margin-bottom: 4px;margin-top: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-code-slash">
                                    <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h5 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Computer Graphics</span></h5>
                            </div>
                        </a>
                        <a href="{{ route('career-choices.details', 'Database Management') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; border-style: solid;border-color: rgb(237,237,238);margin-bottom: 4px;margin-top: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                                    <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                                    <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h5 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Database Management</span></h5>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('career-choices.details', 'Information Systems') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; border-style: solid;border-color: rgb(237,237,238);margin-bottom: 4px;margin-top: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                                    <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                                    <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h5 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Information Systems</span></h5>
                            </div>
                        </a>
                        <a href="{{ route('career-choices.details', 'Systems Analysis and Design') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; border-style: solid;border-color: rgb(237,237,238);margin-bottom: 4px;margin-top: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                                    <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                                    <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Systems Analysis and Design</span></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-4 offset-xxl-0" style="border: 2px inherit var(--bs-body-color) ;">
                        <a href="{{ route('career-choices.details', 'Programming') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; border-style: solid;border-color: rgb(237,237,238);margin-bottom: 4px;margin-top: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                                    <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                                    <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h5 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Programming</span></h5>
                            </div>
                        </a>
                        <a href="{{ route('career-choices.details', 'Networks and Communications') }}" class="d-flex p-3" data-bss-hover-animate="pulse" style=" text-decoration: none; border-style: solid;border-color: rgb(237,237,238);margin-bottom: 4px;margin-top: 4px;">
                            <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm" style="background: rgb(124,118,187);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                                    <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                                    <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="mb-0 mt-1"><span style="color: rgb(124, 118, 187);">Networks and Communications</span></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container py-4 py-xl-5" data-aos="slide-up" data-aos-duration="700">
                <div class="row gy-4 gy-md-0">
                    <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 350px;">
                            <h2 class="text-uppercase fw-bold"><span style="color: rgb(124, 118, 187);">We help you to discover your </span><span style="color: rgb(255, 135, 176);">path</span><span style="color: rgb(124, 118, 187);"> in IT</span></h2>
                            <p class="my-3">We guide you through the vast landscape of IT and digital creation courses. Whether you’re just starting or looking to specialize, we have something for everyone.</p><a class="btn btn-primary btn-lg me-2" role="button" data-bss-hover-animate="pulse" href="Career-Pathway.html" style="background: rgb(124,118,187);">Know More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="{{ asset('img/Pathway_home.jpeg') }}"></div>
                    </div>
                </div>
            </div>
        </form>
        <div class="container py-4 py-xl-5" data-aos="fade" data-aos-duration="700">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2><span style="color: rgb(124, 118, 187);">Our Main </span><span style="color: rgb(255, 135, 176);">Services</span></h2>
                    <p class="w-lg-50">Not sure where to start? Our platform offers personalized course recommendations based on your interests and goals. Start your journey with us today and unlock your IT and digital creation potential.</p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col" data-aos="fade-up" data-aos-duration="50">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 332px;background: rgba(39,163,255,0.17);" src="{{ asset('img/Main_service_1-Photoroom.png-Photoroom.png') }}" width="414" height="200">
                        <div class="card-body p-4" style="background: rgba(39,163,255,0.17);">
                            <p class="text-primary card-text mb-0"></p>
                            <h4 class="card-title"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: rgb(124, 118, 187);">&nbsp;IT Courses</span></strong></h4>
                            <p class="card-text">List of courses, including course title, introduction, difficulty level, and estimated study time&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                            <div class="d-flex">
                                <div></div>
                            </div><a data-bss-hover-animate="pulse" href="#"><span style="color: rgb(0, 0, 0);">Learn more...</span></a>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="500">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 332px;background: rgba(39,163,255,0.17);" src="{{ asset('img/Main_service_2-Photoroom.png-Photoroom.png') }}">
                        <div class="card-body p-4" style="background: rgba(39,163,255,0.17);">
                            <p class="text-primary card-text mb-0"></p>
                            <h4 class="card-title">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: rgb(124, 118, 187);">Global trends</span></h4>
                            <p class="card-text">View the latest global IT trends, such as emerging technologies, industry growth rates, and key players.</p>
                            <div class="d-flex"></div><a data-bss-hover-animate="pulse" href="#"><span style="color: rgb(0, 0, 0);">Learn more...</span></a>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="950">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 332px;background: rgba(39,163,255,0.17);" src="{{ asset('img/Main_service_3-removebg-preview.png') }}">
                        <div class="card-body p-4" style="background: rgba(39,163,255,0.17);">
                            <p class="text-primary card-text mb-0"></p>
                            <h4 class="card-title">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="color: rgb(124, 118, 187);">Career Choices</span></h4>
                            <p class="card-text">Provide growth trends and future needs of different IT professions.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><a data-bss-hover-animate="pulse" href="#"><span style="color: rgb(0, 0, 0);">Learn more...</span></a>
                            <div class="d-flex"></div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="py-4 py-xl-5">
                <div class="container">
                    <div class="text-center p-4 p-lg-5" data-aos="slide-up" data-aos-duration="700">
                        <h1 class="fw-bold mb-4" id="About-us"><span style="color: rgb(124, 118, 187);">About </span><span style="color: rgb(255, 135, 176);">Us</span></h1>
                        <p>Our team is committed to leveraging innovative information technology solutions to drive social change and contribute positively to society. With a focus on sustainable and ethical practices, we aim to address pressing social issues through the development and implementation of cutting-edge IT services. Our mission is to empower communities, enhance quality of life, and create meaningful impact through technology-driven initiatives. By prioritizing social responsibility and technological excellence, we are dedicated to advancing a more equitable and connected world.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('footer')
    @include('script_js')
</body>

</html>