@if(auth()->user()->can(['create','read']))
<table border="1">
    <thead>
    <tr>

        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    @foreach($news as $row)
        <tr>
            <td>{{$row->address}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@else
    <h1>Bạn không có quyền xem đâu !</h1>
@endif
