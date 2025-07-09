<div class="container mt-5">
    <div class="card shadow mx-auto" style="max-width: 400px;">
        <div class="card-body">
            <h4 class="text-center mb-3">Login</h4>

            @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                </div>

                <button type="submit" class="btn btn-success w-100">Login</button>
            </form>

            <div class="text-center mt-3">
                <small>Don't have an account? <a href="{{ route('register') }}">Register here</a></small>
            </div>
        </div>
    </div>
</div>