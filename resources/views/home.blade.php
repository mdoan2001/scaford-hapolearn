@extends('layouts.app')

@section('content')
    <section class="banner">
        <div class="bg-banner"></div>
        <div class="content">
            <div class="tittle">
                Learn AnyTime, Anywhere <br> <span>at HapoLearn <img src="{{ asset('images/icon.png') }}" alt=""
                        class="tittle-img"> !</span>
            </div>
            <div class="text">
                Interactive, "on-the-go" <br> practice, peer suport.
            </div>
            <button class="button">Start Learning Now!</button>
        </div>
    </section>

    <section class="container">
        <div class="row list-course">

            @foreach ($mainCourses as $course)
                <div class="course col-md col-sm-12 card">
                    <div class="img bg-dark-blue">
                        <img class="card-img" src="{{ $course->image }}" alt="Card image">
                    </div>
                    <div class="card-body">
                        <div class="card-top">
                            <div class="card-title">{{ $course->name }}</div>
                            <p class="card-text">{{ $course->description }}</p>
                        </div>
                        <div class="card-bot">
                            <a href="{{ route('course.show', [$course->id]) }}"
                                class="btn btn-primary">{{ __('artribute.take_this_course') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
    </section>

    <section class="container">
        <div class="list-top">
            <div class="list-title" id="title">Other courses</div>
        </div>
        <div class="row list-course">
            @foreach ($otherCourses as $course)
                <div class="course col-md col-sm-12 card">
                    <div class="img bg-dark-blue">
                        <img class="card-img" src="{{ $course->image }}" alt="Card image">
                    </div>
                    <div class="card-body">
                        <div class="card-top">
                            <div class="card-title">{{ $course->name }}</div>
                            <p class="card-text">{{ $course->description }}</p>
                        </div>
                        <div class="card-bot">
                            <a href="{{ route('course.show', [$course->id]) }}"
                                class="btn btn-primary">{{ __('artribute.take_this_course') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="list-bot">
            <a href="{{ route('course.index') }}" class="text">View All Our Courses<i
                    class="fa-solid fa-arrow-right icon"></i></a>
        </div>
    </section>

    <section class="why-hapolearn">
        <img src="{{ asset('images/why-laptop-mobile.png') }}" alt="laptop" class="laptop-mobile">
        <div class="row">
            <div class="col-12 title title">Why Hapolearn?</div>
        </div>
        <div class="row">
            <div class="col-8 col-sm-7 col-12 why-description">
                <div class="why-title">Why Hapolearn?</div>
                <div class="why-item">
                    <i class="icon-check fa-solid fa-circle-check"></i>
                    <p class="why-text">Interactive lessons, "on-the-go" practice, peer support.</p>
                </div>
                <div class="why-item">
                    <i class="icon-check fa-solid fa-circle-check"></i>
                    <p class="why-text">Interactive lessons, "on-the-go" practice, peer support.</p>
                </div>
                <div class="why-item">
                    <i class="icon-check fa-solid fa-circle-check"></i>
                    <p class="why-text">Interactive lessons, "on-the-go" practice, peer support.</p>
                </div>
                <div class="why-item">
                    <i class="icon-check fa-solid fa-circle-check"></i>
                    <p class="why-text">Interactive lessons, "on-the-go" practice, peer support.</p>
                </div>
                <div class="why-item">
                    <i class="icon-check fa-solid fa-circle-check"></i>
                    <p class="why-text">Interactive lessons, "on-the-go" practice, peer support.</p>
                </div>
            </div>
            <div class="col-4 col-sm-5 col-12">
                <img src="{{ asset('images/why-laptop.png') }}" alt="laptop" class="why-img" width="100%" />
            </div>
        </div>
    </section>

    <section class="feedback">
        <div class="feedback-top">
            <div class="title" id="title">Feedback</div>
            <div class="description">What other students turned professionals have to say about us after learning with us
                and reaching their goals</div>
        </div>
        <div class="container">
            <div class="slider">
                @foreach ($reviews as $review)
                    <div class="slider-item">
                        <div class="slider-message">
                            <p>
                                {{ $review->content }}
                            </p>
                        </div>
                        <div class="slider-user">
                            @php
                                $avatar = is_null($review->user->avatar) ? '/images/user-avatar.png' : $review->user->avatar;
                            @endphp
                            <img src="{{ $avatar }}" alt="anh" class="user-avatar">
                            <div class="user-info">
                                <div class="user-name">{{ $review->user->full_name }}</div>
                                <div class="user-language">{{ $review->course->name }}</div>
                                <div class="user-stars">

                                    @php
                                        $stars = $review->star;
                                    @endphp

                                    @for ($i = 0; $i < $stars; $i++)
                                        <i class="fa-solid fa-star user-star-icon"></i>
                                    @endfor

                                    @for ($i = 0; $i < 5 - $stars; $i++)
                                        <i class="fa-regular fa-star user-star-icon"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="become">
        <div class="become-group">
            <div class="become-title">Become a member of our <br /> growing community!</div>
            <button class="become-btn">Start Learning Now!</button>
        </div>
    </section>

    <section class="statistic">
        <div class="statistic-top">
            <div class="title" id="title">Statistic</div>
        </div>
        <div class="statistic-main">
            <div class="row">
                <div class="statistic-item col-sm">
                    <div class="statistic-name">Courses</div>
                    <div class="statistic-number">{{ $countCourse }}</div>
                </div>
                <div class="statistic-item col-sm">
                    <div class="statistic-name">Lessons</div>
                    <div class="statistic-number">{{ $countLession }}</div>
                </div>
                <div class="statistic-item col-sm">
                    <div class="statistic-name">Learners</div>
                    <div class="statistic-number">{{ $learners }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection
