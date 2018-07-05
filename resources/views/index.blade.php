@extends('layout.front_design')
@section('content')

    <!--Header-Area-->
    <header class="header-area overlay" id="home-area">
        <div class="vcenter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="header-text">
                            <h2 class="header-title wow fadeInUp">We Are Provide Creative Business <span class="dot"></span></h2>
                            <div class="wow fadeInUp" data-wow-delay="0.5s"><q>We Mak Sure Best Business Solution For Our Client</q></div>
                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                <a href="#contact-area" class="bttn bttn-lg bttn-primary">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-Area-/-->

    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="video-box">
                        <img src="images/video-image.png" alt="">
                        <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video-bttn"><img src="images/video-button.png" alt=""></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 wow fadeInUp">
                    <div class="page-title">
                        <h2 class="title">Why Choose Us?</h2>
                        <ul class="tabs-list">
                            <li class="active"><a data-toggle="pill" href="#our_mission">Our Mission</a></li>
                            <li><a data-toggle="pill" href="#our_vission">Our Vission</a></li>
                            <li><a data-toggle="pill" href="#our_support">Our Support</a></li>
                        </ul>
                    </div>
                    @foreach($products as $about)
                    <div class="tab-content">
                        <div id="our_mission" class="tab-pane fade in active">
                            <p>{{$about->mission}}</p>
                            <br />
                        </div>
                        <div id="our_vission" class="tab-pane fade">
                            <p>{{$about->vision}}</p>
                            <br />
                        </div>
                        <div id="our_support" class="tab-pane fade">
                            <p>{{$about->support}}</p>
                            <br />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
   
    <!-- About-Area -->
    <section class="section-padding" id="about-area">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <div class="page-title">
                        <h2 class="title wow fadeInUp">{{$product->heading}}</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p>{{$product->description}}</p>
                        </div>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="0.7s">
                        <a href="#" class="bttn bttn-primary">Learn More</a>
                    </div>
                </div>
                <div class="hidden-xs col-sm-6 col-md-offset-1">
                    <img src="{{asset('images/about/medium/'.$product->image)}}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- About-Area / -->

    <!-- Team-Area -->
    <section class="section-padding" id="team-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="text-center">
                        <h2 class="title">Our expert team</h2>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($teams as $team)
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="team-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="{{asset('images/pictures/medium/'.$team->image)}}" alt="">
                        </div>
                        <div class="team-hover">
                            <h5 class="t_title">{{$team->name}}</h5>
                            <span class="t_sub_title">{{$team->description}}</span>
                            <div class="team-social-menu">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                                <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Team-Area / -->
    <!-- Blog-area -->
    <section class="section-padding" id="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h2 class="title">Latest Blog</h2>
                        <p>Checkou Our Latest Blog here!.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 wow fadeInUp">
                    <div class="blog-box">
                        <div class="blog-image">
                            <img src="images/blog-md-2.jpg" alt="">
                        </div>
                        <div class="blog-details">
                            <h4><a href="#">Business Consultance Meetup, 10 Jan, 2016</a></h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="blog-lists">
                        @foreach($blogs as $blogger)
                        <div class="blog-list wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-list-image">
                                <img src="{{ asset('images/pictures/small/'.$blogger->image)}}" alt="">
                            </div>
                            <h5><a href="{{url('/blog')}}">{{$blogger->blog_name}}</a></h5>
                            <div class="blog-list-meta"> <i class="icofont icofont-ui-calendar"></i> {{$blogger->date}}</div>
                            <p>{{$blogger->summary}}</p>
                        </div>
                     @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-area / -->

    <!-- Contact-Area -->
    <section class="section-padding" id="contact-area">
        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <h3 class="bar-title">Contact Now</h3>
                        </div>
                     @if(Session::has('flash_message_error'))
                        <div class="alert alert-error alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('flash_message_error') !!}</strong>
                        </div>        
                    @endif
                    @if(Session::has('flash_message_success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('flash_message_success') !!}</strong>
                        </div>        
                     @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="contact-form">
                            <form action="{{url('/contact-form')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-double">
                                    <input type="text" id="form-name" name="fullname" placeholder="Full Name" required="required">
                                    <input type="number" name="number" placeholder="Phone Number">
                                </div>
                                <div class="form-double">
                                    <input type="email" name="email" name="email" id="form-email" placeholder="Your Email" required="required">
                                    <input type="text" name="subject" id="form-subject" placeholder="Subject" required="required">
                                </div>
                                <textarea  name="message" id="form-message" rows="5" required="required" placeholder="Message"></textarea>
                                <div class="form-actions">
                                <input type="submit" value="Send Message" class="bttn bttn-primary">
                              </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="contact-info">
                            <ul class="info">
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-social-google-map"></i>
                                    </span> 160 L ink Road <br /> Dhaka-1216, Bangladesh
                                </li>
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-ui-cell-phone"></i>
                                    </span> (+00) 99 33 247
                                </li>
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-envelope"></i>
                                    </span> Info@fabiocode.com
                                </li>
                            </ul>
                            <div class="social-menu-2">
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-skype"></i></a>
                                <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-Area / -->

@endsection