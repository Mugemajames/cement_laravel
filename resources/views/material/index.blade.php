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
  <table class="table">
    <thead>
      <tr>
      <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Rate</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($data as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->name }}</td>
          <td>{{ $item->rate }}</td>
          
          <td class="px-6 py-4 text-right">
          
          <a href="{{url('material/delete')}}/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a>
          <a href="{{url('material/edit')}}/{{$item->id}}" class="btn btn-primary btn-sm">Edit</a>
          
        
            
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @endsection