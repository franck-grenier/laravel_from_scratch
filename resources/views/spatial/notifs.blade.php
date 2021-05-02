@extends('spatial/spatial_layout')

@section('content')
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">

            <header class="major special">
                <h2>Notifications</h2>
                <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
            </header>

            <ul>
                @forelse($notifs as $notif)
                <li>New article "{{ $notif->data['title'] }}" created on {{ $notif->data['created_at'] }}</li>
                @empty
                    No content...
                @endforelse
            </ul>

        </div>
    </section>
@endsection
