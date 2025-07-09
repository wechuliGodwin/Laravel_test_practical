<h2>Register</h2>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('register.store') }}" method="POST">
    @csrf

    <div>
        <label>Full Name</label><br>
        <input type="text" name="full_name" value="{{ old('full_name') }}" required>
    </div>

    <div>
        <label>Email</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label>Password</label><br>
        <input type="password" name="password" required>
    </div>

    <div>
        <label>Confirm Password</label><br>
        <input type="password" name="password_confirmation" required>
    </div>

    <div style="margin-top: 10px;">
        <button type="submit">Register</button>
    </div>
</form>