@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <strong>{{$singlepost->title}}</strong><br>
                    You are logged in! <br>
                    @foreach ($posts as $key=>$post)
                        {{$key+1}}. {{ $post->title }} <br> 
                    @endforeach
                    {!! Form::open(['method' => 'POST', 'route' => 'post.store']) !!}
                    
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            {!! Form::label('title', 'Title') !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </div>
                        <div class="form-group{{ $errors->has('published_at') ? ' has-error' : '' }}">
                            {!! Form::label('published_at', 'Publish Date') !!}
                            {!! Form::date('published_at', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('published_at') }}</small>
                        </div>
                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            {!! Form::label('content', 'Content') !!}
                            {!! Form::textarea('content', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('content') }}</small>
                        </div>

                    
                        <div class="btn-group pull-right">
                            {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                            {!! Form::submit("Save", ['class' => 'btn btn-success']) !!}
                        </div>
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
    
@endsection
