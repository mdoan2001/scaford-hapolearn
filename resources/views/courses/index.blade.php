@extends('layouts.app')

@section('content')
    <div class="course-home container">
        <form method="GET" action="{{ route('course.index') }}" class="course-filter">
            @csrf
            <div class="main">
                <div class="btn btn-filter">
                    <i class="fa-solid fa-sliders icon-filter"></i>
                    Filter
                </div>
                <div class="search">
                    @if (isset($data['keyword']))
                        <input name="keyword" value="{{ $data['keyword'] }}" type="text" placeh older="Search..."
                            class="form-control">
                        <i class="fa-solid fa-magnifying-glass icon-search"></i>
                    @else
                        <input name="keyword" value="" type="text" placeh older="Search..." class="form-control">
                        <i class="fa-solid fa-magnifying-glass icon-search"></i>
                    @endif
                </div>
                <input type="submit" name="filter_submit" class="btn btn-search" value="Tìm kiếm">
            </div>

            <div class="sub">
                <div class="title">Lọc theo</div>
                <div class="group">

                    @if (isset($data['version']))
                        <label for="radio-new"
                            class="btn @if ($data['version'] == config('course.sort_descending')) {{ 'btn-active' }} @endif  ">Mới nhất</label>
                        <input id="radio-new" @if ($data['version'] == config('course.sort_descending')) {{ 'checked' }} @endif type="radio"
                            name="version" value="{{ config('course.sort_descending') }}">
                        <label for="radio-old" class="btn @if ($data['version'] == config('course.sort_ascending')) {{ 'btn-active' }} @endif">Cũ
                            nhất</label>
                        <input id="radio-old" @if ($data['version'] == config('course.sort_ascending')) {{ 'checked' }} @endif type="radio"
                            name="version" value="{{ config('course.sort_ascending') }}">
                    @else
                        <label for="radio-new" class="btn btn-active">Mới nhất</label>
                        <input id="radio-new" checked type="radio" name="version"
                            value="{{ config('course.sort_descending') }}">
                        <label for="radio-old" class="btn">Cũ nhất</label>
                        <input id="radio-old" type="radio" name="version" value="{{ config('course.sort_ascending') }}">
                    @endif

                    <select name="teacher" class="item select">
                        <option value="0" selected class="select-item">Teacher</option>

                        @if (isset($data['teacher']))
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}"
                                    @if ($data['teacher'] == $teacher->id) {{ 'selected' }} @endif class="select-item">
                                    {{ $teacher->full_name }}</option>
                            @endforeach
                        @else
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}" class="select-item">{{ $teacher->full_name }}</option>
                            @endforeach
                        @endif

                    </select>

                    <select name="user" class="item select">
                        @if (isset($data['user']))
                            <option value="0" class="select-item">Số người học</option>
                            <option @if ($data['user'] == config('course.sort_ascending')) {{ 'selected' }} @endif
                                value="{{ config('course.sort_ascending') }}" class="select-item">Tăng dần</option>
                            <option @if ($data['user'] == config('course.sort_descending')) {{ 'selected' }} @endif
                                value="{{ config('course.sort_descending') }}" class="select-item">Giảm dần</option>
                        @else
                            <option value="" selected class="select-item">Số người học</option>
                            <option value="{{ config('course.sort_ascending') }}" class="select-item">Tăng dần</option>
                            <option value="{{ config('course.sort_descending') }}" class="select-item">Giảm dần</option>
                        @endif
                    </select>

                    <select name="time" class="item select">
                        @if (isset($data['time']))
                            <option value="" class="select-item">Thời gian học</option>
                            <option @if ($data['time'] == config('course.sort_ascending')) {{ 'selected' }} @endif
                                value="{{ config('course.sort_ascending') }}" class="select-item">Tăng dần</option>
                            <option @if ($data['time'] == config('course.sort_descending')) {{ 'selected' }} @endif
                                value="{{ config('course.sort_descending') }}" class="select-item">Giảm dần</option>
                        @else
                            <option value="" selected class="select-item">Thời gian học</option>
                            <option value="{{ config('course.sort_ascending') }}" class="select-item">Tăng dần</option>
                            <option value="{{ config('course.sort_descending') }}" class="select-item">Giảm dần</option>
                        @endif
                    </select>

                    <select name="lesson_sort" class="item select">
                        @if (isset($data['lesson_sort']))
                            <option value="" class="select-item">Số bài học</option>
                            <option @if ($data['lesson_sort'] == config('course.sort_ascending')) {{ 'selected' }} @endif
                                value="{{ config('course.sort_ascending') }}" class="select-item">Tăng dần</option>
                            <option @if ($data['lesson_sort'] == config('course.sort_descending')) {{ 'selected' }} @endif
                                value="{{ config('course.sort_descending') }}" class="select-item">Giảm dần</option>
                        @else
                            <option value="" selected class="select-item">Số bài học</option>
                            <option value="{{ config('course.sort_ascending') }}" class="select-item">Tăng dần</option>
                            <option value="{{ config('course.sort_descending') }}" class="select-item">Giảm dần</option>
                        @endif
                    </select>

                    <select name="tag" class="item select">
                        <option value="" selected class="select-item">Tags</option>

                        @foreach ($tags as $tag)
                            @if (isset($data['tag']) && $tag->id == $data['tag'])
                                <option value="{{ $tag->id }}" selected class="select-item">{{ $tag->name }}
                                </option>
                            @else
                                <option value="{{ $tag->id }}" class="select-item">{{ $tag->name }}</option>
                            @endif
                        @endforeach

                    </select>

                    <select name="review" class="item select">
                        @if (isset($data['review']))
                            <option value="" class="select-item">Review</option>
                            <option @if ($data['review'] == config('course.sort_ascending')) {{ 'selected' }} @endif
                                value="{{ config('course.sort_ascending') }}" class="select-item">Tăng dần</option>
                            <option @if ($data['review'] == config('course.sort_descending')) {{ 'selected' }} @endif
                                value="{{ config('course.sort_descending') }}" class="select-item">Giảm dần</option>
                        @else
                            <option value="" selected class="select-item">Review</option>
                            <option value="{{ config('course.sort_ascending') }}" class="select-item">Tăng dần</option>
                            <option value="{{ config('course.sort_descending') }}" class="select-item">Giảm dần</option>
                        @endif
                    </select>

                </div>
            </div>
        </form>
        <div class="course-list row">
            @foreach ($courses as $course)
                <div class="col-md-6">
                    <div class="course-item">
                        <div class="course-main">
                            <div class="left">
                                <img src="{{ $course->image }}" alt="">
                            </div>
                            <div class="right">
                                <div class="course-name">{{ $course->name }}</div>
                                <div class="course-desciption">{{ $course->description }}</div>
                            </div>
                        </div>
                        <div class="course-button">
                            <button class="btn">More</button>
                        </div>
                        <div class="course-footer">
                            <div>
                                <div class="title">Learners</div>
                                <div class="number">{{ $course->learners }}</div>
                            </div>
                            <div>
                                <div class="title">Lessons</div>
                                <div class="number">{{ $course->lessons }}</div>
                            </div>
                            <div>
                                <div class="title">Times</div>
                                <div class="number">
                                    @if (empty($course->times))
                                        {{ '0' }}
                                    @else
                                        {{ $course->times }}
                                    @endif
                                    (h)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $courses->appends(request()->query())->links() }}
    </div>
@endsection
