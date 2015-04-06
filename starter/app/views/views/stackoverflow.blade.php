<!--[if lt IE 7]> <html class="ie6"> <![endif]-->
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<title>StackOverflow</title>
<meta property="og:description" content="Stack Overflow" />
{{ HTML::style('css/socss.css') }}
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<header>
    <img id="hlogo" src="/soassets/cis.svg" alt="CIS" />
    <h1><a href="#">Wildcat<span>Exchange</span></a></h1>
    <input type="checkbox" name="navbtn" id="navbtn" />
    <label for="navbtn">&#9776;</label>
    <nav id="nav">
        <ul>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Log In</a></li>
            <li><a href="#">Tour</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Careers</a></li>
        </ul>
    </nav>
</header>
<div id="main">
    <img id="mainimg" src="/soassets/so.svg" alt="K-State" />
    <nav id="mainnav">
        <ul>
            <li><a href="#">Questions</a></li>
            <li><a href="#">Majors</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Flowcharts</a></li>
            <li><a href="#">Ask Question</a></li>
        </ul>
    </nav>
    <div id="tour">
        <div id="tourleft">
            <p>StackOverflow is a question and answer site for professional and enthusiast programmers. It's 100% free, no registration required.</p>
            <div id="tourbtn">
                <p><a href="#">Take the 2-minute tour</a></p>
            </div>
        </div>
        <hr />
        <div id="tourright">
            <h3>Here's how it works:</h3>
            <p><img src="/soassets/tourleft.png" src="Question" />Anybody can ask a question</p>
            <p><img src="/soassets/tourmid.png" src="Answer" />Anybody can answer</p>
            <p><img src="/soassets/tourright.png" src="Best" />The best answers are voted up and rise to the top</p>
        </div>
    </div>
    <div id="questions">
        <h3>Top Questions</h3>
        <hr />
        <article>
            <div class="stats">
                <div class="votes">
                    <p>0</p>
                    <p>votes</p>
                </div>
                <div class="answers">
                    <p>1</p>
                    <p>answers</p>
                </div>
                <div class="views">
                    <p>1</p>
                    <p>views</p>
                </div>
            </div>
            <div class="question">
                <p>What are some Freshmen/Sophomore level classes in the CIS department?</p>
            </div>
            <div class="timestamp">
                <p>asked 29 secs ago by <span>Scott Sega Wrega</span></p>
            </div>
            <div class="categories">
                <ul>
                    <li class="category">Flowcharts</li>
                </ul>
            </div>
        </article>
        <hr />
        <article>
            <div class="stats">
                <div class="votes">
                    <p>3</p>
                    <p>votes</p>
                </div>
                <div class="answers">
                    <p>2</p>
                    <p>answers</p>
                </div>
                <div class="views">
                    <p>5</p>
                    <p>views</p>
                </div>
            </div>
            <div class="question">
                <p>How are freshmen and sophomores involved in their department?</p>
            </div>
            <div class="timestamp">
                <p>asked 29 secs ago by <span>HSchmale</span></p>
            </div>
            <div class="categories">
                <ul>
                    <li class="category">Makerspace Club</li>
                    <li class="category">ACM</li>
                    <li class="category">Game Development Club</li>
                </ul>
            </div>
        </article>
        <hr />
        <article>
            <div class="stats">
                <div class="votes">
                    <p>0</p>
                    <p>votes</p>
                </div>
                <div class="answers">
                    <p>0</p>
                    <p>answers</p>
                </div>
                <div class="views">
                    <p>2</p>
                    <p>views</p>
                </div>
            </div>
            <div class="question">
                <p>Who are the student leaders of ACM?</p>
            </div>
            <div class="timestamp">
                <p>asked 1 min ago by <span>Student 01</span></p>
            </div>
            <div class="categories">
                <ul>
                    <li class="category">Chris Piggott</li>
                    <li class="category">McKenna Kelly</li>
                </ul>
            </div>
        </article>
        <hr />
        <article>
            <div class="stats">
                <div class="votes">
                    <p>null</p>
                    <p>votes</p>
                </div>
                <div class="answers">
                    <p>99+</p>
                    <p>answers</p>
                </div>
                <div class="views">
                    <p>2,000</p>
                    <p>views</p>
                </div>
            </div>
            <div class="question">
                <p>How many categories will fit down here? Will a really long question work? How about really long? How about super de-duper long? I hope a question wouldn't really be this long...</p>
            </div>
            <div class="timestamp">
                <p>asked 1,000,000 ago by <span>atodd</span></p>
            </div>
            <div class="categories">
                <ul>
                    <li class="category">One</li>
                    <li class="category">Two</li>
                    <li class="category">Tree Fiddy</li>
                    <li class="category">Four</li>
                    <li class="category">The category length can change</li>
                    <li class="category">The last category was long, kinda like this one.</li>
                    <li class="category">Please try not to make categories go over one line.</li>
                    <li class="category">I'm a master at CSS.</li>
                    <li class="category">Master builder!</li>
                    <li class="category">Everything is awesome!</li>
                </ul>
            </div>
        </article>
        <hr />
    </div>
    <aside>
        <h3>Looking for a Job?</h3>
        <p>Engineering Career Fair<br />
            Bramlage Coliseum<br />
            Manhattan, KS
        </p>
        <p>Career and Employment Services<br />
            Holtz Hall<br />
            www.ksu.edu/ces
        </p>
    </aside>
</div>
<footer>
    <p>This is the footer! Woohoo! Go CIS!</p>
</footer>
</body>
</html>
