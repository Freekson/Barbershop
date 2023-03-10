@extends("master")

@section('title', 'Change order')

@section('content')

<main  class="main__wrapper">
                <h3>{{ __('Change order') }}</h3>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                     </div>
                 @endif
                <div class="main__body">
                    <form name="ordering" id="ordering" method="post" action="{{route('order-change-submit', $data->id)}}">  
                        @csrf
                        <div class="form__item" style="display:none">
                            <div>
                                <input id="user_id" type="text" class="input " name="user_id" value="{{  Auth::user()->id }}" required autocomplete="user_id" >
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="name">{{ __('Name') }}</label>
                            <div>
                                <input id="name" type="text" class="input " name="name" value="{{ $data->name }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="surname">{{ __('Surname') }}</label>
                            <div>
                                <input id="surname" type="text" class="input " name="surname"  value="{{ $data->surname }}" required autocomplete="surname" autofocus>
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="address">{{ __('Address') }}</label>

                            <div>
                                <input id="address" type="text" class="input" name="address" value="{{ $data->address }}" required autocomplete="address" autofocus>
                            
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="date">{{ __('Date') }}</label>

                            <div>
                                <input id="date" type="date" class="input" name="date" value="{{ $data->date }}" required autofocus>
                            
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="time">{{ __('Time') }}</label>

                            <div>
                                <input id="time" type="time" class="input" name="time" value="{{ $data->time }}" required autofocus>
                            
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="??hoose">{{ __('Choose your procedure') }}</label>
                            <div>
                                <select style="width:100%; padding: 7px; margin: 15px; margin-left:0;" name="procedure" id="procedure" class="pole_input" class="select">
                                    <option value="Haircut">Haircut</option>
                                    <option value="Combo (Beard + Haircut)">Combo (Beard + Haircut)</option>
                                    <option value="Shaving with a razor">Shaving with a razor</option>
                                    <option value="Barber course">&nbsp;Barber course</option>
                                    <option value="Brow collection">Brow collection</option>
                                    <option value="Cosmetology services">Cosmetology services</option>
                                    <option value="Hair coloring">Hair coloring</option>
                                    <option value="Daily hairstyle">Daily hairstyle</option>
                                </select>
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="message">{{ __('Message') }}</label>
                            <div>
                                <textarea id="message" type="text" class="input" name="message" require autofocus>{{ $data->message }}</textarea>
                            </div>
                        </div>
                        <div class="form__item form__btn">
                                <button type="submit" >
                                    {{ __('Change') }}
                                </button>
                                <div >
                                </div>
                        </div>
                    </form>
                    
                </div>
    </main>
@endsection