@foreach ($lessons as $lesson)
    <form action="{{ route('lesson-user.store') }}" method="POST"
        class="js-lesson lesson @if ($course->isjoined() && !$course->isFinished()) {{ 'is-joined' }} @endif">
        @csrf
        <div class="lesson-content">
            <div class="lesson-num">{{ $lesson->order }} .</div>
            <div class="lesson-name js-lesson-name @if ($lesson->isLearned()) {{ 'learned' }} @endif">
                {{ $lesson->name }}</div>
        </div>
        <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">
        @if ($lesson->isLearned())
            <button type="submit" class="btn lesson-btn js-lesson-btn learned">{{ __('artribute.relearn') }}</button>
        @else
            <button type="submit" class="btn lesson-btn js-lesson-btn">{{ __('artribute.learn') }}</button>
        @endif
    </form>
@endforeach

{{ $lessons->appends(request()->query())->links() }}
