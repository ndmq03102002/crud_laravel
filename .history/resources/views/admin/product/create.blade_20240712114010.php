@extends('admin.admin')

@section('main')

<h1>Product Create</h1>

<form action="{{route('product.store')}}" method = 'post' role="form">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ten danh muc</label>
      <input type="text" class="form-control" name='name' id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ten danh muc</label>
      <input type="text" class="form-control" name='name' id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ten danh muc</label>
      <input type="text" class="form-control" name='name' id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ten danh muc</label>
      <input type="text" class="form-control" name='name' id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ten danh muc</label>
      <input type="text" class="form-control" name='name' id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ten danh muc</label>
      <input type="text" class="form-control" name='name' id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>      
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Trang thai</label>
      <div class="radio">
        <label for="">
            <input type="radio" name="status" value="1" checked>
            Hien thi
        </label>
      </div>
      <div class="radio">
        <label for="">
            <input type="radio" name="status" value="0" >
            Tam an
        </label>
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


    
@endsection