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
                    </div>
                    <br>
                    <h4 class="page-title">ALL USERS</h4>
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
                                <th>Role</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $key=> $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td> <img src="{{ asset('upload/user_image/'.$item->photo) }}" style="width:50px; height: 40px;"> </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->role}}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <!-- <td>{{ $item->Address }}</td> -->
                                <td>
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