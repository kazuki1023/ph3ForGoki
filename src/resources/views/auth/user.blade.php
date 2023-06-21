<h1>ユーザー一覧</h1>
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
        {{-- <li>{{}}</li> --}}
    @endforeach
</ul>