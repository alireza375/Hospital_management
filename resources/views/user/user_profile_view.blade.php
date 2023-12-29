@extends('user.user_master')
@section('user')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <br>
                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                </div>
            </div>
        </div>     
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-8 col-xl-8">
                <div class="card text-center">
                    <div class="card-body text-center">
                        <img src="{{ (!empty($userData->photo)) ? url('upload/user_image/'.$userData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                        alt="profile-image">

                        <h4 class="mb-0">{{ $userData->name }}</h4>
                        <p class="text-muted">{{ $userData->email }}</p>
                    
                        <div class="text-start mt-3 text-center">                   
                            
                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ $userData->name }}</span></p>
                        
                            <p class="text-muted mb-2 font-13"><strong>Phone :</strong><span class="ms-2">{{ $userData->phone }}</span></p>
                        
                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ $userData->email }}</span></p>
                        
                        </div>                                    

                        <ul class="social-list list-inline mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                        </ul>   
                    </div>                                 
                </div> <!-- end card -->                             

            </div> <!-- end col-->

        </div>
                    <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->

        <!-- </div>
    </div>
</div> -->

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