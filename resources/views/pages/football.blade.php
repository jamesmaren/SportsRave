 @extends('layouts.identity')
@section('title')
Football
@endsection

@section('content')
   <div id="content-identity">
            <h1 style="padding-left:200px;font-family:'sofia';color:#9900cc;"> <img src="{{URL::asset('/img/logo1.png')}}" height="60px" width="60px"/> Football Schedule </h1> 
          <h3  class="day-identity"> Friday   </h3>
     <div style="height:20px;">
          <p class="time-identity" > 14:00</p> 
          <a href="{{Route('stream')}}"    >
           <p class="match-identity"> Man-city vs Man-u</p>
           <p  class="live-video-identity"> video </P>
           </a>
        </div>
           <hr>
           <div style="height:20px;">
                        <p class="time-identity" > 14:00</p> 
           <a href="{{Route('stream')}}"    >
                         <p class="match-identity"> Barca vs AsRoma</p>
                         <p  class="live-video-identity"> live...</P>
                         </a>
                      </div>
                         <hr>
                         <div style="height:20px;">
                                        <p class="time-identity" > 21:45</p> 
                                        <a href="#"    >
                                         <p class="match-identity"> Barca vs Real Madrid</p>
                                         <p  class="live-video-identity"> video </P>
                                         </a>
                                      </div>
                                         <hr>
                                         <h3  class="day-identity"> Saturday </h3>
                                         <div style="height:20px;">
                                                        <p class="time-identity" >10:45</p> 
                                                        <a href="#"    >
                                                         <p class="match-identity"> Barca vs Real Madrid</p>
                                                         <p  class="live-video-identity"> video </P>
                                                         </a>
                                                      </div>
                                                         <hr>
                                                         <div style="height:20px;">
                                                                        <p class="time-identity" ></p> 
                                                                        <a href="#"    >
                                                                         <p class="match-identity"> </p>
                                                                         <p  class="live-video-identity"> </P>
                                                                         </a>
                                                                      </div>
                                                                         <hr>
                                                                         <div style="height:20px;">
                                                                                        <p class="time-identity" ></p> 
                                                                                        <a href="#"    >
                                                                                         <p class="match-identity"> </p>
                                                                                         <p  class="live-video-identity"> </P>
                                                                                         </a>
                                                                                      </div>
                                                                                         <hr>
                                                                                         <div style="height:20px;">
                                                                                                        <p class="time-identity" ></p> 
                                                                                                        <a href="#"    >
                                                                                                         <p class="match-identity"> </p>
                                                                                                         <p  class="live-video-identity"> </P>
                                                                                                         </a>
                                                                                                      </div>
                                                                                                         <hr>

   </div>
@endsection

