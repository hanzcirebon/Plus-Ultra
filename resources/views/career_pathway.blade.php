<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

@include('header')

<body>
    @include('navbar')

    <section>
        <div data-bss-parallax-bg="true" style="height: 600px;background-image:url('{{ asset('img/Career-image.jpeg') }}');background-position: center;background-size: cover;">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 350px;">
                            <h1 class="text-uppercase fw-bold"><span style="color: rgb(124, 118, 187);">How to </span><span style="color: rgb(255, 135, 176);">Start</span><span style="color: rgb(124, 118, 187);"> your Career</span></h1>
                            <p class="my-3">From foundational courses to advanced specializations, we chart the pathways that lead to a fulfilling career in IT. Begin your exploration now and unlock the potential of your future in IT.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-4 py-xl-5" style="margin-top: 15px;">
        <h3><span style="color: rgb(124, 118, 187);">Information </span><span style="color: rgb(255, 135, 176);">Technology</span></h3>
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2><span style="color: rgb(124, 118, 187);">Discover </span><span style="color: rgb(255, 135, 176);">Career Opportunities</span><span style="color: rgb(124, 118, 187);"> that match the course.</span></h2>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card" data-bss-hover-animate="pulse">
                    <div class="card-body p-4">
                        <h4 class="card-title"><span style="color: rgb(124, 118, 187);">Data Science</span></h4>
                        <p class="card-text" style="text-align: justify;">Students will learn how to collect, process, and analyze data to provide data-driven decision support. Possible careers include data analyst, data engineer, and machine learning engineer.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" data-bss-hover-animate="pulse">
                    <div class="card-body p-4">
                        <h4 class="card-title"><span style="color: rgb(124, 118, 187);">Web Development</span></h4>
                        <p class="card-text" style="text-align: justify;">Web Development courses provide students with the skills needed to build websites and web applications. They can become front-end, back-end, or full-stack development engineers, or they can choose UI/UX design, etc.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-4" data-bss-hover-animate="pulse">
                        <h4 class="card-title"><span style="color: rgb(124, 118, 187);">Cybersecurity</span></h4>
                        <p class="card-text" style="text-align: justify;">Students will learn how to protect computer systems and networks from malicious attacks and data breaches. Possible careers include cybersecurity engineers, information security analysts, and network penetration testers.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center" style="margin-top: 16px;"><button class="btn btn-primary text-center" type="button" style="background: rgb(124,118,187);margin-top: 10px;">Know More</button></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center" data-bss-hover-animate="pulse"><img class="rounded-circle" style="margin-top: 10px;margin-bottom: 10px;width: 200px;height: 172px;" src="{{ asset('img/Data-Analyst.jpeg') }}" width="200" height="172">
                <h5><span style="color: rgb(124, 118, 187);">Data Analyst</span></h5>
            </div>
            <div class="col-md-3 text-center" data-bss-hover-animate="pulse"><img class="rounded-circle" style="margin-bottom: 10px;margin-top: 10px;height: 172px;width: 200px;" src="{{ asset('img/Front-end.jpeg') }}" width="199" height="174">
                <h5><span style="color: rgb(124, 118, 187);">Front-end Developer</span></h5>
            </div>
            <div class="col-md-3 text-center" data-bss-hover-animate="pulse"><img class="rounded-circle" style="margin-top: 10px;margin-bottom: 10px;width: 200px;height: 172px;" src="{{ asset('img/UI-Design.jpeg') }}">
                <h5><span style="color: rgb(124, 118, 187);">UI Design</span></h5>
            </div>
            <div class="col-md-3 text-center" data-bss-hover-animate="pulse"><img class="rounded-circle" style="margin-top: 10px;margin-bottom: 10px;width: 200px;height: 172px;" src="{{ asset('img/Cybersecurity.jpeg') }}" width="323" height="320">
                <h5><span style="color: rgb(124, 118, 187);">Cyber Security</span></h5>
            </div>
        </div>
    </div>
    <div class="col text-center" style="margin-top: 16px;"><button class="btn btn-primary text-center" type="button" style="background: rgb(124,118,187);margin-top: 10px;">Know More</button></div>

    @include('footer')
    @include('script_js')
</body>
</html>