
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
<form method="post" action="update/{{ $news->id }}">
    @csrf
    <input type="hidden" name="id" value="{{ $news->id }}">
    <p>
        <label for="name">Name</label><br>
        <input type="text" name="name" value="{{ $news->name }}">
    </p>
    <p>
        <label for="address">Address</label><br>
        <input type="text" name="address" value="{{ $news->address }}">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
