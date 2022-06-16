
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Tools</th>
    </tr>
    </thead>
    <tbody>
    @foreach($news as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->address}}</td>
        <td>
            @if(auth()->user()->can('edit articles'))
            <a href="edit/{{$row->id}}">Edit</a>
            @endif
           |@if(auth()->user()->can('create'))
            <a href="delete/{{$row->id}}">Delete</a>
            @endif
        </td>
        <td><a href="infor/{{$row->id}}">Thông tin chi tiết</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
