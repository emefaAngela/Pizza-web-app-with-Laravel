    @extends('layouts.layout')
        @section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Pizza List
                </div>

                <p>{{$name}}</p>
                
                
                <!-- @for($i = 0;$i < count($pizzas); $i++ )
                   <p>{{ $pizzas[$i]['type'] }}</p>
                @endfor                 -->

                @foreach($pizzas as $pizza)
                   <div>
                     {{ $loop->index }} {{ $pizza['type']}} - {{ $pizza['base']}}
                   </div>

                @endforeach

            </div>
        </div>
    
