@extends('admin.admin')

@section('main')

<h1>Product Create</h1>

<form action="{{route('product.store')}}" method = 'post' role="form">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ten san pham</label>
      <input type="text" class="form-control" name='name' id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Image</label>
      <input type="text" class="form-control" name='image' id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Price</label>
      <input type="text" class="form-control" name='price' id="exampleInputEmail1" aria-describedby="emailHelp">
      
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
                <option <nav
                  class="navbar navbar-expand-lg navbar-light bg-light fixed-top"
                >
                  <div class="container">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button
                      class="navbar-toggler hidden-lg-up"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapsibleNavId"
                      aria-controls="collapsibleNavId"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    ></button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                      <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" href="#" aria-current="page"
                            >Home
                            <span class="visually-hidden">(current)</span></a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="dropdownId"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >Dropdown</a
                          >
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownId"
                          >
                            <a class="dropdown-item" href="#"
                              >Action 1</a
                            >
                            <a class="dropdown-item" href="#"
                              >Action 2</a
                            >
                          </div>
                        </li>
                      </ul>
                      <form class="d-flex my-2 my-lg-0">
                        <input
                          class="form-control me-sm-2"
                          type="text"
                          placeholder="Search"
                        />
                        <button
                          class="btn btn-outline-success my-2 my-sm-0"
                          type="submit"
                        >
                          Search
                        </button>
                      </form>
                    </div>
                  </div>
                </nav>
                 value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
      
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