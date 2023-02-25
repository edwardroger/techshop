<h1>Register</h1>
<span>{{$message ?? ''}}</span>
<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter name value"> <br>
    <input type="text" name="email" placeholder="Enter email value"> <br>
    <input type="password" name="password" placeholder="Enter password"> <br>
    <input type="password" name="confirm_password" placeholder="Confirm your password"> <br>
    <button type="submit">Register</button>
</form>