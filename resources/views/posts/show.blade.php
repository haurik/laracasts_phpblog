@extends('layouts.master')

@section('content')


<!-- <div class="col-sm-8 blog-main"> -->
    <!-- <div class="row"> -->
        <h2 class="blog-post-title"> 
            {{ $post->title }} 
        </h2>

        <p class="blog-post-body">{{ $post->body }}</p>

        <hr

        <div class="comments">

            <ul class="list-group">

                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong> 
                            {{ $comment->created_at->diffForHumans() }} from {{ $post->user->name }}
                        </strong>
                        <br>

                        {{ $comment->body }}
                    </li>
                @endforeach
            
            </ul>
        
        <hr>

        <div class="card">

            <div class="card-block" >

                <form action="/comments/{{ $post->id }}" method="POST">

                {{ csrf_field() }}

                    <div class="form-group">
                        <textarea class="form-control" id="comment" name="body" placeholder="Enter comment"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create comment</button>
                    </div>


                </form>
                
            </div>

        </div>
    <!-- </div> -->
<!-- </div> -->

@endsection