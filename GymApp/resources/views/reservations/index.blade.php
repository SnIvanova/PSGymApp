<!-- index.blade.php -->
<h1>My Reservations</h1>
<ul>
    @foreach($reservations as $reservation)
        <li>{{ $reservation->activity->name }} - {{ $reservation->reserved_at }}</li>
        <form action="/reservations/{{ $reservation->id }}/cancel" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Cancel</button>
        </form>
    @endforeach
</ul>
