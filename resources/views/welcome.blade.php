<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;                                                                                                                                                                                                                                                           
                margin: 0;
            }
           
            #site_header {
                background-color: lightyellow;
                text-align: center;
                padding:30px 0;
            }
            .content {
                text-align: center;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
               
            }
            .card{
                margin:0.5rem;
                width: calc(100% / 4 -1rem);
            }
           

           

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <header id="site_header">
            <h1>Choose your Dream Holiday</h1>
        </header>
       <div class="container">
           <div class="content">
               @foreach($holidays as $holiday)
                <div class="card">
                    <img src="{{$holiday->image_url}}" alt="">
                    <dl>
                            <dt>City</dt>
                            <dd>{{$holiday->place}}</dd>
                            <dt>Hotel Name</dt>
                            <dd>{{$holiday->hotel_name}}</dd>
                            <dt>Date</dt>
                            <dd>{{$holiday->date}}</dd>
                        </dl>
                </div>
               @endforeach
           </div>
       </div>
    </body>
</html>
