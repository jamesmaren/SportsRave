@extends('layouts.master')

@section('title')
Account
@endsection

@section('content')
       <section class="row new-post">
           <div class="col-md-6 col-md-offset-3">
               <header><h3 style="color:green;font-family: 'Sofia';font-size:30px;">Your Account</h3></header>
           <form action="{{route('account.save')}}" method="post" enctype="multiple/form-data">
            <div class="form-group">
                <label for="first_name" style="color:black;font-family: 'Sofia';font-size:19px;">First name</label>
            <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" id="first_name">
                <label for="email" style="color:black;font-family: 'Sofia';font-size:19px;">Email adress</label>
            <input type="text" name="email" class="form-control" value="{{ $user->email }}" id="email">

            </div>
            <div class="form-group">
                <label for="image"style="color:black;font-family: 'Sofia';font-size:19px;"> image</label>
                <input type="file"  name="image"  class="form-control" id="image">
            </div>
            <button type="submit"  class="btn btn-primary" > Save Account </button>
            <input type="hidden" name="_token"  value="{{Session::token()}}" />
        
        </form>

    </section>

   @if(Storage::disk('local')->has($user->first_name. '-'. $user->id. '.jpg'))   
   <section class="row new-post">
       <div class="col-md-6 col-md-offset-3">
       <img src="{{route('account.image',['filename' => $user->first_name . '-'. $user->id. '.jpg'] )}}" alt="" class="img-responsive">
       </div>
       </section>
       @endif


@endsection


