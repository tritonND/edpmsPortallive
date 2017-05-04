<!DOCTYPE html>
<?php
//session_start();
//if(isset($_SESSION['firstname']))
//{
//$username=$_SESSION['firstname'];
//}
//else{
//    header("Location: index.php");
//}
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
    <link href="build/css/custom.min.css" rel="stylesheet">
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
          <div class="">
            
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                      <h2>Create Project Form Wizard </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Budget Details
                                              
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Appropriation
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Project Details
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                         Consultants & Contractors
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                             Financials
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                           <div class="row">
                         <div class="col-sm-12 text-center">
                    <h5 style="font-weight:800;">Budget</h5>
                </div>
                    </div>
                         <form role="form">
 <div class="form-group">
    <label for="head">Project ID:</label>
    <input type="text" class="form-control" id="head">
    </div>  
<div class="form-group">
  <select id="position" class="form-control datalist" name="position" >
    <option value="">Sector</option>
    <option value="Commissioner">Agriculture</option>
    <option value="Special Adviser">Education</option>
    <option value="Senior Special Assistant">Economic</option>
    <option value="Special Assistant">Security</option>
    <!--<span ><option value="Check">Check</span></option>-->                          
          </select>
  </div>

    <select id="position" class="form-control datalist" name="position" >
    <option value="">Sub Sector</option>
    <option value="Commissioner">Fishery</option>
    <option value="Special Adviser">Primary Education</option>
    <option value="Senior Special Assistant">Traders</option>
    <option value="Special Assistant">Civil Defense</option>
    <!--<span ><option value="Check">Check</span></option>-->                          
          </select>          
      
    
    <div class="form-group">
    <label for="head">Budget Head:</label>
    <input type="text" class="form-control" id="head">
    </div>
    <div class="form-group">
    <label for="subhead">Budget Sub-head:</label>
    <input type="text" class="form-control" id="subhead">
    </div>
    <div class="form-group">
    <label for="comment">Budget Comment:</label>
    <input type="text" class="form-control" id="comment">
    </div>
    
</form>

                      </div>
                      <div id="step-2">
                          <div class="container">
                              <div class="row">
                <div class="col-sm-12 text-center">
                    <h5 style="font-weight:800;">APPROPRIATIONS</h5>
                </div>
                              </div>
                <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
    <label for="subhead">Approved Appropriation N:</label>
    <input type="text" class="form-control" id="subhead">
    </div>
                <div class="form-group">
    <label for="supp">Supplementary Provision N:</label>
    <input type="text" class="form-control" id="supp">
    </div>
                </div>
                    <div class="col-sm-6">
                    <div class="form-group">
    <label for="subhead">Sub-sector Allocation N:</label>
    <input type="text" class="form-control" id="subhead">
    </div>
                <div class="form-group">
    <label for="subhead">% of Sub-sector Allocation:</label>
    <input type="text" class="form-control" id="subhead">
    </div>
    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                        <label for="subhead"></label>
    <select id="position" class="form-control datalist" >
    <option value="">AA YEAR</option>
    <option value="Commissioner">1999</option>
    <option value="Special Adviser">2000</option>
    <option value="Senior Special Assistant">2001</option>
    <option value="Special Assistant">2002</option>
    <!--<span ><option value="Check">Check</span></option>-->                          
          </select> 
    </div>
                <div class="form-group">
                    <label for="subhead"></label>
    <select id="position" class="form-control datalist" name="position" >
    <option value="">SP YEAR</option>
    <option value="Commissioner">1999</option>
    <option value="Special Adviser">2000</option>
    <option value="Senior Special Assistant">2001</option>
    <option value="Special Assistant">2002</option>
    <!--<span ><option value="Check">Check</span></option>-->                          
          </select> 
    </div>
    </div>
                </div>
            
                          </div>
                      </div>
                      <div id="step-3">
<!--                        Section for projects-->
                <div class="row">
                    <div class="row">
                         <div class="col-sm-12 text-center">
                    
                    <h5 style="font-weight:800;">PROJECT</h5>
                </div>
                    </div>
                    
                        <div class="col-sm-6">
                            <div class="form-group">
    <label for="projectid">Project Id:</label>
    <input type="text" class="form-control" id="projectid">
                        </div>
                            <div class="form-group">
    <label for="procuringentity">Procuring Entity:</label>
    <input type="text" class="form-control" id="procuringentity">
    </div>
                            <div class="form-group">
    <label for="projtitle">Project Title:</label>
    <input type="text" class="form-control" id="projtitle">
    </div>
                            <div class="form-group">
                                <label for="projdesc">Project Description:</label><br>
    <textarea id="projdesc" style="width:100%;"></textarea>
    </div>
 <div class="form-group">
                                <label for="projdateofaward">Project Location:</label><br>
    <textarea id="projremarks" style="width:100%;"></textarea>
    </div>       
                           
                        </div>
                        <div class="col-sm-6">
                            
                           
                            <div class="form-group">
    <label for="projdateofaward">Date of Award:</label>
    <input type="text" class="form-control" id="projdateofaward">
    </div>
                            <div class="form-group">
    <label for="contractduration">Duration of Contract:</label>
    <input type="text" class="form-control" id="contractduration">
    </div>
                            <div class="form-group">
    <label for="expectedcompletion">Expected Date of Completion:</label>
    <input type="date" class="form-control" id="expectedcompletion">
    </div>
          
                        <div class="form-group">
    <label for="contractduration">Contract Duration Expiry Date:</label>
    <input type="date" class="form-control" id="contractduration">
    </div>
                           
                        </div>
                    
                </div>
                      </div>
                      <div id="step-4">
                        <div class="row">
                    <div class="row">
                         <div class="col-sm-12 text-center">
                    <h5 style="font-weight:800;">CONTRACTOR and CONSULTANT</h5>
                </div>
                    </div>
                    
                        <div class="col-sm-5">
                           <div class="form-group">
    <label for="contractorsname">Name Of Contractor:</label>
    <input type="text" class="form-control" id="contractorsname">
    </div> 
                            <div class="form-group">
    <label for="contractoraddress">Address:</label>
    <textarea class="form-control" id="contractoraddress"></textarea>
    </div>
                            <div class="form-group">
    <label for="contractorgsm">Contractor GSM:</label>
    <input type="text" class="form-control" id="contractorgsm2">
    </div> 
                            <div class="form-group">
    <label for="contractorgsm2">Contractor GSM (2):</label>
    <input type="text" class="form-control" id="contractorgsm2">
    </div> 
                            <div class="form-group">
    <label for="contractorsemail">Contractor's Email:</label>
    <input type="email" class="form-control" id="contractorsemail">
    </div> 
                            <div class="form-group">
<label for="areaofspec1">Area of Specialization:</label><br>
    <textarea style="width:100%;" id="areaofspec1"></textarea>
    </div> 
                        </div>
                        <div class="col-sm-7" style="border-left:2px solid #245269;">
                            <div class="form-group">
    <label for="consultantname">Name of Consultant:</label>
    <input type="text" class="form-control" id="consultantname">
    </div> 
                            <div class="form-group">
    <label for="address">Address:</label>
    <textarea class="form-control" id="address"></textarea>
    </div>
                            <div class="form-group">
    <label for="consultantsphone">Consultant GSM:</label>
    <input type="text" class="form-control" id="consultantsphone">
    </div> 
                            <div class="form-group">
    <label for="consultantsphone2">Consultant GSM (2):</label>
    <input type="text" class="form-control" id="consultantsphone2">
    </div> 
                            <div class="form-group">
    <label for="consultantsemail">Consultant's Email:</label>
    <input type="email" class="form-control" id="consultantsemail">
    </div> 
                            <div class="form-group">
<label for="areaofspec">Area of Specialization:</label><br>
    <textarea style="width:100%;" id="areaofspec"></textarea>
    </div> 
                        </div>
                    </div>
                
                      </div>
                        <div id="step-5">
                            <div class="row">
                    
                         <div class="col-sm-12 text-center">
                    <h5 style="font-weight:800;">FINANCIAL</h5>
                </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
    <label for="number">Contract Sum N:</label>
    <input type="number" class="form-control" id="subhead">
    </div> 
                            <div class="form-group">
    <label for="number">Variations N:</label>
    <input type="number" class="form-control" id="subhead">
    </div> 
                            
                        </div>
                    <div class="col-sm-6">
         <div class="form-group">
    <label for="number">Agreed Mobilization N:</label>
    <input type="number" class="form-control" id="subhead">
    </div> 
    <div class="form-group">
    <label for="number">Mobilization Paid N:</label>
    <input type="number" class="form-control" id="subhead">
    </div> 
                           
                           
                    </div>
                    </div>
                
                        </div>

                    </div>
                    <!-- End SmartWizard Content -->





                    
                    <!-- Tabs -->
                    
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
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

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
 <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
  
  </body>
</html>