<!-- create.blade.php -->
<h1>Book a Course</h1>
<form action="/book" method="POST">
    @csrf
    <select name="activity_id">
        @foreach($activities as $activity)
            <option value="{{ $activity->id }}">{{ $activity->name }}</option>
        @endforeach
    </select>
    <!-- Add other form fields here -->
    <button type="submit">Book</button>
</form>
