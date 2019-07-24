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
        <style>          
          #map { 
            height: 200px;    
            width: 300px; 
            position: relative;
            z-index: 4;
            left:300px;
          }         
          
          #imagecon
          {
              width: 300px; height: 200px; background-color: #cccccc; overflow: hidden;
              position: absolute;
              z-index: 8;
          }
          
          #imgmap
          {
              margin-bottom: 20px;
          }
        </style>  
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM3kDtr3fESrA2j5JtNDrF5D0uvjiftQM&callback=initMap" async defer></script>
    <script>
        var lon,lat;
        function submitForm() {

    
    var fname = $('#filename').val();
    var imgclean = $('#file');
    data = new FormData();
    data.append('file', $('#file')[0].files[0]);

    var imgname  =  $('input[type=file]').val();
     var size  =  $('#file')[0].files[0].size;

    var ext =  imgname.substr( (imgname.lastIndexOf('.') +1) );
    if(ext=='jpg' || ext=='jpeg' || ext=='png' || ext=='gif' || ext=='PNG' || ext=='JPG' || ext=='JPEG')
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
           initMap();
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
        <div id='imgmap'>
        <div id='imagecon'>
            <img src='../images/logo.png' style='width: 100%' id='mainimg'>
        </div>
        <div id='map'>
            
        </div>
        </div>
    <label > Upload Photo : </label> 
    <input type="file" id="file" name='file' onChange=" return submitForm();">
    <input type="hidden" id="filecount" value='0'>
    </body>
    
</html>
