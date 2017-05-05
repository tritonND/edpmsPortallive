<?php
require_once ("../dbconnect.php");
//$conn= new mysqli_connect("localhost", "root", "minowss", "edpms");

$yr =  mysqli_real_escape_string($con, $_POST['yr']);


echo " <table id=\"table5\" class=\"table table-striped table-bordered table-hover\">";
echo "<thead class=\"bg-blue-sky\">";
echo "<tr>";
echo "<th>ProjectID</th>";
echo "<th>Total Project Sum</th>";
echo "<th>Fund Disbursed</th>";
echo "<th>Outstanding Payment</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$query1 = " SELECT projectdetails.PROJECTID, projectdetails.CONTRACTSUM,
(SELECT SUM(AMOUNT) from certificates WHERE projectdetails.PROJECTID = certificates.PROJECTID AND YEAR(certificates.DATEISSUED) = '".$yr."'  GROUP BY certificates.PROJECTID) as cAmount,
(SELECT SUM(AMOUNT) from variations WHERE projectdetails.PROJECTID = variations.PROJECTID AND YEAR(variations.DATEISSUED) = '".$yr."'  GROUP BY variations.PROJECTID ) as vAmount
FROM projectdetails  where YEAR(projectdetails.DATEOFAWARD) = '".$yr."' LIMIT 4";


$result = mysqli_query($con, $query1);

if(  mysqli_num_rows($result) >0)
{
    //  $result = mysqli_query($conn, $query1) or die('Query fail: ' . mysqli_error());

    while($user=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td style=\"text-transform: uppercase\">".$user[0]."</td>";
        echo "<td style=\"text-transform: uppercase\">".$user[1]."</td>";
        echo "<td style=\"text-transform: uppercase\">".$user[2]."</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

}

else echo "No data";

?>