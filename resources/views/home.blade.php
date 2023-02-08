
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


        @if (!$data->isEmpty())
            <h3>Your orders:</h3>
        @endif
        @foreach ($data as $el)
            <div class="allert allert-info" style="margin: 20px 0;">
                <p>Сustomer name: {{$el->name }} {{$el->surname}} </p>
                <p>Type of procedure: {{$el->procedure}} </p>
                <p>Date and time: {{$el->date}}; {{$el->time}}</p>
                <p>Order time: {{$el->created_at}}</p>
            </div>
        @endforeach
        @if (!$data->isEmpty())
            <h3><a href="ordering">Order more</a></h3>
        @endif


        @if ($data->isEmpty())
            <h3>Do not have orders yet? <a href="ordering">Order it now</a></h3>
        @endif
        </div>
    </main>
    <footer>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    </footer>



@endsection
