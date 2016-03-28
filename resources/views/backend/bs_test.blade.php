@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <section class="content-header">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('strings.backend.dashboard.welcome') }} {!! access()->user()->name !!}
                    !</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div><!-- /.box tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
                {!! getLanguageBlock('backend.lang.welcome') !!}
            </div><!-- /.box-body -->
        </div><!--box box-success-->
    </section>

    <section class="col-lg-6">
        <div class="callout callout-info">
            <h4>Tip!</h4>
            <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
                sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use
                regular links instead.</p>
        </div>
        <div class="callout callout-danger">
            <h4>Warning!</h4>
            <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the
                navbar and the content will slightly differ than that of the normal layout.</p>
        </div>
    </section>

    <section class="col-lg-6">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Blank Box</h3>
            </div>
            <div class="box-body">
                The great content goes here
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
@endsection