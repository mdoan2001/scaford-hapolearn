<div class="comments" id="comments">

    @foreach ($reviews as $review)
        <div class="comment" id="form-{{ $review->id }}">
            <div class="comment-user">
                <div class="left">
                    <img src=" {{ asset($review->user->avatar) }}" alt="" class="user-avatar">
                    <div class="user-name">
                        {{ $review->user->name }}
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
                <div class="edit-select">
                    <div class="edit-select-item">
                        <button class="edit-select-item fa-solid fa-reply-all js-btn-review"></button>
                    </div>
                    @if ($review->isYourReview())
                        <div class="edit-select-item">
                            <button class="edit-select-item fa-solid fa-marker js-btn-edit-review"></button>
                        </div>
                        <form action="{{ route('reviews.destroy', [$review->id]) }}" method="POST"
                            class="edit-select-item">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="fa-solid fa-xmark js-btn-delete-review"></button>
                        </form>
                    @endif
                </div>
            </div>
            <p class="comment-content">{{ $review->content }}</p>
            <form class="form-edit-comment" action="{{ route('reviews.update', [$review->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="course_id" value="{{ $course->id }}}}">
                <textarea class="edit-comment" name="comment" id="" cols="30" rows="3"></textarea>
                <button type="submit" class="edit-submit fa-solid fa-paper-plane"></button>
            </form>
            <div class="replies">
                @foreach ($review->replies as $reply)
                    <div class="reply" id="form-30">

                        <div class="comment-user">
                            <div class="left">
                                <img src="{{ asset($reply->user->avatar) }}" alt="" class="user-avatar">
                                <div class="user-name">
                                    {{ $reply->user->name }}
                                </div>
                                <div class="user-time">{{ $reply->created_at }}</div>
                            </div>
                            <div class="edit-select">
                                <div class="edit-select-item">
                                    <button class="edit-select-item fa-solid fa-reply-all js-btn-review"></button>
                                </div>
                                @if ($reply->isYourReply())
                                    <div class="edit-select-item">
                                        <button class="edit-select-item fa-solid fa-marker js-btn-edit-reply"></button>
                                    </div>
                                    <form action="{{ route('replies.destroy', [$reply->id]) }}" method="POST"
                                        class="edit-select-item">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="fa-solid fa-xmark js-btn-delete-reply"></button>
                                    </form>
                                @endif
                            </div>
                        </div>
                        <p class="reply-content">{{ $reply->content }} </p>
                        <form class="form-edit-reply" action="{{ route('replies.update', [$reply->id]) }}"
                            method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                            <textarea class="edit-reply" name="comment" id="" cols="30" rows="2"></textarea>
                            <button type="submit" class="edit-submit fa-solid fa-paper-plane"></button>
                        </form>
                    </div>
                @endforeach
                <form class="form-reply" method="POST" action="{{ route('replies.store') }}">
                    @csrf
                    <input type="hidden" name="review_id" value="{{ $review->id }}">
                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                    <div>
                        <input type="text" name="content" class="reply-input" placeholder="Your comment..." required>
                        <button type="submit" class="reply-submit fa-solid fa-paper-plane"></button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
    @if ($course->isJoined && !$course->isReviewed)
        <form id="jsLeaveReview" class="leave-review" action="{{ route('reviews.store') }}" method="POST">
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
            <button type="submit" id="jsLeaveReviewBtn" class="btn">Send</button>
        </form>
    @endif
</div>
