{{$message ?? ''}}
<form action="" method="post">
    @csrf
    <input type="text" name="email" placeholder="email"> <br>
    <input type="password" name="password" placeholder="password"> <br>
    <button type="submit">Login</button>
</form>