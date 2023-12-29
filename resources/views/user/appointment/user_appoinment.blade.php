@extends('user.user_master')
@section('user')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Start Content-->
<div class="page-content">
    <div class="container-fluid">
  
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Add Appoinment</h4>
          </div>
        </div>
      </div>
    <div class="row">
        <div class="col-lg-8 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-4 text-uppercase"> Add Appointment</h5>
                        <br>
                    <div class="tab-pane" id="settings">
                        {{--   --}}
                        <form method="post" action="{{ route('user.appointment.store') }}">
                        @csrf

                        
                        <div class = "row">
                            <!-- Patient Name field name(p_name)-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="patientName">Name </label>
                                    <input type="text" name="p_name"class="form-control @error('p_name') is-invalid @enderror" id="inputPatientName">
                                    @error('p_name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                                {{-- @php
                                $doctor = App\Models\Doctor::all();
                                @endphp --}}

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="inputDoctorName">Doctor's Name</label>
                                    <input type="text" name="d_name" class="form-control @error('d_name') is-invalid @enderror" id="inputDoctorName" value="{{ $doctor->name }}">
                                        {{-- <option selected disabled>Select Doctor</option>
                                        @foreach ( $doctor as $doc )
                                        <option value="{{ $doc->id }}">{{ $doc->name }}</option>
                                        @endforeach --}}
                                    </select>
                                    @error('d_name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="inputDepartmentName">Department's Name</label>
                                    <input type="text" name="depart_name" class="form-control @error('depart_name') is-invalid @enderror" id="inputDepartmentName" value="{{ $doctor->department }}">
    
                                    @error('depart_name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="inputPhone">Phone Number</label>
                                    <input type="number" name="phone"  class="form-control @error('phone') is-invalid @enderror"  id="inputPhone" placeholder="+880">
                                @error('phone')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="inputDate">Choose Date </label>
                                    <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"  id="inputDate">
                                    <span class="input-group-addon date_icon">
                                        <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                    </span>
                                </div>
                            </div>
                        
                            <div class="text-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                            </div>
                        </div>
                        </form>

                    </div>                
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->
    </div> <!-- container -->

</div> 
<!-- content -->


<script type="text/javascript">
	
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload =  function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});

</script>



@endsection