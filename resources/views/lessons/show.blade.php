@extends('layouts.app')

@section('content')
    <div class="lesson-detail ">
        <div class="container">
            <div class="row">
                <div class="main col-lg-8 col-12">
                    <img src="{{ $lesson->image }}" alt="" class="course-img">
                    <div class="group" id="accordion">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $lesson->progress }}%;"
                                aria-valuenow="{{ $lesson->progress }}" aria-valuemin="0" aria-valuemax="100">
                                {{ $lesson->progress }}%</div>
                        </div>
                        <div class="group-title">
                            <div id="jsLinkDescription" data-toggle="collapse" class="collapsed title-link active"
                                data-target="#collapseDescription" aria-expanded="true" aria-controls="collapseDescription">
                                Descriptions
                            </div>
                            <div id="jsLinkProgram" data-toggle="collapse" class="collapsed title-link"
                                data-target="#collapseProgram" aria-expanded="false" aria-controls="collapseProgram">
                                Program
                            </div>
                        </div>

                        <div class="collapse show descriptions group-item" data-parent="#accordion"
                            id="collapseDescription">
                            <div class="title">Descriptions lesson</div>
                            <div class="content">{{ $lesson->description }}</div>
                            <div class="title">Requirements</div>
                            <div class="content">{{ $lesson->requirement }}</div>
                            <div class="description-bottom">
                                <div class="tags-label">Tag:</div>
                                <div class="tags">

                                    @foreach ($tags as $tag)
                                        <div class="tag">{{ $tag->name }}</div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <div class="collapse programs group-item" data-parent="#accordion" id="collapseProgram">
                            <div class="title">Program</div>
                            <div class="program-group">
                                @foreach ($lesson->codes as $code)
                                    <form action="{{ route('program-user.store') }}" method="POST"
                                        class="js-program program @if ($lesson->isjoined) {{ 'is-joined' }} @endif">
                                        @csrf
                                        <div class="program-content">
                                            <div class="program-category">
                                                <i class="program-icon fa-solid fa-file-word"></i>
                                                <div class="program-title">Lesson</div>
                                            </div>
                                            <div
                                                class="program-name js-program-name @if ($code->isLearned) {{ 'learned' }} @endif">
                                                {{ $code->name }}</div>
                                        </div>
                                        <div class="program-btn">
                                            <input type="hidden" name="program_id" value="{{ $code->id }}">
                                            <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">
                                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                                            <button type="submit"
                                                class="btn program-preview js-program-preview @if ($code->isLearned) {{ 'learned' }} @endif">Preview</button>
                                        </div>
                                    </form>
                                @endforeach

                                @foreach ($lesson->slides as $slide)
                                    <form action="{{ route('program-user.store') }}" method="POST"
                                        class="js-program program @if ($lesson->isjoined) {{ 'is-joined' }} @endif">
                                        @csrf
                                        <div class="program-content">
                                            <div class="program-category">
                                                <i class="program-icon fa-solid fa-file-pdf"></i>
                                                <div class="program-title">PDF</div>
                                            </div>
                                            <div
                                                class="program-name js-program-name @if ($slide->isLearned) {{ 'learned' }} @endif">
                                                {{ $slide->name }}</div>
                                        </div>
                                        <div class="program-btn">
                                            <input type="hidden" name="program_id" value="{{ $slide->id }}">
                                            <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">
                                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                                            <button type="submit"
                                                class="btn program-preview js-program-preview @if ($slide->isLearned) {{ 'learned' }} @endif">Preview</button>
                                        </div>
                                    </form>
                                @endforeach

                                @foreach ($lesson->videos as $video)
                                    <form action="{{ route('program-user.store') }}" method="POST"
                                        class="js-program program @if ($lesson->isjoined) {{ 'is-joined' }} @endif">
                                        @csrf
                                        <div class="program-content">
                                            <div class="program-category">
                                                <i class="program-icon fa-solid fa-file-audio"></i>
                                                <div class="program-title">Video</div>
                                            </div>
                                            <div
                                                class="program-name js-program-name @if ($video->isLearned) {{ 'learned' }} @endif ">
                                                {{ $video->name }}</div>
                                        </div>
                                        <div class="program-btn">
                                            <input type="hidden" name="program_id" value="{{ $video->id }}">
                                            <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">
                                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                                            <button type="submit"
                                                class="btn program-preview js-program-preview @if ($video->isLearned) {{ 'learned' }} @endif">Preview</button>
                                        </div>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
                <div class="side-bar col-lg-4 col-12">
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
                                {{ $course->times }}
                                (hours)
                            </p>
                        </div>
                        <div class="course-information-row">
                            <div class="title">
                                <i class="fa-solid fa-tag"></i>
                                Tags
                            </div>
                            <p class="content">:&nbsp
                                @foreach ($tags as $tag)
                                    <a href="{{ route('courses.index', ['tags' => [$tag->id]]) }}"
                                        class="tag-link">#{{ $tag->name }}</a>
                                @endforeach
                            </p>
                        </div>
                        <div class="course-information-row">
                            <div class="title">
                                <i class="fa-solid fa-money-bill-1"></i>
                                Price
                            </div>
                            <p class="content">:&nbsp
                                {{ $course->prices }}
                            </p>
                        </div>
                        @if ($course->isJoined && !$course->isFinished)
                            <div class="course-information-row">
                                <form action="{{ route('course-user.destroy', [$course->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn leave-course">Kết thúc khóa học</button>
                                </form>
                            </div>
                        @elseif ($course->isFinished)
                            <div class="course-information-row">
                                <form action="{{ route('course-user.update', [$course->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT" />
                                    <button class="btn leave-course">Tham gia lại</button>
                                </form>
                            </div>
                        @endif
                    </div>
                    @include('components.suggestion_course_bar');
                </div>
            </div>
        </div>
    </div>
@endsection
