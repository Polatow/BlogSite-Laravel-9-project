@extends('Front.layouts.app')

@section('title')
Turkmen news | Makalalar
@endsection


@section('css')
<link rel="stylesheet" href="{{asset('Backend/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('Front/assets/custom_style/style.css')}}">
@endsection

@section('content')



<div class="container  mb-5 ">


    <div class="container">

        <div class="row ">

            <div class="col-md-7">
                <div class="post_title mt-3 mb-3 ">

                    <h3>{{$single_makala->makala_title}}</h3>

                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <img src="/makala_images/{{$single_makala->makala_image}}" style="width: 100%; border-radius: 10px;;" alt="">
                    </div>
                    <div class="col-md-12">
                        <ul style="margin-left:2%; " class="list-group list-group-horizontal  mt-2 mb-2 ">

                            <li style="border: none;" class="list-group-item"> <b>Ýazylan wagty:</b> {{$single_makala->created_at->diffForHumans()}}</li>
                        </ul>
                        <div style="font-size: 18px;  text-align: justify; text-indent: 30px;" class="col-md-12">
                            {!!$single_makala->makala_description !!}
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-5 mt-5">
                <div class="row">
                    <div  class="col-md-12 mt-3">
                        <h4 style="margin-left: 2%; font-size: 20px;" class="">Beýleki Makalalar</h4>

                        <div class="list-group">
                                @foreach($beylekiler as $beyleki)
                            <a href="{{route('single_makalalar', $beyleki->makala_slug)}}" class="list-group-item">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img style="margin-left: auto;  margin-right: auto; height:100% ; width: 100%; "
                                            src="/makala_images/{{$beyleki->makala_image}}" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$beyleki->makala_title}}</h5>

                                                <p class="card-text"><small class="text-muted">{{$beyleki->created_at->diffForHumans()}}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            @endforeach



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection


@section('js')
@endsection
