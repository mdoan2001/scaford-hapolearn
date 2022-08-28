@extends('layouts.app')

@section('content')
    <div class="profile-layout container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact">
                    <div class="contact-avatar">
                        <img id="userAvatar" src="{{ asset(auth()->user()->picture) }}" alt="" class="contact-img">
                        <i id="jsUploadBtn" class="fa-solid fa-camera"></i>
                    </div>
                    <div class="contact-name">
                        <div class="name">{{ auth()->user()->full_name }}</div>
                        <div class="gmail">{{ auth()->user()->email }}</div>
                    </div>
                    <div class="contact-user">
                        <div class="item">
                            <i class="icon icon-birthday fa-solid fa-cake-candles"></i>
                            <div class="item-content">{{ auth()->user()->date }}</div>
                        </div>
                        <div class="item">
                            <i class="icon icon-phone fa-solid fa-phone"></i>
                            <div class="item-content">{{ auth()->user()->telephone }}</div>
                        </div>
                        <div class="item">
                            <i class="icon icon-address fa-solid fa-house"></i>
                            <div class="item-content">{{ auth()->user()->address }}</div>
                        </div>
                    </div>
                    <div class="contact-about">{{ auth()->user()->about }}</div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="edit-profile">
                    <div class="title">{{ __('artribute.my_course') }}</div>
                    <div class="courses">
                        @foreach ($courses as $course)
                            <a href="{{ route('courses.show', [$course->id]) }}" class="course">
                                <div class="div-img">
                                    <img src="{{ $course->image }}" alt="" class="course-img">
                                </div>
                                <div class="course-name">{{ $course->title }}</div>
                            </a>
                        @endforeach

                        <a href="{{ route('courses.index') }}" class="course add-course">
                            <div class="div-img">
                                <div class="course-img">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                            </div>
                            <div class="course-name">{{ __('artribute.add_course') }}</div>
                        </a>
                    </div>

                    <div class="title">{{ __('artribute.edit_profile') }}</div>
                    <form action="{{ route('profile.update', [auth()->id()]) }}" method="POST" class="form-profile"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="name">{{ __('artribute.full_name') }}: </label>
                                    <input id="name" class="@error('full_name') is-invalid @enderror" name="full_name"
                                        type="text" placeholder="{{ __('artribute.your_name') }}..."
                                        value="{{ old('full_name') }}">
                                    @error('full_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="email">Email: </label>
                                    <input id="email" class="@error('email') is-invalid @enderror" name="email"
                                        type="email" placeholder="{{ __('artribute.your_email') }}..."
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="birthday">{{ __('artribute.birthday') }}: </label>
                                    <input id="birthday" class="@error('birthday') is-invalid @enderror" name="birthday"
                                        type="date" placeholder="dd/mm/yyyy" value={{ old('birthday') }}>
                                    @error('birthday')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="telephone">{{ __('artribute.phone') }}: </label>
                                    <input id="telephone" class="@error('telephone') is-invalid @enderror" name="telephone"
                                        type="text" placeholder="{{ __('artribute.your_phone') }}..."
                                        value={{ old('telephone') }}>
                                    @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="address">{{ __('artribute.address') }}: </label>
                                    <input id="address" class="@error('address') is-invalid @enderror" name="address"
                                        type="text" placeholder="{{ __('artribute.your_address') }}..."
                                        value={{ old('address') }}>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="about">{{ __('artribute.about') }}: </label>
                                    <textarea id="about" class="@error('about') is-invalid @enderror" name="about" id="" cols="30"
                                        rows="6" placeholder="{{ __('artribute.your_about') }}...">{{ old('about') }}</textarea>
                                    @error('about')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <input id="jsUploadInput" class="upload-avatar" type="file" name="image"
                                        id="photo" accept="image/*"
                                        class=" form-control-file @error('image') is-invalid @enderror">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 profile-submit">
                                <button type="button" class="btn btn-primary leave-course" data-toggle="modal"
                                    data-target="#exampleModal">
                                    {{ __('artribute.save') }}
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="exampleModalLabel">
                                                    {{ __('message.notification') }}!</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{ __('message.change_content') }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary bg-danger"
                                                    data-dismiss="modal">{{ __('artribute.close') }}</button>
                                                <button type="submit"
                                                    class="btn btn-primary">{{ __('artribute.agree') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
