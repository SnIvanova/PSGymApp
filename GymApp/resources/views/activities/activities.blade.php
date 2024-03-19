<h1>My Activities</h1>
<ul>
    @foreach($activities as $activity)
        <li>{{ $activity->name }}</li>
    @endforeach
</ul>