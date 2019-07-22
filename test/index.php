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
        <script src="../js/jquery-3.4.1.min.js"></script>
    <script>
        
        function submitForm() {

    var fcnt = $('#filecount').val();
    var fname = $('#filename').val();
    var imgclean = $('#file');
    if(fcnt<=5)
    {
    data = new FormData();
    data.append('file', $('#file')[0].files[0]);

    var imgname  =  $('input[type=file]').val();
     var size  =  $('#file')[0].files[0].size;

    var ext =  imgname.substr( (imgname.lastIndexOf('.') +1) );
    if(ext=='jpg' || ext=='jpeg' || ext=='png' || ext=='gif' || ext=='PNG' || ext=='JPG' || ext=='JPEG')
    {
     if(size<=1000000)
     {
    $.ajax({
      url: "upload.php",
      type: "POST",
      data: data,
      enctype: 'multipart/form-data',
      processData: false,  // tell jQuery not to process the data
      contentType: false   // tell jQuery not to set contentType
    }).done(function(data) {
       if(data!='FILE_SIZE_ERROR' || data!='FILE_TYPE_ERROR' )
       {
        fcnt = parseInt(fcnt)+1;
        $('#filecount').val(fcnt);
        var img = '<div class="dialog" id ="img_'+fcnt+'" ><img src="local_cdn/'+data+'"><a href="#" id="rmv_'+fcnt+'" onclick="return removeit('+fcnt+')" class="close-classic">Remove</a></div><input type="hidden" id="name_'+fcnt+'" value="'+data+'">';
        $('#prv').append(img);
        if(fname!=='')
        {
          fname = fname+','+data;
        }else
        {
          fname = data;
        }
         $('#filename').val(fname);
          imgclean.replaceWith( imgclean = imgclean.clone( true ) );
       }
       else
       {
         imgclean.replaceWith( imgclean = imgclean.clone( true ) );
         alert('SORRY SIZE AND TYPE ISSUE');
       }

    });
    return false;
  }//end size
  else
  {
      imgclean.replaceWith( imgclean = imgclean.clone( true ) );//Its for reset the value of file type
    alert('Sorry File size exceeding from 1 Mb');
  }
  }//end FILETYPE
  else
  {
     imgclean.replaceWith( imgclean = imgclean.clone( true ) );
    alert('Sorry Only you can uplaod JPEG|JPG|PNG|GIF file type ');
  }
  }//end filecount
  else
  {    imgclean.replaceWith( imgclean = imgclean.clone( true ) );
     alert('You Can not Upload more than 6 Photos');
  }
}
        
        
        
        
        function removeit (arg) {
       var id  = arg;
       // GET FILE VALUE
       var fname = $('#filename').val();
       var fcnt = $('#filecount').val();
        // GET FILE VALUE

       $('#img_'+id).remove();
       $('#rmv_'+id).remove();
       $('#img_'+id).css('display','none');

        var dname  =  $('#name_'+id).val();
        fcnt = parseInt(fcnt)-1;
        $('#filecount').val(fcnt);
        var fname = fname.replace(dname, "");
        var fname = fname.replace(",,", "");
        $('#filename').val(fname);
        $.ajax({
          url: 'delete.php',
          type: 'POST',
          data:{'name':dname},
          success:function(a){
            console.log(a);
            }
        });
    } 
        
        </script>
    </head>
    <body>
        <div class="rCol"> 
     <div id ="prv" style="height:auto; width:auto; float:left; margin-bottom: 28px; margin-left: 200px;"></div>
       </div>
    <div class="rCol" style="clear:both;">

    <label > Upload Photo : </label> 
    <input type="file" id="file" name='file' onChange=" return submitForm();">
    <input type="hidden" id="filecount" value='0'>
    </body>
    
</html>
