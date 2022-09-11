@extends('Front.layouts.app')

@section('title')
TÜRKMEN NEWS
@endsection


@section('css')
@endsection


@section('content')


<div class="news-image">
    <img src="{{asset('Front/assets/image/TurkmenAirport.jpg')}}" alt="Snow" style="width:100%;  height: 500px;">
    <div class="centered">Türkmen News Türkmen Habarlar Portaly</div>

</div>




<div class="container mb-5 ">
    



    <div class="row mt-5">
        <div class="col-6 " >
            <h6 style="font-size: 25px; font-weight: bold;">Täze Habarlar</h6>
        </div>
        <div class="col-6 " >
            <a href="{{route('news')}}" style="float:right ; background-color: #0a4275; color: white;" class="btn  p-1">Ähli habarlar</a>
        </div>
        <div style="width: 100%; height:1px; background-color:rgb(90, 90, 90)"></div>
        
    </div>
    
    <div class="container ">
        <div class="row ">
            
            <div class="col-md-3 mt-2 mb-2  ">
                <a class="link"  href="news_single.html">
                 <div class="card h-100 link ">
                     <img style="height: 150px;" src="{{asset('Front/assets/image/slide-1.jpg')}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
                     <div class="card-body ">
                         <h5 class="card-title ">Card title</h5>
                         <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer ">
                         <small class="text-muted ">Last updated 3 mins ago</small>
                     </div>
                 </div>
             </a>
             </div>


             <div class="col-md-3 mt-2 mb-2  ">
                <a class="link"  href="news_single.html">
                 <div class="card h-100 link ">
                     <img style="height: 150px;" src="{{asset('Front/assets/image/slide-1.jpg')}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
                     <div class="card-body ">
                         <h5 class="card-title ">Card title</h5>
                         <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer ">
                         <small class="text-muted ">Last updated 3 mins ago</small>
                     </div>
                 </div>
             </a>
             </div>


             <div class="col-md-3 mt-2 mb-2  ">
                <a class="link"  href="news_single.html">
                 <div class="card h-100 link ">
                     <img style="height: 150px;" src="{{asset('Front/assets/image/slide-1.jpg')}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
                     <div class="card-body ">
                         <h5 class="card-title ">Card title</h5>
                         <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer ">
                         <small class="text-muted ">Last updated 3 mins ago</small>
                     </div>
                 </div>
             </a>
             </div>


             <div class="col-md-3 mt-2 mb-2  ">
                <a class="link"  href="news_single.html">
                 <div class="card h-100 link ">
                     <img style="height: 150px;" src="{{asset('Front/assets/image/slide-1.jpg')}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
                     <div class="card-body ">
                         <h5 class="card-title ">Card title</h5>
                         <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer ">
                         <small class="text-muted ">Last updated 3 mins ago</small>
                     </div>
                 </div>
             </a>
             </div>


             



        
        
        </div>

    </div>
</div>





<div class="container mb-5 ">
    



    <div class="row mt-5">
        <div class="col-6 " >
            <h6 style="font-size: 25px; font-weight: bold;">Täze Makalalar</h6>
        </div>
        <div class="col-6 " >
            <a href="{{route('makalalar')}}" style="float:right ; background-color: #0a4275; color: white;" class="btn  p-1">Ähli makalalar</a>
        </div>
        <div style="width: 100%; height:1px; background-color:rgb(90, 90, 90)"></div>
        
    </div>
    
    <div class="container ">
        <div class="row ">

            <div class="col-md-3 mt-2 mb-2  ">
                <a class="link"  href="news_single.html">
                 <div class="card h-100 link ">
                     <img style="height: 150px;" src="{{asset('Front/assets/image/slide-1.jpg')}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
                     <div class="card-body ">
                         <h5 class="card-title ">Card title</h5>
                         <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer ">
                         <small class="text-muted ">Last updated 3 mins ago</small>
                     </div>
                 </div>
             </a>
             </div>

             <div class="col-md-3 mt-2 mb-2  ">
                <a class="link"  href="news_single.html">
                 <div class="card h-100 link ">
                     <img style="height: 150px;" src="{{asset('Front/assets/image/slide-1.jpg')}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
                     <div class="card-body ">
                         <h5 class="card-title ">Card title</h5>
                         <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer ">
                         <small class="text-muted ">Last updated 3 mins ago</small>
                     </div>
                 </div>
             </a>
             </div>


             <div class="col-md-3 mt-2 mb-2  ">
                <a class="link"  href="news_single.html">
                 <div class="card h-100 link ">
                     <img style="height: 150px;" src="{{asset('Front/assets/image/slide-1.jpg')}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
                     <div class="card-body ">
                         <h5 class="card-title ">Card title</h5>
                         <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer ">
                         <small class="text-muted ">Last updated 3 mins ago</small>
                     </div>
                 </div>
             </a>
             </div>


             <div class="col-md-3 mt-2 mb-2  ">
                <a class="link"  href="news_single.html">
                 <div class="card h-100 link ">
                     <img style="height: 150px;" src="{{asset('Front/assets/image/slide-1.jpg')}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
                     <div class="card-body ">
                         <h5 class="card-title ">Card title</h5>
                         <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer ">
                         <small class="text-muted ">Last updated 3 mins ago</small>
                     </div>
                 </div>
             </a>
             </div>

       

        
        </div>

    </div>
</div>

@endsection


@section('js')
@endsection