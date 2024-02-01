@extends('admin.admin_dashboard')
@section('admin')
<h1 class="text-center">Product Create</h1>
  <div style="width:500px; margin:0px auto;">
    <form action="{{ route('user.update',$user->id) }}" method="post">
      {{csrf_field()}}
      @method('PUT')
      <div class="mb-3">
        <label for="productName" class="form-label">Name</label>
        <input type="text" class="form-control" name="product_name" id="productName" value="{{ $user->name}}" required>
      </div>
      <div class="mb-3">
        <label for="productPrice" class="form-label">Email</label>
        <input type="email" class="form-control" name="price" id="productPrice" value="{{ $user->email}}" required>
      </div>
      <div class="mb-3">
        <label for="productQuantity" class="form-label">Role</label>
        <input type="text" class="form-control" name="role" id="productQuantity" value="{{ $user->role}}" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection