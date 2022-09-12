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
                <div class="col-sm-12">
                    <h3>
                        {{$show_habar->habar_title}}
                    </h3>
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
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header"> 
                    </div>
                   
                    <div class="card-body"> 
                        <ul style="font-size:17px;" class="list-group">
                            <li class="list-group-item">
                                <span style="  font-weight: bold;">Habar Title : </span> 
                                {{$show_habar->habar_title}}
                            </li>
                            <li class="list-group-item">
                                <span style="  font-weight: bold;"> Habaryň  Suraty :</span>
                               
                                 <img src="/habar_images/{{$show_habar->habar_image}}" alt="test" style="width:175px; height:175px;">

                            </li>
                            <li style="text-align: justify;" class="list-group-item">
                                <span style="  font-weight: bold;"> Habaryň  Teksti :</span>
                                {!!$show_habar->habar_description !!} 
                            </li>
                            <li class="list-group-item">
                                <span style="  font-weight: bold;"> Degişli kategoriýasy :</span>
                                {!!$show_habar->categories->category_name !!} 
                            </li>

                            <li class="list-group-item">
                              <span style="  font-weight: bold;"> Habar Status :</span>
                              @switch($show_habar->habar_status)
                              @case('active')
                              <span class="badge bg-success">active</span>
                                  @break
                              @case('passive')
                              <span class="badge bg-danger">Passive</span>
                                  @break
                                  @case('draft')
                              <span class="badge bg-warning">Draft</span>
                                  @break
                              @default
                              @endswitch
                          </li>

                            <li class="list-group-item">
                                <span style="  font-weight: bold;"> Options :</span>
                               
                                <a href="{{route('news.edit',$show_habar->id)}}" class="btn btn-sm btn-outline-success">
                                    <i class="fas fa-edit"> </i>
                                </a>
                                <!-- Button trigger modal -->

                       <!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#habar_delete{{$show_habar->id}}">
    <i class="fas fa-trash"> </i>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="habar_delete{{$show_habar->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Delete Kategorýa </b></h5> --}}
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body">
            <h2 style="text-align: center" class="text-danger"><i class="fas fa-exclamation-triangle"></i></h2>
            <h6 class="text-black text-wrap text-center">
                "{{$show_habar->habar_title}}" habary hakykatdan hem öçürmek isleýärsiňizmi !!!

            </h6>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{route('news.destroy', $show_habar->id)}}" method="post">
            @csrf
            @method('Delete')
            <button type="submit" class="btn btn-sm btn-outline-danger">
                <i class="fas fa-trash"> </i>  
              </button>
        </form>
        </div>
      </div>
    </div>
  </div>
                            </li>
                          </ul> 
                    </div>
                   
                    <!-- /.card-body -->
                    <div class="card-footer clearfix  ">
                        
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