@extends('layouts.app')

@section('content')
    <div class="course-detail">
        <div class="container">
            <div class="row">
                <div class="main col-md-8 col-12">
                    <img src="{{ $course->image }}" alt="" class="course-img">
                    <div class="group">
                        <div class="group-title">
                            <div class="title-link title-link active" id="js-link-lessons">Lessons</div>
                            <div class="title-link" id="js-link-teacher">Teacher</div>
                            <div class="title-link" id="js-link-reviews">Reviews</div>
                        </div>

                        <div class="lessons group-item active" id="js-lesson">
                            <div class="lessons-action">
                                <form action="{{ route('course.show', [$course->id]) }}" method="GET" class="">
                                    <div class="lessons-search">
                                        <input type="text" name="keyword" placeholder="Search...">
                                        <button type="submit" class="lessons-search-btn btn">Tìm kiếm</button>
                                    </div>
                                </form>

                                <form class="form-join" action="{{ route('course-user.store') }}" method="POST">
                                    @csrf
                                    @if ($course->joined)
                                        @if (Auth::user()->is_teacher)
                                            <div class="btn lessons-join active">Đang dạy</div>
                                        @else
                                            <div class="btn lessons-join active">Đang học</div>
                                        @endif
                                    @else
                                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                                        <button type="submit" class="btn lessons-join">Tham gia khóa học</button>
                                    @endif
                                </form>
                            </div>

                            @foreach ($lessons as $lesson)
                                <div class="lesson">
                                    <div class="lesson-content">
                                        <div class="lesson-num">{{ $lesson->order }} .</div>
                                        <div class="lesson-name">{{ $lesson->name }}</div>
                                    </div>
                                    <div class="btn lesson-btn">Learn</div>
                                </div>
                            @endforeach

                        </div>

                        <div class="teachers group-item" id="js-teacher">
                            <div class="teachers-title">Main teachers</div>

                            @foreach ($teachers as $teacher)
                                <div class="teacher">
                                    <div class="teacher-information">
                                        <img src="{{ $teacher->avatar }}" alt="" class="teacher-avatar">
                                        <div class="teacher-general">
                                            <div class="teacher-name">
                                                {{ $teacher->full_name }}
                                                @if (Auth::check() && Auth::user()->id == $teacher->id)
                                                    {{ '(You)' }}
                                                @endif
                                            </div>
                                            <div class="teacher-experience">
                                                {{ date('Y') - date('Y', strtotime($teacher->created_at)) }} Years
                                                Teacher</div>
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

                        <div class="reviews group-item" id="js-review">
                            <div class="reviews-total">{{ $reviews->count() }} Reviews</div>
                            <div class="reviews-evaluate">
                                <div class="left">
                                    <div class="reviews-num">{{ $course->avg_stars }}</div>
                                    <div class="reviews-stars">
                                        <i class="star-icon active fa-solid fa-star"></i>
                                        <i class="star-icon active fa-solid fa-star"></i>
                                        <i class="star-icon active fa-solid fa-star"></i>
                                        <i class="star-icon active fa-solid fa-star"></i>
                                        <i class="star-icon active fa-solid fa-star"></i>
                                    </div>
                                    <div class="reviews-rattings">{{ $reviews->count() }} Ratings</div>
                                </div>

                                <div class="right">
                                    <div class="reviews-item @if ($course->five_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">5 stars</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->five_stars }}</div>
                                    </div>
                                    <div class="reviews-item @if ($course->four_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">4 stars</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->four_stars }}</div>
                                    </div>
                                    <div class="reviews-item @if ($course->three_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">3 stars</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->three_stars }}</div>
                                    </div>
                                    <div class="reviews-item @if ($course->two_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">2 stars</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->two_stars }}</div>
                                    </div>
                                    <div class="reviews-item @if ($course->one_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">1 stars</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->one_stars }}</div>
                                    </div>
                                    <div class="reviews-item @if ($course->zero_stars > 0) {{ 'active' }} @endif">
                                        <div class="reviews-item-label">0 stars</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">{{ $course->zero_stars }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-all" id="showAllComments">
                                Show all reviews
                                <i class="down-icon fa-solid fa-caret-right"></i>
                            </div>
                            <div class="comments">

                                @foreach ($reviews as $review)
                                    <div class="comment" id="form-{{ $review->id }}">
                                        <div class="comment-user">
                                            <div class="left">
                                                <img src=" {{ $review->user->avatar }}" alt=""
                                                    class="user-avatar">
                                                <div class="user-name">
                                                    {{ $review->user->full_name }}
                                                    @if (Auth::check() && Auth::user()->id == $review->user->id)
                                                        {{ '(You)' }}
                                                    @endif
                                                </div>
                                                <div class="user-stars">

                                                    @for ($i = 0; $i < $review->star; $i++)
                                                        <i class="star-icon active fa-solid fa-star"></i>
                                                    @endfor

                                                    @for ($i = 0; $i < 5 - $review->star; $i++)
                                                        <i class="star-icon fa-solid fa-star"></i>
                                                    @endfor

                                                </div>
                                                <div class="user-time">{{ $review->created_at }}</div>
                                            </div>
                                            <form class="right" method="POST" action="{{ route('review.destroy', [$review->id]) }}">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE" />
                                                @if (Auth::check() && Auth::user()->id == $review->user->id)
                                                    <button type="submit" class="close">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                @endif
                                            </form>
                                        </div>
                                        <p class="comment-content">{{ $review->content }}</p>
                                        <div class="replies">
                                            @foreach ($review->replies as $reply)
                                                <div class="reply" id="form-30">

                                                    <div class="comment-user">
                                                        <div class="left">
                                                            <img src="{{ $reply->user->avatar }}" alt=""
                                                                class="user-avatar">
                                                            <div class="user-name">
                                                                {{ $reply->user->full_name }}
                                                                @if (Auth::check() && Auth::user()->id == $reply->user->id)
                                                                    {{ '(You)' }}
                                                                @endif
                                                            </div>
                                                            <div class="user-time">{{ $reply->created_at }}</div>
                                                        </div>
                                                        <form class="right" method="POST" action="{{ route('reply.destroy', [$reply->id]) }}">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            @if (Auth::check() && Auth::user()->id == $reply->user->id)
                                                                <button type="submit" class="close">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            @endif
                                                        </form>
                                                    </div>
                                                    <p class="comment-content">{{ $reply->content }} </p>
                                                </div>
                                            @endforeach
                                            <form method="POST" action="{{ route('reply.store') }}">
                                                @csrf
                                                <input type="hidden" name="review_id" value="{{ $review->id }}">
                                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                                <input type="text" name="content" class="reply-input" placeholder="Your comment..." required>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach

                                <form id="js-leave-review" class="leave-review" action="{{ route('review.store') }}"
                                    method="POST">
                                    @csrf
                                    <div class="leave-title">Leave a Review</div>
                                    <label class="leave-label" for="">Message</label>
                                    <textarea class="leave-input @error('comment') is-invalid @enderror" name="comment" id="" rows="5">{{ old('comment') }}</textarea>
                                    @error('comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="vote">
                                        <label for="" class="vote-label">Vote</label>
                                        <div class="vote-stars">
                                            @if (!empty(old('vote')))
                                                @php
                                                    $vote = old('vote') > 5 ? 5 : old('vote');
                                                    $vote = old('vote') < 1 ? 1 : old('vote');
                                                @endphp

                                                @for ($i = 0; $i < $vote; $i++)
                                                    <i class="js-vote-star star-icon fa-solid fa-star active"></i>
                                                @endfor

                                                @for ($i = 0; $i < 5 - $vote; $i++)
                                                    <i class="js-vote-star star-icon fa-solid fa-star"></i>
                                                @endfor
                                            @else
                                                <i class="js-vote-star star-icon fa-solid fa-star"></i>
                                                <i class="js-vote-star star-icon fa-solid fa-star"></i>
                                                <i class="js-vote-star star-icon fa-solid fa-star"></i>
                                                <i class="js-vote-star star-icon fa-solid fa-star"></i>
                                                <i class="js-vote-star star-icon fa-solid fa-star"></i>
                                            @endif

                                        </div>
                                        <input type="hidden" name="vote" value="{{ old('vote') }}" id="inputVote"
                                            class="@error('vote') is-invalid @enderror">
                                        <p>(star)</p>
                                        @error('vote')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                    <button type="submit" id="js-leave-review-btn"
                                        class="btn @if (!$course->joined) {{ 'done' }} @endif">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="side-bar col-md-4 col-12">
                    <div class="side-bar-item course-description" id="js-description-course">
                        <div class="title">Descriptions course</div>
                        <p class="content">{{ $course->description }}</p>
                    </div>
                    <div class="side-bar-item course-information" id="js-info-course">
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
                                    <a href="#" class="tag-link">#{{ $tag->name }}</a>
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
                        <div class="course-information-row">
                            <form action="{{ route('course-user.destroy', [$course->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="btn leave-course">Kết thúc khóa học</button>
                            </form>
                        </div>
                    </div>

                    <div class="side-bar-item other-course" id="js-other-course">
                        <div class="title">Other Courses</div>
                        <div class="content">

                            @php $index = 1; @endphp
                            @foreach ($others as $other)
                                <div class="other-course-row">
                                    <div class="num">{{ $index }}. </div>
                                    <div class="name">{{ $other->name }}</div>
                                </div>
                                @php $index++; @endphp
                            @endforeach

                            <div class="other-course-row">
                                <a href="{{ route('course.index') }}" class="btn view-all">View all ours courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
