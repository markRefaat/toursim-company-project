@extends('layouts.app')
@section('content')



<!-- Editable table -->
<div style="overflow: hidden;">

  @include('customers.sidenav')

  <div class="card" style="float:left; width:80%;">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Late payments</h3>
    <div class="card-body">
      <div id="table" class="table-editable">
        <table id="dtBasicExample" class="table table-bordered table-responsive-lg table-striped text-center">
          <thead>
            <tr>
              <th class="text-center">Person Name</th>
              <th class="text-center">Date</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($lateOrders as $lateOrder )
            <tr>
              <td class="pt-3-half">{{$lateOrder->customer->name}}</td>
              <td class="pt-3-half">{{$lateOrder->date}}</td>
              <td class="table-view">
                <a href="/order/{{$lateOrder->id}}" class="btn btn-info btn-rounded btn-sm my-0">View</a>
              </td>
            </tr>
            @empty
            <th colspan="4" class="text-center">No customers to show</th>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>


</div>

@include('customers.addcustomer')


<script>
  window.onload = function () {
  $(document).ready(function () {
    $('#dtBasicExample').DataTable(
      {
        "columnDefs": [
          { "orderable": false, "targets":2 },
          { "orderable": false, "targets":3 },
        ],
      }
    );
    $('.dataTables_length').addClass('bs-select');
  });

</script>
@endsection