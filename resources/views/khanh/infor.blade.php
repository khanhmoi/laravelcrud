
<h1>Thông tin chi tiết</h1>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($news as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->address}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

