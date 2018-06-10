@extends('Layouts.master')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

    @section('title') 
    LOGIN
    @endsection

    @section('content')

    @include('includes.message-block')
     <div class="row">
         <div class="col-md-6">
             <h3> LOGIN</h3>
         <form action="{{route('signin')}}" method="post">
               <div class="form-group  {{ $errors ->has('email') ? 'has-error' : '' }}">
                   <label for="email"> your E-mail</label>
                   <input class="form-control"  type="text"  name="email" id="email" value="{{Request::old('email')}}">
               </div> 
                <div class="form-group"  {{ $errors ->has('password') ? 'has-error' : '' }}>
                        <label for="password"> enter password</label>
                        <input class="form-control"  type="password"  name="password" id="password" value="{{Request::old('password')}}">
                    </div> 
                     <p> <a href='#'> forgot password </a> </p>  
                <p style="font-size:24px;font-family:'sofia';">  <a href="{{route('signup')}}"> <span style="color:#4fa30e;">Dont  have account , sign up !</span></a> </p>
                      
                    <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token"  value="{{Session::token()}}" />
                </form>
            </div>     
     </div>
    @endsection