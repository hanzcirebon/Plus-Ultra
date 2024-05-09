<nav class="navbar navbar-expand-md sticky-top bg-body py-3" style="margin-bottom: -2px;">
    <div class="container"><img src="{{asset('img/Logo_new.jpeg')}}" width="93" height="84"><a class="navbar-brand d-flex align-items-center" href="/"><span style="color: rgb(124,118,187);font-weight: bold;">IT <span style="color: rgb(255, 135, 176);">Explore</span></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" data-bss-hover-animate="pulse" href="{{ route('home') }}" style="color: rgb(124,118,187);">Home</a></li>
                <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="{{ route('course-overview.index') }}" style="color: rgb(124,118,187);">Course Overview</a></li>
                <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="{{ route('global-trend.index') }}" style="color: rgb(124,118,187);">Global trends</a></li>
                <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="{{ route('job-overview.index') }}" style="color: rgb(124,118,187);">Career Choices</a></li>
                {{-- <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="{{ route('quick-questions') }}" style="color: rgb(124,118,187);">Questions</a></li> --}}
                <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse" href="/soft-skill" style="color: rgb(124,118,187);">Soft Skills</a></li>
            </ul>
        </div>
    </div>
</nav>