<div class="side-bar-item other-course" id="jsOtherCourse">
    <div class="title">Other Courses</div>
    <div class="content">

        @php $index = 1; @endphp
        @foreach ($others as $other)
            <a href="{{ route('courses.show', [$other->id]) }}" class="other-course-row">
                <div class="num">{{ $index }}. </div>
                <div class="name">{{ $other->name }}</div>
            </a>
            @php $index++; @endphp
        @endforeach

        <div class="other-course-row">
            <a href="{{ route('courses.index') }}" class="btn view-all">View all ours courses</a>
        </div>
    </div>
</div>
