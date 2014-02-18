<?php
// Check for client's device
$phoneRegex = '/iphone|ipod|blackberry|nokia|phone|iphone|iemobile|android.*mobile/i';
$isMobile = preg_match($phoneRegex, $_SERVER['HTTP_USER_AGENT']) == 1;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Pascal Boutin" />
    <meta name="dcterms.rightsHolder" content="Pilogiq Enr." />
    <meta name="robots" content="All" />
    <meta name="description" content="I'm a web developper, software engineering student and an entrepreneur from Quebec. I love all software-related subjects and geeky stuff." />
    <meta name="keywords" content="Pascal, Boutin, web, web developpement, front-end, emberjs, handlebarsjs, jquery, cakephp, laravelphp, software engineering" />

    <?php if ($isMobile): ?>
    <meta name='viewport' content='width=device-width,initial-scale=0.65,maximum-scale=0.65'>
    <?php endif; ?>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>Pascal Boutin</title>

    <link href='http://fonts.googleapis.com/css?family=Merienda+One|Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.min.css"/>
    <!--<link rel="stylesheet" type="text/less" href="less/style.less"/>
    <script type="text/javascript" src="js/less-1.6.2.min.js"></script>-->
</head>
<body <?php if ($isMobile) echo 'class="mobile"'; ?>>
<section class="container">
    <article class="main">
        <h1 class="pascal">Pascal</h1>
        <h1 class="boutin">Boutin</h1>
        <h2 class="frontend">Front-end passionate</h2>
        <h2 class="entrepreneur">Visionary entrepreneur</h2>
        <h2 class="student">Software engineering student</h2>
    </article>
    <article class="content">
        <h1 class="los-title"><span>Stuff I like</span></h1>
        <h2>Web technologies</h2>
        <div class="technos">
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript</li>
                <li>jQuery</li>
                <li>EmberJs</li>
                <li>HandlebarsJs</li>
                <li>Twitter Bootstrap</li>
                <li>LessCSS</li>
                <li>Laravel PHP</li>
                <li>CakePHP</li>
            </ul>
        </div>
        <h2>User interface modeling</h2>
        <h2>Project management</h2>
    </article>
    <article class="content">
        <h1 class="los-title"><span>My business</span></h1>
        <a href="http://pilogiq.ca"><img src="img/pilogiq.png" alt="Pilogiq Enr." /></a>
        <p class="business-desc">Little startup that work hard on modern and rich web based softwares.</p>
    </article>
    <article class="content">
        <h1 class="los-title"><span>So social</span></h1>
        <p class="centered">
            <a href="https://github.com/pilogiq" class="github"></a>
            <a href="http://ca.linkedin.com/pub/pascal-boutin/62/370/447/" class="linkedin"></a>
            <a href="https://twitter.com/pilogiq" class="twitter"></a>
            <a href="http://www.rdio.com/people/infamc/" class="rdio"></a>
        </p>
    </article>
    <article class="content">
        <h1 class="los-title"><span>Someday, a tech blog ?</span></h1>
        <p class="blog">
            This is a project I've been looking for a while. Someday, I might start authoring about web and technology related stuff in a blog.
        </p>
    </article>
    <hr/>
    <p class="centered">Pilogiq Enr. &copy; 2012-<?php echo date('Y') ?></p>
</section>
<?php if (!$isMobile): ?>
<div class="levis">Picture : Lévis, Québec</div>
<?php endif; ?>
</body>
</html>