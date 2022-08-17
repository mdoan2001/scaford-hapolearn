@extends('layouts.app')

@section('content')
    <div class="course-detail">
        <div class="container">
            <div class="row">
                <div class="main col-md-8 col-12">
                    <img id="myImg" src="{{ $course->image }}" alt="Snow" class="course-img my-img">
                    <!-- The Modal -->
                    <div id="myModal" class="my-modal">
                        <img class="my-modal-content" id="myModalImg">
                    </div>
                    <div class="group" id="accordion">
                        <div class="group-title">
                            <div id="jsLinkLesson" data-toggle="collapse" class="title-link active"
                                data-target="#collapseLesson" aria-expanded="true" aria-controls="collapseLesson">
                                {{ __('artribute.lesson') }}
                            </div>
                            <div id="jsLinkTeacher" data-toggle="collapse" class="collapsed title-link"
                                data-target="#collapseTeacher" aria-expanded="false" aria-controls="collapseTeacher">
                                {{ __('artribute.teacher') }}
                            </div>
                            <div id="jsLinkReview" data-toggle="collapse" class="collapsed title-link"
                                data-target="#collapseReview" aria-expanded="false" aria-controls="collapseReview">
                                {{ __('artribute.review') }}
                            </div>
                        </div>

                        <div class="collapse show lessons group-item" data-parent="#accordion" id="collapseLesson">
                            <div class="lessons-action">
                                <form action="{{ route('courses.show', [$course->id]) }}" method="GET" class="">
                                    <div class="lessons-search">
                                        <input type="text" name="keyword" placeholder="{{ __('artribute.search') }}...">
                                        <button type="submit"
                                            class="lessons-search-btn button">{{ __('artribute.search') }}</button>
                                    </div>
                                </form>

                                <form class="form-join" action="{{ route('course-user.store') }}" method="POST">
                                    @csrf
                                    @if ($course->isFinished())
                                        <div class="button lessons-join active">{{ __('artribute.done') }}</div>
                                    @else
                                        @if ($course->isJoined() &&
                                            auth()->user()->isTeacher())
                                            <div class="button lessons-join active">{{ __('artribute.teaching') }}</div>
                                        @elseif($course->isJoined() &&
                                            !auth()->user()->isTeacher())
                                            <div class="button lessons-join active">{{ __('artribute.learning') }}</div>
                                        @else
                                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                                            <button type="submit"
                                                class="button lessons-join">{{ __('artribute.joinCourse') }}</button>
                                        @endif
                                    @endif

                                </form>
                            </div>

                            @include('courses.lessons')

                        </div>

                        <div class="collapse teachers group-item" data-parent="#accordion" id="collapseTeacher">
                            <div class="teachers-title">{{ __('artribute.main_teacher') }}</div>

                            @foreach ($teachers as $teacher)
                                <div class="teacher">
                                    <div class="teacher-information">
                                        <img src="{{ asset($teacher->picture) }}" alt="" class="teacher-avatar">
                                        <div class="teacher-general">
                                            <div class="teacher-name">
                                                {{ $teacher->name }}
                                            </div>
                                            <div class="teacher-experience">
                                                {{ $teacher->experience }}</div>
                                            <div class="teacher-socials">
                                                <i class="teacher-social teacher-google fa-brands fa-google-plus-g"></i>
                                                <i class="teacher-social teacher-facebook fa-brands fa-facebook-f"></i>
                                                <i class="teacher-social teacher-slack fa-brands fa-slack"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teacher-about">{{ $teacher->about }}</div>
                                </div>
                            @endforeach

                        </div>

                        <div class="collapse reviews group-item" data-parent="#accordion" id="collapseReview">
                            <div class="reviews-total">{{ $reviews->count() }} {{ __('artribute.review') }}</div>
                            <div class="reviews-evaluate">
                                <div class="left">
                                    <div class="reviews-num">{{ $course->avg_stars }}</div>
                                    <div class="reviews-stars">
                                        @for ($i = 0; $i < floor($course->avg_stars); $i++)
                                            <i class="star-icon active fa-solid fa-star"></i>
                                        @endfor
                                        @for ($i = 0; $i < 5 - floor($course->avg_stars); $i++)
                                            <i class="star-icon fa-solid fa-star"></i>
                                        @endfor
                                    </div>
                                    <div class="reviews-rattings">{{ $reviews->count() }} {{ __('artribute.review') }}
                                    </div>
                                </div>

                                <div class="right">
                                    <div class="reviews-item @if ($course->five_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">5 {{ __('artribute.star') }}</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->five_stars }}</div>
                                    </div>
                                    <div class="reviews-item @if ($course->four_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">4 {{ __('artribute.star') }}</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->four_stars }}</div>
                                    </div>
                                    <div class="reviews-item @if ($course->three_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">3 {{ __('artribute.star') }}</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->three_stars }}</div>
                                    </div>
                                    <div class="reviews-item @if ($course->two_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">2 {{ __('artribute.star') }}</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->two_stars }}</div>
                                    </div>
                                    <div
                                        class="reviews-item @if ($course->one_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">1 {{ __('artribute.star') }}</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->one_stars }}</div>
                                    </div>
                                    <div
                                        class="reviews-item @if ($course->zero_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">0 {{ __('artribute.star') }}</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->zero_stars }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-all" id="showAllComments">
                                {{ __('artribute.show_all_review') }}
                                <i class="down-icon fa-solid fa-caret-right"></i>
                            </div>

                            @include('courses.review')

                        </div>
                    </div>

                </div>
                <div class="side-bar col-md-4 col-12">
                    <div class="side-bar-item course-description" id="jsDescriptionCourse">
                        <div class="title">{{ __('artribute.course_description') }}</div>
                        <p class="content">{{ $course->description }}</p>
                    </div>
                    @include('components.course-information');
                    @include('components.suggestion-course-bar');
                </div>
            </div>
        </div>
    </div>
@endsection
