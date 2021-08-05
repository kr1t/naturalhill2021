@extends('layouts.front')


@section('title') {{$portfoliosettings->meta_title}} @endsection
@section('meta') {{$portfoliosettings->meta_description}} @endsection


@section('content')


<div class="breadcrumb-area">
    <h1 class="breadcrumb-title">{{$portfoliosettings->meta_title}}</h1>
    <ul class="page-list">
        <li class="item-home"><a class="bread-link" href="{{ route('home') }}"
                title="Home">{{$portfoliosettings->breadcrumbs_anchor}}</a></li>
        <li class="separator separator-home"></li>
        <li class="item-current">{{$portfoliosettings->meta_title}}</li>
    </ul>
</div>

<div class="portfolio-section-filters">
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="filters">
                    <h4>{{clean( trans('niva-backend.sort_by') , array('Attr.EnableID' => true))}}</h4>
                    <div class="filter active" data-filter="all"><span>{{clean( trans('niva-backend.all') ,
                            array('Attr.EnableID'
                            => true))}}</span></div>
                    @foreach($project_categories as $category)
                    <div class="filter" data-filter="{{$category->name}}"><span>{{$category->name}}</span></div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-9">
                <div class="projects projects-page row">

                    @foreach($projects as $project)
                    <div class="project col-lg-6 col-md-12 mb-3 d-flex" data-filter="{{$project->project_category->name}}">
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
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>



@endsection
