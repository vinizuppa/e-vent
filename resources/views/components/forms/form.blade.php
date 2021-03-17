<form action="{{ route($route) }}" method="post">
    @foreach ($fields as $field)
    <div class="mb-3">
        <x-label {{ $field }} />
        <x-input {{ $field }} />
    </div>
    @endforeach
    <div>
        <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
    </div>
</form>
