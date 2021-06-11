<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    {{--<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
    <meta name="csrf-token" content="{{csrf_token()}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        .list-group{
            overflow-y: scroll;
            height: 150px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row" id="app">
        <div class="offset-4 col-4">
            <li class="list-group-item active" aria-current="true">Chat Room</li>

            <ul class="list-group "  v-chat-scroll>
                <message
                    v-for="value,  index in  chat.message"


                    :key=value.index color='success'
                    :user=chat.user[index]
                    :color=chat.color[index]
                    :time=chat.time[index]

                >
                    @{{ value }}
                </message>
            </ul>
            <div class="badge badge-pill badge-primary">@{{ typing }}</div>
            <input type="text" class="form-control" placeholder="Type your message..." v-model="message" @keyup.enter="send">


        </div>
    </div>
</div>

<script src="{{'js/app.js'}}"></script>
</body>
</html>
