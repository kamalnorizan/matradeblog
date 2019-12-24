@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Posts List</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                Number
                            </td>
                            <td>
                                Title
                            </td>
                            </td>
                            <td>
                                Author
                            </td>
                            <td>
                                Action(s)
                            </td>
                        </tr>
                        @foreach ($posts as $key=>$post)
                        <tr>
                            <td>
                                {{$post->id}}
                            </td>
                            <td>
                                {{$post->user->name}}
                            </td>
                            <td>
                                {{$post->title}}
                            </td>
                            <td>
                                @foreach ($post->comments as $comment)
                                   <div class="well"> ~ {{$comment->comment}} </div><br>
                                @endforeach
                            </td>
                            <td>
                                {{-- {{$post->created_at}} --}}
                                {{\Carbon\Carbon::parse($post->created_at)->format('d-m-Y')}}
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">
                                {{-- {{$posts->links()}} --}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection