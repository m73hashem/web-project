<?php 
include ("database.php");
$data= new database();
?>
<!--show results after submit search form-->
<!DOCTYPE html>
<html>
<head> 
<title>result</title>
    <link rel="stylesheet" href="../css/mainStyle.css" />
<meta charset="utf-8" />

    <style>

    th{color: red;}

    table { 
    border: 2px solid #f00;
    border-collapse: collapse;
width: 100%;}
 
  th, td {padding : 5px;
     text-align: center;
    border: 1px solid black;
}

    .result{
    position: absolute;
    top:150px;
    padding: 10px;
    height: 450px; /*height of form container*/
    width:92%;
        margin-left: 2%;
    background-color: rgba(244, 255, 255, 0.81);}
    .back{
        position: absolute;
        bottom: 30px;
        left: 20px;
        height: 30px;
        width: 80px;}

</style>
</head>
<body>

        <div class="main">
            <div class="head">website logo 
            <div class="links" >
                <ul>
                    <li><a href="../mainPage.html"> home </a></li>
                    <li><a href="#"> services </a> </li>
                    <li><a href="#"> doctors </a></li>
                    <li> <a href="#"> departments </a></li>
                
                </ul>
            </div>
            </div>
            
    
        <div class="result">
<h2>
 <h3>result:</h3>           
<?php 
    
 if(isset($_GET['from']))
 {
   $peci=$_GET['sp'];
   $city=$_GET['city'];
   
$qu="SELECT * FROM doctors WHERE speciality=? and city=?;";
   $rows=$data->getRows($qu,array($speci,$city));

                if(count($rows)>0)
                { 
                    echo "<table><tr><th> </th><th>name</th> <th>speciality</th> <th>city</th</tr>";
                    $i=0;
                   foreach($rows as $row)
                   {$i++;

                     echo "<tr> <td> $i </td><td>$row[2]</td> <td>$row[3]</td> <td>$row[4</td</tr> ";
                   }
                   echo "</table>"; 
 
                }

                 else{
                 echo"<h2> No Data...!</h2>";
                 }
             }
    
    ?>

    
            </h2>        
    <button class="back"  onclick="location.href = '../mainPage.html' ">Back </button>
        </div>
    
    </div>
</body>
</html>