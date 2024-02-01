@extends('admin.admin_dashboard')
@section('admin')
  <!--start breadcrumb-->
  <h1 class="text-center">New User</h1>
  <div style="width:500px; margin:0px auto;">
    <form action="{{ Route('material.store') }}" method="post">
      @csrf
      
      <div class="mb-3">
        <label for="productName" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="productName" placeholder="customer name" required>
      </div>
      <div class="mb-3">
        <label for="productPrice" class="form-label">Rate</label>
        <input type="number" class="form-control" name="rate" id="productPrice" placeholder="rate" required>
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
@endsection