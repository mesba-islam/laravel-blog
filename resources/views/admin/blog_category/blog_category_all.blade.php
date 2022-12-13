@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
    
                    <h4 class="card-title">Blog Categories</h4>
                    
    
    
    <div class="table-responsive">
        <table class="table mb-0">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @php($i=1)
                @foreach($blogcategory as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $item->blog_category}}</td>
                   <td>
                    <a href="{{ route('edit.blog.category', $item->id)}}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i></a>

                    <a href="{{ route('delete.blog.category', $item->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i></a>
                   </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>

</div>

    </div>
</div>

@endsection
                        