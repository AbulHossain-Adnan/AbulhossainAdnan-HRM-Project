@extends('layouts.Backend.master')
@section('content')
<div class="row">
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">
            <div class="card border-primary mb-3">
                <div class="card-header text-white bg-primary">Add Notice+</div>
                <div class="card-body">
                    <div class="row m-auto">
                        <div class="col-sm-10">
                          <div class="card">
                            <div class="card-body">
                                <form action="{{route('notice.store')}}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-2 col-form-label">Title**</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="title">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputPassword3" class="col-sm-2 col-form-label">description**</label>
                                      <div class="col-sm-10">
                                       <textarea name="textarea" id="textarea" cols="67" rows="8"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="col-sm-10">
<button type="submit" class="btn btn-primary">
                                      </div>
                                    </div>
                                  </form>
                            </div>
         <!DOCTYPE html>
                          <html>
                          <head>
                              <meta charset="utf-8">
                              <title><!doctype html></title>
                          </head>
                          <body>
                          
                          </body>
                          </html>                 </div>
                        </div>
                </div>
                <div class="card-footer bg-transparent border-success"></div>
              </div>
        </div>
      </div>
    </div>

<script src="https://cdn.tiny.cloud/1/mvf1q7ov19raltn0vg0b9234dqhfkpxn4zbtz97jao8v0ulc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>    
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
    {{-- <script>
        tinymce.init({
            selector:'#textarea'
        });
      </script> --}}

      {{-- get worning show problem solution from stact overflow --}}
      <script>
      tinymce.init({
        selector: 'textarea',
        
        init_instance_callback : function(editor) {
    var freeTiny = document.querySelector('.tox .tox-notification--in');
    forced_root_block : false,
   freeTiny.style.display = 'none';
 
  }
 });


      </script>
@endsection

