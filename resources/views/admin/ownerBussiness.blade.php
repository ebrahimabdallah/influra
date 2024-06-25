@extends('admin.layouts.app')
@section('content')

 
 
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

<h2>Users</h2>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th> name </th>
            <th>email</th>
            <th>category</th>

                 <th>Operations</th>
 
         </tr>
    </thead>
    <tbody>
        @foreach ($ownerBussiness as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->category_id }}</td>
                
                <td>
                    

                </td>
                
                  
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

 