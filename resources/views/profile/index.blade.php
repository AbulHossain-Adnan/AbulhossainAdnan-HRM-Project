@extends('layouts.Backend.master')
@section('content')
<div class="card ">
    <div class="card-header text-white bg-secondary">Profile list</div>
    <div class="card-body">
      <a class="btn btn-success" href="{{ route('profile.create') }}">Add Profile</a>
      
    
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Image</th>
                <th scope="col">name</th>
                <th scope="col">user_id</th>
                <th scope="col">adress</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($profiles as $profile)
              <tr>
             
                <td>{{$loop->index+1}}</td>
                <td>
                  <img src="{{asset('uploads/profile_photos')}}/{{$profile->image}}" alt="" width="80">
                </td>
                <td>{{$profile->name}}</td>
                <td>{{$profile->user_id}}</td>
                <td>{{$profile->adress}}</td>
                <td>
                  <a class="btn btn-warning" href="{{ route('profile.edit',$profile->id) }}">edit</a>
                  <a class="btn btn-success" href="{{ route('profile.show',$profile->id) }}">show</a>
                  <form id="delete-form.{{$profile->id}}" action="{{route('profile.destroy',$profile->id)}}" method="POST" style="display:none;">
                    @csrf
                    @method('DELETE')
                  </form>
           
                  <button type="button" class="btn btn-danger"onclick="if(confirm('are you sure?you want to delete this file?')){
                    event.preventDefault();
                    document.getElementById('delete-form.{{$profile->id}}').submit();
                  }else{
                      event.preventdefault();
                  }"><i class="fa fa-trash"></i></button>
           
                </td>
              </tr>
              @endforeach
              
            
            </tbody>
          </table>
    </div>
  </div>



@endsection