<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
        <link rel="dns-prefetch" href="//fonts.googleapis.com" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        <link rel="shortcut icon" type="png" sizes="32x32" href="/favicon.png">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-transform" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta name="author" content="Nick">
        <title>Api.hellocode.name</title>
        <meta name="Keywords" content="php,laravel,vue,js,mysql,css,html5" />
        <meta name="Description" content="php,laravel,vue,js,mysql,css,html5" />
        <link href="//fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            #box {
                height: 300px;
                width: 100%;
                perspective: 1000px;
            }
            #banner {
                height: 300px;
                width: 480px;
                margin: 30vh auto;
                transition: transform 0.1s;
                box-shadow: 0 0 15px rgba(0,0,0,.35);
                line-height: 300px;
                font-size: 50px;
                font-family: 'Nunito', sans-serif;
                color: #9caebf;
                padding-left: 1vw;
                background-color: #f0f2f5;
            }
            .print {
                overflow: hidden;
                animation: typing 3s steps(30);
            }
            @keyframes typing {
                0% {
                    width: 0;
                }
                100% {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <div id="box">
            <div id="banner">
                <p class="print"> Api.hellocode.name✔ </p>
            </div>
        </div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>
            $('#box').on('mousemove', function(e){

                let offset = $('#box').offset()

                let x = e.pageX - offset.left
                let y = e.pageY - offset.top

                let centerX = $('#box').outerWidth() /2
                let centerY = $('#box').outerHeight() /2

                let deltaX = x - centerX
                let deltaY = y - centerY

                let percentX = deltaX / centerX
                let percentY = deltaY / centerY

                let deg = 10

                $('#banner').css({
                    transform: 'rotateX('+deg*-percentY + 'deg)'+' rotateY('+deg*percentX+'deg)'
                })
            })

            $('#box').on('mouseleave', function(){
                $('#banner').css({
                    transform: ''
                })
            })
        </script>
    </body>
</html>
