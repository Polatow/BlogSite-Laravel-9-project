@extends('Front.layouts.app')

@section('title')
TÜRKMEN NEWS
@endsection


@section('css')
<link rel="stylesheet" href="{{asset('Backend/bootstrap.min.css')}}">

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
            
    @foreach ($habarlar as $habar)
            
    <div class="col-md-3 mt-2 mb-2  ">
        <a class="link"  href="{{route('single_news', $habar->habar_slug)}}">
         <div class="card h-100 link ">
             <img style="height: 150px;" src="/habar_images/{{$habar->habar_image}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
             <div class="card-body ">
                 <h5 class="card-title ">{{$habar->habar_title}}</h5>
                 {{-- <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p> --}}
             </div>
             <div class="card-footer ">
                <small  style="float: left" class="text-muted ">{{$habar->categories->category_name}}</small>
                 <small style="float: right" class="text-muted ">{{$habar->created_at->diffForHumans()}}</small>
             </div>
         </div>
     </a>
     </div>

    @endforeach
             
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

    @foreach ($makalalar as $makala)
            
    <div class="col-md-3 mt-2 mb-2  ">
        <a class="link"  href="#">
         <div class="card h-100 link ">
             <img style="height: 150px;" src="/makala_images/{{$makala->makala_image}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
             <div class="card-body ">
                 <h5 class="card-title ">{{$makala->makala_title}}</h5>
                 {{-- <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p> --}}
             </div>
             <div class="card-footer ">
             
                 <small style="float: right" class="text-muted ">{{$makala->created_at->diffForHumans()}}</small>
             </div>
         </div>
     </a>
     </div>

    @endforeach

        </div>

    </div>
</div>

@endsection


@section('js')
@endsection