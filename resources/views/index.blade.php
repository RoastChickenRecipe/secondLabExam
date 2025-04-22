@extends('layout')
@section('title', 'Tasks')
    
@section('content')
    
    <h1>Tasks</h1>
    <div class="bg row justify-content-center m-0">
        <div class="col col-8">
            
            <a href="{{route('tasks.create')}}"class="btn btn-dark w-100"><h4>Create Task</h4></a>
        </div>
    </div>

    <div class="bg-main row m-0 mt-5">
        <div class="col col-12" style="height: 500px; overflow:auto;">
            @foreach ($tasks as $row)
                
            
                <div class="bg row mt-5">
                    <div class="col col-12">
                        

                        <div class="row justify-content-between" >
                            <div class="bg-sec col col-5 text-center align-self-center">
                                <h4>Title: {{$row->title}}</h4>
                            </div>

                            <div class="bg-sec col col-5 text-center align-self-center">
                                <h4>Status: {{$row->is_completed?'Completed' : 'Pending'}}</h4>
                            </div>
                        </div>
            
                        <div class="bg-sec row justify-content-center mt-3">
                            <div class="col col-12">
                                <h4>{{$row->description}}</h4>
                            </div>
                        </div>

                        <div class="bg-sec row mt-5">
                            <div class="col col-6">
                                <a href="{{route('tasks.edit', $row->id)}}" class="btn btn-dark w-100"><h5>Edit</h5></a>
                            </div>
                            <div class="col col-6">
                                <form action="{{route('tasks.destroy', $row->id)}}" method="post" class="m-0">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger w-100"><h5>Delete</h5></button>

                                </form>
                            </div>
                        </div>

                        
                        

                    </div>
                </div>
            @endforeach
            


        </div>
    </div>
    

@endsection