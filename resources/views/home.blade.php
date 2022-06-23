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
                    <h4 class="card-title">HTML/CSS/js Tutorial</h4>
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
                    <h4 class="card-title">Laravel Tutorial</h4>
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
                        <h4 class="card-title">HTML/CSS/js Tutorial</h4>
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
                    <h4 class="card-title">CSS Tutorial</h4>
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
                    <h4 class="card-title">Ruby on rails Tutorial</h4>
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
                        <h4 class="card-title">Java Tutorial</h4>
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

<section class="container-fluid why-hapolearn">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="why-title">Why Hapolearn?</div>
                <div class="why-item">
                    <i class="icon-check fa-solid fa-circle-check"></i>
                    <p class="white-text">Interactive lessons, "on-the-go" practice, peer support.</p>
                </div>
                <div class="why-item">
                    <i class="icon-check fa-solid fa-circle-check"></i>
                    <p class="white-text">Interactive lessons, "on-the-go" practice, peer support.</p>
                </div>
                <div class="why-item">
                    <i class="icon-check fa-solid fa-circle-check"></i>
                    <p class="white-text">Interactive lessons, "on-the-go" practice, peer support.</p>
                </div>
                <div class="why-item">
                    <i class="icon-check fa-solid fa-circle-check"></i>
                    <p class="white-text">Interactive lessons, "on-the-go" practice, peer support.</p>
                </div>
                <div class="why-item">
                    <i class="icon-check fa-solid fa-circle-check"></i>
                    <p class="white-text">Interactive lessons, "on-the-go" practice, peer support.</p>
                </div>
            </div>
            <div class="col-sm">
            <img src="/images/why-laptop.png" alt="may tinh" class="why-img" width="100%" />
            </div>
        </div>
    </div>
</section>

@endsection
