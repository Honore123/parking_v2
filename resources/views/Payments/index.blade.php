@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 mb-4">
        <h3 class="font-weight-bold">Manage Payments</h3>
        <h6 class="font-weight-normal mb-0">Total Revenue: <span class="text-primary">40,000 Rwf</span></h6>
    </div>
    <div class="col-md-6 text-right">
        {{-- <a class="btn btn-primary" href="">
            <i class="ti-plus"></i> Add Space
         </a> --}}
    </div>
    <div class="col-md-12">
      @include('layouts.partials.notification')
    </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="paymentsTable">
                <thead>
                  <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Driver Names
                    </th>
                    <th>
                      Amount
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
    <div class="col-md-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Summary</h4>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td style="font-weight: bold">Number of Drivers</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">Total Revenue</td>
                        <td>40,000 Rwf</td>
                    </tr>
                    
                </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        $('#paymentsTable').DataTable();
    </script>
@endpush