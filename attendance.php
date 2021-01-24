<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    include "nav.php";
    include "data.php";
    ?>
    <h1 class="text-center mb-5">attendance</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Student Name</th>
                <th scope="col">check_in</th>
                <th scope="col">check_ out</th>
            </tr>
        </thead>
        <tbody>
            <?php    
            foreach ($data as $value) {
                $a =$value["attendance"][0];
echo"                <tr> ";
echo"                    <td>". $value["name"]."</td> ";
echo"                    <td>".$a["check_in"]."</td> ";
echo"                    <td>".$a["check_out"]."</td> ";
echo"                </tr> ";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>