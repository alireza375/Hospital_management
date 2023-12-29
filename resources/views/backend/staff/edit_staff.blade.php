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
                    <h4 class="page-title">Edit Staff</h4>
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
        {{--  --}}
        <form method="post" action="{{ route('staff.update') }}" enctype="multipart/form-data">
        	@csrf

            <input type="hidden" name="id" value="{{ $staff->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Edit Staff</h5>

            <div class="row">


            <div class="col-md-6">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Staff Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $staff->name }}"  >
                    @error('name')
                <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Staff Phone    </label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"  value="{{ $staff->phone }}"   >
                    @error('phone')
                <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>


            <div class="col-md-6">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Staff Rank </label>
                    <select name="department" class="form-select @error('department') is-invalid @enderror" id="example-select">
                        <option selected disabled >Select Rank </option>
                        <option value="Pharmacist" {{ $staff->department == 'Pharmacist' ? 'selected' : '' }} >Pharmacist</option>
                        <option value="Nurse"  {{ $staff->department == 'Nurse' ? 'selected' : '' }}>Nurse</option>
                        <option value="Word Boy" {{ $staff->department == 'Word Boy' ? 'selected' : '' }}>Word Boy</option>
                        <option value="Cleaner" {{ $staff->department == 'Cleaner' ? 'selected' : '' }}>Cleaner</option>
                        <option value="Floor Representative" {{ $staff->department == 'Floor Representative' ? 'selected' : '' }}>Floor Representative</option>
                    </select>
                        @error('department')
                    <span class="text-danger"> {{ $message }} </span>
                        @enderror
                </div>
            </div>


            <div class="col-md-6">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Staff Address    </label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"  value="{{ $staff->address }}"   >
                    @error('address')
                <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label for="example-fileinput" class="form-label">Staff Image</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div> <!-- end col -->


            <div class="col-md-12">
                <div class="mb-3">
                    <label for="example-fileinput" class="form-label"> </label>
                    <img id="showImage" src="{{  asset($staff->image) }}" class="rounded-circle avatar-lg img-thumbnail"
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