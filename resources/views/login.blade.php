<form action="{{ route('login') }}" method="post">
@csrf
    <div class="container">
        <label for="uname"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" >
    @error('email')
        <p> {{ $message }} </p>
    @enderror
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" >
    @error('password')
        <p> {{ $message }} </p>
    @enderror
        <button type="submit">Login</button>
    </div>
</form>
