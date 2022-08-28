<div class="side-bar-item course-information" id="jsInfoCourse">
    <div class="course-information-row">
        <div class="title">
            <i class="fa-solid fa-chalkboard-user"></i>
            {{ __('artribute.learners') }}
        </div>
        <p class="content">:&nbsp
            {{ $course->learners }}
        </p>
    </div>
    <div class="course-information-row">
        <div class="title">
            <i class="fa-solid fa-table-list"></i>
            {{ __('artribute.lessons') }}
        </div>
        <p class="content">:&nbsp
            {{ $course->lessons }}
        </p>
    </div>
    <div class="course-information-row">
        <div class="title">
            <i class="fa-solid fa-clock"></i>
            {{ __('artribute.times') }}
        </div>
        <p class="content">:&nbsp
            {{ $course->times }}
            ({{ __('artribute.hours') }})
        </p>
    </div>
    <div class="course-information-row">
        <div class="title">
            <i class="fa-solid fa-tag"></i>
            {{ __('artribute.tag') }}
        </div>
        <p class="content">:&nbsp
            @foreach ($tags as $tag)
                <a href="{{ route('courses.index', ['tags' => [$tag->id]]) }}" class="tag-link">#{{ $tag->name }}</a>
            @endforeach
        </p>
    </div>
    <div class="course-information-row">
        <div class="title">
            <i class="fa-solid fa-money-bill-1"></i>
            {{ __('artribute.price') }}
        </div>
        <p class="content">:&nbsp
            {{ $course->prices }}
        </p>
    </div>
    @if ($course->isJoined() && !$course->isFinished())
        <div class="course-information-row">
            <form action="{{ route('course-user.destroy', [$course->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE" />
                <button type="button" class="btn btn-primary leave-course button bg-danger shadow-none" data-toggle="modal"
                    data-target="#finishModel">
                    {{ __('artribute.finish') }}
                </button>

                <!-- Modal -->
                <div class="modal fade" id="finishModel" tabindex="-1" role="dialog"
                    aria-labelledby="finishModelLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="finishModelLabel">
                                    {{ __('message.notification') }}!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{ __('message.end_course') }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary bg-danger"
                                    data-dismiss="modal">{{ __('artribute.close') }}</button>
                                <button type="submit" class="btn btn-primary">{{ __('artribute.agree') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @elseif ($course->isFinished())
        <div class="course-information-row">
            <form action="{{ route('course-user.update', [$course->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT" />
                <button type="button" class="btn leave-course button" data-toggle="modal"
                    data-target="#rejoinModel">{{ __('artribute.reJoin') }}</button>

                <!-- Modal -->
                <div class="modal fade" id="rejoinModel" tabindex="-1" role="dialog"
                    aria-labelledby="rejoinModelLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="rejoinModelLabel">
                                    {{ __('message.notification') }}!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{ __('message.rejoin_course') }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary bg-danger"
                                    data-dismiss="modal">{{ __('artribute.close') }}</button>
                                <button type="submit" class="btn btn-primary">{{ __('artribute.agree') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif
</div>
