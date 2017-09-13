@extends('admin.layouts.dashboardhome') 

@section('template_title') Edit your profile 
@endsection 

@section('template_fastload_css') 
@endsection 

@section('content')

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
				Home Edit
				<small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small>
			</h1> {!! Breadcrumbs::render('profile_edit', $user) !!}

    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                {{ Form::open(array('route' => 'posts.store')) }}
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            {{Form::label('title', 'Title')}} {{Form::text('title',null,array('class' => 'form-control', 'placeholder'=>'Title'))}}
                        </div>
                        <div class="form-group">
                            {{Form::label('body', 'Content')}} {{Form::textarea('body',null,array('class' => 'form-control', 'placeholder'=>'Content', 'id' => 'summernote'))}}
                        </div>
                        <div class="form-group">
                            {{Form::submit('Publish Post',array('class' => 'btn btn-primary btn-sm'))}} </div>
                        {{Form::close()}}
                        <script>
                            $('#summernote').summernote({
                                placeholder: 'Hello bootstrap 4',
                                tabsize: 2,
                                height: 300
                            });
                        </script>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </section>
</div>

@endsection 

@section('template_scripts') 

    @include('admin.structure.dashboard-scripts')  

@endsection