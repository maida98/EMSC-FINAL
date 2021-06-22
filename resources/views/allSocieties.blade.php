@extends('welcome')

@section('content')

            <!-- =================================CAROUSEL==================================== -->
            <section id="carousel">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/cui.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/image.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/11.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/cuii.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/8.jpg" alt="Third slide">
    </div>
  </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </section>
            <!-- =================================END CAROUSEL==================================== -->


            <!-- =================================SOCIETY==================================== -->
            <div class="text-center mt-5">
        <h1 ><b>SOCIETIES</b></h1>
    </div>
            
            <form action="{{route('eventPage')}}" method="post">
            
                @csrf
                <input type="hidden" value="{{$societies}}">
                <div class="container mt-2">
                <div class="row">
                @foreach($societies as $society)
                
                
                    
                        <!-- row 1 -->
                        <div class="col-md-4 mb-5">
            <div class="box">
                <div class="our-services settings">
                    <div class="icon"> <img src="/images/{{$society->id}}.png" height="100"> </div>
                    <h4>{{$society->title}}</h4>
                    <p>
                    {{ $society->description }}</p>
                    <button class="btn mb-2 text-white" style="background-color: #4C9EDC;" type="submit" name="societyId" value="{{$society->id}}">View Events</button>
                    
                </div>
                </div>
            </div>
       
        
        
                        <!-- row 2 -->
                            <!-- left side of the card -->
                            
                    
                
                @endforeach
                </div>
                </div>
            </form>
            <!-- =================================END SOCIETY==================================== -->


   @endsection
