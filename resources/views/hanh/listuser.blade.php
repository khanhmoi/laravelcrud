<table border="1">
    <thead>

    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
    @endforeach
    <a href="">Thêm mới</a>
    </tbody>

</table>
