<?php include "data.php"; ?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    <title>user</title>
</head>
<body>
<?php include "nav.php";?>
<div id='container'>
<?php

$id = $_GET['id'];
// $key = array_search($id,array_column($data,"id"));

$userData = $data[$id-1];
//     echo "<pre>";
// print_r($userData);
// print_r($key);


echo "	<div id='hero-img'>"; echo"</div>";
echo "	<div id='profile-img'>";
echo "		<img src=".$userData["image"]." alt='' />";
echo "	</div>";
echo "	<div id='content'>";
echo "		<h1>".$userData["name"]."</h1>";
echo "		<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, consequatur.</p>";
echo "		<p>Birthday: ".$userData["birthday"]."</p>";
echo "		<a href=".$userData["github account"]."><i class=\"fab fa-github fa-3x\"></i></a>";
echo "		<a href=".$userData["linkedin"]."><i class=\"fab fa-linkedin fa-3x\"></i></a>";
echo "	</div>";
?>

</div>
</body>
</html>