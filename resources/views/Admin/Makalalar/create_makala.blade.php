@extends('Admin.layouts.app')

@section('title')
Admin Panel | Makala Döret
@endsection


@section('css')

<link rel="stylesheet" href="{{asset('Backend/plugins/summernote/summernote-bs4.min.css')}}">

<link rel="stylesheet" href="{{asset('Backend/bootstrap.min.css')}}">
 @endsection


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-10 m-auto">
                    <h3>Makala Döret</h3>
                    <a href="{{route('makalalar.index')}}" class="btn btn-sm btn-primary">
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
                <!-- left column -->
                <div class="col-md-10 m-auto">
                    <div class="card">
                        <div class="card-header">
                        
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route('makalalar.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                          <div class="form-group">
                            <label for="exampleInputRounded0">Makala title</label>
                            <input type="text" name="makala_title" value="{{old('makala_title')}}" class="form-control rounded-0" id="exampleInputRounded0" placeholder="Makala title ...">
                          </div>
                          

                          <div class="form-group">
                            <label for="summernote">Makala Description</label>
                            <textarea  placeholder="Makala Description ..." class="form-control rounded-0 " id="summernote" name="makala_description">{{old('makala_description')}}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="formFile">Surat</label>
                            <input name="makala_image" class="form-control rounded-0" type="file" id="formFile" accept="image/*" onchange="loadFile(event)">
                            <img class="mt-2" style="width:150px; height:130px;" id="output"/>
                        </div>

                          <div class="form-group">
                            <label for="exampleSelectRounded0">Makala Status </label>
                            <select name="makala_status" class="custom-select rounded-0" id="exampleSelectRounded0">
                                <option @if(old('makala_status') == '') selected @endif value="">Status saýla</option>
                                <option @if(old('makala_status') == 'active') selected @endif value="active">Active</option>
                                <option @if(old('makala_status') == 'passive') selected @endif value="passive">Passive</option>
                                <option @if(old('makala_status') == 'draft') selected @endif value="draft">Draft</option>
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

<script src="{{asset('Backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
 var loadFile = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };


    $(function () {
      // Summernote
      $('#summernote').summernote()
    })
  </script>
 
@endsection