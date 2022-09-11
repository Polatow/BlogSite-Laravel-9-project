@extends('Admin.layouts.app')

@section('title')
Admin Panel | Kategorýa edit
@endsection


@section('css')
@endsection


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-10 m-auto">
                    <h3>Kategorýa Edit</h3>
                    <a href="{{route('categories.index')}}" class="btn btn-sm btn-primary">
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
            <div class="row">
                <!-- left column -->
                <div class="col-md-10 m-auto">
                    <div class="card">
                        <div class="card-header">
                        
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="" method="">
                                @csrf
                          <div class="form-group">
                            <label for="exampleInputRounded0">Kategorýanyň ady</label>
                            <input type="text" name="" value="" class="form-control rounded-0" id="exampleInputRounded0" placeholder="Kategorýanyň ady">
                          </div>
                    
                          <div class="form-group">
                            <label for="exampleSelectRounded0">Status </label>
                            <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                <option value="">Status saýla</option>
                                <option value="active">Active</option>
                                <option value="passive">Passive</option>
                                <option value="draft">Draft</option>
                            </select>
                          </div>
                        
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Ýatda sakla</button>
                          </div>
                        </form>
                      </div>
                      <!-- /.card -->
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


 
@endsection


@section('js')
@endsection