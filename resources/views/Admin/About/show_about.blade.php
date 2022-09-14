@extends('Admin.layouts.app')

@section('title')
Admin Panel | Biz Barada

@endsection


@section('css')
<link rel="stylesheet" href="{{asset('Backend/bootstrap.min.css')}}">
@endsection


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-6">
                    <h3>Biz Barada</h3>
                    <a href="{{route('about.index')}}" class="btn btn-sm btn-primary">
                        <i class="fa fa-arrow-left mr-1"> </i> Yza
                    </a>
                </div>


            </div>
        </div>
        <!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            @if(session()->has('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        @endif
            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                        </div>


                    <div class="card-body">
                        {!!  $about_show->about_description  !!}
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer clearfix  ">
                        <a href="{{route('about.edit', $about_show->id)}}" class="btn btn-sm btn-outline-success">
                             <i class="fas fa-edit"> </i>  Edit
                         </a>
                    </div>
                  </div>
                  <!-- /.card -->


                </div>

              </div>
              <!-- /.row -->
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection


@section('js')
@endsection
