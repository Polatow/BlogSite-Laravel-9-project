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
            <div class="row mb-1">
                <div class="col-sm-6">
                    <h3>Kategorýalar</h3>
                   
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
                        <a href="{{route('categories.create')}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"> </i> Kategorýa Döret  
                        </a>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                      <table class="table  table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>Kategorýanyň ady</th>
                            <th>Habar sany</th>
                            <th>Status</th>
                            <th >Options</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>  {{ Str::limit($category->category_name , 50) }}</td>
                                <td>{{$category->habarlar_count}}</td>
                                <td>
                                        @switch($category->category_status)
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
                                </td>
                                <td>

                                    
                                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-outline-success">
                                        <i class="fas fa-edit"> </i>  
                                    </a>
                                    <!-- Button trigger modal -->
    
                           <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#category_delete{{$category->id}}">
        <i class="fas fa-trash"> </i>  
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="category_delete{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              {{-- <h5 class="modal-title text-danger" id="exampleModalLabel"><b>Delete Kategorýa </b></h5> --}}
              {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <h2 style="text-align: center" class="text-danger"><i class="fas fa-exclamation-triangle"></i></h2>
                <h6 class="text-black text-wrap text-center">
                    "{{$category->category_name}}" kategorýany öçürmek isleýärsiňizmi! 
                     Egerde siz bu kategorýany öçürseniz oňa degişli bolan ähli habarlar hem öcürler !!!
                </h6>
               
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{route('categories.destroy', $category->id)}}" method="post">
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
                    <div class="card-footer clearfix  ">
                        <div class="pagination-sm float-right">
                            {{$categories->links()}}
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