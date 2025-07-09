<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 30px;
    }

    h2.page-title {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
    }

    .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .top-bar a,
    .top-bar button {
        background-color: #007bff;
        color: white;
        padding: 8px 16px;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
    }

    .top-bar button:hover,
    .top-bar a:hover {
        background-color: #0056b3;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px 16px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    td a,
    td form button {
        margin-right: 8px;
        padding: 4px 10px;
        border: none;
        border-radius: 3px;
        font-size: 13px;
        cursor: pointer;
    }

    td a {
        background-color: #28a745;
        color: white;
        text-decoration: none;
    }

    td form button {
        background-color: #dc3545;
        color: white;
    }

    td form {
        display: inline;
    }

    td a:hover {
        background-color: #218838;
    }

    td form button:hover {
        background-color: #c82333;
    }
</style>

<h2 class="page-title">User Management System</h2>

<div class="top-bar">
    <a href="{{ route('user.create') }}">➕ Add New User</a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">🚪 Logout</button>
    </form>
</div>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th style="width: 180px;">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('user.edit', $user->id) }}">✏️ Edit</a>
                <form method="POST" action="{{ route('user.delete', $user->id) }}">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">🗑️ Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>