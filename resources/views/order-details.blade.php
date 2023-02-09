
@extends("master")
@section('title', 'Order details')
@section('content')

    <main>
        <div class="main__wrapper" style="display:flex; flex-direction:column; align-items:center; margin-top:50px;">

        <h3>Order:</h3>
            <div class="allert allert-info" style="margin: 20px 0;">
                <p>Сustomer name: {{$data->name }} {{$data->surname}} </p>
                <p>Type of procedure: {{$data->procedure}} </p>
                <p>Date and time: {{$data->date}}; {{$data->time}}</p>
                <p>Address: {{$data->address}}</p>
                <p>Message: {{$data->message}}</p>
                <p>Order time: {{$data->created_at}}</p>
                <a href="{{route('order-change', $data->id)}}"><button>Edit</button></a> 
                <a href="{{route('order-delete', $data->id)}}"><button>Delete</button></a> 
            </div>


        </div>
    </main>
    <footer>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    </footer>



@endsection
