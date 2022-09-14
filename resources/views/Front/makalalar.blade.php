@extends('Front.layouts.app')

@section('title')
Turkmen news | Makalalar
@endsection


@section('css')
<link rel="stylesheet" href="{{asset('Backend/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('Front/assets/custom_style/style.css')}}">
@endsection


@section('content')
<div class="makala-image">
    <img src="{{asset('Front/assets/image/makala.jpg')}}" alt="maka" style="width:100%;  height: 300px;">
    <div class="centered_makala">Makalalar</div>

</div>

<div class="container">
    <div class="row">
     <div class="col-12 mt-3">

        <div class="row">

            @foreach ($makalalar as $makala)

    <div class="col-md-3 mt-2 mb-2  ">
        <a class="link"  href="{{route('single_makalalar',$makala->makala_slug)}}">
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


             <div class="title pagination pagination-circle pagination-sm">

                {{$makalalar->links()}}

            </div>
        </div>






     </div>


</div>

    </div>
    </div>

@endsection


@section('js')
@endsection
