@extends('admin.admin')

@section('main')

<div
    class="table-responsive"
>
<h1> Danh muc </h1>
<a href="{{route('category.create')}}" class="btn btn-success">Them moi</a>
<hr>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cats as $cat)
                <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                <td>{{$cat->status == 0 ? 'Tam an' : 'Hien thi'}}</td>
                <td>
                    <form action="{{route('category.destroy',$cat->id)}}" method="post">
                        @csrf @method('delete')
                    <a href="{{route('category.edit',$cat->id)}}" class="btn btn-sm btn-primary">Sua</a>
                    <button class="btn btn-sm btn-danger">Xoa</button>
                    </form>
                </td>
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
</div>

{{-- {{$cats->links()}} phan trang --}}
    
@endsection