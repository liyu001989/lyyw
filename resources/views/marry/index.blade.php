<!DOCTYPE html>
<html>
<head>
    <title>marry</title>
    <link href="{{ asset('assets/bower/semantic/dist/semantic.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">

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
        <a class="item" href="#top">Home</a>
        <a class="item" href="#about">ABOUT</a>
        <a class="item" href="#portfolio">PORTFOLIO</a>
        <a class="item" href="#contact">CONTACT</a>
    </div>
    <div class="ui pusher">
        <div class="ui borderless main menu" id="top">
            <a class="toc item">
                <i class="sidebar icon"></i>
            </a>
            <div class="ui text container">
                <div class="header item" href="#">
                    <img src="{{ asset('images/logo.png') }}" class="logo">
                LYYW
                </div>
                <a class="item" href="#about">ABOUT</a>
                <a class="item" href="#portfolio">PORTFOLIO</a>
                <a class="item" href="#contact">CONTACT</a>
            </div>
        </div>

        <div class="ui grid no-padding">
            <img src="{{ asset('images/header.jpg') }}" class="ui image full">
            <div class="main-title">
                <img src="{{ asset('images/flower.png') }}" class="ui image">
                <div class="" style="letter-spacing: 0.1em; font-size: 14px;">LYYW MARRY</div>
                <div style="letter-spacing:0.1em;font-size: 14px;">WEDDING PHOTOGRAPHY</div>
            </div>
        </div>

        <div class="ui grid no-padding" id="about">
            <div class="doubling two column row">
                <div class="column">
                    <img src="{{ asset('images/me.jpg') }}" class="ui image">
                </div>
                <div class="column">
                    <div style="padding:50px;">
                        <div>
                            I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
                        </div>
                        <div>
                            I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
                        </div>
                        <div>
                            I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui grid no-padding" id="portfolio">
            <div class="doubling four column row">
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
                <div class="column">
                    <img src="{{ asset('images/foo.jpg') }}" class="ui image full">
                </div>
            </div>
        </div>

        <div class="ui grid no-padding" id="contact">
            <div class="doubling two column row">
                <div class="column">
                    <div style="padding:50px;">
                        <div>
                            I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
                        </div>
                        <div>
                            I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
                        </div>
                        <div>
                            I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="{{ asset('images/me.jpg') }}" class="ui image">
                </div>
            </div>
        </div>

        <div class="ui black inverted vertical footer segment">
            <div class="ui center aligned container">
                <div class="ui stackable inverted grid">
                    <div class="sixteen wide column">
                        <h4 class="ui inverted header">Community</h4>
                    </div>
                </div>
                <div class="ui inverted section divider"></div>
                <div class="ui horizontal inverted small divided link list">
                    <a target="_blank" href="" class="item">Free &amp; Open Source (MIT)</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>