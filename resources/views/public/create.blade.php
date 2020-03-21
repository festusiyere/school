@extends('layouts.home')

@section('body')
<div class="container">
    <div class="header">Create Post</div>
<form action="{{route('blog.store')}}" method="post">
    @csrf

       <div class="form-group">
            <label for="" class="form-label"> Blog Title
                <input type="text" name="title" value="{{old('title')}}" class="form-control {{$errors->has('title') ? 'danger' : '' }}">
            </label>
            @error('title')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>



        <div class="form-group">
            <label for="" class="form-label"> Blog Descirption
                 <textarea name="description" id="" cols="30" rows="10" class="form-control {{$errors->has('description') ? 'danger' : '' }}">{{old('description')}}</textarea>
            </label>
            @error('description')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="" class="form-label"> Your Name
                <input type="text" name="name" value="{{old('name')}}" class="form-control {{$errors->has('name') ? 'danger' : '' }}">
            </label>
            @error('name')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="" class="form-label"> Your Instagram Username
                <input type="text" name="igHandle" value="{{old('igHandle')}}" class="form-control {{$errors->has('igHandle') ? 'danger' : '' }}">
            </label>
            @error('igHandle')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <button class="button" type="submit">Submit</button>

    </form>
    {{-- @if ($errors->any())
    <div class="notification">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
</div>


@endsection
