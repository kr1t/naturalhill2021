@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{clean( trans('Edit Gallery') , array('Attr.EnableID' => true))}}
    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{clean( trans('Edit Gallery') ,
                array('Attr.EnableID' => true))}}</h6>
        </div>
        <div class="card-body">

            <a href="{{route('gallery.index') . '?language=' . request()->input('language')}}"
                class="btn btn-primary btn-back">{{clean( trans('Back to Gallery Page') , array('Attr.EnableID'
                => true))}}</a>

            @if ($message = Session::get('project_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                <strong>{{ $message }}</strong>
            </div>
            @endif


            @include('includes.form-errors')

            <div class="row">

                <div class="col-md-12">

                    <form action="{{route('gallery.update', $project->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' =>
                                                true))}}</strong>
                                            <input type="text" name="title" class="form-control" placeholder=""
                                                value="{{$project->title}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.link') , array('Attr.EnableID' =>
                                                true))}}</strong>
                                            <div class="slug-container"><span>{{URL::to('/')}}/{{clean(
                                                    trans('gallery') , array('Attr.EnableID' =>
                                                    true))}}/</span><input type="text" name="slug" class="form-control"
                                                    placeholder="" value="{{$project->slug}}"></div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' =>
                                                true))}} 1</strong>
                                            <img class="img-fluid pb-4" width="100" height="100"
                                                src="{{$project->img_gal1 ? $project->img_gal1 : '/public/img/200x200.png'}}">
                                            <input type="text" name="img_gal1" class="form-control" placeholder=""
                                                value="{{$project->img_gal1}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' =>
                                                true))}} 2</strong>
                                            <img class="img-fluid pb-4" width="100" height="100"
                                                src="{{$project->img_gal2 ? $project->img_gal2 : '/public/img/200x200.png'}}">
                                            <input type="text" name="img_gal2" class="form-control" placeholder=""
                                                value="{{$project->img_gal2}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' =>
                                                true))}} 3</strong>
                                            <img class="img-fluid pb-4" width="100" height="100"
                                                src="{{$project->img_gal3 ? $project->img_gal3 : '/public/img/200x200.png'}}">
                                            <input type="text" name="img_gal3" class="form-control" placeholder=""
                                                value="{{$project->img_gal3}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' =>
                                                true))}} 4</strong>
                                            <img class="img-fluid pb-4" width="100" height="100"
                                                src="{{$project->img_gal4 ? $project->img_gal4 : '/public/img/200x200.png'}}">
                                            <input type="text" name="img_gal4" class="form-control" placeholder=""
                                                value="{{$project->img_gal4}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' =>
                                                true))}} 5</strong>
                                            <img class="img-fluid pb-4" width="100" height="100"
                                                src="{{$project->img_gal5 ? $project->img_gal5 : '/public/img/200x200.png'}}">
                                            <input type="text" name="img_gal3" class="form-control" placeholder=""
                                                value="{{$project->img_gal5}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' =>
                                                true))}} 6</strong>
                                            <img class="img-fluid pb-4" width="100" height="100"
                                                src="{{$project->img_gal6 ? $project->img_gal6 : '/public/img/200x200.png'}}">
                                            <input type="text" name="img_gal4" class="form-control" placeholder=""
                                                value="{{$project->img_gal6}}">
                                        </div>
                                    </div>
                                </div>


   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' =>
                                                true))}} 7</strong>
                                            <img class="img-fluid pb-4" width="100" height="100"
                                                src="{{$project->img_gal7 ? $project->img_gal7 : '/public/img/200x200.png'}}">
                                            <input type="text" name="img_gal3" class="form-control" placeholder=""
                                                value="{{$project->img_gal7}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' =>
                                                true))}} 8</strong>
                                            <img class="img-fluid pb-4" width="100" height="100"
                                                src="{{$project->img_gal8 ? $project->img_gal8 : '/public/img/200x200.png'}}">
                                            <input type="text" name="img_gal4" class="form-control" placeholder=""
                                                value="{{$project->img_gal8}}">
                                        </div>
                                    </div>
                                </div>

   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' =>
                                                true))}} 9</strong>
                                            <img class="img-fluid pb-4" width="100" height="100"
                                                src="{{$project->img_gal9 ? $project->img_gal9 : '/public/img/200x200.png'}}">
                                            <input type="text" name="img_gal3" class="form-control" placeholder=""
                                                value="{{$project->img_gal9}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' =>
                                                true))}} 10</strong>
                                            <img class="img-fluid pb-4" width="100" height="100"
                                                src="{{$project->img_gal10 ? $project->img_gal10 : '/public/img/200x200.png'}}">
                                            <input type="text" name="img_gal4" class="form-control" placeholder=""
                                                value="{{$project->img_gal10}}">
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.meta_title') , array('Attr.EnableID' =>
                                                true))}}</strong>
                                            <input type="text" name="meta_title" class="form-control" placeholder=""
                                                value="{{$project->meta_title}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>{{clean( trans('niva-backend.meta_description') ,
                                                array('Attr.EnableID' => true))}}</strong>
                                            <input type="text" name="meta_description" class="form-control"
                                                placeholder="" value="{{$project->meta_description}}">
                                        </div>
                                    </div>
                                </div>

                            </div>




                            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') ,
                                    array('Attr.EnableID' => true))}}</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->




@endsection
