<div class="side-bar-item course-description" id="jsDescriptionCourse">
    <div class="title">Descriptions course</div>
    <p class="content">{{ $course->description }}</p>
</div>
<div class="side-bar-item course-information" id="jsInfoCourse">
    <div class="course-information-row">
        <div class="title">
            <i class="fa-solid fa-chalkboard-user"></i>
            Leaners
        </div>
        <p class="content">:&nbsp
            {{ $course->learners }}
        </p>
    </div>
    <div class="course-information-row">
        <div class="title">
            <i class="fa-solid fa-table-list"></i>
            Lessons
        </div>
        <p class="content">:&nbsp
            {{ $course->lessons }}
        </p>
    </div>
    <div class="course-information-row">
        <div class="title">
            <i class="fa-solid fa-clock"></i>
            Times
        </div>
        <p class="content">:&nbsp
            @if (empty($course->times))
                {{ '0' }}
            @else
                {{ $course->times }}
            @endif
            (h)
        </p>
    </div>
    <div class="course-information-row">
        <div class="title">
            <i class="fa-solid fa-tag"></i>
            Tags
        </div>
        <p class="content">:&nbsp
            @foreach ($tags as $tag)
                <a href="{{ route('courses.index', ['tags' => [$tag->id]]) }}" class="tag-link">#{{ $tag->name }}</a>
            @endforeach
        </p>
    </div>
    <div class="course-information-row">
        <div class="title">
            <i class="fa-solid fa-money-bill-1"></i>
            Price
        </div>
        <p class="content">:&nbsp
            @if ($course->price == 0)
                {{ 'FREE' }}
            @else
                {{ number_format($course->price) }}
            @endif
        </p>
    </div>
    @if ($course->isJoined)
        <div class="course-information-row">
            <form action="{{ route('course-user.destroy', [$course->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE" />
                <button class="btn leave-course">Kết thúc khóa học</button>
            </form>
        </div>
    @endif
</div>

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
