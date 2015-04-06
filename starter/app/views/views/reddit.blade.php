<!--[if lt IE 7]> <html class="ie6"> <![endif]-->
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<title>{{$display->teamname}}</title>
{{ HTML::style('css/redditcss.css') }}
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<header>
    <img id="logo" src="/redditassets/cis.svg" />
    <img id="mobilelogo" src="/redditassets/mcis.svg" />
    <nav>
        <ul>
            <li><a href="{{ URL::to('') }}">home</a></li>
            <!-- <li><a href="#">new</a></li>
            <li><a href="#">rising</a></li>
            <li><a href="#">top</a></li>
            <li><a href="#">wiki</a></li> -->
        </ul>
    </nav>
</header>
<div id="main">
    <article>
        <div class="votes">
            <a id="up" href="#" ></a>
            <a id="down" href="#"></a>
        </div>
        <h2>{{$display->project_name}}</h2><br />
        <img src="/redditassets/hl3.png" />
        <span class="info"><span id="points"></span> points submitted 10 hours ago</span>
        <section class="description">
            <p>{{stripslashes($display->content)}}</p>
        </section>
    </article>
    <div id="comments">
        <div class="comment">
            <div class="postinfo"><span class="user">{{$display->teamname}}</span> 10 hours ago</div>
            <p>Contact Us!</p>
            <p>Contact info will go here</p>
        </div>
    </div>
</div>
<script>
    var points = document.querySelector("#points");
    var upvote = document.querySelector("#up");
    var downvote = document.querySelector("#down");
    var pointval = 5753;
    points.innerHTML = pointval;
    var upClick = function (event) {
        pointval++;
        points.innerHTML = pointval;
        upvote.setAttribute("style", "background-image: url(redditassets/ups.png);");
        downvote.setAttribute("style", "background-image: url(redditassets/downvote.png);");
        upvote.removeEventListener("click", upClick);
        downvote.addEventListener("click", downClick2);
    }
    var downClick = function (event) {
        pointval--;
        points.innerHTML = pointval;
        upvote.setAttribute("style", "background-image: url(redditassets/upvote.png);");
        downvote.setAttribute("style", "background-image: url(redditassets/downs.png);");
        upvote.addEventListener("click", upClick2);
        downvote.removeEventListener("click", downClick);
    }
    var upClick2 = function (event) {
        pointval = 5754;
        points.innerHTML = pointval;
        upvote.setAttribute("style", "background-image: url(redditassets/ups.png);");
        downvote.setAttribute("style", "background-image: url(redditassets/downvote.png);");
        upvote.removeEventListener("click", upClick2);
        downvote.addEventListener("click", downClick2);
    }
    var downClick2 = function (event) {
        pointval = 5752;
        points.innerHTML = pointval;
        upvote.setAttribute("style", "background-image: url(redditassets/upvote.png);");
        downvote.setAttribute("style", "background-image: url(redditassets/downs.png);");
        upvote.addEventListener("click", upClick2);
        downvote.removeEventListener("click", downClick2);
    }
    upvote.addEventListener("click", upClick);
    downvote.addEventListener("click", downClick);
</script>
</body>
</html>
