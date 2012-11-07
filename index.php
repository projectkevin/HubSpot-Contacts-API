<html>
<head>
<title>Form Test</title>
<!--Disgraceful CSS inside the page, because I'm too lazy to put it elsewhere-->
<style type="text/css" media="screen">
    body{ color: #333;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 13px;
    -webkit-font-smoothing: antialiased;
    font-smoothing: antialiased;
    font-weight: normal;
    line-height: 18px;}
    h1{font-size: 30px;}
</style>
</head>
<body>
<!--Form call to header where the real work is done. Note that the method here is POST rather than GET to grab everything easily...-->
<form action="header.php" method="post">
<div style="width:600px; margin-left: auto; margin-right: auto;">
<p>&nbsp;</p>
<h1>Post this form, like a boss!</h1>
<p>My name is <input type="text" value="Kevin" name="firstname" /> <input type="text" value="Dowling" name="lastname" /> and my email address is <input type="text" value="me@me.me" name="email" />. <input type="submit" value="Send" /> my information now!</p>
</form>
</div>
</body>
</html>