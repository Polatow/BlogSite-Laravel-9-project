@extends('Admin.layouts.app')

@section('title')
Admin Panel | Makalalar
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
                    <h3>Makalalar</h3>
                   
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
                      <h3 class="card-title">
                        <a href="{{route('makalalar.create')}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"> </i> Makala Döret  
                        </a>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                      <table class="table  table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>Makala title</th>
                            <th>Surat</th>
                            <th>Status</th>
                            <th >Options</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($makalalar as $makala)
                          <tr>
                            <td>{{ Str::limit( $makala->makala_title, 50)}}</td>
                            <td><img src="/makala_images/{{$makala->makala_image}}" alt="makala image" style="width:75px; height:75px;"> </td>
                           
                                    <td>
                                            @switch($makala->makala_status)
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
                            <td>
                                <a href="{{route('makalalar.show', $makala->id)}}" class="btn btn-sm btn-outline-info">
                                    <i class="fas fa-eye"> </i>  
                                </a>
                                <a href="{{route('makalalar.edit', $makala->id)}}" class="btn btn-sm btn-outline-success">
                                    <i class="fas fa-edit"> </i>  
                                </a>
                                <!-- Button trigger modal -->

                       <!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#makala_delete{{$makala->id}}">
    <i class="fas fa-trash"> </i>  
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="makala_delete{{$makala->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
            <h2 style="text-align: center" class="text-danger"><i class="fas fa-exclamation-triangle"></i></h2>
            <h6 class="text-black text-wrap text-center">
                "{{$makala->makala_title}}" makalany hakykatdan hem öçürmek isleýärsinizmi!!! 
            </h6>
           
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
            
          <form action="{{route('makalalar.destroy', $makala->id)}}" method="post">
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
   </td>

  </tr>
  @endforeach
  </tbody>
     </table>
 </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <div class="pagination-sm float-right">
                            {{$makalalar->links()}}
                        </div>
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