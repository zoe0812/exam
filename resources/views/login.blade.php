<div>
    @session("successful")
    <script>
        alert("{{ session('successful') }}");
    </script>
    @endsession
    <form action="{{ route('login_user')}}" method="POST">
        @csrf
    <label>Username</label>
    <input type="text" name="name"><br><br>
    <label>Password</label>
    <input type="password" name="password"><br><br>
    <button type="submit">login</button>
</form>
<a href="register">register</a>
</div>
