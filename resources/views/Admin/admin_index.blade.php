@extends('Admin.layouts.app')

@section('title')
@endsection


@section('css')
@endsection


@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-12">
                    <h3>Esasy sahypa</h3>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-white">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Kategorýalar</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-th"></i>
                    </div>
                    <p class="small-box-footer" ></p>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53</h3>

                        <p>Habarlar</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file"></i>
                    </div>
                    <p class="small-box-footer" ></p>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Makalalar</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <p class="small-box-footer" ></p>
                </div>
            </div>
            <!-- ./col -->
         
           

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection


@section('js')
@endsection
