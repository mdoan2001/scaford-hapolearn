@extends('layouts.app')

@section('content')
    <div class="lesson-detail ">
        <div class="container">
            <div class="row">
                <div class="main col-lg-8 col-12">
                    <img src="{{ $lesson->image }}" alt="" class="course-img">
                    <div class="group" id="accordion">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $lesson->progress }}%;"
                                aria-valuenow="{{ $lesson->progress }}" aria-valuemin="0" aria-valuemax="100">
                                {{ $lesson->progress }}%</div>
                        </div>
                        <div class="group-title">
                            <div id="jsLinkDescription" data-toggle="collapse" class="collapsed title-link active"
                                data-target="#collapseDescription" aria-expanded="true" aria-controls="collapseDescription">
                                {{ __('artribute.description') }}
                            </div>
                            <div id="jsLinkProgram" data-toggle="collapse" class="collapsed title-link"
                                data-target="#collapseProgram" aria-expanded="false" aria-controls="collapseProgram">
                                {{ __('artribute.program') }}
                            </div>
                        </div>

                        <div class="collapse show descriptions group-item" data-parent="#accordion"
                            id="collapseDescription">
                            <div class="title">{{ __('artribute.description_lesson') }}</div>
                            <div class="content">{{ $lesson->description }}</div>
                            <div class="title">{{ __('artribute.requirement') }}</div>
                            <div class="content">{{ $lesson->requirement }}</div>
                            <div class="description-bottom">
                                <div class="tags-label">{{ __('artribute.tag') }}:</div>
                                <div class="tags">

                                    @foreach ($tags as $tag)
                                        <div class="tag">{{ $tag->name }}</div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <div class="collapse programs group-item" data-parent="#accordion" id="collapseProgram">
                            @include('lessons.programs')
                        </div>
                    </div>

                </div>
                <div class="side-bar col-lg-4 col-12">
                    @include('components.course-information');
                    @include('components.suggestion-course-bar');
                </div>
            </div>
        </div>
    </div>
@endsection
