@extends('admin.admin_master')
@section('admin')

 <div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <br>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                <a href="{{ route('add.patient') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Patient </a>  
                        </ol>
                    </div>
                    <br>
                    <h4 class="page-title">All Patients</h4>
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
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Word</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($patient as $key=> $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->department }}</td>
                                <td>{{ $item->address }}</td>

                                <td>
                                    {{--  --}}
                                <a href="{{ route('patient.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data"
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