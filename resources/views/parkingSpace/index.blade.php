@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 mb-4">
        <h3 class="font-weight-bold">Manage Space</h3>
        <h6 class="font-weight-normal mb-0">Total Space: <span class="text-primary">{{$spaces->count()}}</span></h6>
    </div>
    <div class="col-md-6 text-right">
        {{-- <a class="btn btn-primary" href="">
            <i class="ti-plus"></i> Add Space
         </a> --}}
    </div>
    <div class="col-md-12">
      @include('layouts.partials.notification')
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="parkingSpace">
                <thead>
                  <tr>
                    <th>
                      Space Number
                    </th>
                    <th>
                      Availability
                    </th>
                    <th>
                      Actions
                    </th>
                  </tr>
                </thead>
               <tbody>
                    @forelse ($spaces as $space)
                        <tr>
                            <td>{{$space->space_number}}</td>
                            <td> @if ($space->availability == 0)
                                <label class="badge badge-success">Available</label>
                                @elseif($space->availability == 1)
                                <label class="badge badge-danger">Occupied</label>
                                @else 
                                <label class="badge badge-primary px-3">Booked</label>
                                @endif
                            </td>
                            <td>
                              @if($space->availability == 2)
                             <a href="{{route('space.booking',$space->id)}}" class="btn btn-primary py-2 rounded-0">
                              View Booking
                             </a>
                             @else
                             <button class="btn btn-primary py-2 rounded-0" disabled>
                              No Action
                             </button>
                             @endif
                            </td>
                        </tr>
                    @empty
                    @endforelse
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
        $('#parkingSpace').DataTable();
    </script>
@endpush