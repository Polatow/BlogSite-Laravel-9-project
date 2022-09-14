@extends('Front.layouts.app')

@section('title')
Turkmen News | Biz Barada
@endsection


@section('css')
@endsection


@section('content')

<div class="container mb-5">
    <div style="margin-top: 3%; margin-bottom: 1%; text-align: center; font-family: 'Times New Roman', Times, serif;">
        <h4><b> Biz barada </b></h4>
    </div>

    <div  style=" text-align: justify;  text-indent: 50px; ">
       {!! $about_data->about_description!!}

    </div>


</div>



</div>
@endsection


@section('js')
@endsection