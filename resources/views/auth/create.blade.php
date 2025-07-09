<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 30px;
    }

    .form-card {
        max-width: 450px;
        margin: 60px auto;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        padding: 30px 25px;
    }

    .form-card h4 {
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

    .alert-danger {
        background-color: #f8d7da;
        color: #842029;
        padding: 10px 15px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>

<div class="form-card">
    <h4>User Management System</h4>
    <h4>Create User</h4>
    <a href="{{ route('dashboard') }}" style="text-decoration: none; color: #0056b3; font-size: 14px; display: inline-block; margin-bottom: 15px;">
        ← Back to Dashboard
    </a>

    @if ($errors->any())
    <div class="alert-danger">
        @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
        @endforeach
    </div>
    @endif

    <form method="POST" action="{{ route('user.store') }}">
        @csrf

        <label class="form-label">Full Name</label>
        <input type="text" name="full_name" class="form-control" placeholder="Enter full name" required>

        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>

        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter password" required>

        <label class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" required>

        <button type="submit" class="btn-primary">Create User</button>
    </form>
</div>