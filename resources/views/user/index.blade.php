@extends('user.user_master')
@section('user')

<div class="page-content">
    <div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">User Dashboard</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">     
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
    <div class="col-xl-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <a href="{{ route ('all.neurology') }}">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h4 class="mb-2 text-center">Neurology</h4>
                    </div>   
                </div>
            </a>                                            
        </div><!-- end cardbody -->
    </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <a href="{{ route ('all.dental')}}">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h4 class="mb-2 text-center">Dental</h4>
                    </div>   
                </div>
            </a>                                              
        </div><!-- end cardbody -->
    </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <a href="{{ route ('all.eye_care')}}">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h4 class="mb-2 text-center">Eye Care</h4>
                    </div>   
                </div>
            </a>                                              
        </div><!-- end cardbody -->
    </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <a href="{{ route ('all.gynocologist')}}">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h4 class="mb-2 text-center">Gynecology</h4>
                    </div>   
                </div>
            </a>                                            
        </div><!-- end cardbody -->
    </div><!-- end card -->
    </div><!-- end col -->
    </div><!-- end row -->
     


@endsection