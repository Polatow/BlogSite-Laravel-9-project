@extends('Admin.layouts.app')

@section('title')
Admin Panel | Kategorýalar
@endsection


@section('css')
<link rel="stylesheet" href="{{asset('Backend/bootstrap.min.css')}}">
@endsection


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-10 m-auto">
                    <h3>Kategorýa döret</h3>
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
                    @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
    
                    @endif
                    @if(session()->has('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                @endif
                </div>
                <div class="col-md-10 m-auto">
                    <div class="card">
                        <div class="card-header">
                        
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route('categories.store')}}" method="Post">
                                @csrf
                          <div class="form-group">
                            <label for="exampleInputRounded0">Kategorýanyň ady</label>
                            <input type="text" name="category_name" value="{{old('category_name')}}" class="form-control rounded-0" id="exampleInputRounded0" placeholder="Kategorýanyň ady">
                          </div>
                    
                          <div class="form-group">
                            <label for="exampleSelectRounded0">Status </label>
                            <select name="category_status" class="custom-select rounded-0" id="exampleSelectRounded0">
                                <option @if(old('category_status') == '') selected @endif value="">Status saýla</option>
                                <option @if(old('category_status') == 'active') selected @endif value="active">Active</option>
                                <option @if(old('category_status') == 'passive') selected @endif value="passive">Passive</option>
                                <option @if(old('category_status') == 'draft') selected @endif value="draft">Draft</option>
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