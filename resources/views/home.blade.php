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

            @for ($i = 0; $i < 3; $i++)
                @php
                    $course = $courses[$i];
                @endphp
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
                            <a href="#" class="btn btn-primary">{{ __('message.take_this_course') }}</a>
                        </div>
                    </div>
                </div>
            @endfor
    </section>

    <section class="container">
        <div class="list-top">
            <div class="list-title" id="title">Other courses</div>
        </div>
        <div class="row list-course">
            @for ($i = 3; $i < 6; $i++)
                @php
                    $course = $courses[$i];
                @endphp
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
                            <a href="#" class="btn btn-primary">{{ __('message.take_this_course') }}</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="list-bot">
            <p class="text">View All Our Courses<i class="fa-solid fa-arrow-right icon"></i></p>
        </div>
    </section>

    <section class="why-hapolearn">
        <img src="/images/why-laptop-mobile.png" alt="laptop" class="laptop-mobile">
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
                <img src="/images/why-laptop.png" alt="laptop" class="why-img" width="100%" />
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
                <div class="slider-item">
                    <div class="slider-message">
                        “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good
                        Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                    </div>
                    <div class="slider-user">
                        <img src="/images/user-avatar.png" alt="" class="user-avatar">
                        <div class="user-info">
                            <div class="user-name">Hoang Anh Nguyen</div>
                            <div class="user-language">PHP</div>
                            <div class="user-stars">
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-regular fa-star user-star-icon"></i>
                                <i class="fa-regular fa-star user-star-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-message">
                        “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good
                        Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                    </div>
                    <div class="slider-user">
                        <img src="/images/user-avatar.png" alt="avatar" class="user-avatar">
                        <div class="user-info">
                            <div class="user-name">Hoang Anh Nguyen</div>
                            <div class="user-language">PHP</div>
                            <div class="user-stars">
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-regular fa-star-half-stroke user-star-icon"></i>
                                <i class="fa-regular fa-star user-star-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-message">
                        “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good
                        Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                    </div>
                    <div class="slider-user">
                        <img src="/images/user-avatar.png" alt="avatar" class="user-avatar">
                        <div class="user-info">
                            <div class="user-name">Hoang Anh Nguyen</div>
                            <div class="user-language">PHP</div>
                            <div class="user-stars">
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-regular fa-star-half-stroke user-star-icon"></i>
                                <i class="fa-regular fa-star user-star-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-message">
                        “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good
                        Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                    </div>
                    <div class="slider-user">
                        <img src="/images/user-avatar.png" alt="avatar" class="user-avatar">
                        <div class="user-info">
                            <div class="user-name">Hoang Anh Nguyen</div>
                            <div class="user-language">PHP</div>
                            <div class="user-stars">
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-solid fa-star user-star-icon"></i>
                                <i class="fa-regular fa-star-half-stroke user-star-icon"></i>
                                <i class="fa-regular fa-star user-star-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="statistic-number">1,586</div>
                </div>
                <div class="statistic-item col-sm">
                    <div class="statistic-name">Lessons</div>
                    <div class="statistic-number">2,689</div>
                </div>
                <div class="statistic-item col-sm">
                    <div class="statistic-name">Learners</div>
                    <div class="statistic-number">16,882</div>
                </div>
            </div>
        </div>
    </section>
@endsection
