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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM3kDtr3fESrA2j5JtNDrF5D0uvjiftQM" async defer></script>
    <script>
        var lon,lat;
        lon="";
        lat="";
        function submitForm() {

    
                var fname = $('#filename').val();
                var imgclean = $('#file');
                data = new FormData();
                data.append('file', $('#file')[0].files[0]);

                var imgname  =  $('input[type=file]').val();
                 var size  =  $('#file')[0].files[0].size;

                var ext =  imgname.substr( (imgname.lastIndexOf('.') +1) );
                if(ext=='jpg' || ext=='jpeg' || ext=='JPG' || ext=='JPEG')
                {
                 if(size<=5000000)
                 {
                $.ajax({
                  url: "upload.php",
                  type: "POST",
                  data: data,
                  enctype: 'multipart/form-data',
                  processData: false,  // tell jQuery not to process the data
                  contentType: false,   // tell jQuery not to set contentType
                  dataType:'json'
                }).done(function(data) {
                   if(data.success)
                   {
                       $('#mainimg').attr("src",data.file);
                       lon=data.loga;
                       lat=data.lati;
                       if(lon==null || lat==null)
                       {
                           $('#imgmap').collapse('hide');
                           alert("Geo Location Not Found");
                       }else
                       {
                           initMap();
                           $('#imgmap').collapse('show');
                           $('#longitude').val(lon);
                           $('#latitude').val(lat);
                           $('#image').val(data.img);
                           $('#uploadsec').css('margin-top','30px');
                       }
                           
                   }
                   else
                   {
                       alert(data.err);
                   }
                });
                return false;
              }//end size
              else
              {alert('Sorry File size exceeding from 1 Mb');}
              }//end FILETYPE
              else
              {alert('Sorry Only you can uplaod JPEG|JPG|PNG|GIF file type ');}
  
}



var map;
        
        function initMap() {                            
            var latitude = lat; // YOUR LATITUDE VALUE
            var longitude = lon; // YOUR LONGITUDE VALUE
            
            var myLatLng = {lat: latitude, lng: longitude};
            
            map = new google.maps.Map(document.getElementById('map'), {
              center: myLatLng,
              zoom: 14                    
            });
                    
            var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: latitude + ', ' + longitude 
            });            
        }

        </script>
    </head>
    
    
    
    
    
    <body>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12' style="margin-top: 100px; margin-bottom: 20px" id="uploadsec">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><input type="file" id="file" name='file'></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="text-align: center"> <button class="btn btn-info btn-sm" onclick="return submitForm();">Upload</button></div>       
                     
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
    
    
    
    
    
    
    <script src='../js/jquery-3.2.1.min.js'></script>
    <script src='../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src='../js/jscript.js'></script>
    
</html>
