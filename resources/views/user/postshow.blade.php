@extends('layouts.Backend/master')
@section('content')

<div class="card">
    <div class="card-header text-white bg-secondary">User list</div>
    <div class="card-body">
    
      
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">user_id</th>
                <th scope="col">name</th>
                <th scope="col">details</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $index=1;
                ?>
                @foreach ($posts as $user)
              <tr>
                <td>{{$index++}}</td>
                <td>{{$user->user_id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->details}}</td>
             
              
                <td>
                 
                  <a class="btn btn-warning" href="#">edit</a>
                  <a class="btn btn-danger" href="#">delete</a>
                 
                </td>


              </tr>
              @endforeach
              
            
            </tbody>
          </table>
    </div>
  </div>



@endsection