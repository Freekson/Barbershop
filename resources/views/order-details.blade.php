
@extends("master")
@section('title', 'Order details')
@section('content')

    <main>
        <div class="main__wrapper">
       @if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>
        @endif



        @if (!$data->isEmpty())
            <h3>Your orders:</h3>
        @endif
        @foreach ($data as $el)
            <div class="allert allert-info" style="margin: 20px 0;">
                <p>Сustomer name: {{$el->name }} {{$el->surname}} </p>
                <p>Type of procedure: {{$el->procedure}} </p>
                <p>Date and time: {{$el->date}}; {{$el->time}}</p>
                <p>Order time: {{$el->created_at}}</p>
                <a href="{{ route('home'), $el->id }}"><button class="btn btn-warning">Change</button></a>
            </div>
        @endforeach

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
