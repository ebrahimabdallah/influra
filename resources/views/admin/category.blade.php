 
@extends('admin.layouts.app')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

 

 <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #dddddd;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    h2 {
        text-align: center;
    }
</style>
<a href="{{ url('categoryCreate') }}">
    <div class="btn btn-primary" >Create</div>
    </a>
<h2>category</h2>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>first name </th>
            <th> image</th>
                 <th>Operations</th>
 
         </tr>
    </thead>
    <tbody>
        @foreach ($category as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td><img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}" width="100"></td>
                
                <td>
                    

                </td>
                
                  
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

 