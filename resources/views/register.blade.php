@if (Session::has('success'))
    <p>{{ Session::get('success') }}</p>
@endif
@if (Session::has('fail'))
    <p>{{ Session::get('fail') }}</p>
@endif

<form action="{{ route('register') }}" method="post">
    @csrf
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="email"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="psw" required>
        <hr>

        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
</form>
