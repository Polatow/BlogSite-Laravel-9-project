@extends('Front.layouts.app')

@section('title')
@endsection


@section('css')
@endsection


@section('content')



<div class="container  mb-5 ">


    <div class="container">

        <div class="row ">

            <div class="col-md-8">
                <div class="post_title mt-3 mb-3 ">

                    <h3>Informasion tehnologiýalar</h3>

                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <img src="{{asset('Front/assets/image/slide-1.jpg')}}" style="width: 100%; border-radius: 10px;;" alt="">
                    </div>
                    <div class="col-md-12">
                        <ul style="margin-left:2%; " class="list-group list-group-horizontal  mt-2 mb-2 ">
                            <li style="border: none;" class="list-group-item"> <b>Writing By:</b> Andrey </li>
                            <li style="border: none;" class="list-group-item"> <b>Date:</b> 21.02.2023</li>
                        </ul>
                        <div style="font-size: 18px;  text-align: justify; text-indent: 30px;" class="col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum veniam et qui ducimus, aperiam nam tempora vero aspernatur sunt quidem dolorum similique nostrum. Eos ex, optio animi provident odit adipisci placeat
                                alias? Vero et nihil nostrum, iste praesentium doloremque veritatis qui aspernatur blanditiis voluptatem beatae nam ab, non nisi accusamus commodi culpa ipsam? Commodi iste in quisquam earum! Exercitationem iusto quibusdam
                                doloremque at, eius dolor cum doloribus quas dolorum fugit velit natus obcaecati rem aliquam odit deserunt eum voluptatem sit accusantium delectus blanditiis id tenetur ut. Aspernatur laudantium dignissimos dicta adipisci
                                neque iure perferendis ipsa, nobis officiis rem architecto maiores ea minima nemo suscipit ex cum vero consequatur veniam aut aperiam doloribus ad voluptas! Nesciunt neque qui commodi, quod error animi atque fugiat
                                iste iusto laborum magnam alias, provident harum mollitia odio, natus totam tempore quasi cumque? Numquam quaerat consectetur consequuntur tenetur, officiis ipsam eius quae officia necessitatibus voluptatum dolore illum,
                                suscipit earum ullam, exercitationem rerum at optio eum sint expedita quia cumque voluptatibus temporibus dolor. Neque maxime aperiam, magnam quis ad possimus tempora animi a illum corporis incidunt distinctio maiores.
                                Ad, autem. Ex soluta culpa nobis iure harum ab numquam vitae quia qui veritatis, natus, reiciendis in architecto animi.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum veniam et qui ducimus, aperiam nam tempora vero aspernatur sunt quidem dolorum similique nostrum. Eos ex, optio animi provident odit adipisci placeat
                                alias? Vero et nihil nostrum, iste praesentium doloremque veritatis qui aspernatur blanditiis voluptatem beatae nam ab, non nisi accusamus commodi culpa ipsam? Commodi iste in quisquam earum! Exercitationem iusto quibusdam
                                doloremque at, eius dolor cum doloribus quas dolorum fugit velit natus obcaecati rem aliquam odit deserunt eum voluptatem sit accusantium delectus blanditiis id tenetur ut. Aspernatur laudantium dignissimos dicta adipisci
                                neque iure perferendis ipsa, nobis officiis rem architecto maiores ea minima nemo suscipit ex cum vero consequatur veniam aut aperiam doloribus ad voluptas! Nesciunt neque qui commodi, quod error animi atque fugiat
                                iste iusto laborum magnam alias, provident harum mollitia odio, natus totam tempore quasi cumque? Numquam quaerat consectetur consequuntur tenetur, officiis ipsam eius quae officia necessitatibus voluptatum dolore illum,
                                suscipit earum ullam, exercitationem rerum at optio eum sint expedita quia cumque voluptatibus temporibus dolor. Neque maxime aperiam, magnam quis ad possimus tempora animi a illum corporis incidunt distinctio maiores.
                                Ad, autem. Ex soluta culpa nobis iure harum ab numquam vitae quia qui veritatis, natus, reiciendis in architecto animi.</p>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="list-group ">
                            <span style="text-align:center ;" class="list-group-item actives">Kategoriýalar</span>
                            <a href="" class="list-group-item">Ähli Habarlar</a>
                            <a href="" class="list-group-item">Sport</a>
                            <a href="" class="list-group-item">Bilim</a>
                            <a href="" class="list-group-item">Senagat</a>
        
                 </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <h4 style="margin-left: 2%; font-size: 20px;" class="">Beýleki Habarlar</h4>

                        <div class="list-group">

                            <a href="#" class="list-group-item">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img style=" height: 100%;" src="{{asset('Front/assets/image/slide-2.jpg')}}" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>

                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="list-group-item">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img style=" height: 100%;" src="{{asset('Front/assets/image/slide-2.jpg')}}" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>

                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>


                            <a href="#" class="list-group-item">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img style=" height: 100%;" src="{{asset('Front/assets/image/slide-2.jpg')}}" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>

                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>



                            <a href="#" class="list-group-item">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img style=" height: 100%;" src="{{asset('Front/assets/image/slide-2.jpg')}}" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>

                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>



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