<div>
    <form action="{{ route('register_user') }}" method="POST">
        @csrf
    <label>Username</label>
    <input type="text" name="name"><br><br>
    @error('name')
        {{ $message }}
    @enderror
    <label>Password</label>
    <input type="password" name="password"><br><br>
    @error('password')
        {{ $message }}
    @enderror
    <label>Confirm Password</label>
    <input type="password" name="password_confirmation"><br><br>
    <button type="submit">register</button>
    @error('message')
    <script>
        alert("{{ $message }}");
    </script>
    @enderror
</form>
</div>
