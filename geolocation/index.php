<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
        <link rel='stylesheet' href='../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='../css/page_style.css'>
        <style>          
          #map { 
            height: 300px;    
            width: 100%; 
            
          }         
          
          
          
          #imgmap
          {
              margin-bottom: 20px;
          }
         
        </style>  
        
    <script src='../js/jquery-3.2.1.min.js'></script>
    <script src='../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src='../js/jscript.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM3kDtr3fESrA2j5JtNDrF5D0uvjiftQM" async defer></script>
   
    </head>
    
    
    
    
    
    <body>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12' style="padding-top: 50px; padding-bottom: 50px; background-color: #eeeeee; border-radius: 5px" id="uploadsec">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><input type="file" id="file" name='file'></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="text-align: right">
                        
                        <button class="btn btn-info btn-sm" onclick="return submitForm();" id="uploadbtn">Upload</button>
                    </div>       
                     
                </div>
            </div>
            
            <div class='row'>
        <div id='imgmap' class='collapse'>
            <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' id='imagecon' style="margin-top: 10px">
            <div style="max-height: 300px; overflow: hidden">
            <img src='../images/logo.png'  id='mainimg'>
            </div>
        </div>
            <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                <div id="map"></div>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                <table border='0'>
                        <tr>
                            <td>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon">Office Type:</span>
                                    <select id="otype" class="form-control" onchange="getoffclist()">
                                        <option value="">Office Type</option>
                                        <option value="Chamber">Chamber</option>
                                        <option value="Lab">Lab.</option>
                                    </select>
                                </div>
                            </td><td>
                                <div class="input-group input-group-sm" style="margin-left:3px">
                                    <span class="input-group-addon">Office</span>
                                    <select id="offc" class="form-control">
                                        <option value="">Office</option>
                                    </select>
                                    <input type="hidden" id="image">
                                </div>
                            </td>
                            <td>
                                <button class='btn btn-info btn-sm' onclick='savegeodata()' style="margin-left:3px">Submit</button>
                            </td>
                        </tr>
                    </table>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                <table border='0' cellpadding="5">
                        <tr>
                                    <td><div class="input-group input-group-sm">
                                            <span class="input-group-addon">Longitude</span>
                                            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude">
                                </div>
                                </td>
                            <td>
                                <div class="input-group input-group-sm" style="margin-left:3px">
                                            <span class="input-group-addon">Latitude</span>
                                            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude">
                                </div>
                                
                        </tr>
                    </table>
            </div>
        </div></div>
            
            
    
        </div>
    </body> 
</html>
