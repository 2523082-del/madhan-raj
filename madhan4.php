<html>
<head>
<title>Dynamic webpage</title>
</head>
<a heref="index.php?page=index">home</a><br/>
<div id="menu">
<a href="index.php?page=js">Javascript</a><br/>
<a href="index.php?page=csharp">csharp</a><br/>
<a href="index.php?page=css">css</a><br/>
</div>
<div id="content">
<?php$p=$_GET['page'};
$page="sub/".$p.".php";
if(file_exists($page))
include($page);
else if($page=="")
echo "This is Home page";
else
echo "what are you looking for?";
?>
</div>
</body>
</html>