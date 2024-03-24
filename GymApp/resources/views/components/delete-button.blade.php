<form method="POST" action="{{ $action }}" onsubmit="return confirm('{{ $confirmMessage }}');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-{{ $buttonClass }} my-2 w-100">{{ $buttonText }}</button>
</form>
