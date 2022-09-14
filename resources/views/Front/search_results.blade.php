@extends('Front.layouts.app')


@section('title')
TÜRKMEN NEWS 
@endsection



@section('css')
<link rel="stylesheet" href="{{asset('Backend/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('Front/assets/custom_style/style.css')}}">
@endsection



@section('content')


<div  class="container mt-2 mb-5">
    <div class="post_title" style="display: flex; justify-content: space-between; " >
        <h3><b> Gözleg Netijeleri </b></h3>
        <a   href="{{route('news')}}" class="btn btn-secondary"> Gözlegi aýyr</a>
    </div>
    @if(count($result_habarlar) >0)
        <div  class="container  mt-2">
            
            <h4><b> Habarlara degişli gözleg Netijeleri! </b></h4>
            <div class="row">
                @forelse ($result_habarlar as $habar)
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
                <p style="font-size: 25px;">Bagyşlaň!!! Gözleg Netijesi tapylmady!!!</p>
            @endforelse
            
    
            </div>
        </div>
       @endif
        @if(count($result_makalalar) >0)
        <div  class="container mt-2 mb-5">
            
            <h4><b> Makalalara degişli gözleg Netijeleri! </b></h4>
            <div class="row">
                @forelse ($result_makalalar as $makala)
                <div class="col-md-4 mt-2 mb-2  ">
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
                @empty
                <p style="font-size: 25px;">Bagyşlaň!!! Gözleg Netijesi tapylmady!!!</p>
            @endforelse
            
    
            </div>
        </div>
        @endif

        @if($result_makalalar->isEmpty() &&  $result_habarlar->isEmpty())   
        <p class="mt-3" style="font-size: 25px; text-align:center;">Bagyşlaň!!! Gözleg Netijesi tapylmady!!!</p>
       @endif


</div>

</div >





@endsection



@section('js')
@endsection
