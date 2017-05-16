<?php
require_once ("../dbconnect.php");
//$conn= new mysqli_connect("localhost", "root", "minowss", "edpms");

$yr =  mysqli_real_escape_string($con, $_POST['yr']);


echo " <table id=\"table7\" class=\"table table-striped table-bordered table-hover\">";
echo "<thead class=\"bg-blue-sky\">";
echo "<tr>";
echo "<th>Project ID</th>";
echo "<th>TOTAL PROJECT SUM</th>";
echo "<th>FUNDS DISBURSED</th>";
echo "<th>OUTSTANDING PAYMENTS</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$query1 = " SELECT projectdetails.PROJECTID, projectdetails.CONTRACTSUM,
(SELECT SUM(AMOUNT) from certificates WHERE projectdetails.PROJECTID = certificates.PROJECTID AND YEAR(DATEISSUED) = '".$yr."'  GROUP BY certificates.PROJECTID) as cAmount,
(SELECT SUM(AMOUNT) from variations WHERE projectdetails.PROJECTID = variations.PROJECTID AND YEAR(DATEISSUED) = '".$yr."'  GROUP BY variations.PROJECTID ) as vAmount
FROM projectdetails  where YEAR(projectdetails.DATEOFAWARD) = '".$yr."' LIMIT 4";


$result = mysqli_query($con, $query1);

if(  mysqli_num_rows($result) >0)
{
    //  $result = mysqli_query($conn, $query1) or die('Query fail: ' . mysqli_error());

    while($user=mysqli_fetch_array($result))
    {
        if(is_null($user[3]))
        {  $myvar = $user[1]; }
        else {  $myvar = $user[1] + $user[3]; }


        if(is_null($user[3]))
        {  $vars = ($user[1] - $user[2]); }
        else {
               $vars = ($user[1] + $user[3]) - $user[2];
            }

        echo "<tr>";
        echo "<td style=\"text-transform: uppercase\">".$user[0]."</td>";
        echo "<td class=\"currency-format\" style=\"text-transform: uppercase\">".$myvar."</td>";
        echo "<td class=\"currency-format\" style=\"text-transform: uppercase\">".$user[2]."</td>";
        echo "<td class=\"currency-format\" style=\"text-transform: uppercase\">".$vars."</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

}

else echo "No data";

?>