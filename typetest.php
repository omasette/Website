<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JS Typing Speed Test</title>
    <script src="JS/libs/typetest.js" async></script>
    <link rel="stylesheet" href="style2.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i,900,900i" type="text/css" media="all">
</head>

<body>
<div class="topnav" id="myTopnav">
            <a class="active" href="index.php">Home <i class="fa fa-fw fa-home"></i></a>
            <a href="about.html">About <i class="fa fa-fw fa-info"></i></a>
            <a href="record.php">Records <i class="fa fa-fw fa-clipboard"></i></a>
            <a href="loancalculator.html">Loan Calculator <i class="fa fa-fw fa-calculator"></i></a>
            <a href="contact.php">Contact <i class="fa fa-fw fa-envelope"></i></a>
            <a href="typetest.php">Typing Test <i class="fa fa-fw fa-laptop"></i></a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>


    <header class="masthead">
        <h1>Test Your Typing Speed</h1>
    </header>
    <main class="main">
        <article class="intro">
            <p>This is a typing test. Your goal is to duplicate the provided text, EXACTLY, in the field below. The timer starts when you start typing, and only stops when you match this text exactly. Good Luck!</p>
        </article><!-- .intro -->
        <section class="test-area">
            <div id="origin-text">
                <p>Test your typing speed.</p>
            </div><!-- #origin-text -->

            <div class="test-wrapper">
                <textarea id="test-area" name="textarea" rows="6" placeholder="The clock starts when you start typing."></textarea>
            </div><!-- .test-wrapper -->

            <div class="meta">
                <section id="clock">
                    <div class="timer">00:00:00</div>
                </section>

                <button id="reset">Start over</button>
            </div><!-- .meta -->
        </section><!-- .test-area -->
    </main>

</body>

</html>
