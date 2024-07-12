@extends('admin.admin')

@section('main')

<h1>Category Create</h1>

<form action="{{route('category.store')}}" method = 'post' role="form">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ten danh muc</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Trang thai</label>
      <div class="radio"></div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


    
@endsection