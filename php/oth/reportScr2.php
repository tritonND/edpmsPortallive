<?php  
require_once ("../dbconnect.php");
//$conn= new mysqli_connect("localhost", "root", "minowss", "edpms");

 $yr =  mysqli_real_escape_string($con, $_POST['yr']);
 

   echo " <table id=\"table2\" class=\"table table-striped table-bordered table-hover\">";
   echo "<thead class=\"bg-orange\">";
   echo "<tr>";
   echo "<th>MDA</th>";
   echo "<th>PROJECT SUM</th>";
   echo "</tr>";
   echo "</thead>";
   echo "<tbody>";

  $query1 = "SELECT procuringentity, sum(contractsum) FROM projectdetails WHERE YEAR(DATEOFAWARD)='".$yr."' GROUP BY procuringentity LIMIT 5";

  //$query1 = "SELECT projectid, title, status FROM projectdetails WHERE YEAR(DATEOFAWARD)='".$yr."' order BY lga LIMIT 5";
  $result = mysqli_query($con, $query1);
 
  if(  mysqli_num_rows($result) >0)
    {
 //  $result = mysqli_query($conn, $query1) or die('Query fail: ' . mysqli_error());

while($user=mysqli_fetch_array($result))
  {
    echo "<tr>";
 //   echo "<td>".$user['procuringentity']."</td>";
//	echo "<td>".$user['sum(contractsum)']."</td>";
    
 echo "<td style=\"text-transform: uppercase\">".$user[0]."</td>";
 echo "<td class=\"currency-format \" style=\"text-transform: uppercase\">".$user[1]."</td>";
    

    echo "</tr>";
  }

 echo "</tbody>";
 echo "</table>";

    }

  else echo "No data";

?>


    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	 <script src="../../js/kendo.core.min.js"></script>
    

   <script>
	var pf = kendo.toString(kendo.parseFloat($('#projfund').text().trim()), 'n2');
	$('#projfund').text(pf);
	//console.log(pf
	
	$('.currency-format').each(function(index, element) {
		  $(element).text(kendo.toString(kendo.parseFloat($(element).text().trim()), 'n2'));
		console.log(kendo.toString(kendo.parseFloat($(element).text().trim()), 'n2'));
	});
	
	</script>