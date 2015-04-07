<!--[if lt IE 7]> <html class="ie6"> <![endif]-->
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<title>Google Scholar</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
{{ HTML::style('css/scholarcss.css') }}<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<header>
<div id="bar">
    <h1>K-State CIS</h1>
    <nav>
        <ul>
            <li><a href="{{ URL::to('') }}">Home</a></li>
            @if ( Auth::guest() )
                <!-- <li>{{ HTML::link('signin', 'Sign In') }}</li> -->
                <!-- <li>{{ HTML::link('create', 'Create Account') }}</li> -->
            @else
                <li>{{ HTML::link('signout', 'Sign Out') }}</li>
            @endif
        </ul>
    </nav>
    <p><a href="mailto:cisoffic@ksu.edu">cisoffice@ksu.edu</a></p>
</div>
<div id="search">
    <div id="swrapper">
    <img src="/scholarassets/cis.svg" alt="CIS" />
    <input type="text" name="search" />
    <button type="submit">Go</button>
    </div>
</div>
</header>
<div id="main">
    <div id="info">
    <p id="numbers">About 1,890,000 results (0.06 sec)</p>
    </div>
    <hr />
    <div id="results">
        <article>
            <h3><a href="">{{ $display->project_name }}</a></h3>
              <span>{{ $display->teamname }}</span>
            <p>{{ stripslashes($display->content) }}</p>
        </article>
        <hr />
    </div>
</div>
<footer>
<nav>
    <ul>
      <li><a href="{{ URL::to('') }}">Home</a></li>
      <li><a href="http://cis.ksu.edu/prospective/programmedforsuccess">Majors</a></li>
      <li><a href="http://cis.ksu.edu/courses">Courses</a></li>
      <li><a href="http://cis.ksu.edu/prospective/careers">Careers</a></li>
      <li><a href="http://flowcharts.engg.ksu.edu/">Flowcharts</a></li>
    </ul>
</nav>
</footer>
</body>
</html>
