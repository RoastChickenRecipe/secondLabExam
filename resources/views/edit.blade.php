@extends('layout')
@section('title', 'Edit Tasks')
    
@section('content')

<h1>Edit Task:</h1>
<form action="{{route('tasks.update', $data->id)}}" method="post" class="m-0 mt-3">
    @csrf
    @method('put')
    <div class="row justify-content-center">
        <div class="col col-6">
            <label for="title"><h4>Title:</h4></label>
            <input type="text" name="tit" class="form-control" value="{{$data->title}}">
        </div>
        <div class="col col-6">
            <label for="status"><h4>Status:</h4></label>
            <select name="status" id="status" class="form-select">
                <option value="{{$data->is_completed}}">{{$data->is_completed?'Completed':'Pending'}}</option>
                <option value="{{$data->is_completed?0:1}}">{{$data->is_completed?'Pending':'Completed'}}</option>
                
            </select>
        </div>

        <div class="col col-12 mt-3">
            <label for="description"><h4>Description:</h4></label>
            <textarea name="des" id="description" rows="2" class="form-control">{{$data->description}}</textarea>
        </div>

        
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col col-6">
            <button type="submit" class="btn btn-secondary w-100"><h5>Update</h5></button>
        </div>
        <div class="col col-6">
            <a href="{{route('tasks.index')}}" class="btn btn-dark w-100"><h5>Cancel</h5></a>
        </div>
    </div>
</form>
    
@endsection