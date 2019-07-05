<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once 'loginhandler.php';
include_once '../../config.php';
$did="";
$csavestatus="0";
if(isset($_GET['doctorid']))
{
    $_SESSION['doctorid']= $_GET['doctorid'];
    $did=$_SESSION['doctorid'];
}
?>

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>eCure365</title>
  <link rel='stylesheet' href='../../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='../../css/page_style.css'>
  <link href="../../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <style>
      html
      {
          padding-top: 10px;
          padding-right: 10px;
          font-family: "calibri";
      }
      </style>
</head>
    <body>
        <div class="container">
            <div class="well" style="text-align: center">
                <h4>View / Edit Chamber</h4>
            </div>
       <form action='#' method="post">
                        <div class='col-lg-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber</span>
                                <input name='c_name' type="text" class='form-control' placeholder="Chamber Name">
                            </div>
                        </div><br><div class='col-lg-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber Address</span>
                                <input name='c_address' type="text" class='form-control' placeholder="Chamber Address">
                            </div>
                        </div>
                        <br>
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Contact Number</span>
                                <input name='c_contact' type="text" class='form-control' placeholder="Contact Number(s) Separated by coma(,)">
                            </div>
                        </div>
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber Area PIN</span>
                                <input type="text" class='form-control' name="c_pin">
                            </div>
                        </div>
                        
                        <br>      <br>
                        
                        <div class="col-lg-12 table-responsive" style="margin-top: 10px">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Day</th><th>Opening Time-1</th><th>Closing Time-1</th><th>Patient Limit</th><th>Opening Time-2</th><th>Closing Time-2</th><th>Patient Limit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="sun" checked="chacked"></td>
                                    <td>Sunday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sun_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sun_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="sun_l1" onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sun_ot2"  onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sun_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="sun_l2" onchange="allsetlim2(this.value)"></td>
                                  
                                </tr>
                                <tr>
                                     <td><input type="checkbox" name="mon" checked="chacked"></td>
                                    <td>Monday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="mon_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="mon_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="mon_l1"  onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="mon_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="mon_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="mon_l2" onchange="allsetlim2(this.value)"></td>
                                </tr>
                                
                                
                                
                                
                                <tr>
                                     <td><input type="checkbox" name="tue" checked="chacked"></td>
                                    <td>Tuesday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="tue_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="tue_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="tue_l1"  onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="tue_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="tue_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="tue_l2" onchange="allsetlim2(this.value)"></td>
                                </tr>
                                
                                
                                
                                
                                <tr>
                                     <td><input type="checkbox" name="wed" checked="chacked"></td>
                                    <td>Wednesday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="wed_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="wed_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="wed_l1"  onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="wed_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="wed_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="wed_l2" onchange="allsetlim2(this.value)"></td>
                                </tr>
                                
                                
                                
                                
                                
                                <tr>
                                     <td><input type="checkbox" name="thu" checked="chacked"></td>
                                    <td>Thursday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="thu_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="thu_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="thu_l1" onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="thu_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="thu_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="thu_l2" onchange="allsetlim2(this.value)"></td>
                                </tr>
                                
                                
                                
                                
                                
                                <tr>
                                     <td><input type="checkbox" name="fri" checked="chacked"></td>
                                    <td>Friday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="fri_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="fri_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="fri_l1" onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="fri_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="fri_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="fri_l2" onchange="allsetlim2(this.value)"></td>
                                    
                                </tr>
                                
                                
                                
                                
                                
                                
                                <tr>
                                     <td><input type="checkbox" name="sat" checked="chacked"></td>
                                    <td>Saturday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sat_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sat_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="sat_l1" onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sat_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sat_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="sat_l2" onchange="allsetlim2(this.value)"></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>   
                        
                        
                        <br>
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber Remarks</span>
                                <input name='c_remarks' type="text" class='form-control' placeholder="Remarks for Paitients if Any">
                            </div>
                        </div>
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style='text-align: right;margin-top: 10px'>
                           <div class="btn-group btn-group-sm">
                                <a href="canceladdchamber.php" class="btn btn-danger btn-sm" role="button">Cancel</a>
                            <input type="submit" class='btn btn-info btn-sm' value="Save Chamber">
                           </div>
                            
                        </div>
                        
                    </form>
        </div>
        <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script type="text/javascript" src='../../js/jscript.js'></script>
    <script type="text/javascript" src="../../js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $('.form_time').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
        </script>
    </body>
</html>
