<?php
require_once("dbconnect.php");

session_start();
$today=date("Y-m-d");

//pick parameters from budget section
$sector=  mysqli_real_escape_string($con,$_POST['sector']);
$subsector=  mysqli_real_escape_string($con,$_POST['subsector']);


//pick parameters from project details section
$projectid=  mysqli_real_escape_string($con,$_POST['projectid']);
$mda=  mysqli_real_escape_string($con,$_POST['mda']);
$projecttitle=  mysqli_real_escape_string($con,$_POST['projecttitle']);
$projectdescription=  mysqli_real_escape_string($con,$_POST['projectdescription']);
$dateofaward=  mysqli_real_escape_string($con,$_POST['dateofaward']);
$projectstatus=  mysqli_real_escape_string($con,$_POST['projectstatus']);
$remarks=  mysqli_real_escape_string($con,$_POST['remarks']);
$projectlocation=  mysqli_real_escape_string($con,$_POST['projectlocation']);
$lga=  mysqli_real_escape_string($con,$_POST['lga']);
$durationofcontract=  mysqli_real_escape_string($con,$_POST['durationofcontract']);
$expecteddateofcompletion=  mysqli_real_escape_string($con,$_POST['expecteddateofcompletion']);

//pick contractor and consultant
$contractor=  mysqli_real_escape_string($con,$_POST['contractor']);
$consultant=  mysqli_real_escape_string($con,$_POST['consultant']);
//pick financials
$contractsum=  mysqli_real_escape_string($con,$_POST['contractsum']);

$mobilisationpaid=  mysqli_real_escape_string($con,$_POST['mobilisationpaid']);

$result=mysqli_query($con, "select * from projectdetails where PROJECTID='$projectid' ");
if(mysqli_num_rows($result)>0)
{
    echo "exist";
}
else
{
    $trans=0;
    mysqli_autocommit($con,false);
    //insert into projectdetails table
    mysqli_query($con, "insert into projectdetails(PROJECTID,PROCURINGENTITY,TITLE,DESCRIPTION,STATUS,REMARKS,LOCATION,LGA,DATEOFAWARD,DURATIONOFCONTRACT,EXPECTEDCOMPLETIONDATE,CONTRACTSUM,AGREEDMOBILIZATION,CONTRACTOR,CONSULTANT,SECTOR,SUBSECTOR) "
        . "values ('$projectid','$mda','$projecttitle','$projectdescription','$projectstatus','$remarks','$projectlocation','$lga','$dateofaward','$durationofcontract','$expecteddateofcompletion','$contractsum','$mobilisationpaid','$contractor','$consultant','$sector','$subsector')");

    if(mysqli_affected_rows($con)<1)
    {
        $trans++;
    }
    //insert into CERTIFICATES TABLE
    $certno=$projectid."-MOBILISATION";
    mysqli_query($con, "insert into certificates(PROJECTID,CERTNUMBER,DATEISSUED,AMOUNT,STATUS) values('$projectid','$certno','$today',$mobilisationpaid,'paid') ");
    if(mysqli_affected_rows($con)<1)
    {
        $trans++;
    }

    if($trans>0)
    {
        mysqli_rollback($con);
        echo "error";
    }
    else
    {
        mysqli_commit($con);
        echo "successful";
    }




}

mysqli_close($con);
/*      sector
     subsector
     projectid
     mda
     projecttitle
     projectdescription
     dateofaward
     projectstatus
     remarks
     projectlocation
     lga
     durationofcontract
     expecteddateofcompletion
        contractor
     consultant
        contractsum
     mobilisation
     mobilisationpaid
*/

?>