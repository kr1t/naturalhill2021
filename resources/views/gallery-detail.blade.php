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
            <div class="col-md-12">
                <h2 class="post-name">{{$project->meta_title}}</h2>
                <span class="venor-animate-border"></span>
            </div>

        </div>

        <div class="gallery">
            <div class="row">

                @if(isset($project->img_gal1))
                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="{{$project->img_gal1}}">
                            <img class="img-fluid lazy" src="/public/img/loading-blog.gif"
                                data-src="{{$project->img_gal1}}">
                        </a>
                    </div>
                </div>
                @endif

                @if(isset($project->img_gal2))

                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="{{$project->img_gal2}}">
                            <img class="img-fluid lazy" src="/public/img/loading-blog.gif"
                                data-src="{{$project->img_gal2}}">
                        </a>
                    </div>
                </div>
                @endif

                @if(isset($project->img_gal3))

                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="{{$project->img_gal3}}">
                            <img class="img-fluid lazy" src="/public/img/loading-blog.gif"
                                data-src="{{$project->img_gal3}}">
                        </a>
                    </div>
                </div>
                @endif

                @if(isset($project->img_gal4))

                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="{{$project->img_gal4}}">
                            <img class="img-fluid lazy" src="/public/img/loading-blog.gif"
                                data-src="{{$project->img_gal4}}">
                        </a>
                    </div>
                </div>
                @endif

                @if(isset($project->img_gal5))

                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="{{$project->img_gal5}}">
                            <img class="img-fluid lazy" src="/public/img/loading-blog.gif"
                                data-src="{{$project->img_gal5}}">
                        </a>
                    </div>
                </div>
                @endif

                @if(isset($project->img_gal6))

                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="{{$project->img_gal6}}">
                            <img class="img-fluid lazy" src="/public/img/loading-blog.gif"
                                data-src="{{$project->img_gal6}}">
                        </a>
                    </div>
                </div>
                @endif

                @if(isset($project->img_gal7))

                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="{{$project->img_gal7}}">
                            <img class="img-fluid lazy" src="/public/img/loading-blog.gif"
                                data-src="{{$project->img_gal7}}">
                        </a>
                    </div>
                </div>
                @endif


                @if(isset($project->img_gal8))

                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="{{$project->img_gal8}}">
                            <img class="img-fluid lazy" src="/public/img/loading-blog.gif"
                                data-src="{{$project->img_gal8}}">
                        </a>
                    </div>
                </div>
                @endif


                @if(isset($project->img_gal9))

                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="{{$project->img_gal9}}">
                            <img class="img-fluid lazy" src="/public/img/loading-blog.gif"
                                data-src="{{$project->img_gal9}}">
                        </a>
                    </div>
                </div>
                @endif

                @if(isset($project->img_gal10))
                <div class="col-md-6">
                    <div class="featured-image">
                        <a href="{{$project->img_gal10}}">
                            <img class="img-fluid lazy" src="/public/img/loading-blog.gif"
                                data-src="{{$project->img_gal10}}">
                        </a>
                    </div>
                </div>
                @endif


            </div>

        </div>

    </div>

</div>



@endsection
