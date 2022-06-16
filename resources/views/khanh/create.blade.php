@if($errors->any())
    <div class="alert alert-danger">
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
@if(auth()->user()->can('create'))
<form method="post" action="create">
    @csrf
    <p>
        <label for="name">Name</label><br>
        <input type="text" name="name" value="">
    </p>

    <p>
        <label for="address">Address</label><br>
        <input type="text" name="address" value="">
    </p>

    <br>
        <button type="submit">Submit</button>
        <a href="/list">Xem danh sách</a><br>
        <a href="{{route('user.index')}}">danh sách người dùng</a>
    </p>
    @else
        <h1 >bạn không có quyền tạo đâu!</h1>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
</form>

