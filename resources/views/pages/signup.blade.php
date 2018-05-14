@extends('Layouts.master')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

    @section('title') 
    Signup
    @endsection

    @section('content')


    @include('includes.message-block')

     <div class="row">
         <div class="col-md-6">
             <h3>Signup</h3>
         <form action="{{route('signup')}}" method="post">
         <div class="form-group {{ $errors ->has('first_name') ? 'has-error' : '' }}">
                   <label for="first_name"> your first name</label>
                   <input class="form-control"  type="text"  name="first_name" id="first_name" value="{{Request::old('first_name')}}">
               </div> 
               <div class="form-group  {{ $errors ->has('second_name') ? 'has-error' : '' }}">
                    <label for="second_name"> your second name</label>
                    <input class="form-control"  type="text"  name="second_name" id="second_name" value="{{Request::old('second_name')}}">
                </div> 
                <div class="form-group  {{ $errors ->has('email') ? 'has-error' : '' }}">
                        <label for="email"> enter email</label>
                        <input class="form-control"  type="email"  name="email" id="email" value="{{Request::old('email')}}"  >
                    </div> 
                <div class="form-group  {{ $errors ->has('password') ? 'has-error' : '' }}">
                        <label for="password"> enter password</label>
                        <input class="form-control"  type="password"  name="password" id="password" value="{{Request::old('password')}}" >
                    </div> 
                    <!--
                    <div class="form-group">
                            <label for="password"> confirm password</label>
                            <input class="form-control"  type="password"  name="password" id="password">
                        </div> 
                    -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token"  value="{{Session::token()}}" />
                </form>
            </div>     
     </div>
    @endsection