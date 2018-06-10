@extends ('layouts.master')
@section('title')
  Home 
@endsection

@section('content')
     <h2 style="color:green;font-family: 'Sofia';font-size:30px;"> Sports </h2>
  <div  style="padding-left:40px;padding-top:px;width:1100px;height:310px;">

      <div class="hovereffect">
    <div style=" border: 1.5px solid red;
    border-radius: 5px; width:310px;height:290px;float:left;">
    <img  class="img" src="{{URL::asset('/img/football.jpg')}}"height="286px" width="306px"  >
    </div>
    <div class="overlay">
       <strong> <h4 style="font-size:20px;">football</h4></strong>
    <p><a href="{{route('football')}}">view page</a></p>
    </div>
</div>

    <div style=" width:270px;height:300px;float:left;padding-left:10px;">
        <div class="hovereffect">
           <div  style="border: 2px solid red;border-radius:5px; width: 250px; height:140px;">
           <img src="{{ URL::asset('/img/basketball.jpg')}}"  height="136px" width="246px"/>
           </div>
           <div class="overlay">
              <strong> <h4 style="font-size:20px;">basketball</h4></strong>
           <p><a href="{{route('basketball')}}">view page</a></p>
           </div>
       </div>
   <br> <br>
   <div class="hovereffect">
           <div  style="border: 2px solid red;border-radius:5px; width: 250px; height:140px;">
              <img src="{{ URL::asset('/img/rugby.jpg')}}"  height="136px" width="246px"/>
            </div>
            <div class="overlay">
                <strong> <h4 style="font-size:20px;">rugby</h4></strong>
             <p><a href="{{route('rugby')}}">view page</a></p>
             </div>
         </div>
            
    </div>

    <div style=" width:270px;height:310px;float:left;padding-left:10px;">
        <div class="hovereffect">
           <div  style="border: 1px solid red;border-radius:5px; width: 250px; height:140px;">
              <img src="{{ URL::asset('/img/formula1.jpg')}}"  height="136px" width="246px"/>
           </div>
           <div class="overlay">
              <strong> <h4 style="font-size:20px;">formula1</h4></strong>
           <p><a href="{{route('formula1')}}">view page</a></p>
           </div>
       </div>
   <br>
   <div class="hovereffect">
           <div  style="border: 1px solid red;border-radius:5px; width: 250px; height:140px;">
              <img src="{{ URL::asset('/img/cricket.jpg')}}"  height="136px" width="246px"/>
            </div>
            <div class="overlay">
                <strong> <h4 style="font-size:20px;">cricket</h4></strong>
             <p><a href="{{route('cricket')}}">view page</a></p>
             </div>
         </div>
            
    </div>
  </div>
             <!--end nav sports >

<!- start top live --> <!--start top live -->
  <div id="home-toplive">
       <h2>Top Live </h2>  
       <div>
          
          </div> 
          <div>
          
            </div>
            <div>
          
              </div>
              <div>
          
                </div>
                <div>
          
                  </div>
  </div>
          <!-- end top live-->

 <!-- start football --> <!-- start football --> 
 <div id="home-football">
    <h2>Football </h2>  
    <div>
       
       </div> 
       <div >
       
         </div>
         <div  >
       
           </div>
           <div >
       
             </div>
             <div>
       
               </div>
</div>
         <!-- end football -->

         <!-- start Basketball --> <!-- start Basketball --> 
 <div id="home-basketball" >
    <h2>Basketball</h2>  
    <div>
       
       </div> 
       <div>
       
         </div>
         <div>
       
           </div>
           <div>
       
             </div>
             <div>
               </div>
</div>
         <!-- end Basketball -->

         <!-- start  Rugby --> <!-- start Rugby --> 
 <div id="home-rugby">
    <h2>Rugby</h2>  
    <div>
       
       </div> 
       <div>

         </div>
         <div>
       
           </div>
           <div>

             </div>
             <div>
       
               </div>
</div>
         <!-- end rugby -->

@endsection
