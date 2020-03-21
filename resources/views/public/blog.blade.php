@extends('layouts.home')

@section('styles')

    <style>
        /* body{
            background-color:
        } */
    </style>

@endsection

@section('body')

    <div class="blog1">
        <div class="content">
            @if (Session::has('message'))
                <div class="alert success">
                    {{Session::get('message')}}
                </div>
            @endif

            @foreach ($posts as $post)
                <div class="content-div">
                    <div class="content-header">
                        {{$post->title}}
                    </div>
                    <div class="content-words">
                        {{$post->description}}
                    </div>
                    <div class="content-name">
                        {{$post->name}}
                    </div>
                    <div class="content-time">
                        {{$post->created_at->format('l jS F Y h:i A')}}
                    </div>
                    <div class="content-thumb">
                        <div class="thumb-img">
                            <img src="{{asset('assets/images/content-img.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="aside">
            <div class="editor">
                <div class="editor-img">
                <img src="{{asset('assets/images/6lack-new-album-title.jpg')}}" alt="">
                </div>
                <div class="editor-name">
                    <div>
                        Iyenogun Daniel
                    </div>
                    <div>
                        Editor Juhla's School of Arts and Magic
                    </div>
                </div>
                <div class="editor-details">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque omnis obcaecati praesentium, dolore facilis culpa similique error pariatur. Et adipisci, iste odio aperiam quos nisi iure suscipit hic, eaque aliquid perferendis ab at qui quo sit nostrum sed provident. Voluptate nemo, rem repellat nulla perspiciatis aliquam eligendi id fugit sequi.
                </div>
            <a href="{{route('blog.create')}}" class="create-button">Create Story</a>
            </div>
        </div>
    </div>

@endsection
