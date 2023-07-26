<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashEx</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            height: 2000px;
            font-family: sans-serif;
        }
        .header{
            position: relative;
            height: 100vh;
            background: url() no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            overflow: hidden;
        }
        header .logo-header{
            position: absolute;
            top: 4%;
            left: 0;
            right: 0;
            display: block;
            width: 100%;
            height: auto;
        }
        header .fore-bird{
            position: absolute;
            top: 199px;
            right: 400px;
            width: 795px;
            height: 800px;
            background-image: url();
            background-repeat: no-repeat;
            background-position: right bottom;
            z-index: 1;
        }
        .content{
            max-width: 1140px;
            margin: 0 auto;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="back-bird"></div>
        <img src="" class="logo-header" alt="logo">
        <div class="fore-bird"></div>
    </header>
    <section>
        <div class="container">
            <br>
            <div class="content">
                <h2>Header</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt qui praesentium nihil minus ullam similique. Officiis dolore incidunt quaerat aliquam, voluptate provident perspiciatis at vero eaque corporis atque, reprehenderit eius.</p>
            </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
    var logo = document.querySelector('.logo-header'),
    blurredBird = document.querySelector('.back-bird'),
    forebird = document.querySelector('.fore-bird');

    window.addEventListener('scroll', function(){
        var scrolled = window.scrolly;
        logo.style.transform ="translate(0px,"+ scrolled/2 +"%)";
        forebird.style.transform ="translate(0px,-"+ scrolled/80 +"%)";
    })
</script>
</html>