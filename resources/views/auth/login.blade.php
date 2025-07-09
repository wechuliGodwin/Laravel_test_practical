<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 30px;
    }

    .login-card {
        max-width: 400px;
        margin: 60px auto;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        padding: 30px 25px;
    }

    .login-card h4 {
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

    .text-center small {
        color: #555;
    }

    .text-center a {
        color: #007bff;
        text-decoration: none;
    }

    .text-center a:hover {
        text-decoration: underline;
    }

    .alert {
        background-color: #f8d7da;
        color: #842029;
        padding: 10px 15px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>

<div class="login-card">
    <h4>User Management System</h4>
    <h4>Login</h4>

    @if (session('error'))
    <div class="alert">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>

        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter password" required>

        <button type="submit" class="btn-primary">Login</button>
    </form>

    <div class="text-center mt-3">
        <small>Don't have an account? <a href="{{ route('register') }}">Register here</a></small>
    </div>
</div>