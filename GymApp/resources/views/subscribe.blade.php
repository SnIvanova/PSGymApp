<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscribe to a Course') }}
        </h2>
    </x-slot>
<div class="container">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <form method="POST" action="{{ route('course.subscribe') }}">
        @csrf
        <div class="mb-3">
            <label for="courseId" class="form-label">Select Course</label>
            <select class="form-select" id="courseId" name="course_id" required>
                @foreach ($corsi as $corso)
                    <option value="{{ $corso->id }}">{{ $corso->titolo }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
</div>
</x-app-layout>
