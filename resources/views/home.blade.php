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
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
