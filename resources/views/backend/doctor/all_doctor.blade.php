@extends('admin.admin_master')
@section('admin')

 <div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <br>
                        <ol class="breadcrumb m-0">
                <a href="{{ route('add.doctor') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Doctor </a>  
                        </ol>
                    </div>
                    <br>
                    <h4 class="page-title">All Doctors</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                                        
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Time</th>
                                <th>Phone</th>
                                <th>Specialist</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($doctor as $key=> $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td> <img src="{{ asset($item->image) }}" style="width:50px; height: 40px;"> </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->time }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->department }}</td>
                                <td>
                                {{--  --}}
                                <a href="{{ route('doctor.edit',$item->id) }}" class="btn btn-info sm" title="Edit Data">
                                     <i class="fas fa-edit"></i> </a>

                                {{--  --}}
                                <a href="{{ route('doctor.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data"
                                id="delete"> <i class="fas fa-trash-alt"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
        </div> <!-- container -->

    </div> <!-- content -->

@endsection 