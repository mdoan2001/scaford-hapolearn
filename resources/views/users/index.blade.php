@extends('layouts.app')

@section('content')
    <div class="profile-layout container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact">
                    <div class="contact-avatar">
                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="" class="contact-img">
                        <i id="jsUploadBtn" class="fa-solid fa-camera"></i>
                    </div>
                    <div class="contact-name">
                        <div class="name">{{ $user->full_name }}</div>
                        <div class="gmail">{{ $user->email }}</div>
                    </div>
                    <div class="contact-user">
                        <div class="item">
                            <i class="icon icon-birthday fa-solid fa-cake-candles"></i>
                            <div class="item-content">{{ $user->date }}</div>
                        </div>
                        <div class="item">
                            <i class="icon icon-phone fa-solid fa-phone"></i>
                            <div class="item-content">{{ $user->telephone }}</div>
                        </div>
                        <div class="item">
                            <i class="icon icon-address fa-solid fa-house"></i>
                            <div class="item-content">{{ $user->address }}</div>
                        </div>
                    </div>
                    <div class="contact-about">{{ $user->about }}</div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="edit-profile">
                    <div class="title">My courses</div>
                    <div class="courses">
                        @foreach ($courses as $course)
                            <a href="{{ route('courses.show', [$course->id]) }}" class="course">
                                <img src="{{ $course->image }}" alt="" class="course-img">
                                <div class="course-name">{{ $course->title }}</div>
                            </a>
                        @endforeach

                        <a href="{{ route('courses.index') }}" class="course add-course">
                            <div class="course-img">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="course-name">Add course</div>
                        </a>
                    </div>

                    <div class="title">Edit profile</div>
                    <form action="{{ route('user.update', [auth()->user()->id]) }}" method="POST" class="form-profile"
                        enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="name">Name: </label>
                                    <input id="name" class="@error('name') is-invalid @enderror" name="name"
                                        type="text" placeholder="Your name..." value="{{ old('name') }}">
                                    @error('name')
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
                                        type="email" placeholder="Your email..." value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="birthday">Date of birthday: </label>
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
                                    <label for="phone">Phone: </label>
                                    <input id="phone" class="@error('phone') is-invalid @enderror" name="phone"
                                        type="text" placeholder="Your phone..." value={{ old('phone') }}>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="address">Address: </label>
                                    <input id="address" class="@error('address') is-invalid @enderror" name="address"
                                        type="text" placeholder="Your address..." value={{ old('address') }}>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="about">About me: </label>
                                    <textarea id="about" class="@error('about') is-invalid @enderror" name="about" id="" cols="30"
                                        rows="6" placeholder="About you...">{{ old('about') }}</textarea>
                                    @error('about')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <input id="jsUploadInput" class="upload-avatar" type="file" name="avatar" id="photo"
                                        accept="image/*" class=" form-control-file @error('avatar') is-invalid @enderror">
                                    @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 profile-submit">
                                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
