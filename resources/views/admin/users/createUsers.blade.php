@extends('admin.admin_dashboard')
@section('admin')
  <!--start breadcrumb-->
  <h1 class="text-center">New User</h1>
  <div style="width:500px; margin:0px auto;">
    <form action="{{ route('user.create') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="productName" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="productName" placeholder="customer name" required>
      </div>
      <div class="mb-3">
        <label for="productPrice" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="productPrice" placeholder="customer name" required>
      </div>
      <div class="mb-3">
        <label for="productQuantity" class="form-label">password</label>
        <input type="text" class="form-control" name="password" id="productQuantity" placeholder="Product Quantity" required>
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
@endsection