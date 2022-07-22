@extends('layouts.app')

@section('content')
    <div class="course-home container">
        <form method="" action="" class="course-filter">
            <div class="main">
                <div class="btn btn-filter">
                    <i class="fa-solid fa-sliders icon-filter"></i>
                    Filter
                </div>
                <div class="search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <i class="fa-solid fa-magnifying-glass icon-search"></i>
                </div>
                <div class="btn btn-search" type="submit">Tìm kiếm</div>
            </div>

            <div class="sub">
                <div class="title">Lọc theo</div>
                <div class="group">
                    <label for="radio-new" class="btn btn-active">Mới nhất</label>
                    <input id="radio-new" type="radio" name="btn" value="new">
                    <label for="radio-old" class="btn">Cũ nhất</label>
                    <input id="radio-old" checked type="radio" name="btn" value="old">

                    <div class="item select">
                        <div class="select-head">
                            <input type="text" name="" readonly value="Teacher">
                            <i class="icon fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="select-content">
                            <div class="select-item">Teacher</div>
                            <div class="select-item">Student</div>
                        </div>
                    </div>
                    <div class="item select">
                        <div class="select-head">
                            <input type="text" name="" readonly value="Số người học">
                            <i class="icon fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="select-content">
                            <div class="select-item">100 học viên</div>
                            <div class="select-item">200 học viên</div>
                            <div class="select-item">300 học viên</div>
                        </div>
                    </div>
                    <div class="item select">
                        <div class="select-head">
                            <input type="text" name="" readonly value="Thời gian học">
                            <i class="icon fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="select-content">
                            <div class="select-item">100 tiếng</div>
                            <div class="select-item">200 tiếng</div>
                            <div class="select-item">300 tiếng</div>
                        </div>
                    </div>
                    <div class="item select">
                        <div class="select-head">
                            <input type="text" name="" readonly value="Số bài học">
                            <i class="icon fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="select-content">
                            <div class="select-item">Tăng dần</div>
                            <div class="select-item">Giảm dần</div>
                        </div>
                    </div>
                    <div class="item select">
                        <div class="select-head">
                            <input type="text" name="" readonly value="Tags">
                            <i class="icon fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="select-content">
                            <div class="select-item">Tăng dần</div>
                            <div class="select-item">Giảm dần</div>
                        </div>
                    </div>
                    <div class="item select">
                        <div class="select-head">
                            <input type="text" name="" readonly value="Review">
                            <i class="icon fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="select-content">
                            <div class="select-item">5 sao</div>
                            <div class="select-item">4 sao</div>
                            <div class="select-item">3 sao</div>
                            <div class="select-item">2 sao</div>
                            <div class="select-item">1 sao</div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="course-list row">
            @foreach ($data as $course)
                <div class="col-md-6">
                    <div class="course-item">
                        <div class="course-main">
                            <div class="left">
                                <img src="{{ $course['image'] }}" alt="">
                            </div>
                            <div class="right">
                                <div class="course-name">{{ $course['name'] }}</div>
                                <div class="course-desciption">{{ $course['description'] }}</div>
                            </div>
                        </div>
                        <div class="course-button">
                            <button class="btn">More</button>
                        </div>
                        <div class="course-footer">
                            <div>
                                <div class="title">Learners</div>
                                <div class="number">{{ $course['learners'] }}</div>
                            </div>
                            <div>
                                <div class="title">Lessons</div>
                                <div class="number">{{ $course['lessons'] }}</div>
                            </div>
                            <div>
                                <div class="title">Times</div>
                                <div class="number">{{ $course['times'] }} (h)</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">
                        <i class="fa-solid fa-arrow-left-long"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item page-item-active"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">
                        <i class="fa-solid fa-arrow-right-long"></i></a></li>
            </ul>
        </nav>
    </div>
@endsection
