@extends('layout')
@section('title', 'Create Task')
    
@section('content')
    <h1>Create Task:</h1>
    <form action="{{route('tasks.store')}}" method="post" class="m-0 mt-3">
        @csrf
        <div class="row justify-content-center">
            <div class="col col-12">
                <label for="title"><h4>Title:</h4></label>
                <input type="text" name="tit" class="form-control" value="{{old('tit')}}">
                @error('tit')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col col-12">
                <label for="description"><h4>Description:</h4></label>
                <textarea name="des" id="description" rows="2" class="form-control">{{old('description')}}</textarea>
                @error('des')
                    <div class="text-danger">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col col-6">
                <button type="submit" class="btn btn-secondary w-100"><h5>Add</h5></button>
            </div>
            <div class="col col-6">
                <a href="{{route('tasks.index')}}" class="btn btn-dark w-100"><h5>Cancel</h5></a>
            </div>
        </div>
    </form>
    
@endsection