 


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

<h2>about</h2>

<table>
    <thead>
        <tr>
            <th>#</th>


            <th>  image </th>
            
            <th>  name </th>
            <th>  facebook</th>
            <th>  	instagram</th>
            <th>  youtube</th>
            <th>  	twitter</th>
            <th>  email</th>
         

                 <th>Operations</th>
 
         </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->name }}</td>
                


                <td>{{ $item->facebook }}</td>
                <td>{{ $item->instagram }}</td>
                <td>{{ $item->youtube }}</td>
                <td>{{ $item->twitter }}</td>
                <td>{{ $item->email }}</td>
                 
                <td>
                    

                </td>
                
                  
            </tr>
        @endforeach
    </tbody>
</table>

@endsection


 