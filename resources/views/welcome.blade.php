<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <h1>{{__('messages.welcome')}}</h1>
                {{-- <p>{{$obj->name}} -- {{$obj->gender}}</p> --}}
                {{--
                                @if($name == "sam")
                                    <p>Yes you're Sam</p>
                                @else
                                    <p>You're a Guest</p>
                                @endif

                               @foreach($data as $_data)
                                    <p>{{$_data}}</p>
                                @endforeach
                                --}}
                {{--
                @if($name == 'ahmad')
                    <p>aha</p>
                @elseif($name == 'sam')
                    <p>samo</p>
                @else
                    <p> new</p>

                    @endif
                @forelse($data as $_data)
                    <p>{{$_data}}</p>
                @empty
                    <p>no data</p>
                @endforelse
                --}}
            </div>


        </div>
    </body>
</html>
