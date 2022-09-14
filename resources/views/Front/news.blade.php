@extends('Front.layouts.app')

@section('title')
Turkmen news | Habarlar
@endsection


@section('css')
<link rel="stylesheet" href="{{asset('Backend/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('Front/assets/custom_style/style.css')}}">

@endsection


@section('content')


<div class="news-image">
    <img src="{{asset('Front/assets/image/news.jpg')}}" alt="Snow" style="width:100%;  height: 350px;">
    <div class="centered">Habarlar</div>

</div>

<div class="container-fluid mb-5">
    <div class="row">
     <div class="col-md-8 mt-3">

        <div class="row">

    @forelse ($habarlar as $habar)

    <div class="col-md-4 mt-2 mb-2  ">
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

     @empty
       <p style="font-size: 22px; margin:0.5%; text-align:center; background-color:#a6d3e7">Bagyşlaň!!! Bu kategorýa degişli habar tapylmady!!!</p>
 @endforelse


             <div class="title pagination-circle pagination-sm">
                {{$habarlar->links()}}

            </div>
        </div>






     </div>


     <div class="col-md-4 mt-4">
            <div class="list-group ">
                <span  style="text-align:center ; " class="list-group-item actives">Kategoriýalar</span>
                <a href="{{route('news')}}" class="list-group-item">Ähli Habarlar</a>
                @foreach($categories as $category)
                <a href="{{route('news', ['category'=>$category->category_name])}}" class="list-group-item">{{$category->category_name}}</a>
                @endforeach
            </div>

</div>

    </div>
    </div>


@endsection


@section('js')
@endsection
