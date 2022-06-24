@extends('layouts.app')

@section('content')

<section class="banner">
    <div class="bg-banner"></div>
    <div class="content">
        <div class="tittle">
            Learn AnyTime, Anywhere <br> <span>at HapoLearn <img src="{{ asset('images/icon.png') }}" alt="" class="tittle-img"> !</span>
        </div>
        <div class="text">
            Interactive, "on-the-go" <br> practice, peer suport.
        </div>
        <button class="button">Start Learning Now!</button>
    </div>
</section>

<section class="container">
    <div class="row list-course">
        <div class="course col-md col-sm-12 card">
            <div class="img bg-dark-blue">
                <img class="card-img" src="{{ asset('images/course_1.png') }}" alt="Card image">
            </div>
            <div class="card-body">
                <div class="card-top">
                    <div class="card-title">HTML/CSS/js Tutorial</div>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                </div>
                <div class="card-bot">
                    <a href="#" class="btn btn-primary">Take This Course</a>
                </div>
            </div>
        </div>
        <div class="course col-md col-sm-12 card">
            <div class="img bg-red">
                <img class="card-img" src="{{ asset('images/course_2.png') }}" alt="Card image">
            </div>
            <div class="card-body">
                <div class="card-top">
                    <div class="card-title">Laravel Tutorial</div>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                </div>
                <div class="card-bot">
                    <a href="#" class="btn btn-primary">Take This Course</a>
                </div>
            </div>
        </div>
        <div class="course col-md col-sm-12 card">
            <div class="img bg-violet">
                <img class="card-img" src="{{ asset('images/course_3.png') }}" alt="Card image">
            </div>
            <div class="card-body">
                <div class="card-top">
                    <div class="card-title">HTML/CSS/js Tutorial</div>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                </div>
                <div class="card-bot">
                    <a href="#" class="btn btn-primary">Take This Course</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="list-top">
        <div class="list-title" id="title">Other courses</div>
    </div>
    <div class="row list-course">
        <div class="course col-md col-sm-12 card">
            <div class="img bg-info">
                <img class="card-img" src="{{ asset('images/course_4.png') }}" alt="Card image">
            </div>
            <div class="card-body">
                <div class="card-top">
                    <div class="card-title">CSS Tutorial</div>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                </div>
                <div class="card-bot">
                    <a href="#" class="btn btn-primary">Take This Course</a>
                </div>
            </div>
        </div>
        <div class="course col-md col-sm-12 card">
            <div class="img bg-red">
                <img class="card-img" src="{{ asset('images/course_5.png') }}" alt="Card image">
            </div>
            <div class="card-body">
                <div class="card-top">
                    <div class="card-title">Ruby on rails Tutorial</div>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                </div>
                <div class="card-bot">
                    <a href="#" class="btn btn-primary">Take This Course</a>
                </div>
            </div>
        </div>
        <div class="course col-md col-sm-12 card">
            <div class="img bg-primary">
                <img class="card-img" src="{{ asset('images/course_6.png') }}" alt="Card image">
            </div>
            <div class="card-body">
                <div class="card-top">
                    <div class="card-title">Java Tutorial</div>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                </div>
                <div class="card-bot">
                    <a href="#" class="btn btn-primary">Take This Course</a>
                </div>
            </div>
        </div>
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
        <div class="col-8 col-sm-7 col-12 why-des">
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
        <div class="des">What other students turned professionals have to say about us after learning with us and reaching their goals</div>
    </div>
    <div class="container">
        <div class="slider">
            <div class="slider-item">
                <div class="slider-message">
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
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
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
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
                            <i class="fa-regular fa-star-half-stroke user-star-icon"></i>
                            <i class="fa-regular fa-star user-star-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-message">
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
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
                            <i class="fa-regular fa-star-half-stroke user-star-icon"></i>
                            <i class="fa-regular fa-star user-star-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-message">
                    “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
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
                            <i class="fa-regular fa-star-half-stroke user-star-icon"></i>
                            <i class="fa-regular fa-star user-star-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
