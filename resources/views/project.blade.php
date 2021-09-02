@extends('layouts.front')

@section('title') {{$project->meta_title}} @endsection
@section('meta') {{$project->meta_description}} @endsection

@section('styles')
<link href="{{ asset('css/front/magnific.min.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('content')


<div class="breadcrumb-area">
    <h1 class="breadcrumb-title">{{$project->meta_title}}</h1>
</div>

<div class="project-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="post-name">{{$project->meta_title}}</h2>
                <span class="venor-animate-border"></span>
                {!!$project->body!!}
            </div>
            <div class="col-md-4">
                <h4 class="post-name">Info</h4>
                <span class="venor-animate-border"></span>

                <p><strong class="price-tag">{{$project->price}}</strong></p>
                <p><strong>{{$project->project_category->name}}</strong></p>

                @if($project->button_link)
                <a href="{{$project->button_link}}" target="_blank"
                    class="btn btn-style1"><span>{{$project->button_text}}</span></a>
                @endif
            </div>
        </div>

        <div class="gallery">
            <div class="row ">

                @foreach([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20] as $n)
                @if($project['img_gal'.$n])
                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="{{$project['img_gal'.$n]}}">
                            <img class="img-fluid lazy d-flex" src="/public/img/loading-blog.gif"
                                data-src="{{$project['img_gal'.$n]}}">
                        </a>
                    </div>
                </div>
                @endif
                @endforeach


            </div>

        </div>

        <hr>

    <h4 class="post-name">Recent Designs</h4>
    <span class="venor-animate-border"></span>

        <div class="projects projects-page portfolio-section-filters row">
                @foreach($projects as $project)
                <div class="project col-lg-3 col-md-6 mb-3" data-filter="{{$project->project_category->name}}">
                    <div class="project-inner">
                        <div class="project-thumbnail d-flex">
                            <a href="{{URL::to('/')}}/project/{{$project->slug}}" title=""><img width="400"
                                    height="250"
                                    src="{{$project->photo ? '/images/media/' . $project->photo->file : '/public/img/200x200.png'}}"
                                    class="img-fluid" alt="{{$project->title}}"></a>
                        </div>
                        <h4 class="entry-details-title" > <a style="font-size: 1.2rem"
                                href="{{URL::to('/')}}/project/{{$project->slug}}">{{$project->title}}</a><h5 class="project-category project-category_box float-right" style="font-size: 0.7rem">{{$project->project_category->name}}</h5></h4>

                        <p class="review_block_text" style="font-size: 0.8rem">{!!$project->review!!}
                        @if($project->price)
                        <h5 class="price-tag-4-col  float-right">{{$project->price}}</h5>
                        @endif
                        </p>
                    </div>
                </div>
                @endforeach
        </div>

    </div>

</div>



@endsection
