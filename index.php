

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
.avatar {
  border: 0.1rem solid rgba(#fff, 0.3);
  margin-top: -6rem;
  margin-bottom: 1rem;
  width: 7rem;
  height: 7rem;
}


</style>

<body>

    <!-- Start card -->

    <?php
    include "nav.php";
    include "data.php";
    
echo " <div class=\"row\">";

foreach ($data as $value) {

echo " <div id = 'id1' class=\"col-3 mb-3\">";
echo " <div class=\"card\">";
echo " <img class=\"card-img-top\" src=\"https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/oslo.jpg\" alt=\"Bologna\">";
echo " <div class=\"card-body text-center\">";
echo " <img class=\"avatar rounded-circle\" src=".$value["image"]."alt=\"Bologna\">";
echo " <h4 class=\"card-title\"><?php echo \"Robert Downey Jr\" ?></h4>";
echo " <h2 class=\"card-subtitle mb-2 text-muted\">".$value["name"]."</h2>";
echo " <p class=\"card-subtitle mb-2 text-muted\">".$value["major"]."</p>";
echo " <div class=\"progress\">";
echo " <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width:".$value["val"]."\"           aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">";echo"</div>";
echo " </div>";
echo " <a href=\"user.php?id=".$value["id"]."\" class=\"btn btn-info mt-3\">See profile</a>";
echo " </div>";
echo " </div>";
echo " </div>";
};
echo " </div>";
    ?>
    

    
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>



<!-- <div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div> -->













<!-- 
<div class="container">
    <?php
    for ($i=0; $i < 4; $i++) { 

echo " <div class=\"row\">";
echo " <div id = 'id1' class=\"col-3\">";
echo " <div class=\"card\">";
echo " <img class=\"card-img-top\" src=\"https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/oslo.jpg\" alt=\"Bologna\">";
echo " <div class=\"card-body text-center\">";
echo " <img class=\"avatar rounded-circle\" src=\"https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/robert.jpg\" alt=\"Bologna\">";
echo " <h4 class=\"card-title\"><?php echo \"Robert Downey Jr\" ?></h4>";
echo " <h6 class=\"card-subtitle mb-2 text-muted\">Famous Actor</h6>";
echo " <div class=\"progress\">";
echo " <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 10%\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\">";echo"</div>";
echo " </div>";
echo " <a href=\"#\" class=\"btn btn-info\">Follow</a>";
echo " </div>";
echo " </div>";
echo " </div>";
// echo " </div>";
    }
  ?>
</div> -->






<!-- // echo"<div class='card' style='width: 18rem;'>";
            // echo"<img class='card-img-top' src=".$value["image"]."alt='Card image cap'>";
            // echo"<div class='card-body'>";
            //     echo"<h5 class='card-title'>".$value["name"]."</h5>";
            //     echo"<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the cards content.</p>";
            //     echo"<a href='#' class='btn btn-primary'>Go somewhere</a>";
            // echo"</div>";
            // echo"</div>"; -->