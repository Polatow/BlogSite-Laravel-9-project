@extends('Admin.layouts.app')

@section('title')
Admin Panel | Contact

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
                    <h3>Contact</h3>
                   
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
                     
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                      <table class="table  table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>Telefon nomber</th>
                            <th>E-mail address</th>
                            <th>Address</th>
                            <th >Options</th>
                          </tr>
                        </thead>
                        <tbody>
@foreach ($contacts as $contact)
    <tr>
         <td> {{ $contact->tel_number }}</td>
         <td> {{ $contact->email_address }}</td>         
         <td> {{ $contact->address }}</td>         

         <td>
              {{-- <a href="{{route('contact.show', $contact->id)}}" class="btn btn-sm btn-outline-primary">
                  <i class="fas fa-eye"> </i>  
              </a> --}}
              <a href="{{route('contact.edit', $contact->id)}}" class="btn btn-sm btn-outline-success">
                  <i class="fas fa-edit"> </i>  
              </a>
         </td>
    </tr>
@endforeach
                   
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix  ">
                        <div class="pagination-sm float-right">
                   
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