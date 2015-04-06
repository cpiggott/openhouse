<!--[if lt IE 7]> <html class="ie6"> <![endif]-->
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<title>Reddit</title>
{{ HTML::style('css/redditcss.css') }}<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<header>
    <img id="logo" src="redditassets/cis.svg" />
    <img id="mobilelogo" src="redditassets/mcis.svg" />
    <nav>
        <ul>
            <li><a href="#">hot</a></li>
            <li><a href="#">new</a></li>
            <li><a href="#">rising</a></li>
            <li><a href="#">top</a></li>
            <li><a href="#">wiki</a></li>
        </ul>
    </nav>
</header>
<div id="main">
    <article>
        <div class="votes">
            <a id="up" href="#" ></a>
            <a id="down" href="#"></a>
        </div>
        <h2>Half Life 3 Confirmed</h2><br />
        <img src="redditassets/hl3.png" />
        <span class="info"><span id="points"></span> points submitted 10 hours ago</span>
        <section class="description">
            <p>Bacon ipsum dolor amet fatback ground round meatball bacon meatloaf tongue andouille. Pancetta beef ribs sirloin ham hock spare ribs turducken frankfurter kielbasa doner jowl meatball capicola pig. Pork chop tri-tip landjaeger, tenderloin bresaola shank capicola biltong shoulder cow ball tip tail pork belly filet mignon sausage. Ham tail salami ham hock short ribs, andouille shankle prosciutto meatball cupim tongue meatloaf. Pork chop biltong brisket kevin. Tongue brisket turkey picanha doner.</p>
            <p>Meatball beef pork loin short loin ham turkey filet mignon venison ground round capicola. Picanha meatloaf pork loin tail kevin. Cow tail jowl frankfurter picanha chuck beef pork chop. Kevin meatball tenderloin turducken ham hock pork chop frankfurter salami t-bone shoulder tail. Drumstick ground round pig beef alcatra. Kevin venison capicola turducken. Filet mignon frankfurter pork loin venison flank strip steak kevin.</p>
        </section>
    </article>
    <div id="comments">
        <div class="comment">
            <div class="postinfo"><span class="user">reddituser23</span> 10 hours ago</div>
            <p>ZOMG THIS IS SO COOL!!!</p>
            <p>Bacon ipsum dolor amet fatback ground round meatball bacon meatloaf tongue andouille. Pancetta beef ribs sirloin ham hock spare ribs turducken frankfurter kielbasa doner jowl meatball capicola pig. Pork chop tri-tip landjaeger, tenderloin bresaola shank capicola biltong shoulder cow ball tip tail pork belly filet mignon sausage. Ham tail salami ham hock short ribs, andouille shankle prosciutto meatball cupim tongue meatloaf. Pork chop biltong brisket kevin. Tongue brisket turkey picanha doner.</p>
        </div>
        <div class="comment">
            <div class="postinfo"><span class="user">bobby</span> 8 hours ago</div>
            <p>IKR!!!</p>
            <p>Bacon ipsum dolor amet fatback ground round meatball bacon meatloaf tongue andouille. Pancetta beef ribs sirloin ham hock spare ribs turducken frankfurter kielbasa doner jowl meatball capicola pig. Pork chop tri-tip landjaeger, tenderloin bresaola shank capicola biltong shoulder cow ball tip tail pork belly filet mignon sausage. Ham tail salami ham hock short ribs, andouille shankle prosciutto meatball cupim tongue meatloaf. Pork chop biltong brisket kevin. Tongue brisket turkey picanha doner.</p>
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
