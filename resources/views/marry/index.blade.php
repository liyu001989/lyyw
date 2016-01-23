<!DOCTYPE html>
<html>
<head>
    <title>marry</title>
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/bower/semantic/dist/semantic.min.css') }}" type="text/css" rel="stylesheet">

    <script src="{{ asset('assets/bower/requirejs/require.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
    <!--
                   ,,
       ..... .,.,::::,
      .::::, .:;;;;;;:.
       .,,.   ,:;;;;:,
         .,.   .,,,::.
        .:::::,,,  ,::.
        :;;;;;;;,  ,;;:.
        .:;;;;::.  :;;;:.
         ,:,,,.   .:;;;;:
        ,::       :;;;;;;,
       ,;;:.     ,:;;;;;;:.
      ,;;;:.    .:;;;;;;;:.
     ,:;;;;:    ,;;;;;;;;:.
    .:;;;;;:.   ,;;;;;;::.
    ,;;;;;;;:.  .,::;:,.
    :;;;;;;;;,     ,;:
    ,;;;;;;;;:.    ,::..,,,,,.
     ,::;;;;;:.  ..,;;:::,,:::,.,,:,
      ..,,::::::::::,,::,,..,:;::,,.
           ..,,,,..   .,::::::,..
    -->
    <div class="ui sidebar inverted vertical menu left uncover">
        <a class="item">Home</a>
        <a class="item">ABOUT</a>
        <a class="item">PORTFOLIO</a>
        <a class="item">CONTACT</a>
    </div>
    <div class="ui pusher">
        <div class="ui borderless main menu">
            <a class="toc item">
                <i class="sidebar icon"></i>
            </a>
            <div class="ui text container">
              <div class="header item" href="#">
                <img src="{{ asset('images/logo.png') }}" class="logo">
                LYYW
              </div>
              <a class="item" href="#">ABOUT</a>
              <a class="item" href="#">PORTFOLIO</a>
              <a class="item" href="#">CONTACT</a>
            </div>
        </div>

        <div class="ui inverted vertical footer segment">
            <div class="ui center aligned container">
              <div class="ui stackable inverted divided grid">

              </div>
            </div>
        </div>
    </div>
</body>
</html>