<!DOCTYPE html>
<html lang="en">

@include('header')

<body>
    @include('navbar')

    <div class="d-flex justify-content-center h-100" style="margin-top: 16px;margin-bottom: 16px;">
        <div class="searchbar"><input type="text" class="search_input" placeholder="Search..."><a class="search_icon" href="#"><i class="fas fa-search"></i></a></div>
    </div>
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-3" style="border-style: solid;border-color: rgb(237,237,238);border-top-color: rgb(33,;border-right-color: 37,;border-bottom-color: 41);border-left-color: 37,;margin-top: 46px;">
                    <div class="d-none d-md-block">
                        <div class="filters">
                            <div class="filter-item" style="margin-top: 16px;">
                                <h5><span style="color: rgb(124, 118, 187);">Roles</span></h5>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-10"><label class="form-check-label" for="formCheck-10">Information Technology &amp; Systems</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-11"><label class="form-check-label" for="formCheck-11">Cybersecurity</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-12"><label class="form-check-label" for="formCheck-12">Software Engineering &amp; Development</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-13"><label class="form-check-label" for="formCheck-13">Game Design &amp; Development</label></div>
                            </div><a href="#">See More&nbsp;&nbsp;</a>
                            <div class="filter-item" style="margin-top: 23px;">
                                <h5><span style="color: rgb(124, 118, 187);">Course Name</span></h5>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-14"><label class="form-check-label" for="formCheck-14">Web Development Fundamentals</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-15"><label class="form-check-label" for="formCheck-15">Introduction to Computer Science</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-16"><label class="form-check-label" for="formCheck-16">Advanced-Data Science with Python</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Java</label></div><a href="#">See More&nbsp;</a>
                            </div>
                            <div class="filter-item" style="margin-top: 18px;margin-bottom: 19px;">
                                <h5><span style="color: rgb(124, 118, 187);">Tution Fee</span></h5><input type="email" name="Minimum" placeholder="Minimum $" style="width: 138px;"><button class="btn btn-primary ms-sm-2" type="submit" style="width: 95.9625px;height: 38.6px;background: rgb(124,118,187);margin: 0px 8px;margin-right: 8px;margin-left: 11px;padding: 6px 12px 6px 7px;padding-left: 7px;">Submit</button>
                            </div><input type="email" name="Maximum" placeholder="Maximum $$" style="width: 138px;"><button class="btn btn-primary ms-sm-2" type="submit" style="width: 95.9625px;height: 38.6px;background: rgb(124,118,187);margin: 0px 8px;margin-left: 11px;margin-right: 14px;padding: 6px 12px 6px 7px;padding-left: 8px;">Submit</button>
                            <div class="filter-item" style="margin-top: 14px;">
                                <h5><span style="color: rgb(124, 118, 187);">Duration</span></h5>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">1-3 Months</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">4-6 Months</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">12 Months</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">More than 1 year</label></div><a href="#">See More&nbsp;</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-bs-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button" style="color: rgb(0,0,0);background: rgba(124,118,187,0.58);">Filters<i class="icon-arrow-down filter-caret"></i></a>
                        <div class="collapse" id="filters">
                            <div class="filters">
                                <div class="filter-item" style="margin-top: 16px;">
                                    <h5><span style="color: rgb(124, 118, 187);">Roles</span></h5>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-10"><label class="form-check-label" for="formCheck-10">Information Technology &amp; Systems</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-11"><label class="form-check-label" for="formCheck-11">Cybersecurity</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-12"><label class="form-check-label" for="formCheck-12">Software Engineering &amp; Development</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-13"><label class="form-check-label" for="formCheck-13">Game Design &amp; Development</label></div>
                                </div><a href="#">See More&nbsp;&nbsp;</a>
                                <div class="filter-item" style="margin-top: 23px;">
                                    <h5><span style="color: rgb(124, 118, 187);">Course Name</span></h5>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-14"><label class="form-check-label" for="formCheck-14">Web Development Fundamentals</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-15"><label class="form-check-label" for="formCheck-15">Introduction to Computer Science</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-16"><label class="form-check-label" for="formCheck-16">Advanced-Data Science with Python</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Java</label></div><a href="#">See More&nbsp;</a>
                                </div>
                                <div class="filter-item" style="margin-top: 18px;margin-bottom: 19px;">
                                    <h5><span style="color: rgb(124, 118, 187);">Tution Fee</span></h5><input type="email" name="Minimum" placeholder="Minimum $" style="width: 138px;"><button class="btn btn-primary ms-sm-2" type="submit" style="width: 95.9625px;height: 38.6px;background: rgb(124,118,187);margin: 0px 8px;margin-right: 8px;margin-left: 11px;padding: 6px 12px 6px 7px;padding-left: 7px;">Submit</button>
                                </div><input type="email" name="Maximum" placeholder="Maximum $$" style="width: 138px;"><button class="btn btn-primary ms-sm-2" type="submit" style="width: 95.9625px;height: 38.6px;background: rgb(124,118,187);margin: 0px 8px;margin-left: 11px;margin-right: 14px;padding: 6px 12px 6px 7px;padding-left: 8px;">Submit</button>
                                <div class="filter-item" style="margin-top: 14px;">
                                    <h5><span style="color: rgb(124, 118, 187);">Duration</span></h5>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">1-3 Months</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">4-6 Months</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">12 Months</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">More than 1 year</label></div><a href="#">See More&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <section class="py-4 py-xl-5" style="padding-bottom: 76px;margin-top: -1px;">
                        <h1><span style="color: rgb(124, 118, 187);">Course Overview</span></h1>
                    </section>
                    <div class="card" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">Introduction to </span><span style="color: rgb(255, 135, 176);">Computer Science&nbsp;</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">These courses are designed for individuals with little to no prior experience in IT.</p>
                        </div>
                    </div>
                    <div class="card" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">Introduction to </span><span style="color: rgb(255, 135, 176);">Computer Science&nbsp;</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">These courses are designed for individuals with little to no prior experience in IT.</p>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="400" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">Introduction to </span><span style="color: rgb(255, 135, 176);">Computer Science</span><span style="color: rgb(124, 118, 187);">&nbsp;</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">These courses are designed for individuals with little to no prior experience in IT.</p>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="400" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">Introduction to </span><span style="color: rgb(255, 135, 176);">Computer Science</span><span style="color: rgb(124, 118, 187);">&nbsp;</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">These courses are designed for individuals with little to no prior experience in IT.</p>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="400" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">Introduction to </span><span style="color: rgb(255, 135, 176);">Computer Science&nbsp;</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">These courses are designed for individuals with little to no prior experience in IT.</p>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="400" style="margin-bottom: 15px;">
                        <div class="card-header" style="background: rgba(255,255,255,0);border-style: none;">
                            <h5 class="mb-0"><span style="color: rgb(124, 118, 187);">Introduction to </span><span style="color: rgb(255, 135, 176);">Computer Science</span><span style="color: rgb(124, 118, 187);">&nbsp;</span></h5>
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
</body>
</html>