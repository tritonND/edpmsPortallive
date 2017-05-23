<!DOCTYPE html>
<?php
//include 'dbconnect.php';
//session_start();
//if(isset($_SESSION['firstname']))
//{
//$username=$_SESSION['firstname'];
//}
//else{
//    header("Location: index.php");
//}

//$conn = mysqli_connect("127.0.0.1", "root", "minowss", "edpms") or die ("Error in Connection");
$conn=@mysqli_connect("localhost","lands","Password1234","edpms") or die("Cannot connect to server now, please try again. ");
?>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EDPMS | EDPMS</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom styling plus plugins -->
 <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
    <link href="build/css/custom.min.css" rel="stylesheet">
    
    <style>
        
.card {
  border-radius: 6px;
  box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
  background-color: #FFFFFF;
  color: #252422;
  margin-bottom: 20px;
  position: relative;
  z-index: 1;
  font-family: 'Ubuntu', sans-serif;
}
.card .content {
  padding: 15px 15px 10px 15px;
}
.card .header {
  padding: 20px 20px 0;
}
.card .description {
  font-size: 16px;
  color: #66615b;
}
.card h6 {
  font-size: 12px;
  margin: 0;
}
.card .category,
.card label {
  font-size: 14px;
  font-weight: 400;
  color: #9A9A9A;
  margin-bottom: 0px;
}
.card .category i,
.card label i {
  font-size: 16px;
}
.card label {
  font-size: 15px;
  margin-bottom: 5px;
}
.card .title {
  margin: 0;
  color: #252422;
  font-weight: 300;
}
.card .avatar {
  width: 50px;
  height: 50px;
  overflow: hidden;
  border-radius: 50%;
  margin-right: 5px;
}
.card .footer {
  padding: 0;
  line-height: 30px;
}
.card .footer .legend {
  padding: 5px 0;
}
.card .footer hr {
  margin-top: 5px;
  margin-bottom: 5px;
}
.card .stats {
  color: #a9a9a9;
  font-weight: 300;
}
.card .stats i {
  margin-right: 2px;
  min-width: 15px;
  display: inline-block;
}
.card .footer div {
  display: inline-block;
}
.card .author {
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
}
.card .author i {
  font-size: 14px;
}
.card.card-separator:after {
  height: 100%;
  right: -15px;
  top: 0;
  width: 1px;
  background-color: #DDDDDD;
  content: "";
  position: absolute;
}
.card .ct-chart {
  margin: 20px 0 20px;
  height: 230px;
}
.card .table tbody td:first-child,
.card .table thead th:first-child {
  padding-left: 15px;
}
.card .table tbody td:last-child,
.card .table thead th:last-child {
  padding-right: 15px;
}
    </style>


  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
<!--          left side menu from top to bottom-->
<?php include './sidemenu.php'; ?>
        </div>

        <!-- top navigation -->
        <?php include './topnavigation.php'; ?>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">

 <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Number Of Projects</span>
              <div class="count">250</div>
              <span class="count_bottom"><i class="green"> </i> From Onset</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Ongoing Projects</span>
              <div class="count">123</div>
              
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Funds Disbursed </span>
              <div class="count green">987,902,500,000</div>
              
            </div>
            
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Contractors</span>
              <div class="count">131</div>
              
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Consultants</span>
              <div class="count">55</div>
              
            </div>
          </div>


 


          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h3>All Projects Summary </h3>  
              </div>
             

             <!--
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Search</button>
                    </span>
                  </div>
                </div>
              </div>   -->

            </div>

            <div class="clearfix"></div>
            
              
            <!--  Another Row here -->
            
                <div class="col-sm-12 col-lg-12">
           
               
                <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="card " style="background-color:#EDEDED;">
                            <div class="header">
                                <h4 class="title">Projects Summary By Local Government Area &nbsp;</h4>
                                <p class="category">All MDAs Projects Summary Categorized By LGA </p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart">
    
        <table class="table table-striped table-bordered table-hover">
        <thead class="bg-primary">
            <tr >
            <th>Local Government Area</th>  
            <th>Number of Projects</th>    
        </tr>
      </thead>
    <?php
    //  $conn = mysqli_connect('localhost', 'user', 'password', 'db', 'port');
       $query1 = "SELECT lga, count(*) FROM projectdetails GROUP BY LGA LIMIT 7";
            
      $result = mysqli_query($conn, $query1) or die('Query fail: ' . mysqli_error());
    ?>
    <tbody>
      <?php while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
           
          </tr>
      <?php } ?>
    </tbody>
</table>     
                                    
                                </div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <!--
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-warning"></i> BMW 5 Series  -->
                                        <a href="mdareport.php"> <input type="button" class="btn btn-primary" value="View All" > </a>
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


  <!-- card 2 -->
          <div class="col-lg-6 col-sm-6">
                        <div style="background-color: #DDEEDC;" class="card ">
                            <div class="header">
                                <h4 class="title">Projects By Location</h4>
                                <p class="category">Summary of Projects with their Geographical Locations  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart">
      <style>
      #map {
        height: 100%;  width: 100%;
      }
      html, body {
        height: 100%;
       
        margin: 3;
        padding: 2;
      }
    </style>                               
    
                                    
    <?php 
    $sql = "select * from polylines";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

    $sqlQ = "select lat, lng from geodata";
    $result2 = mysqli_query($conn, $sqlQ) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $emparray1 = array();
    while($row = mysqli_fetch_assoc($result2))
    {
        $emparray1[] = $row;
    }
    ?>
  
    <div id="map"></div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(6.3238155, 5.6247455),
          zoom: 7,
           mapTypeId: 'terrain'
        });




        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('echoXML.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('projname');
              var address = markerElem.getAttribute('contractor');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);

              


              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });

        
        // Create the border outline of the map area
        var flightPlanCoordinates =  <?php echo json_encode($emparray, JSON_NUMERIC_CHECK) ?>
        
        var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 4.0,
          strokeWeight: 4,
          fillColor: '#EFF000'
        });

        flightPath.setMap(map);

        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    
    </script>
                           
                                    
                                    
                                </div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <!--
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        -->
                                <a href="mdareport4.php"> <input type="button" class="btn btn-success" value="View All" >  </a>
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>                
           
                </div>  <!-- end Col sm 12 -->
            
                <div class="clearfix"></div>

            <div style="" class="col-lg-12 col-sm-12">
           
               
                <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div style="background-color: #E3EAF9 " class="card ">
                            <div class="header">
                                <h4 class="title">Projects Sum by MDA</h4>
                                <p class="category">All MDAs Project Appropriation Fee &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart">
                                    
                <table class="table table-striped table-bordered table-hover">
    <thead class="bg-orange">
        <tr>
            <th>MDA</th>
            <th>Project Appropriation Sum</th>   
        </tr>
    </thead>
    <?php
    //  $conn = mysqli_connect('localhost', 'user', 'password', 'db', 'port');
       $query1 = "SELECT procuringentity, sum(contractsum) FROM projectdetails GROUP BY procuringentity LIMIT 7";
            
      $result = mysqli_query($conn, $query1) or die('Query fail: ' . mysqli_error());
    ?>
    <tbody>
      <?php while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
           
          </tr>
      <?php } ?>
    </tbody>
</table>                               
       </div>
                        <div class="footer">
                            <div class="chart-legend">
                                <span>         
                        <a href="mdareport.php"><input type="button" class="btn btn-warning" value="View All" > </a> 
                           </span>  
                            <!--     <i class="fa fa-circle text-warning"></i> MDA  -->
                            </div>
                                    <hr>
                           <div class="stats">
                              <i class="ti-check"></i> Data information certified
                           </div>
                                </div>
                            </div>
                        </div>
                    </div>


  <!-- card 2 -->
          <div class="col-lg-6 col-sm-6">
                        <div style="background-color: #BEC4D1;" class="card ">
                            <div class="header">
                                <h4 class="title">Projects By Ministries, Dept. and Agencies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                                <p class="category">All MDAs Projects Summary &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart">
   <table class="table table-striped table-bordered table-hover">
        <thead class="bg-info">
            <tr >
            <th>MDA</th>
            <th>Number of Projects</th>  
             
        </tr>
      </thead>
    <?php
    //  $conn = mysqli_connect('localhost', 'user', 'password', 'db', 'port');
       $query1 = "SELECT  procuringentity, count(*) FROM projectdetails GROUP BY procuringentity LIMIT 7";
            
      $result = mysqli_query($conn, $query1) or die('Query fail: ' . mysqli_error());
    ?>
    <tbody>
      <?php while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
          
           
          </tr>
      <?php } ?>
    </tbody>
</table>                                  
               </div>
                       <div class="footer">
                                    <div class="chart-legend">
                                        <!--
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        -->
                                <a href="mdareport2.php"> <input type="button" class="btn btn-info" value="View All" > </a>
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> 
               
          <div class="clearfix"></div>                      
            </div>
            
            
            <!--  Another Row here -->
            
                <div class="col-sm-12 col-lg-12">
           
               
                <div class="row">
            <div class="col-lg-6 col-sm-6">
                        <div style="background-color: #D3E7FF;" class="card ">
                            <div class="header">
                                <h4 class="title">Project Sum By LGA</h4>
                                <p class="category">All MDAs Projects Appropriation Sum categorized by LGA &nbsp;&nbsp;&nbsp; </p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart">
    <table class="table table-striped table-bordered table-hover">
    <thead class="bg-blue">
        <tr>
            <th>LGA</th>
            <th>Project Appropriation Sum</th>   
        </tr>
    </thead>
    <?php
    //  $conn = mysqli_connect('localhost', 'user', 'password', 'db', 'port');
       $query1 = "SELECT lga, sum(contractsum) FROM projectdetails GROUP BY lga LIMIT 7";
            
      $result = mysqli_query($conn, $query1) or die('Query fail: ' . mysqli_error());
    ?>
    <tbody>
      <?php while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
           
          </tr>
      <?php } ?>
    </tbody>
</table>      
                                </div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <!--
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-warning"></i> BMW 5 Series  -->
                                        <a href="mdareport3.php"> <input type="button" class="btn btn-dark" value="View All" > </a>
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


  <!-- card 2 -->
          <div class="col-lg-6 col-sm-6">
                        <div style="background-color: #DFEEDC;" class="card ">
                            <div class="header">
                                <h4 class="title">Projects Status</h4>
                                <p class="category">Projects Summary with their Current Status </p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart">
     
       <table class="table table-striped table-bordered table-hover">
    <thead class="bg-blue-sky">
        <tr>
            <th>ProjectID</th> 
            <th>Project Name</th>  
            <th>Project Status</th> 
        </tr>
    </thead>
    <?php
    //  $conn = mysqli_connect('localhost', 'user', 'password', 'db', 'port');
       $query1 = "SELECT projectid, title, status FROM projectdetails order BY lga LIMIT 6";
            
      $result = mysqli_query($conn, $query1) or die('Query fail: ' . mysqli_error());
    ?>
    <tbody>
      <?php while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
           <td><?php echo $row[2]; ?></td>
          </tr>
      <?php } ?>
    </tbody>
</table>                                    
                                    
      <style>
      #map {
        height: 100%;  width: 100%;
      }
      html, body {
        height: 100%;
       
        margin: 3;
        padding: 2;
      }
    </style>                               
    
                                    
    <?php 
    $sql = "select * from polylines";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

    $sqlQ = "select lat, lng from geodata";
    $result2 = mysqli_query($conn, $sqlQ) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $emparray1 = array();
    while($row = mysqli_fetch_assoc($result2))
    {
        $emparray1[] = $row;
    }
    ?>
  
    <div id="map2"></div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(6.3238155, 5.6247455),
          zoom: 7,
           mapTypeId: 'terrain'
        });




        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('echoXML.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('projname');
              var address = markerElem.getAttribute('contractor');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);

              


              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });

        
        // Create the border outline of the map area
        var flightPlanCoordinates =  <?php echo json_encode($emparray, JSON_NUMERIC_CHECK) ?>
        
        var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 4.0,
          strokeWeight: 4,
          fillColor: '#EFF000'
        });

        flightPath.setMap(map);

        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    
    </script>
                           
                                    
                                    
                                </div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <!--
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                        -->
                                <a href="mdareport4.php"> <input type="button" class="btn btn-success" value="View All" >  </a>
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>                
           
                </div>  <!-- end Col sm 12 -->
             <div class="clearfix"></div>
            
     </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Edo State Public Procurement Agency
          </div>
          <div class="clearfix">
              
</div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <script src="js/searchtable.js"></script>
    <script src="js/autofilter.js"></script>
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>



     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGJ0w067KDql_zWI3tur698n-UE3eaQMk&callback=initMap">
    </script>                                    
             
 <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
  
  </body>
</html>