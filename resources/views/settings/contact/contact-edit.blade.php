@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{clean( trans('niva-backend.contact_settings') , array('Attr.EnableID' =>
        true))}}</h1>




    @if ($message = Session::get('setting_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="pb-2 text-right">
        @if (!empty($langs))
        <select name="language" class="form-control language-control"
            onchange="window.location='{{url()->current() . '?language='}}'+this.value">
            <option value="" selected disabled>{{clean( trans('niva-backend.select_language') , array('Attr.EnableID' =>
                true))}}</option>
            @foreach ($langs as $lang)
            <option value="{{$lang->code}}" {{$lang->code == request()->input('language') ? 'selected' :
                ''}}>{{$lang->name}}</option>
            @endforeach
        </select>
        @endif
    </div>



    @include('includes.form-errors')

    <div class="row">

        <div class="col-md-12">


            <!-- Contact -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.contact_info') ,
                        array('Attr.EnableID' => true))}}</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('contact-setting.update', $setting->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.box_icon') , array('Attr.EnableID' => true))}}
                                        {!!$setting->box_icon1!!}</strong>
                                    <input type="text" name="box_icon1" class="form-control"
                                        value="{{$setting->box_icon1}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.box_icon') , array('Attr.EnableID' => true))}}
                                        {!!$setting->box_icon2!!}</strong>
                                    <input type="text" name="box_icon2" class="form-control"
                                        value="{{$setting->box_icon2}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.box_icon') , array('Attr.EnableID' => true))}}
                                        {!!$setting->box_icon3!!}</strong>
                                    <input type="text" name="box_icon3" class="form-control"
                                        value="{{$setting->box_icon3}}">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.box_title') , array('Attr.EnableID' =>
                                        true))}}</strong>
                                    <input type="text" name="box_title1" class="form-control"
                                        value="{{$setting->box_title1}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.box_title') , array('Attr.EnableID' =>
                                        true))}}</strong>
                                    <input type="text" name="box_title2" class="form-control"
                                        value="{{$setting->box_title2}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.box_title') , array('Attr.EnableID' =>
                                        true))}}</strong>
                                    <input type="text" name="box_title3" class="form-control"
                                        value="{{$setting->box_title3}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.box_description') , array('Attr.EnableID' =>
                                        true))}}</strong>
                                    <textarea name="box_html1" class="form-control"
                                        rows="6">{{clean( $setting->box_html1 , array('Attr.EnableID' => true))}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.box_description') , array('Attr.EnableID' =>
                                        true))}}</strong>
                                    <textarea name="box_html2" class="form-control"
                                        rows="6">{{clean( $setting->box_html2 , array('Attr.EnableID' => true))}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.box_description') , array('Attr.EnableID' =>
                                        true))}}</strong>
                                    <textarea name="box_html3" class="form-control"
                                        rows="6">{{clean( $setting->box_html3 , array('Attr.EnableID' => true))}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') ,
                                    array('Attr.EnableID' => true))}}</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <!-- Contact -->



            <!-- Sidebar information -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.map_info') ,
                        array('Attr.EnableID' => true))}}</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('contact-setting.update', $setting->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' => true))}}</strong>
                            <input type="text" name="title" class="form-control" value="{{$setting->title}}">
                        </div>

                        <div class="form-group">
                            <strong>{{clean( trans('niva-backend.map_iframe') , array('Attr.EnableID' =>
                                true))}}</strong>
                            <textarea name="iframe_txt" class="form-control"
                                rows="10">{{$setting->iframe_txt}}</textarea>
                        </div>


                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') ,
                                    array('Attr.EnableID' => true))}}</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <!-- Form information -->


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.section_clients') ,
                        array('Attr.EnableID' => true))}}</h6>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary"
                        href="{{ route('client.index') . '?language=' . request()->input('language')}}">{{clean(
                        trans('niva-backend.view_all') , array('Attr.EnableID' => true))}}</a>
                    <a class="btn btn-primary"
                        href="{{ route('client.create') . '?language=' . request()->input('language')}}">{{clean(
                        trans('niva-backend.create') , array('Attr.EnableID' => true))}}</a>
                </div>
            </div>


            <!-- SEO -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.seo') ,
                        array('Attr.EnableID' => true))}}</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('contact-setting.update', $setting->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.meta_title') , array('Attr.EnableID' =>
                                        true))}}</strong>
                                    <input type="text" name="meta_title" class="form-control"
                                        value="{{$setting->meta_title}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.meta_description') , array('Attr.EnableID' =>
                                        true))}}</strong>
                                    <input type="text" name="meta_description" class="form-control"
                                        value="{{$setting->meta_description}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.slug') , array('Attr.EnableID' =>
                                        true))}}</strong>
                                    <input type="text" name="slug" class="form-control" value="{{$setting->slug}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>{{clean( trans('niva-backend.anchor_text') , array('Attr.EnableID' =>
                                        true))}}</strong>
                                    <input type="text" name="breadcrumbs_anchor" class="form-control"
                                        value="{{$setting->breadcrumbs_anchor}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') ,
                                    array('Attr.EnableID' => true))}}</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <!-- SEO -->



        </div>
    </div>



</div>
<!-- /.container-fluid -->




@endsection
