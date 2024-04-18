@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form method="POST" action="/send-email" class="mt-3">
    @csrf
    <button type="submit" class="btn btn-primary">Send Email</button>
</form>
