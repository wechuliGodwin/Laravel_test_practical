<div class="container mt-5">
    <div class="card shadow mx-auto" style="max-width: 400px;">
        <div class="card-body">
            <h4 class="text-center mb-3">Edit User</h4>

            <form method="POST" action="{{ route('user.update', $user->id) }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="full_name" value="{{ $user->full_name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-warning w-100">Update User</button>
            </form>
        </div>
    </div>
</div>