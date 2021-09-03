@extends('layouts.front')


@section('title') Gallery | Natural Hill Huahin @endsection
@section('meta') Gallery @endsection


@section('content')


<div class="breadcrumb-area">
    <h1 class="breadcrumb-title">Gallery</h1>
    <ul class="page-list">
        <li class="item-home"><a class="bread-link" href="{{ route('home') }}" title="Home">Home</a></li>
        <li class="separator separator-home"></li>
        <li class="item-current">Gallery</li>
    </ul>
</div>

<div class="portfolio-section-filters">
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="projects projects-page row">

                    @foreach($projects as $project)
                    <div class="project col-md-4">
                        <div class="project-inner mt-3">
                            <div class="project-thumbnail">
                                <a href="{{URL::to('/')}}/gallery/{{$project->slug}}" title=""><img width="400"
                                        height="250"
                                        src="{{$project->img_gal1 ? $project->img_gal1 : '/public/img/200x200.png'}}"
                                        class="img-fluid" alt="{{$project->title}}"></a>
                            </div>
                            <h4 class="entry-details-title"> <a
                                    href="{{URL::to('/')}}/gallery/{{$project->slug}}">{{$project->title}}</a></h4>
                                    <hr>
                                    <p class="des-gallery">{!! $project->des !!}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>



@endsection
