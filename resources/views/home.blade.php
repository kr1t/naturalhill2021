@extends('layouts.front')

@section('title') {{$homesetting->meta_title}} @endsection
@section('meta') {{$homesetting->meta_description}} @endsection


@section('content')



<div class="slider-venor-section">
    <div class="slider-venor owl-carousel">

        @foreach( $sliders as $slido )

        <div class="slider-inner-venor">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="slider-content">
                            <h1>{!!$slido->heading1!!} </h1>
                            <h2 class="@if($slido->typed_text) typed_active @endif">{!!$slido->heading2!!}</h2>

                            @if($slido->typed_text)
                            <script type="text/javascript">
                                var arr = {!! $slido-> typed_text!!};
                            </script>
                            @endif

                            <div class="slider-body">{!!$slido->bodyslider!!}</div>
                            <a href="{!!$slido->button_link!!}" target="_self"
                                class="btn btn-slider"><span>{!!$slido->button_text!!}</span></a>
                            <a href="{!!$slido->button_link2!!}" target="_self"
                                class="btn btn-slider2"><span>{!!$slido->button_text2!!}</span></a>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="slider-image">
                            <img width="450" height="450" class="owl-lazy img-fluid slider-img"
                                src="/public/img/loading-blog.gif"
                                data-src="{{$slido->photo ? '/images/media/' . $slido->photo->file : '/public/img/200x200.png'}}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @endforeach

    </div>


</div>



<div class="about-section">
    <div class="container">
        <div class="row">

            <div class="col-md-7">

                <div class="pictures-row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item-about">
                                <div class="imgone big-paral">
                                    <div class="simpleParallax"><img src="/public/img/loading-blog.gif" width="500"
                                            height="666" class="lazy thumparallax-down img-fluid"
                                            data-src="{{$homesetting->about_image1}}" alt="two-images-1.jpg"></div>
                                </div>
                                <div class="exp-about">
                                    <h5 class="nmb-font-about">{{$homesetting->about_yearstitle}}</h5>
                                    <h6 class="service_summary-about">{{$homesetting->about_yearstext}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-about">
                                <div class="imgtwo big-paral">
                                    <div class="simpleParallax"><img src="/public/img/loading-blog.gif" width="500"
                                            height="820" class="lazy thumparallax img-fluid"
                                            data-src="{{$homesetting->about_image2}}" alt="two-images-1.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-5">

                <h4 class="about-heading1-home">{!!$homesetting->about_subtitle!!}</h4>
                <h3 class="about-heading2-home">{!!$homesetting->about_title!!}</h3>

                {!!$homesetting->about_description!!}

                <a href="{{$homesetting->about_buttonlink}}" target="_self"
                    class="btn btn-style1"><span>{{$homesetting->about_buttontext}}</span></a>

            </div>


        </div>
    </div>
</div>


{{-- <div class="services-section">
    <div class="container">

        <h3>{!!$homesetting->services_title!!}</h3>

        <div class="description-services">{!!$homesetting->sevices_text!!}</div>

        <div class="service-boxes-slider owl-carousel">

            @foreach( $services as $service )

            <div class="card-parent">
                <div class="card featured to-top-left">

                    <div class="heading-wrapper">
                        <h4 class="heading">{!!$service->icon!!} {{$service->title}}</h4>
                    </div>

                    <div class="paragraph-wrapper">
                        <p class="paragraph">{{$service->description}}</p>
                    </div>

                    <div class="image-wrapper to-bottom">
                        <div class="gallery">
                            <img width="400" height="400" class="lazy img-fluid" src="/public/img/loading-blog.gif"
                                data-src="{{$service->photo ? '/images/media/' . $service->photo->file : '/public/img/200x200.png'}}"
                                alt="{{$service->title}}">
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>

    </div>
</div> --}}

<div class="portfolio-section">
    <div class="container">
        <h4>{{$homesetting->projects_subtitle}}</h4>
        <h3>{!!$homesetting->projects_title!!}</h3>

        <h3>{!!$homesetting->ddd!!}</h3>


        <div class="row">

            @foreach($projects as $key=>$project)

            <div class="col-md-6">
                <a href="{{URL::to('/')}}/design-houses/{{$project->slug}}" title="{{$project->title}}">
                    <div data-tilt data-tilt-gyroscope="false" data-tilt-scale="1.05" data-tilt-speed="200"
                        data-tilt-perspective="1100" data-hover="" data-tilt-glare="true" data-tilt-max-glare="0.1"
                        data-tilt-max="5" class="project-box-div flex-icon">

                        {{-- <div class="project-image-container">
                            <div class="project-image-container-inner">
                                <img class="project-image lazy" width="410" height="230"
                                    src="/public/img/loading-blog.gif "
                                    data-src="{{$project->photo ? '/images/media/' . $project->photo->file : '/public/img/200x200.png'}}"
                                    alt="{{$project->title}}">
                            </div>
                        </div>
                        <div class="project-meta">
                            <div class="project-meta-title shadow">
                                <span class="project__text shadow">{{$project->title}}</span>
                            </div>
                            <div class="divider"></div>
                            <div class="project-category">
                                <span class="block_text shadow text-white" style="font-size: 1.1rem">{!!$project->review!!} </span>
                            </div>
                            <div class="price-tag shadow"><span>{!! $project->price !!}</span></div>
                        </div> --}}

                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <a href="{{URL::to('/')}}/project/{{$project->slug}}" title=""><img width="400"
                                        height="250"
                                        src="{{$project->photo ? '/images/media/' . $project->photo->file : '/public/img/200x200.png'}}"
                                        class="img-fluid" alt="{{$project->title}}"></a>
                            </div>
                            <h4 class="entry-details-title"> <a
                                    href="{{URL::to('/')}}/project/{{$project->slug}}">{{$project->title}}</a><h5 class="project-category project-category_box float-right">{{$project->project_category->name}}</h5></h4>

                            <p class="review_block_text">{!!$project->review!!}
                            @if($project->price)
                            <h5 class="price-tag float-right">{{$project->price}}</h5>
                            @endif
                            </p>
                        </div>

                    </div>
                </a>
            </div>

            @if ($key == 3)
            @break
            @endif


            @endforeach


        </div>
    </div>
</div>

<div class="fun-facts-section" id="fun-facts">
    <div class="container">

        <h3 class="fun-facts-heading1">{{$homesetting->fun_title}}</h3>

        <p>{{$homesetting->fun_description}}</p>

        <div class="row fun-facts-timer">
            <div class="col-md-3">
                <div class="radial">
                    <span class="timer" data-from="0" data-to="{{$homesetting->count_number1}}"
                        data-speed="4000">{{$homesetting->count_number1}}</span>
                    <h4>{{$homesetting->count_description1}}</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="radial">
                    <span class="timer" data-from="0" data-to="{{$homesetting->count_number2}}"
                        data-speed="4000">{{$homesetting->count_number2}}</span>
                    <h4>{{$homesetting->count_description2}}</h4>
                </div>

            </div>
            <div class="col-md-3">
                <div class="radial">
                    <span class="timer" data-from="0" data-to="{{$homesetting->count_number3}}"
                        data-speed="4000">{{$homesetting->count_number3}}</span>
                    <h4>{{$homesetting->count_description3}}</h4>
                </div>

            </div>
            <div class="col-md-3">
                <div class="radial">
                    <span class="timer" data-from="0" data-to="{{$homesetting->count_number4}}"
                        data-speed="4000">{{$homesetting->count_number4}}</span>
                    <h4>{{$homesetting->count_description4}}</h4>
                </div>
            </div>
        </div>


    </div>
</div>


<div class="testimonial-section">

    <div class="testimonial-section-slider owl-carousel">

        @foreach($testimonials as $testimonial)
        <blockquote class="testimonial-slide">
            <div class="section_title">{{$testimonial->subtitle}}</div>
            <span class="testimonial_slider_title">{{$testimonial->title}}</span>
            <div class="testimonial-area">
                <div class="testimonial-layoutArea">
                    <p>{{$testimonial->description}}</p>
                </div>
            </div>
            <div class="testimonials_slider_name"> {{$testimonial->name}}<span> - {{$testimonial->position}}</span>
            </div>
        </blockquote>
        @endforeach

    </div>

</div>

<div class="blog-section">

    <div class="container">

        <h3 class="blog-section-subtitle">{!!$homesetting->blog_subtitle!!}</h3>
        <h3 class="blog-section-title">{!!$homesetting->blog_title!!}</h3>

        <div class="row">

            @foreach($posts as $post)
            <div class="col-md-4">
                <article class="blog-single-post">
                    <div class="blog_custom">

                        <div class="post-thumbnail">
                            <a class="relative" href="{{URL::to('/')}}/post/{{$post->slug}}">
                                <div class="featured_image_blog">
                                    <img class="lazy blog_post_image img-fluid" width="350" height="300"
                                        src="https://cdn.dribbble.com/users/105033/screenshots/1132714/loading-animation-800.gif"
                                        data-src="{{$post->photo ? '/images/media/' . $post->photo->file : '/public/img/200x200.png'}}"
                                        alt="{{$post->title}}">
                                    <div class="flex-icon">
                                        <div class="flex-icon-inside">
                                            <i class="fas fa-link"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="post-categories">
                                <p>{{$post->category->name}}</p>
                            </div>
                        </div>

                        <div class="post-details">
                            <h3 class="post-name">
                                <a href="{{URL::to('/')}}/post/{{$post->slug}}"
                                    title="{{$post->title}}">{{$post->title}}</a>
                            </h3>
                            <div class="post-category-comment-date">
                                <span class="post-date"><i class="far fa-clock"></i> {{ date('d.M.Y',
                                    strtotime($post->created_at)) }}</span>
                                {{-- <span class="post-author">
                                    <i class="far fa-user"></i>
                                    <a href="#0">{{$post->user->name}}</a>
                                </span> --}}
                            </div>


                        </div>
                    </div>
                </article>
            </div>
            @endforeach


        </div>

    </div>

</div>



@endsection
