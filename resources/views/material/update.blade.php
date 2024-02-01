@extends('admin.admin_dashboard')
@section('admin')
<h1 class="text-center">Product Create</h1>
  <div style="width:500px; margin:0px auto;">
    <form action="{{ route('material.update',$material->id) }}" method="post">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="productName" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="productName" value="{{ $material->name}}" required>
      </div>
      <div class="mb-3">
        <label for="productPrice" class="form-label">Rate</label>
        <input type="number" class="form-control" name="rate" id="productPrice" value="{{ $material->rate}}" required>
      </div>
      <div class="mb-3">
        <label for="productQuantity" class="form-label">Dicision</label>
        <input type="text" class="form-control" name="dicision" id="productQuantity" value="{{ $material->decision}}" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection