@extends('Admin.layouts.app')

@section('title')
Admin Panel | Habar Edit
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
                    <h3>Habar Edit</h3>
                    <a href="{{route('news.index')}}" class="btn btn-sm btn-primary">
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
                   
                </div>
                <!-- left column -->
                <div class="col-md-10 m-auto">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route('news.update', $habar_update->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                          <div class="form-group">
                            <label for="exampleInputRounded0">Habar title</label>
                            <input type="text" name="habar_title" value="{{$habar_update->habar_title}}" class="form-control rounded-0" id="exampleInputRounded0" placeholder="Habar title ...">
                          </div>  
                          <div class="form-group">
                            <label for="exampleSelectRounded0">Degi??li kategor??asy </label>
                            <select name="category_id" class="custom-select rounded-0" id="exampleSelectRounded0">
                                 <option disabled @if($habar_update->category_id == '') selected @endif value="" > Kategor??a sa??la </option>
                                @foreach ($categories as $category)
                                <option   @if($habar_update->category_id == $category->id) selected @endif value="{{$category->id}}"> {{$category->category_name}}    </option>
                                @endforeach
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="summernote">Habar Description</label>
                            <textarea  placeholder="Habar Description ..." class="form-control rounded-0 " id="summernote" name="habar_description">{{$habar_update->habar_description}}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="formFile">Surat</label>
                            <input name="habar_image" class="form-control rounded-0" type="file" id="formFile" accept="image/*" onchange="loadFile(event)">
                            <img src="/habar_images/{{$habar_update->habar_image}}" class="mt-1" style="width:150px; height:130px;" id="output"/>
                        </div>
                      
                      <input type="hidden" value="{{$habar_update->habar_image}}" name="old_habar_image" />

                          <div class="form-group">
                            <label for="exampleSelectRounded0">Habar Status </label>
                            <select name ="habar_status" class="custom-select rounded-0" id="exampleSelectRounded0">
                               <option @if($habar_update->habar_status =='') selected @endif value="">Status sa??la</option>
                                <option @if($habar_update->habar_status =='active') selected @endif value="active">Active</option>
                                <option @if($habar_update->habar_status =='passive') selected @endif value="passive">Passive</option>
                                <option @if($habar_update->habar_status =='draft') selected @endif value="draft">Draft</option>
                            </select>
                          </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">??atda sakla</button>
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