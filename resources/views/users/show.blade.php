@extends('layouts.app')

@section('content')
    <div class="profile-layout container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact">
                    <img src="https://toigingiuvedep.vn/wp-content/uploads/2022/01/anh-meo-cute.jpg" alt=""
                        class="contact-img">
                    <div class="contact-name">
                        <div class="name">Võ Hoài Nam</div>
                        <div class="gmail">namvh@gmail.com</div>
                    </div>
                    <div class="contact-user">
                        <div class="item">
                            <i class="icon icon-birthday fa-solid fa-cake-candles"></i>
                            <div class="item-content">10/10/2998</div>
                        </div>
                        <div class="item">
                            <i class="icon icon-phone fa-solid fa-phone"></i>
                            <div class="item-content">0123456789</div>
                        </div>
                        <div class="item">
                            <i class="icon icon-address fa-solid fa-house"></i>
                            <div class="item-content">Cầu Giấy, Hà Nội</div>
                        </div>
                    </div>
                    <div class="contact-about">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat
                        dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat
                        rutrum. Nam nulla ippsumipsum, them venenatis </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="edit-profile">
                    <div class="title">My courses</div>
                    <div class="courses">
                        <a href="" class="course">
                            <img src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/htm16157919239459.jpg"
                                alt="" class="course-img">
                            <div class="course-name">HTML</div>
                        </a>
                        <a href="" class="course">
                            <img src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/htm16157919239459.jpg"
                                alt="" class="course-img">
                            <div class="course-name">HTML</div>
                        </a>
                        <a href="" class="course">
                            <img src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/htm16157919239459.jpg"
                                alt="" class="course-img">
                            <div class="course-name">HTML</div>
                        </a>
                        <a href="" class="course">
                            <img src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/htm16157919239459.jpg"
                                alt="" class="course-img">
                            <div class="course-name">HTML</div>
                        </a>
                        <a href="" class="course">
                            <img src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/htm16157919239459.jpg"
                                alt="" class="course-img">
                            <div class="course-name">HTML</div>
                        </a>
                        <a href="" class="course add-course">
                            <div class="course-img">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="course-name">Add course</div>
                        </a>
                    </div>

                    <div class="title">Edit profile</div>
                    <form action="" method="" class="form-profile">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="">Name: </label>
                                    <input type="text" placeholder="Your name...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="">Email: </label>
                                    <input type="email" placeholder="Your email...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="">Date of birthday: </label>
                                    <input type="date" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="">Phone:: </label>
                                    <input type="text" placeholder="Your phone...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="">Address: </label>
                                    <input type="text" placeholder="Your address...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="edit-profile-item">
                                    <label for="">About me: </label>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="About you..."></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
