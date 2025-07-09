<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 30px;
    }

    .register-card {
        max-width: 450px;
        margin: 60px auto;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        padding: 30px 25px;
    }

    .register-card h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 10px 12px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 15px;
        font-size: 14px;
    }

    .form-control:focus {
        border-color: #007bff;
        outline: none;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 16px;
        width: 100%;
        border-radius: 5px;
        font-size: 15px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .alert {
        background-color: #f8d7da;
        color: #842029;
        padding: 10px 15px;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    .text-center a {
        color: #007bff;
        text-decoration: none;
    }

    .text-center a:hover {
        text-decoration: underline;
    }
</style>

<div class="register-card">
    <h4>User Management System</h4>
    <h2>Register</h2>

    @if ($errors->any())
    <div class="alert">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <label class="form-label">Full Name</label>
        <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}" required>

        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>

        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>

        <label class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" required>

        <button type="submit" class="btn-primary">Register</button>
    </form>

    <div class="text-center mt-3">
        <small>Already have an account? <a href="{{ route('login') }}">Login here</a></small>
    </div>
</div>