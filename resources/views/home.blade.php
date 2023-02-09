
@extends("master")
@section('title', 'User account')
@section('content')

    <main>
        <div class="main__wrapper">
        <h3>Hello, {{Auth::user()->name}}</h3>
       @if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}

        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
            <h3>Your orders:</h3>
        @foreach ($data as $el)
            @if ($el->user_id == Auth::user()->id)
            <div class="allert allert-info" style="margin: 20px 0;">
                <p>Сustomer name: {{$el->name }} {{$el->surname}} </p>
                <p>Type of procedure: {{$el->procedure}} </p>
                <p>Date and time: {{$el->date}}; {{$el->time}}</p>
                <p>Order time: {{$el->created_at}}</p>
                <a href="{{route('order-details', $el->id)}}"><button>Details</button></a> 
            </div>
            @endif

        @endforeach
            <h3><a href="ordering">Order more</a></h3>
        </div>
    </main>
    <footer>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    </footer>



@endsection
