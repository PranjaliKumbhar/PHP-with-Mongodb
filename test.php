<?php

require_once 'conn.php';

$query = new MongoDB\Driver\Query([]);

$cursor = $manager->executeQuery("students.studentdata",$query);
        
?>
     



<html>
<head>
<title>Testing mongodb connection</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>
</head>
<body>
<form action="gen_pdf.php" method="POST">
<table style="width:60%" align="center">
<tr>
<th>Sr.no</th>
<th>Name</th>
<th>Age</th>
<th>City</th>
</tr>

<tr>
<?php
    $i=0;
    foreach($cursor as $document){
        $i=$i+1;

?>
<td>
    <?php

            echo $i;
?>   
</td>


<td>
    <?php
            echo $document -> name;
            ?>
</td>
<td>
    <?php
            echo $document -> age;
            ?>
</td>
<td>
    <?php
            echo $document -> city;
            ?>
</td>

</tr>

<?php

        }
?>

</table>
<br>
<br>

<center><button type="submit" name="btn_pdf">Download PDF</button></center>
</form>
</body>
</html>





