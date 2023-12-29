@extends('user.user_master')
@section('user')




<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <br>
                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Dental Doctor Info</h5>
                </div>
            </div>
        </div>     
        <!-- end page title -->
        @foreach($dental as $den)
        {{-- {{$neu->name}} --}}
        
        <div class="row">
            <div class="col-lg-4 col-xl-4">
                <div class="card text-center">
                    <div class="card-body text-center">
                        <img src="{{ asset($den->image) }}" style="width:150px; height: 120px;"
                        alt="profile-image">

                        <h4 class="mb-0"></h4>
                        <p class="text-muted"></p>
                        {{-- text-center --}}
                        <div class="text-start mt-3">                   
                            
                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ $den->name }}</span></p>
                        
                            <p class="text-muted mb-2 font-13"><strong>Phone :</strong><span class="ms-2">{{ $den->phone }}</span></p>
                        
                            <p class="text-muted mb-2 font-13"><strong>Department :</strong> <span class="ms-2">{{ $den->department }}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Time :</strong> <span class="ms-2">{{ $den->time }}</span></p>

                        </div>                                    
                        <ol class="breadcrumb m-0">
                            {{-- {{ route('add.doctor') }} --}}
                            <a href="{{ route('user.appointment' ,$den->id) }}" class="btn btn-primary rounded-pill waves-effect waves-light">Appointment </a>  
                                    </ol>
                    </div>                                 
                </div> <!-- end card -->                             

            </div> <!-- end col-->

        </div>

        @endforeach
                    <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->

<!-- content -->


@endsection