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