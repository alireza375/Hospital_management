@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <br>
                    </div>
                    <br>
                    <h4 class="page-title">Add Patient</h4>
                </div>
            </div>
        </div>     
        <div class="row">
            <div class="col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-body">
    
                    <!-- end timeline content-->

                        <div class="tab-pane" id="settings">

                            <form method="post" action="{{ route('patient.store') }}" enctype="multipart/form-data">
                                @csrf

                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Add Patient</h5>

                                <div class="row">
                               
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Patient Name</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"   >
                                            @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Patient Phone</label>
                                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"   >
                                            @error('phone')
                                        <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Patient Word</label>
                                            <select name="department" class="form-select @error('department') is-invalid @enderror" id="example-select">
                                                <option selected disabled >Select Word </option>
                                                <option value="Cardiologist">Cardiologist</option>
                                                <option value="Neurologist">Neurologist</option>
                                                <option value="Urologist">Urologist</option>
                                                <option value="Eye Care">Eye Care</option>
                                                <option value="Dental">Dental</option>
                                            </select>
                                                @error('department')
                                            <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Patient Address    </label>
                                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"   >
                                            @error('address')
                                        <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div> <!-- end row -->

                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                </div>

                            </form>
                        </div>
                        <!-- end settings content-->`
                
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