<h1>My Reservations</h1>
<ul>
    @foreach($reservations as $reservation)
        <li>{{ $reservation->activity->name }} - {{ $reservation->reserved_at }}</li>
    @endforeach
</ul>