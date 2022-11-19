@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 mb-4">
        <h3 class="font-weight-bold">Booking</h3>
        <h6 class="font-weight-normal mb-0">Parking Space: <span class="text-primary">{{$space->space_number}}</span></h6>
    </div>
    <div class="col-md-6 text-right">
        {{-- <a class="btn btn-primary" href="">
            <i class="ti-plus"></i> Add Space
         </a> --}}
    </div>
    <div class="col-md-12">
      @include('layouts.partials.notification')
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="bookingTable">
                <thead>
                  <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Driver Names
                    </th>
                    <th>
                        Initial Payment
                    </th>
                    <th>
                        Expected Time
                    </th>
                    <th>
                      Date
                    </th>
                  </tr>
                </thead>
               <tbody>
                   
               </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        $('#bookingTable').DataTable();
    </script>
@endpush