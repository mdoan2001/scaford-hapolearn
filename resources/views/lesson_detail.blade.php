@extends('layouts.app')

@section('content')
    <div class="lesson-detail">
        <div class="container">
            <div class="row">
                <div class="main col-md-8 col-12">
                    <img src="https://product.bachkhoa-aptech.edu.vn:33/resources/upload/image/chia-se/co-nen-hoc-lap-trinh-web-bang-php-02.jpg"
                        alt="" class="course-img">
                    <div class="group">
                        <div class="group-title">
                            <div class="title-link title-link--active" id="js-link-description">Descriptions</div>
                            <div class="title-link" id="js-link-document">Documents</div>
                        </div>

                        <div class="descriptions group-item active" id="js-description">
                            <div class="title">Descriptions lesson</div>
                            <div class="content">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat
                                dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna
                                feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque.
                                Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod
                                nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante
                                pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique.
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                Vestibulum ligula libero, feugiat faucibus mattis eget, pulvinar et ligula.</div>
                            <div class="title">Requirements</div>
                            <div class="content">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat
                                dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna
                                feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque.
                                Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod
                                nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante
                                pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique.
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                Vestibulum ligula libero, feugiat faucibus mattis eget, pulvinar et ligula.</div>
                        </div>
                        <div class="description-bottom">
                            <div class="tags-label">Tag:</div>
                            <div class="tags">
                                <div class="tag">#learn</div>
                                <div class="tag">#html</div>
                                <div class="tag">#css</div>
                                <div class="tag">#learn</div>
                                <div class="tag">#learn</div>
                                <div class="tag">#learn</div>
                            </div>
                        </div>

                        <div class="documents group-item" id="js-document">
                            Documents
                        </div>
                    </div>
                </div>

                <div class="side-bar col-md-4 col-12">
                    <div class="side-bar-item course-information" id="js-info-course">
                        <div class="course-information-row">
                            <div class="title">
                                <i class="fa-solid fa-display"></i>
                                Course
                            </div>
                            <p class="content">:&nbsp HTML/CSS/Js</p>
                        </div>
                        <div class="course-information-row">
                            <div class="title">
                                <i class="fa-solid fa-user-secret"></i>
                                Learners
                            </div>
                            <p class="content">:&nbsp 100</p>
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
                                <a href="#" class="tag-link">#learn</a>, <a href="#" class="tag-link">#code</a>
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
                        <div class="course-information-row">
                            <div class="btn course-exit">Kết thúc khóa học</div>
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
