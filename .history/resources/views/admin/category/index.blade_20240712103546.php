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
                    <a href="{{route('category.edit')}}" class="btn btn-sm btn-primary">Sua</a>
                    <a href="" class="btn btn-sm btn-primary">XOa</a>
                </td>
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
</div>

    
@endsection