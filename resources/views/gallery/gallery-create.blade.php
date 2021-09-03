

@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{clean( trans('Create Gallery') , array('Attr.EnableID' => true))}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{clean( trans('Create Gallery') , array('Attr.EnableID' => true))}}</h6>
        </div>
        <div class="card-body">



                <div class="row">
                    <div class="col-lg-6">
                        <a href="{{route('gallery.index') . '?language=' . request()->input('language')}}" class="btn btn-primary btn-back">{{clean( trans('Back to Gallery Page') , array('Attr.EnableID' => true))}}</a>
                    </div>


                </div>



                @if ($message = Session::get('project_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @include('includes.form-errors')

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">



                                    <input type="hidden" name="language_id" value="{{$lang_id}}">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.link') , array('Attr.EnableID' => true))}}</strong>
                                                <div class="slug-container"><span>{{URL::to('/')}}/{{clean( trans('gallery') , array('Attr.EnableID' => true))}}/</span><input type="text" name="slug" class="form-control" placeholder=""></div>
                                            </div>
                                        </div>
                                    </div>







                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Description</strong>
                                                <textarea name="des" class="form-control" style="height: 200px;"></textarea>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}} 1</strong>
                                                <input type="text" name="img_gal1" class="form-control" placeholder="">
                                                <strong class="mt-3">Description</strong>
                                                <input name="des_img_gal1" class="form-control"></input>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}} 2</strong>
                                                <input type="text" name="img_gal2" class="form-control" placeholder="">
                                                <strong class="mt-3">Description</strong>
                                                <input name="des_img_gal2" class="form-control"></input>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}} 3 </strong>
                                                <input type="text" name="img_gal3" class="form-control" placeholder="">
                                                <strong class="mt-3">Description</strong>
                                                <input name="des_img_gal3" class="form-control"></input>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}}4 </strong>
                                                <input type="text" name="img_gal4" class="form-control" placeholder="">
                                                <strong class="mt-3">Description</strong>
                                                <input name="des_img_gal4" class="form-control"></input>
                                            </div>
                                        </div>
                                    </div>


                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}} 5 </strong>
                                                <input type="text" name="img_gal5" class="form-control" placeholder="">
                                                <strong class="mt-3">Description</strong>
                                                <input name="des_img_gal5" class="form-control"></input>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}}6 </strong>
                                                <input type="text" name="img_gal6" class="form-control" placeholder="">
                                                <strong class="mt-3">Description</strong>
                                                <input name="des_img_gal6" class="form-control"></input>
                                            </div>
                                        </div>
                                    </div>


                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}} 7 </strong>
                                                <input type="text" name="img_gal7" class="form-control" placeholder="">
                                                <strong class="mt-3">Description</strong>
                                                <input name="des_img_gal7" class="form-control"></input>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}}8 </strong>
                                                <input type="text" name="img_gal8" class="form-control" placeholder="">
                                                <strong class="mt-3">Description</strong>
                                                <input name="des_img_gal8" class="form-control"></input>
                                            </div>
                                        </div>
                                    </div>



                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}} 9 </strong>
                                                <input type="text" name="img_gal9" class="form-control" placeholder="">
                                                <strong class="mt-3">Description</strong>
                                                <input name="des_img_gal9" class="form-control"></input>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}}10 </strong>
                                                <input type="text" name="img_gal10" class="form-control" placeholder="">
                                                <strong class="mt-3">Description</strong>
                                                <input name="des_img_gal10" class="form-control"></input>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.meta_title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="meta_title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.meta_description') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="meta_description" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.create') , array('Attr.EnableID' => true))}}</button>
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


