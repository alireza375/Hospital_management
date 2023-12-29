@extends('admin.admin_master')
@section('admin')


<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">All Appoinment</h4>
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
                    <th>Patient Name</th>
                    <th>Phone No</th>
                    <th>Doctor Name</th>
                    <th>Specialist</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach($appointment as $key=> $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->p_name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->d_name }}</td>
                    <td>{{ $item->depart_name }}</td>
                    {{-- <td>{{ $item->date }}</td>       --}}
                    <td>{{ Carbon\Carbon::parse($item->date)->format('d-m-Y') }}</td>      


                  {{-- <td> {{ Carbon\Carbon::now() }} </td> --}}
                    <td>
                        {{--  --}}
                    <a href="{{ route('appointment.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data"
                    id="delete"> <i class="fas fa-trash-alt"></i> </a>
                    </td>
                </tr>
                @endforeach
              </tbody>

            </table>

          </div>
        </div>
      </div> <!-- end col -->
    </div> <!-- end row -->



  </div> <!-- container-fluid -->
</div>


@endsection