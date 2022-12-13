@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
    
                    <h4 class="card-title">All Blog</h4>
                    
    
    
    <div class="table-responsive">
        <table class="table mb-0">

            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Blog Category </th>
                    <th>Blog Title</th>
                    <th>Blog Tags</th>
                    <th>Blog Image</th>
                    {{-- <th>Blog Description</th> --}}
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @php($i=1)
                @foreach($blogs as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $item['category']['blog_category']}}</td>
                    <td>{{ $item->blog_title}}</td>
                    <td>{{ $item->blog_tags}}</td>
                    <td><img src="{{ asset($item->blog_image)}}" style="width:60px; height: 50px;"></td>
                    {{-- <td>{{ $item->blog_description}}</td> --}}
                   <td>
                    <a href="{{ route('edit.blog', $item->id)}}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i></a>

                    <a href="{{ route('delete.blog', $item->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i></a>
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
                        