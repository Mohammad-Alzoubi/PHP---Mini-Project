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
    <h1 class="text-center">Dashboard</h1>
    
    <?php
$compleat =0;
$notcompl = 0;
$student = count($data);
for ($i=0; $i <count($data) ; $i++) { 
  for ($y=0; $y < count($data[$i]["projects"]); $y++) { 

    if ($data[$i]["projects"][$y]["is_compleated"] =="yes"){
      // echo $data[$i]["projects"][$y]["project_name"]; طباعة المشاريع المنهية
    //   $compl[$data[$i]["name"]] = [$data[$i]["projects"][$y]["project_name"]];//تخزيل المشاريع المنتهيه في ارر
        $compleat+=1;
      
    }else{
        // $notcompl[]= $data[$i]["name"].$data[$i]["projects"][$y]["project_name"];
        $notcompl +=1;
        }
  
}
}

// echo count($data[0]["projects"]);
echo "<pre>";
// print_r ($compl);
// print_r ($notcompl);
// echo "compleat".$compleat."<br>";
// echo "compleat".$notcompl;
        ?>
    
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No. students</th>
                <th scope="col">Completed projects</th>
                <th scope="col">notcompleted</th>
            </tr>
        </thead>
        <tbody>
            <?php    
echo"                <tr> ";
echo"                    <td>". $student."</td> ";
echo"                    <td>".$compleat."</td> ";
echo"                    <td>".$notcompl."</td> ";
echo"                </tr> ";
echo"                <tr> ";
echo"                    <td></td> ";
echo"                    <td></td> ";
echo"                    <td></td> ";
echo"                </tr> ";
            // }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>