/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var ds="Not Specified";
$("#dspecial a").click(function(e)
{
    e.preventDefault();
    ds= $(this).text();
    $("#dspecialdd").html(ds);
});


function setspcl(s)
{
    ds= s;
    console.log(ds);
}
function saved()
{
    $.post("savedoctor.php",{dname: $("#dname").val(),
    dhospital: $("#dhospital").val(),
    ddesignation: $("#ddesignation").val(),
    dexpirience: $("#dexpirience").val(),
    ddegree: $("#ddegree").val(),
    dmob: $("#dmob").val(),
    demail: $("#demail").val(),
    dspecial: ds,
    dfee: $("#dfee").val()    
    }, function(data,status){
        if(data!=="1")
        {
            $("#sdbtn").removeClass("btn-info btn-danger btn-success");
            $("#sdbtn").addClass("btn-danger");
            $("#sdbtn").html("Error");
        }
        else
            {
                $("#sdbtn").removeClass("btn-danger btn-success");
            $("#sdbtn").addClass("btn-info");
            $("#myModal").modal('show');
            $("#newdoc").trigger("reset");
        }
    });
    
    }
    
    
    
    function updated(did)
{
    $.post("updatedoctor.php",{docid: did,
        dname: $("#dname").val(),
    dhospital: $("#dhospital").val(),
    ddesignation: $("#ddesignation").val(),
    dexpirience: $("#dexpirience").val(),
    ddegree: $("#ddegree").val(),
    dmob: $("#dmob").val(),
    demail: $("#demail").val(),
    dspecial: ds,
    dfee: $("#dfee").val()    
    }, function(data,status){
        if(data!=="1")
        {
            $("#sdbtn").removeClass("btn-info btn-danger btn-success");
            $("#sdbtn").addClass("btn-danger");
            $("#sdbtn").html("Error");
        }
        else
            {
                $("#sdbtn").removeClass("btn-danger btn-success");
            $("#sdbtn").addClass("btn-info");
            $("#myModal").modal('show');
            $("#newdoc").trigger("reset");
        }
    });
    
    }
    
    
    
    function taguntag(lid,tid)
    {
        var rateid="rate_"+lid+tid;
        var ttype="ttype_"+lid+tid;
        var btnid="btn_"+lid+tid;
        var tt="~";
        
        if(document.getElementById(ttype+"sc").checked)
        {tt="Sample Collect";}
        if(document.getElementById(ttype+"ft").checked)
        {tt="Full Test";}
        
        console.log(tt+" 2");
        if(document.getElementById(rateid).value !="" && tt != "~")
        {
            $.post("labtestmapping.php",{
                labid: lid,
                testid: tid,
                rate: document.getElementById(rateid).value,
                ttyp: tt},
            
            function(data,status)
            {
                if(data==='1')
                {
                    $("#"+btnid).html("Tagged");
                    $("#"+btnid).addClass("disabled");
                }
            })
        }
    }
    
    
    function untag(lid,tid)
    {
        var rateid="rate_"+lid+tid;
        var btnid="btn_"+lid+tid;
        
            $.post("labtestuntag.php",{
                labid: lid,
                testid: tid
            },
            function(data,status)
            {
                if(data==='1')
                {
                    $("#"+btnid).html("Untagged");
                    $("#"+btnid).addClass("disabled");
                     $("#"+rateid).addClass("disabled");
                }
            })
        
    }
    
    
    function rolechange()
    {
        ur=$('#userrole').val();
        if(ur==="1002")
        {
            $('#lab').css('display','block');
            $('#chamber').css('display','none');
        }
        else if(ur==="1003")
        {
            $('#chamber').css('display','block');
            $('#lab').css('display','none');
        }
        else
        {
            $('#lab').css('display','none');
            $('#chamber').css('display','none');
        }
        
    }
    
    function valuid()
    {
        if($('#loginid').val()!="")
        {
            $.post('valuserid.php',{uid: $('#loginid').val()},
            function(data,status)
            {
                if(data=='1')
                {
                    alert("Login ID already Exists.");
                }
                else if(data=='0')
                {
                    if($('#newpassword').val() == $('#newpassword1').val() && $('#newpassword1').val()!="")
                    {$("#userinfo").submit();}
                    else
                    {
                        alert("Password not Confirmed");
                    }
                }
            })
        }
        else
        {
            alert("Please Enter a Login ID");
        }
        
    }
    
    
    
    
    
    var ot1=false;
    function allsetot1(v)
    {if(!ot1)
        {
            $("[name='sun_ot1']").val(v);$("[name='mon_ot1']").val(v);$("[name='tue_ot1']").val(v);$("[name='wed_ot1']").val(v);
            $("[name='thu_ot1']").val(v);$("[name='fri_ot1']").val(v);$("[name='sat_ot1']").val(v);ot1=true;
        }}
    
     var ct1=false;
    function allsetct1(v)
    {if(!ct1)
        {
            $("[name='sun_ct1']").val(v);$("[name='mon_ct1']").val(v);$("[name='tue_ct1']").val(v);$("[name='wed_ct1']").val(v);
            $("[name='thu_ct1']").val(v);$("[name='fri_ct1']").val(v);$("[name='sat_ct1']").val(v);ct1=true;
        }}
    var lim1=false;
    function allsetlim1(v)
    {if(!lim1)
        {
            $("[name='sun_l1']").val(v);$("[name='mon_l1']").val(v);$("[name='tue_l1']").val(v);$("[name='wed_l1']").val(v);
            $("[name='thu_l1']").val(v);$("[name='fri_l1']").val(v);$("[name='sat_l1']").val(v);lim1=true;
        }}
    
    
    var ot2=false;
    function allsetot2(v)
    {if(!ot2)
        {
            $("[name='sun_ot2']").val(v);$("[name='mon_ot2']").val(v);$("[name='tue_ot2']").val(v);$("[name='wed_ot2']").val(v);
            $("[name='thu_ot2']").val(v);$("[name='fri_ot2']").val(v);$("[name='sat_ot2']").val(v);ot2=true;
        }}
    
     var ct2=false;
    function allsetct2(v)
    {if(!ct2)
        {
            $("[name='sun_ct2']").val(v);$("[name='mon_ct2']").val(v);$("[name='tue_ct2']").val(v);$("[name='wed_ct2']").val(v);
            $("[name='thu_ct2']").val(v);$("[name='fri_ct2']").val(v);$("[name='sat_ct2']").val(v);ct2=true;
        }}
    var lim2=false;
    function allsetlim2(v)
    {if(!lim2)
        {
            $("[name='sun_l2']").val(v);$("[name='mon_l2']").val(v);$("[name='tue_l2']").val(v);$("[name='wed_l2']").val(v);
            $("[name='thu_l2']").val(v);$("[name='fri_l2']").val(v);$("[name='sat_l2']").val(v);lim2=true;
        }}
    
    
    
    function appconfirm(rep,rem,id)
    {
        if($('#'+rep).val()!='')
        {
            var repp=$('#'+rep).val();
            var remm=$('#'+rem).val();
            $.ajax({
                url: 'appconfirm.php',
                type: 'POST',
                data: {repo: repp, rema: remm, aid: id},
                dataType: 'json',
                success:function(data)
                {
                    if(data.success)
                    {
                        $('#'+id+'acs').html("<span class='label label-success'><i class='glyphicon glyphicon-ok-circle'></i> Confirmed</span>");
                        $('#'+id+"_btn").removeClass('disabled');
                    }
                    else
                    { alert(data.err);}
                }
            });
        }
    }
    
    
    var tests=new Array();
    
function addtesttile(t)
    {
        var ht="";
        if(t!="")
        {tests.push(t);}
        var l=tests.length;
        for(i=0;i<=l-1;i++)
        {
            ht=ht+'<span class="label label-info" style="margin: 10px; cursor:pointer;font-size:12px; display: inline-block" data-toggle="tooltip" onclick="remtests('+i+')">'+tests[i]+'</span>';
        }
        $('#tests').html(ht);
        $('[data-toggle="tooltip"]').attr("data-original-title","Click on the item to remove");
        $('[data-toggle="tooltip"]').tooltip('show');
        setTimeout(function()
        {
            $('[data-toggle="tooltip"]').tooltip('hide');
            $('#testsearch').val('');
        },500);
        $('#testsearch').val('');
    }
    
function remtests(j)
{
    var tmplist=new Array();
    var l=tests.length;
    for(i=0;i<=l-1;i++)
    {
        if(i!=j)
        {
            tmplist.push(tests[i]);
        }
        
    }
    tests=new Array();
    l2=tmplist.length;
    for(p=0;p<=l2-1;p++)
    {
        tests.push(tmplist[p]);
    }
    addtesttile("");
}


function visitedp(pid)
    {
        $('#visitedmodal').modal('show');
        $('#appointmentframe').attr('src','visited.php?pid='+pid);
    }
    
    
    function licensingmodal(lid)
    {
        $('#licensemodal').modal('show');
        $('#licensingframe').attr('src','licensing.php?lid='+lid);
    }
    
    
    function aftervisit(id)
    {
        var appcomp;
        if(document.getElementById('app_comp').checked)
        {appcomp= true;}
        else{appcomp= false;}
        var sendreq= true;
        $.ajax({
            type: "POST",
            url: "savetestreco.php",
            dataType:'json',
            data: {dataa: tests, pid: id,appocomp: appcomp, sendfreq: sendreq},
            cache: false,
            success: function(data)
            {
                if(data.success)
                {
                    $('#vform').addClass('hidden');
                    $('#msgform').removeClass('hidden');
                    $('#msg').val(data.msg);
                    $('#mob').val(data.mob);
                }
            }
            
        });
    }
    
  function copytext(element,btn) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).val()).select();
  document.execCommand("copy");
  $temp.remove();
  $(btn).html("Copied");
}


function sendfreqsms()
{
    var msgbody=$('#msg').val();
    var mobnum=$('#mob').val();
    $.ajax({
        url: "sendsms.php",
        type: "POST",
        dataType: "json",
        data: {msg: msgbody,mob: mobnum},
        success: function(data)
        {
            if(data.success)
            {
                $('#frsmssendbtn').html("SMS Sent");
            }
        }
    });
}


function removeimg(did)
{
    $.ajax({
            type: "POST",
            url: "removedocimg.php",
            dataType:'json',
            data: {docid: did},
            cache: false,
            success: function(data)
            {
                if(data.success)
                {
                    $("#remdocimgbtn").addClass('disabled');
                    $("#remdocimgbtn").html("Removed");
                }
                else
                {
                    $("#remdocimgbtn").addClass('disabled');
                    $("#remdocimgbtn").html("Error !");
                }
            }
            
        });
}




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
                     $('#uploadbtn').html("Uploading...");
                       $('#uploadbtn').addClass('disable');
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
                       $('#uploadbtn').html("Upload");
                       $('#uploadbtn').removeClass('disable');
                       $('#mainimg').attr("src",data.file);
                       lon=data.loga;
                       lat=data.lati;
                       if(lon==null || lat==null)
                       {
                           $('#uploadbtn').html("Upload");
                       $('#uploadbtn').removeClass('disable');
                           $('#imgmap').collapse('hide');
                           alert("Geo Location Not Found");
                       }else
                       {
                           initMap();
                           $('#imgmap').collapse('show');
                           $('#longitude').val(lon);
                           $('#latitude').val(lat);
                           $('#image').val(data.img);
                           $('#uploadsec').css('padding-top','30px');
                       }
                           
                   }
                   else
                   {
                       $('#uploadbtn').html("Upload");
                       $('#uploadbtn').removeClass('disable');
                       alert(data.err);
                   }
                });
                return false;
              }//end size
              else
              {alert('Sorry File size exceeding from 5 Mb');}
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





function getoffclist()
{
    var otyp=$('#otype').val();
    if(otyp!="")
    {
    $.ajax(
            {
                type: 'GET',
                url: 'getoffclist.php?otyp='+otyp,
                dataType: 'json',
                success: function(data,status)
                {
                    
                    if(data.success)
                    {
                        
                        document.getElementById("offc").options.length = 0;
                        $('#offc').html(data.offc_name);
                        console.log(data.offc_name);
                    }
                    else
                    {
                        document.getElementById("offc").options.length = 0;
                        alert(data.err);
                    }
                }
            }
            );
    }
    else
    {
        document.getElementById("offc").options.length = 0;
        
    }
}

function addoffcoption(d,t)
{
    if(t!="")
    {
        var t24=t.split("-");
        var x = document.getElementById("chamber_time");
        var option = document.createElement("option");
        option.text = d+"  ("+time24to12(t24[0])+" - "+time24to12(t24[1])+")";
        option.value=t;
        x.add(option);
    }
}


function savegeodata()
{
    console.log($('#offc').val());
    if($('#offc').val()!="")
    {
    $.ajax({
            type: "POST",
            url: "savegeodata.php",
            dataType:'json',
            data: {otype: $('#otype').val(), offc: $('#offc').val(), longitude: $('#longitude').val(), latitude: $('#latitude').val(), img: $('#image').val()},
            cache: false,
            success: function(data)
            {
                if(data.success)
                {
                    alert(data.err);
                    document.location="./";
                }
                else
                {
                    alert(data.err);
                }
            }
            
        });
    }
    else
    {
        alert("Please Select Office");
    }
}