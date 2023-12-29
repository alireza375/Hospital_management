@extends('admin.admin_master')
@section('admin')



<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <br>
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @php
        $doctors = App\Models\Doctor::all();
        $patients = App\Models\Patient::all();
        $staff = App\Models\Staff::all();
        $appointments = App\Models\Appointment::all();
        @endphp
     
        <div class="row">
            <!-- Doctor Part -->
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <i class="ri-user-3-line font-size-24"></i>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                <a href="{{ route('all.doctor') }}"> 
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $doctors->count() }}</span>
                                    </h3>
                                </a>
                                    <p class="text-muted mb-1 text-truncate">Total Doctors </p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <!-- Patient Part -->
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <i class="ri-user-3-line font-size-24"></i>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                <a href="{{ route('all.patient') }}"> 
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $patients->count() }}</span>
                                    </h3>
                                </a>
                                    <p class="text-muted mb-1 text-truncate">Total Patients </p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <!-- Staff Part -->
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <i class="ri-user-3-line font-size-24"></i>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                <a href="{{ route('all.staff') }}"> 
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $staff->count() }}</span>
                                    </h3>
                                </a>
                                    <p class="text-muted mb-1 text-truncate">Total Staffs </p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <!-- Appoinment Part -->
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <i class="ri-profile-line font-size-24"></i>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                <a href="{{ route('all.appointment') }}"> 
                                    <h3 class="text-dark mt-1"> <span data-plugin="counterup">{{ $appointments->count() }}</span>
                                </h3>
                                </a>
                                    <p class="text-muted mb-1 text-truncate">Total Appointment </p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>

        <!-- end row-->
    <div class="row">

</div>
        


@endsection