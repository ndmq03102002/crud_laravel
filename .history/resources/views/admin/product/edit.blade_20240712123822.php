@extends('admin.admin')

@section('main')

<h1>Edit Product</h1>

<form action="{{route('product.update',$category->id)}}" method = 'post' role="form">
    @csrf @method('put')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ten san pham</label>
      <input type="text" class="form-control" name='name' value="{{$product->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Image</label>
      <input type="text" class="form-control" name='image' value="{{$product->image}}" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Price</label>
      <input type="text" class="form-control" name='price' value="{{$product->price}}" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Content</label>
      <input type="text" class="form-control" name='content' id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Category_id</label>
       <select id="category_id" name="category_id" class="form-control" required>
            <option value="">Chọn danh mục</option>
            @foreach ($cats as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
      
    </div> 
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Trang thai</label>
      <div class="radio">
        <label for="">
            <input type="radio" name="status" value="1" {{$category->status == 1 ? 'checked' : ''}}>
            Hien thi
        </label>
      </div>
      <div class="radio">
        <label for="">
            <input type="radio" name="status" value="0" {{$category->status == 0 ? 'checked' : ''}}>
            Tam an
        </label>
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


    
@endsection