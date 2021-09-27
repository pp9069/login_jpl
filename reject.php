




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Rejected Data</title>
    <style>
        body{
            background-image: url("logchim.jpg");   
  background-repeat: no-repeat;
  background-attachment: fixed;
         width:100%;
         height:100%;
         opacity:0.9;
         color: white;
}
#info{
        
        font-size:xx-large;
        

}
        </style>
</head>
<body>
<div id="info">
<?php

$conn = mysqli_connect("localhost", "root", "", "login");

$id = $_GET['rn'];

$sql = "SELECT id, email, user, job_description, job_qty, req_date, value_of_job, charge_or_free, vender_name, cost_center, date FROM database1 WHERE ID='$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {  

$emailTO = $row["email"];
$subject="Rejected your query request";
$body="It is to inform you that your query of ". $row["job_description"]. " raised on ". $row["date"] ." has been rejected. Sorry for your inconvenience !! ";
$headers="From: pp8280@gmail.com";

if(mail($emailTO,$subject,$body,$headers)){

    echo " ";

}

else{
    echo "The message could not be sent";
}

}


} else { 
    echo "0 results"; }

$query = "DELETE FROM database1 WHERE ID = '$id' ";

$data = mysqli_query($conn,$query);

if($data)
{
    echo "Record Successfully Removed from database";
}

else{
    echo "failed to Remove from database";
}



   
    $conn->close();
    




?>
</div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>