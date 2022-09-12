@extends('Admin.layouts.app')

@section('title')
Admin Panel | Contact Edit
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
                    <h3>Contact Edit</h3>
                    <a href="{{route('contact.index')}}" class="btn btn-sm btn-primary">
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
                            <form action="{{route('contact.update', $contact_update->id)}}" method="post">
                                @csrf
                                @method('PUT')
                          <div class="form-group">
                            <label for="exampleInputRounded0">Telefon nomber</label>
                            <input type="text" name="tel_number" value="{{$contact_update->tel_number}}" class="form-control rounded-0" id="exampleInputRounded0" placeholder="Telefon nomber ...">
                          </div>  
                         
                          <div class="form-group">
                            <label for="exampleInputRounded0">Email Adresss </label>
                            <input type="email" name="email_address" value="{{$contact_update->email_address}}" class="form-control rounded-0" id="exampleInputRounded0" placeholder=" Email address ...">
                          </div>  

                          <div class="form-group">
                            <label for="exampleInputRounded0">Address</label>
                            <input type="text" name="address" value="{{$contact_update->address}}" class="form-control rounded-0" id="exampleInputRounded0" placeholder="Address ...">
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