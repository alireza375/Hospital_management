@extends('user.user_master')
@section('user')

<div class="content">

<!-- Start Content-->
    <div class="container-fluid">

        <div class="col-lg-8 col-xl-8" id="settings">
        {{--  --}}
            <form method="post" action="{{ route('user.update') }}" enctype="multipart/form-data">
                @csrf

                <br>

                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Edit Profile</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="firstname" value="{{ $userData->name }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="lastname"  value="{{ $userData->email }}" >
                        </div>
                    </div> <!-- end col -->

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="lastname"  value="{{ $userData->phone }}" >
                        </div>
                    </div> <!-- end col -->


                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="example-fileinput" class="form-label">User Profile Image</label>
                            <input type="file" name="photo" id="image" class="form-control">
                        </div>
                    </div> <!-- end col -->


                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="example-fileinput" class="form-label"> </label>
                            <img id="showImage" src="{{ (!empty($userData->photo)) ? url('upload/user_image/'.$userData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                                    alt="profile-image">
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
    
                <div class="text-end">
                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                </div>
            </form>

           

        </div> 
      
        <form action="{{ route('delete.user', ['id' => $userData->id]) }}" method="post">
            @csrf
            @method('delete')  
            <button type="submit" class="btn btn-success waves-effect waves-light mt-2">
                <i class="bi bi-trash"></i>Delete Account</button>
        </form>
        
    </div>
</div>

@endsection