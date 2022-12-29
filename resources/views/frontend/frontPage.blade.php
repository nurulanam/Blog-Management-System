@extends('frontend.master')

@section('banner')
    <div class="slider-area slider-layout1 mgt--156">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-1" class="slides">
                <img src="{{ asset('frontend') }}/media/slider/banner1.jpg" alt="slider" title="#slider-direction-1" />
                <img src="{{ asset('frontend') }}/media/slider/banner2.jpg" alt="slider" title="#slider-direction-2" />
                <img src="{{ asset('frontend') }}/media/slider/slide1-3.jpg" alt="slider" title="#slider-direction-3" />
            </div>
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-1">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <div class="item-category bg-green">Action</div>
                            <div class="item-date"><i class="flaticon-clock"></i> 27 Jan, 2020</div>
                            <h1 class="item-title"><a href="single-post1.html">War look the next Forward 2020</a></h1>
                            <div class="item-paragraph">Nimply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since.</div>
                            <div class="post-meta-light">
                                <ul>
                                    <li class="post-author">
                                        <div class="author-icon bg-blueviolet">
                                            <i class="flaticon-user"></i>
                                        </div>
                                        <div class="author-content">
                                            <div class="item-text">Posted by</div>
                                            <div class="author-name"><a href="#">Steven Jones</a></div>
                                        </div>
                                    </li>
                                    <li class="meta-action"><i class="flaticon-heart"></i>2,350</li>
                                    <li class="meta-action"><i class="flaticon-comment-white-oval-bubble"></i>1,380</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-2">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <div class="item-category bg-green">Action</div>
                            <div class="item-date"><i class="flaticon-clock"></i> 27 Jan, 2020</div>
                            <h1 class="item-title"><a href="single-post1.html">War look the next Forward 2020</a></h1>
                            <div class="item-paragraph">Nimply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since.</div>
                            <div class="post-meta-light">
                                <ul>
                                    <li class="post-author">
                                        <div class="author-icon bg-blueviolet">
                                            <i class="flaticon-user"></i>
                                        </div>
                                        <div class="author-content">
                                            <div class="item-text">Posted by</div>
                                            <div class="author-name"><a href="#">Steven Jones</a></div>
                                        </div>
                                    </li>
                                    <li class="meta-action"><i class="flaticon-heart"></i>2,350</li>
                                    <li class="meta-action"><i class="flaticon-comment-white-oval-bubble"></i>1,380</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-3">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <div class="item-category bg-green">Action</div>
                            <div class="item-date"><i class="flaticon-clock"></i> 27 Jan, 2020</div>
                            <h1 class="item-title"><a href="single-post1.html">War look the next Forward 2020</a></h1>
                            <div class="item-paragraph">Nimply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since.</div>
                            <div class="post-meta-light">
                                <ul>
                                    <li class="post-author">
                                        <div class="author-icon bg-blueviolet">
                                            <i class="flaticon-user"></i>
                                        </div>
                                        <div class="author-content">
                                            <div class="item-text">Posted by</div>
                                            <div class="author-name"><a href="#">Steven Jones</a></div>
                                        </div>
                                    </li>
                                    <li class="meta-action"><i class="flaticon-heart"></i>2,350</li>
                                    <li class="meta-action"><i class="flaticon-comment-white-oval-bubble"></i>1,380</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="margin-bottom-40">
        <div class="heading-layout1">
            <h2 class="heading-title">Featured Games</h2>
            <div class="heading-icon">
                <a href="#" class="active"><i class="flaticon-left-arrow-1"></i></a>
                <a href="#"><i class="flaticon-right-arrow"></i></a>
            </div>
        </div>
        <div class="post-bg-wrap">
            <div class="row">
                <div class="col-lg-7">
                    <div class="post-grid-layout1">
                        <div class="post-img">
                            <img src="{{ asset('frontend') }}/media/post/post1.jpg" alt="Post">
                        </div>
                        <div class="post-content">
                            <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                            <h3 class="post-title"><a href="single-post1.html">Just then her head struck againste now
                                    mored hurried.</a></h3>
                            <div class="post-meta-light">
                                <ul>
                                    <li class="post-author">
                                        <div class="author-icon bg-green">
                                            <i class="flaticon-user"></i>
                                        </div>
                                        <div class="author-content">
                                            <div class="item-text">Posted by</div>
                                            <div class="author-name"><a href="#">Steven Jones</a></div>
                                        </div>
                                    </li>
                                    <li class="meta-action"><i class="flaticon-heart"></i>2,350</li>
                                    <li class="meta-action"><i class="flaticon-comment-white-oval-bubble"></i>0</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="post-list-layout1">
                        <div class="media">
                            <div class="item-img">
                                <img src="{{ asset('frontend') }}/media/post/post2.jpg" alt="Post">
                            </div>
                            <div class="media-body">
                                <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                                <h4 class="post-title"><a href="single-post1.html">The Top Best Computer Speakers
                                        Market</a></h4>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <img src="{{ asset('frontend') }}/media/post/post3.jpg" alt="Post">
                            </div>
                            <div class="media-body">
                                <div class="post-date"><i class="flaticon-clock"></i> 25 June, 2019</div>
                                <h4 class="post-title"><a href="single-post1.html">The Top Best Computer Speakers
                                        Market</a></h4>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <img src="{{ asset('frontend') }}/media/post/post4.jpg" alt="Post">
                            </div>
                            <div class="media-body">
                                <div class="post-date"><i class="flaticon-clock"></i> 20 June, 2019</div>
                                <h4 class="post-title"><a href="single-post1.html">The Top Best Computer Speakers
                                        Market</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ad-banner-layout1 margin-bottom-40">
        <a href="#">
            <img src="{{ asset('frontend') }}/media/figure/ad.jpg" alt="Ad">
        </a>
    </div>

    <div class="margin-bottom-40">
        <div class="row gutters-40">
            <div class="col-lg-6">
                <div class="heading-layout1">
                    <h2 class="heading-title">Racing Games</h2>
                    <div class="heading-icon">
                        <a href="#" class="active"><i class="flaticon-left-arrow-1"></i></a>
                        <a href="#"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="post-grid-layout2">
                    <div class="item-img">
                        <img src="{{ asset('frontend') }}/media/post/post5.jpg" alt="Post">
                    </div>
                    <div class="item-content">
                        <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                        <h3 class="post-title"><a href="single-post1.html">Just then her head struck againste now mored
                                hurried.</a></h3>
                        <p>Stay focused and remember we design stay focused area aaend remember we design the best wordPrss
                            he ones closest to you tha best.</p>
                        <div class="post-meta-dark">
                            <ul>
                                <li class="post-author">
                                    <div class="author-icon bg-green">
                                        <i class="flaticon-user"></i>
                                    </div>
                                    <div class="author-content">
                                        <div class="item-text">Posted by</div>
                                        <div class="author-name"><a href="#">Steven Jones</a></div>
                                    </div>
                                </li>
                                <li class="meta-action"><i class="flaticon-heart"></i>2,350</li>
                                <li class="meta-action"><i class="flaticon-comment-white-oval-bubble"></i>1,380</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="heading-layout1">
                    <h2 class="heading-title">Animation Games</h2>
                    <div class="heading-icon">
                        <a href="#" class="active"><i class="flaticon-left-arrow-1"></i></a>
                        <a href="#"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="post-grid-layout2">
                    <div class="item-img">
                        <img src="{{ asset('frontend') }}/media/post/post6.jpg" alt="Post">
                    </div>
                    <div class="item-content">
                        <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                        <h3 class="post-title"><a href="single-post1.html">Just then her head struck againste now mored
                                hurried.</a></h3>
                        <p>Stay focused and remember we design stay focused area aaend remember we design the best wordPrss
                            he ones closest to you tha best.</p>
                        <div class="post-meta-dark">
                            <ul>
                                <li class="post-author">
                                    <div class="author-icon bg-blueviolet">
                                        <i class="flaticon-user"></i>
                                    </div>
                                    <div class="author-content">
                                        <div class="item-text">Posted by</div>
                                        <div class="author-name"><a href="#">Steven Jones</a></div>
                                    </div>
                                </li>
                                <li class="meta-action"><i class="flaticon-heart"></i>2,350</li>
                                <li class="meta-action"><i class="flaticon-comment-white-oval-bubble"></i>1,380</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="post-list-layout2">
                    <div class="media">
                        <div class="item-img">
                            <img src="{{ asset('frontend') }}/media/post/post7.jpg" alt="Post">
                        </div>
                        <div class="media-body">
                            <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                            <h4 class="post-title"><a href="single-post1.html">Just then head struck time game ara now
                                    mored.</a></h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="item-img">
                            <img src="{{ asset('frontend') }}/media/post/post8.jpg" alt="Post">
                        </div>
                        <div class="media-body">
                            <div class="post-date"><i class="flaticon-clock"></i> 25 June, 2019</div>
                            <h4 class="post-title"><a href="single-post1.html">Just then head struck time game ara now
                                    mored.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="post-list-layout2">
                    <div class="media">
                        <div class="item-img">
                            <img src="{{ asset('frontend') }}/media/post/post9.jpg" alt="Post">
                        </div>
                        <div class="media-body">
                            <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                            <h4 class="post-title"><a href="single-post1.html">Just then head struck time game ara now
                                    mored.</a></h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="item-img">
                            <img src="{{ asset('frontend') }}/media/post/post10.jpg" alt="Post">
                        </div>
                        <div class="media-body">
                            <div class="post-date"><i class="flaticon-clock"></i> 25 June, 2019</div>
                            <h4 class="post-title"><a href="single-post1.html">Just then head struck time game ara now
                                    mored.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Category Type 1 Post  --}}
    <div class="margin-bottom-40">
        <div class="heading-layout1">
            <h2 class="heading-title">Action Games</h2>
            <div class="heading-icon">
                <a href="#" class="active"><i class="flaticon-left-arrow-1"></i></a>
                <a href="#"><i class="flaticon-right-arrow"></i></a>
            </div>
        </div>
        <div class="row gutters-4">
            <div class="col-lg-4 col-sm-6">
                <div class="post-grid-layout3">
                    <div class="post-img">
                        <img src="{{ asset('frontend') }}/media/post/post11.jpg" alt="Games">
                    </div>
                    <div class="post-content">
                        <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                        <h3 class="post-title"><a href="single-post1.html">Battley games explained what could the next
                                ...</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="post-grid-layout3">
                    <div class="post-img">
                        <img src="{{ asset('frontend') }}/media/post/post12.jpg" alt="Games">
                    </div>
                    <div class="post-content">
                        <div class="post-date"><i class="flaticon-clock"></i> 25 June, 2019</div>
                        <h3 class="post-title"><a href="single-post1.html">Battley games explained what could the next
                                ...</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="post-grid-layout3">
                    <div class="post-img">
                        <img src="{{ asset('frontend') }}/media/post/post13.jpg" alt="Games">
                    </div>
                    <div class="post-content">
                        <div class="post-date"><i class="flaticon-clock"></i> 23 June, 2019</div>
                        <h3 class="post-title"><a href="single-post1.html">Battley games explained what could the next
                                ...</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="post-grid-layout3">
                    <div class="post-img">
                        <img src="{{ asset('frontend') }}/media/post/post14.jpg" alt="Games">
                    </div>
                    <div class="post-content">
                        <div class="post-date"><i class="flaticon-clock"></i> 22 June, 2019</div>
                        <h3 class="post-title"><a href="single-post1.html">Battley games explained what could the next
                                ...</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="post-grid-layout3">
                    <div class="post-img">
                        <img src="{{ asset('frontend') }}/media/post/post15.jpg" alt="Games">
                    </div>
                    <div class="post-content">
                        <div class="post-date"><i class="flaticon-clock"></i> 20 June, 2019</div>
                        <h3 class="post-title"><a href="single-post1.html">Battley games explained what could the next
                                ...</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="post-grid-layout3">
                    <div class="post-img">
                        <img src="{{ asset('frontend') }}/media/post/post16.jpg" alt="Games">
                    </div>
                    <div class="post-content">
                        <div class="post-date"><i class="flaticon-clock"></i> 18 June, 2019</div>
                        <h3 class="post-title"><a href="single-post1.html">Battley games explained what could the next
                                ...</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Latest News  --}}
    <div class="margin-bottom-40">
        <div class="heading-layout1">
            <h2 class="heading-title">Latest News</h2>
        </div>
        <div class="post-list-layout3">
            <div class="item-img">
                <img src="{{ asset('frontend') }}/media/post/post17.jpg" alt="Post">
            </div>
            <div class="item-content">
                <div class="item-tag bg-blueviolet">Racing</div>
                <div class="post-meta">
                    <ul>
                        <li><i class="flaticon-clock"></i> 27 June, 2019</li>
                        <li class="item-author"><i class="flaticon-user bg-green"></i><span>By</span><a
                                href="#">Mark Willy</a></li>
                    </ul>
                </div>
                <h3 class="item-title"><a href="#"> My microwave is too small to fit the microwa Happy Sunday from
                        Software Expand.</a></h3>
                <p>Happy Sunday from Software Expandthis, we talk about the future of
                    Windows Phone, whether py Sunday from Software Expand.</p>
                <a href="#" class="btn-fill-md">READ MORE</a>
            </div>
        </div>
        <div class="post-list-layout3">
            <div class="item-img">
                <img src="{{ asset('frontend') }}/media/post/post18.jpg" alt="Post">
            </div>
            <div class="item-content">
                <div class="item-tag bg-green">Racing</div>
                <div class="post-meta">
                    <ul>
                        <li><i class="flaticon-clock"></i> 27 June, 2019</li>
                        <li class="item-author"><i class="flaticon-user bg-orange"></i><span>By</span><a
                                href="#">Mark Willy</a></li>
                    </ul>
                </div>
                <h3 class="item-title"><a href="#"> My microwave is too small to fit the microwa Happy Sunday from
                        Software Expand.</a></h3>
                <p>Happy Sunday from Software Expandthis, we talk about the future of
                    Windows Phone, whether py Sunday from Software Expand.</p>
                <a href="#" class="btn-fill-md">READ MORE</a>
            </div>
        </div>
        <div class="post-list-layout3">
            <div class="item-img">
                <img src="{{ asset('frontend') }}/media/post/post19.jpg" alt="Post">
            </div>
            <div class="item-content">
                <div class="item-tag bg-dodger-blue">Racing</div>
                <div class="post-meta">
                    <ul>
                        <li><i class="flaticon-clock"></i> 27 June, 2019</li>
                        <li class="item-author"><i class="flaticon-user bg-blueviolet"></i><span>By</span><a
                                href="#">Mark Willy</a></li>
                    </ul>
                </div>
                <h3 class="item-title"><a href="#"> My microwave is too small to fit the microwa Happy Sunday from
                        Software Expand.</a></h3>
                <p>Happy Sunday from Software Expandthis, we talk about the future of
                    Windows Phone, whether py Sunday from Software Expand.</p>
                <a href="#" class="btn-fill-md">READ MORE</a>
            </div>
        </div>
    </div>
@endsection
