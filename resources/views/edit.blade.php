<!-- resources/views/users/edit.blade.php -->
<head>
    {{-- BOOTSTRAP CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center pt-4 bg-light">
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="p-3 w-100 border bg-white shadow" style="max-width: 500px;">
        @csrf
        @method('PATCH')
        <h1 class="h1">Edit</h1>
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <!-- Add other input fields as needed -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</body>

