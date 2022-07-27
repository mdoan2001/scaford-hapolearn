@extends('layouts.app')

@section('content')
    <div class="course-detail">
        <div class="container">
            <div class="row">
                <div class="main col-8">
                    <img src="https://product.bachkhoa-aptech.edu.vn:33/resources/upload/image/chia-se/co-nen-hoc-lap-trinh-web-bang-php-02.jpg"
                        alt="" class="course-img">
                    <div class="group">
                        <div class="group-title">
                            <div class="title-link title-link--active" id="js-link-lessons">Lessons</div>
                            <div class="title-link" id="js-link-teacher">Teacher</div>
                            <div class="title-link" id="js-link-reviews">Reviews</div>
                        </div>

                        <div class="lessons group-item active" id="js-lesson">
                            <form action="#" method="" class="lessons-filter">
                                <div class="lessons-search">
                                    <input type="text" placeholder="Search...">
                                    <div class="lessons-search-btn btn btn-primary">Tìm kiếm</div>
                                </div>
                                <div class="btn btn-primary lessons-join">Tham gia khóa học</div>
                            </form>
                            <div class="lesson">
                                <div class="lesson-content">
                                    <div class="lesson-num">1.</div>
                                    <div class="lesson-name">Lorem ipsum dolor sitLorem ipsum dolor sit amet, amet,
                                        consectetur adipiscing elit.</div>
                                </div>
                                <div class="btn lesson-btn">Learn</div>
                            </div>
                            <div class="lesson">
                                <div class="lesson-content">
                                    <div class="lesson-num">1.</div>
                                    <div class="lesson-name">Lorem ipsum dolor sitLorem ipsum dolor sit amet, amet,
                                        consectetur adipiscing elit.</div>
                                </div>
                                <div class="btn lesson-btn">Learn</div>
                            </div>
                            <div class="lesson">
                                <div class="lesson-content">
                                    <div class="lesson-num">1.</div>
                                    <div class="lesson-name">Lorem ipsum dolor sitLorem ipsum dolor sit amet, amet,
                                        consectetur adipiscing elit.</div>
                                </div>
                                <div class="btn lesson-btn">Learn</div>
                            </div>
                            <div class="lesson">
                                <div class="lesson-content">
                                    <div class="lesson-num">1.</div>
                                    <div class="lesson-name">Lorem ipsum dolor, amet, consectetur adipiscing elit.</div>
                                </div>
                                <div class="btn lesson-btn">Learn</div>
                            </div>
                            <div class="lesson">
                                <div class="lesson-content">
                                    <div class="lesson-num">1.</div>
                                    <div class="lesson-name">Lorem ipsum dolor sitLorem ipsum dolor sit amet, amet,
                                        consectetur adipiscing elit.</div>
                                </div>
                                <div class="btn lesson-btn">Learn</div>
                            </div>
                            <div class="lesson">
                                <div class="lesson-content">
                                    <div class="lesson-num">1.</div>
                                    <div class="lesson-name">Lorem ipsum dolor sitLorem ipsum dolor sit amet, amet,
                                        consectetur adipiscing elit.</div>
                                </div>
                                <div class="btn lesson-btn">Learn</div>
                            </div>
                        </div>

                        <div class="teachers group-item" id="js-teacher">
                            <div class="teachers-title">Main teachers</div>
                            <div class="teacher">
                                <div class="teacher-information">
                                    <img src="https://toigingiuvedep.vn/wp-content/uploads/2022/01/anh-meo-cute.jpg"
                                        alt="" class="teacher-avatar">
                                    <div class="teacher-general">
                                        <div class="teacher-name">Luu Trung Nghia </div>
                                        <div class="teacher-experience">Second Year Teacher</div>
                                        <div class="teacher-socials">
                                            <i class="teacher-social teacher-google fa-brands fa-google-plus-g"></i>
                                            <i class="teacher-social teacher-facebook fa-brands fa-facebook-f"></i>
                                            <i class="teacher-social teacher-slack fa-brands fa-slack"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher-about">
                                    Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis
                                    rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum.
                                    Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque
                                    tristique
                                </div>
                            </div>

                            <div class="teacher">
                                <div class="teacher-information">
                                    <img src="https://toigingiuvedep.vn/wp-content/uploads/2022/01/anh-meo-cute.jpg"
                                        alt="" class="teacher-avatar">
                                    <div class="teacher-general">
                                        <div class="teacher-name">Luu Trung Nghia </div>
                                        <div class="teacher-experience">Second Year Teacher</div>
                                        <div class="teacher-socials">
                                            <i class="teacher-social teacher-google fa-brands fa-google-plus-g"></i>
                                            <i class="teacher-social teacher-facebook fa-brands fa-facebook-f"></i>
                                            <i class="teacher-social teacher-slack fa-brands fa-slack"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher-about">
                                    Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis
                                    rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum.
                                    Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque
                                    tristique
                                </div>
                            </div>
                        </div>

                        <div class="reviews group-item" id="js-review">
                            <div class="reviews-total">05 Reviews</div>
                            <div class="reviews-evaluate">
                                <div class="left">
                                    <div class="reviews-num">5</div>
                                    <div class="reviews-stars">
                                        <i class="star-icon active fa-solid fa-star"></i>
                                        <i class="star-icon active fa-solid fa-star"></i>
                                        <i class="star-icon active fa-solid fa-star"></i>
                                        <i class="star-icon active fa-solid fa-star"></i>
                                        <i class="star-icon active fa-solid fa-star"></i>
                                    </div>
                                    <div class="reviews-rattings">2 Ratings</div>
                                </div>

                                <div class="right">
                                    <div class="reviews-item active">
                                        <div class="reviews-item-label">5 stars</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">2</div>
                                    </div>
                                    <div class="reviews-item">
                                        <div class="reviews-item-label">4 stars</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">0</div>
                                    </div>
                                    <div class="reviews-item">
                                        <div class="reviews-item-label">3 stars</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">0</div>
                                    </div>
                                    <div class="reviews-item">
                                        <div class="reviews-item-label">2 stars</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">0</div>
                                    </div>
                                    <div class="reviews-item">
                                        <div class="reviews-item-label">1 stars</div>
                                        <div class="reviews-item-hr"></div>
                                        <div class="reviews-item-num">0</div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-all">
                                Show all reviews
                                <i class="down-icon fa-solid fa-caret-down"></i>
                            </div>
                            <div class="comments">
                                <div class="comment">
                                    <div class="comment-user">
                                        <img src="https://haycafe.vn/wp-content/uploads/2022/02/Anh-gai-xinh-Viet-Nam.jpg"
                                            alt="" class="user-avatar">
                                        <div class="user-name">Nam Hoang</div>
                                        <div class="user-stars">
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                        </div>
                                        <div class="user-time">August 4, 2020 at 1:30 pm</div>
                                    </div>
                                    <p class="comment-content">
                                        Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed
                                        quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat
                                        rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque.
                                        Pellentesque tristique
                                    </p>
                                </div>

                                <div class="comment">
                                    <div class="comment-user">
                                        <img src="https://haycafe.vn/wp-content/uploads/2022/02/Anh-gai-xinh-Viet-Nam.jpg"
                                            alt="" class="user-avatar">
                                        <div class="user-name">Nam Hoang</div>
                                        <div class="user-stars">
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                        </div>
                                        <div class="user-time">August 4, 2020 at 1:30 pm</div>
                                    </div>
                                    <p class="comment-content">
                                        Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed
                                        quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat
                                        rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque.
                                        Pellentesque tristique
                                    </p>
                                </div>

                                <form class="leave-review">
                                    <div class="leave-title">Leave a Review</div>
                                    <label class="leave-label" for="">Message</label>
                                    <textarea class="leave-input" name="" id="" rows="5"></textarea>
                                    <div class="vote">
                                        <label for="" class="vote-label">Vote</label>
                                        <div class="vote-stars">
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                            <i class="star-icon active fa-solid fa-star"></i>
                                        </div>
                                        <p>(star)</p>
                                    </div>
                                    <input type="submit" class="btn" value="Send">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="side-bar col-4">
                    <div class="side-bar-item course-description" id="js-description-course">
                        <div class="title">Descriptions course</div>
                        <p class="content">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim.
                            Sed
                            quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam
                            nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique
                            fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean
                            viverra
                            tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam.
                            Nullam hendrerit porta ante vitae tristique.</p>
                    </div>
                    <div class="side-bar-item course-information" id="js-info-course">
                        <div class="course-information-row">
                            <div class="title">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                Leaners
                            </div>
                            <p class="content">:&nbsp 500</p>
                        </div>
                        <div class="course-information-row">
                            <div class="title">
                                <i class="fa-solid fa-table-list"></i>
                                Lessons
                            </div>
                            <p class="content">:&nbsp 100 lesson</p>
                        </div>
                        <div class="course-information-row">
                            <div class="title">
                                <i class="fa-solid fa-clock"></i>
                                Times
                            </div>
                            <p class="content">:&nbsp 100 lesson</p>
                        </div>
                        <div class="course-information-row">
                            <div class="title">
                                <i class="fa-solid fa-tag"></i>
                                Tags
                            </div>
                            <p class="content">:&nbsp
                                <a href="#" class="tag-link">#learn</a>, <a href="#"
                                    class="tag-link">#code</a>
                            </p>
                        </div>
                        <div class="course-information-row">
                            <div class="title">
                                <i class="fa-solid fa-money-bill-1"></i>
                                Price
                            </div>
                            <p class="content">:&nbsp
                                Free
                            </p>
                        </div>
                    </div>

                    <div class="side-bar-item other-course" id="js-other-course">
                        <div class="title">Other Courses</div>
                        <div class="content">
                            <div class="other-course-row">
                                <div class="num">1.</div>
                                <div class="name">Lorem ipsum dolor sit amet, consectetur the adipiscing elit.</div>
                            </div>
                            <div class="other-course-row">
                                <div class="num">2.</div>
                                <div class="name">Lorem ipsum dolor sit amet, consectetur the adipiscing elit.</div>
                            </div>
                            <div class="other-course-row">
                                <div class="num">3.</div>
                                <div class="name">Lorem ipsum dolor sit amet, consectetur</div>
                            </div>
                            <div class="other-course-row">
                                <div class="num">4.</div>
                                <div class="name">Lorem ipsum dolor sit amet, consectetur</div>
                            </div>
                            <div class="other-course-row">
                                <div class="num">5.</div>
                                <div class="name">Lorem ipsum dolor sit amet, consectetur</div>
                            </div>
                            <div class="other-course-row">
                                <div class="btn view-all">View all ours courses</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
