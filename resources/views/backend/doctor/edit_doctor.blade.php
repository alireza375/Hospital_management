@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <br>
                    <h4 class="page-title">Edit Doctor</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

<div class="row">
    

  <div class="col-lg-8 col-xl-12">
<div class="card">
    <div class="card-body">                                

    <!-- end timeline content-->

    <div class="tab-pane" id="settings">
        
        <form method="post" action="{{ route('doctor.update') }}" enctype="multipart/form-data">
        	@csrf

            <input type="hidden" name="id" value="{{ $doctor->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Edit Doctor</h5>

            <div class="row">


            <div class="col-md-6">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Doctor Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $doctor->name }}"  >
                    @error('name')
                <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>


            <div class="col-md-6">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Doctor Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"   value="{{ $doctor->email }}"  >
                    @error('email')
                <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Doctor Phone    </label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"  value="{{ $doctor->phone }}"   >
                    @error('phone')
                <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Doctor Specialist </label>
                    <select name="department" class="form-select @error('department') is-invalid @enderror" id="example-select">
                        <option selected disabled >Select Specialist </option>
                        <option value="Cardiologist" {{ $doctor->department == 'Cardiologist' ? 'selected' : '' }} >Cardiologist</option>
                        <option value="Neurologist"  {{ $doctor->department == 'Neurologist' ? 'selected' : '' }}>Neurologist</option>
                        <option value="Urologist" {{ $doctor->department == 'Urologist' ? 'selected' : '' }}>Urologist</option>
                        <option value="Eye Care" {{ $doctor->department == 'Eye Care' ? 'selected' : '' }}>Eye Care</option>
                        <option value="Dental" {{ $doctor->department == 'Dental' ? 'selected' : '' }}>Dental</option>
                        <option value="Gynecologist" {{ $doctor->department == 'Gynecologist' ? 'selected' : '' }}>Gynecologist</option>

                    </select>
                        @error('department')
                    <span class="text-danger"> {{ $message }} </span>
                        @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Doctor Time  </label>
                    <input type="text" name="time" class="form-control @error('time') is-invalid @enderror" value="{{ $doctor->time }}"  >
                    @error('time')
                <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>


            <div class="col-md-6">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Doctor Address </label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"  value="{{ $doctor->address }}"   >
                    @error('address')
                <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label for="example-fileinput" class="form-label">Doctor Image</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div> <!-- end col -->


            <div class="col-md-12">
                <div class="mb-3">
                    <label for="example-fileinput" class="form-label"> </label>
                    <img id="showImage" src="{{  asset($doctor->image) }}" class="rounded-circle avatar-lg img-thumbnail"
                            alt="profile-image">
                </div>
            </div> <!-- end col -->

            </div> <!-- end row -->

            <div class="text-end">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
            </div>
        </form>
    </div>
    <!-- end settings content-->
    
                                       
                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->



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