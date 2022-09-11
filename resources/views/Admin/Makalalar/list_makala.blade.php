@extends('Admin.layouts.app')

@section('title')
Admin Panel | Makalalar
@endsection


@section('css')
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
                          <tr>
                            <td>Update software</td>
                            <td><img src="{{asset('Front/assets/image/slide-1.jpg')}}" alt="test" style="width:75px; height:75px;"> </td>
                           

                            <td><span class="badge bg-success ">active</span></td>
                            <td>
                                <a href="" class="btn btn-sm btn-outline-info">
                                    <i class="fas fa-eye"> </i>  
                                </a>
                                <a href="" class="btn btn-sm btn-outline-success">
                                    <i class="fas fa-edit"> </i>  
                                </a>
                                <!-- Button trigger modal -->

                       <!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fas fa-trash"> </i>  
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Delete Kategorýa </b></h5> --}}
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body">
            <h2 style="text-align: center" class="text-danger"><i class="fas fa-exclamation-triangle"></i></h2>
            <h6 class="text-black text-wrap text-center">
                "test testtest fdsf sfsdf sfsd f" kategoryany ocurmek isleyarsinizmi! 
                 Egerde siz bu kategoryany ocurseniz ona degisli bolan ahli habarlar hem ocuriler !!!
            </h6>
           
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-sm btn-outline-danger">
            <i class="fas fa-trash"> </i>  
          </button>
        </div>
      </div>
    </div>
  </div>         
   </td>
                           
  </tr>


                          
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                      <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                      </ul>
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