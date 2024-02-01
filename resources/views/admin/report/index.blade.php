@extends('admin.admin_dashboard')
@section('admin')

<div class="positon-relative">
    <div class="d-flex">
    
      <h1>Product Data</h1>
      <div class="position-absolute end-0 me-4">
        <a class="btn btn-primary" href="{{ route('users.page') }}">Create</a>
      </div>
    </div>
  </div>



  <div class="col-lg-7 col-xl-8 stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                <h6 class="card-title mb-0">Report</h6>
                <div class="dropdown mb-2">
                    <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                </div>
                </div>
                <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                    <tr>
                        <th class="pt-0">#</th>
                        <th class="pt-0">Raw Material Name</th>
                        <th class="pt-0">Raw Material Rate</th>
                        <th class="pt-0">Added Date</th>
                        <th class="pt-0">Update Date</th>
                        <th class="pt-0">Decision</th>
                        <th class="pt-0">Added By</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($report as $item)
        
                    <tr>
                        <td>{{$item->id}}</td>
                        
                        <td>{{$item->name}}</td>
                        <td>{{$item->rate}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td><span class="badge bg-danger"><td>{{$item->decision}}</td></span></td>
                        <td>{{$item->added_by}}</td>
                    </tr>
                    
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>

        </div> <!-- row -->
  @endsection