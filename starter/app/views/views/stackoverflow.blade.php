<!--[if lt IE 7]> <html class="ie6"> <![endif]-->
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!-->

<!--[if lt IE 7]> <html class="ie6"> <![endif]-->
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<title>StackOverflow</title>
{{ HTML::style('css/socss.css') }}
<link href="http://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<header>
    <img id="hlogo" src="/soassets/cis.svg" alt="CIS" />
    <h1><a href="{{ URL::to('') }}">Wildcat<span>Exchange</span></a></h1>
    <input type="checkbox" name="navbtn" id="navbtn" />
    <!-- <label for="navbtn">&#9776;</label> -->
    <!-- <nav id="nav">
        <ul>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Log In</a></li>
            <li><a href="#">Tour</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Careers</a></li>
        </ul>
    </nav> -->
</header>
<div id="main">
    <img id="mainimg" src="/soassets/so.svg" alt="K-State" />
    <nav id="mainnav">
        <ul>
            <li><a href="{{ URL::to('') }}">Home</a></li>
            <li><a href="http://cis.ksu.edu/prospective/programmedforsuccess">Majors</a></li>
            <li><a href="http://cis.ksu.edu/courses">Courses</a></li>
            <li><a href="http://cis.ksu.edu/prospective/careers">Careers</a></li>
            <li><a href="http://flowcharts.engg.ksu.edu/">Flowcharts</a></li>
        </ul>
    </nav>
    <hr />
    <div id="question">
        <h3>{{$display->project_name}}</h3>
        <p>Posted by <span>{{$display->teamname}}</span></p>
        <p>{{stripslashes($display->content)}}</p>
        <div id="categories">
            <ul>
                <li>by: {{$display->team_members}}</li>
            </ul>
        </div>
    </div>
    <hr />
    <div id="answer">
    <h4>1 answer</h4>
    <p>Posted 10 seconds ago by <span>K-State CIS</span></p>
    <p>Click on the buttons at the top of the page to get more information about K-State CIS.</p>
    </div>
</div>
<footer>
    <p></p>
</footer>
</body>
</html>
