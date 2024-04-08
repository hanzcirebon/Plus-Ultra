<!DOCTYPE html>
<html lang="en">

<header>
    @include('header')
</header>

<body>
    @include('navbar')

    <div class="container py-4 py-xl-5" style="background: #dcf0ff;">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                <div style="max-width: 350px;"><a href="#" style="font-size: 10px;">&lt; BACK TO SEARCH RESULTS</a>
                    <h1 style="margin-top: 62px;"><span style="color: rgb(124, 118, 187);">{{$job->job_title}}</span></h1>
                    <p class="my-3"></p><a href="#">Copy link</a><a href="#" style="padding-left: 0px;margin-left: 25px;">Share link</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="{{asset('img/Job-listing.jpeg')}}"></div>
            </div>
        </div>
    </div>
    <div style="padding: 0px;padding-left: 35px;margin-top: 26px;">
        {!!$job->response!!}
    </div>
    @include('footer')
    @include('script_js')
</body>
</html>