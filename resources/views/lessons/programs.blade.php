<div class="title">{{ __('artribute.program') }}</div>
<div class="program-group">
    @foreach ($lesson->programs as $program)
        <form action="{{ route('program-user.store') }}" method="POST"
            class="js-program program @if ($lesson->isLearned()) {{ 'is-joined' }} @endif">
            @csrf
            <div class="program-content">
                <div class="program-category">
                    <i class="program-icon fa-solid {{ $program->classOfIcon }}"></i>
                    <div class="program-title">{{ $program->category }}</div>
                </div>
                <div class="program-name js-program-name @if ($program->isLearned()) {{ 'learned' }} @endif">
                    {{ $program->name }}</div>
            </div>
            <div class="program-btn">
                <input type="hidden" name="program_id" value="{{ $program->id }}">
                <button type="submit"
                    class="btn program-preview js-program-preview @if ($program->isLearned()) {{ 'learned' }} @endif">Preview</button>
            </div>
        </form>
    @endforeach
</div>
