<!DOCTYPE html>
<html>
<head>
    <title>Welcome to <?= $_SERVER['HTTP_HOST'] ?>!</title>
    <style>
        body {
            width: 40em;
            margin: 0 auto;
            font-family: Tahoma, Verdana, Arial, sans-serif;
        }
    </style>
</head>
<body>
<?php if ($_SERVER['REQUEST_URI'] === '/info') : ?>
    <h1>PHP Info</h1>
    <?php phpinfo(); ?>
<?php else : ?>
<h1>Welcome to <?= $_SERVER['HTTP_HOST'] ?>!</h1>
    <p>This's example of using <a target="_blank" href="">this repository</a>. PHP info is <a href="/info">here</a>.</p>

<p>To add new .local domain just create new directory in <b>data</b> dir of project root.</p>
<p>If your need to additional NGINX configuration, create in domain folder <b>nginx.conf</b> with your server config and restart nginx container.</p>
<p>This domain has own nginx config <b>nginx.conf</b>, which is located in <b>data/start</b> directory.</p>

<p><em>Feel free to contact me on <a target="_blank" href="">GitHub</a></em></p>
<?php endif; ?>
</body>
</html>
