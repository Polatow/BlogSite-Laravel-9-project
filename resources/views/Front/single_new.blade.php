@extends('Front.layouts.app')

@section('title')
Turkmen news | Habarlar
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

                    <h3>{{$single_new->habar_title}}</h3>

                </div>
                <div class="row">
                    <div style="height: 300px !important;" class="col-md-12 ">
                        <img style="width:100%; border-radius: 10px; " src="/habar_images/{{$single_new->habar_image}}"  alt="">
                    </div>
                    <div class="col-md-12">
                        <ul style="margin-left:2%; " class="list-group list-group-horizontal  mt-2 mb-2 ">
                            <li style="border: none;" class="list-group-item"> <b>Writing By:</b> Andrey </li>
                            <li style="border: none;" class="list-group-item"> <b>Date:</b> 21.02.2023</li>
                        </ul>
                        <div style="font-size: 18px;  text-align: justify; text-indent: 30px;" class="col-md-12">
                            {!!$single_new->habar_description !!}
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-5 mt-5">
                <div class="row">
                    <div class="col-md-12">

                        <div class="list-group">
                            <span style="text-align: center" class="list-group-item actives">Kategoriýalar</span>
                            <a href="{{route('news')}}" class="list-group-item ">Ähli Habarlar</a>
        
                            @foreach ($categories as $category)
                            <a href="{{route('news', ['category'=>$category->category_name])}}" class="list-group-item">{{$category->category_name}}</a>
                            @endforeach
                        </div>


                    </div>

                    <div  class="col-md-12 mt-3">
                        <h4 style="margin-left: 2%; font-size: 20px;" class="">Beýleki Habarlar</h4>

                        <div class="list-group">
                                @foreach($beylekiler as $beyleki)
                            <a href="{{route('single_news', $beyleki->habar_slug)}}" class="list-group-item">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img style="margin-left: auto;  margin-right: auto; height:100% ; width: 100%; "
                                            src="/habar_images/{{$beyleki->habar_image}}" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$beyleki->habar_title}}</h5>

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
