/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var oldnewpatient="new";
function showtt(id)
    {
        var idd="#"+id;
        $(idd).tooltip({ trigger: 'manual' });
        $(idd).tooltip('show');
        setTimeout(function()
        {
            $(idd).tooltip('hide');
        },2000);
    }
    
    
    function showttv(id,msg,timeout)
    {
        var idd="#"+id;
        if(msg!="")
        {
        $(idd).attr("data-original-title",msg);
        $(idd).tooltip({ trigger: 'manual' });
        $(idd).tooltip('show');
        setTimeout(function()
        {
            $(idd).tooltip('hide');
        },timeout);
        }
        else
        {
        $(idd).attr("data-original-title",'');
        $(idd).tooltip({ trigger: 'manual' });
        $(idd).tooltip('hide');
        }
    }
    
    
    function getappointment(did)
    {
        $('#gamodal').modal('show');
        $('#appointmentframe').attr('src','docappointment.php?did='+did);
    }
 var l1,l2;   
function getctimings()
{
    var chid=$('#chamber').val();
    if(chid!="")
    {
    $.ajax(
            {
                type: 'GET',
                url: 'appcheck.php?cid='+chid,
                dataType: 'json',
                success: function(data,status)
                {
                    
                    if(data.succss)
                    {
                        $('#appdate').val(data.appdate);
                        document.getElementById("chamber_time").options.length = 0;
                        addctoption(data.appdate,data.apptim1);
                        addctoption(data.appdate,data.apptim2);
                        showttv('chamber',data.cremarks,5000);
                        showttv('chamber_time','',5000);
                        $('#getapp').removeClass('disabled');
                        if(data.location)
                        {
                            $('#chimg').attr('src','../../geolocation/local_cdn_r/'+data.mapimg);
                            l1=data.longitude;
                            l2=data.latitude;
                            //initMap(data.longitude,data.latitude,'chmap');
                            $('#chmap').removeClass('hidden');
                            console.log("Map Available");
                        }
                        else
                        {
                         $('#chmap').addClass('hidden');
                            console.log("Map Unavailable");   
                        }
                    }
                    else
                    {
                        document.getElementById("chamber_time").options.length = 0;
                        $('#getapp').addClass('disabled');
                        showttv('chamber',data.cremarks,5000);
                        showttv('chamber_time',"We dont have time slots for new appointments at this moment. Please Try again tomorrow",5000);
                    }
                }
            }
            );
    }
    else
    {
        document.getElementById("chamber_time").options.length = 0;
        showttv('chamber_time','',5000);
        showttv('chamber','',5000);
        $("#chamber").tooltip('hide');
        $('#getapp').addClass('disabled');
    }
}

function initMap(lon,lat,mapdiv) {                            
            var latitude = parseFloat(lat); // YOUR LATITUDE VALUE
            var longitude = parseFloat(lon); // YOUR LONGITUDE VALUE
            
            var myLatLng = {lat: latitude, lng: longitude};
            
            map = new google.maps.Map(document.getElementById(mapdiv), {
              center: myLatLng,
              zoom: 15                    
            });
                    
            var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: latitude + ', ' + longitude 
            });            
        }




function addctoption(d,t)
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

function time24to12(t)
{
var timeString = t;
var H = +timeString.substr(0, 2);
var h = (H % 12) || 12;
var ampm = H < 12 ? "AM" : "PM";
timeString = h + timeString.substr(2, 3) + ampm;
return timeString;
}



function otpchk(otp,otpkey)
{
    $.ajax({
        url: 'verifyotp.php?otp='+otp+'&key='+otpkey,
        type:'GET',
        dataType: 'json',
        success:function(data)
        {
            if(data.success)
            {
                alert("Appointment Booked Successfully");
                window.parent.closeModal();
            }
            else
            {
                alert(data.err);
                console.log("Enablling Button....");
                $('#getapp').val("Resend OTP");
                   $('#getapp').removeClass("disabled");
            }
        }
        
    })
}

function otpchkprivate(otp,otpkey)
{
    $.ajax({
        url: 'verifyotp.php?otp='+otp+'&key='+otpkey,
        type:'GET',
        dataType: 'json',
        success:function(data)
        {
            if(data.success)
            {
                alert("Appointment Booked Successfully");
                location.reload();
                
            }
            else
            {
                alert(data.err);
                console.log("Enablling Button....");
                $('#getapp').val("Resend OTP");
                   $('#getapp').removeClass("disabled");
            }
        }
        
    })
}


function ncustotpchk(otp,otpkey)
{
    var ur="";
    if(oldnewpatient == "new")
    {
        ur='modules/patient/ncustverifyotp.php?otp='+otp+'&key='+otpkey+'&oldnew=new';
    }
    else if(oldnewpatient == "old")
    {
        ur='modules/patient/ncustverifyotp.php?otp='+otp+'&key='+otpkey+'&oldnew=old';
    }
    $.ajax({
        url: ur,
        type:'GET',
        dataType: 'json',
        success:function(data)
        {
            if(data.success)
            {
                //alert("You are a registered member now. Thank You !");
                document.location="modules/patient";
            }
            else
            {
                alert(data.err);
                $('#newcustsubmit').val("Resend OTP");
                   $('#newcustsubmit').removeClass("disabled");

            }
        }
        
    })
}

window.closeModal = function(){
    $('#gamodal').modal('hide');
};

var tests=new Array();
    
function addtesttile(t)
    {
        var ht="";
        var srchbtn="<hr><div style='width: 100%; text-align: right; padding-right: 10px'> <button class='btn btn-warning btn-sm' role='button' onclick='srchtests()'><i class='glyphicon glyphicon-search'> </i> Search</button></div>";
        if(t!="")
        {
            if(document.getElementById('testsel').value=='na')
            {
                document.getElementById('testsel').value=t;
            }
            else{
                    document.getElementById('testsel').value=document.getElementById('testsel').value+"ʭ"+t;
                    console.log(document.getElementById('testsel').value);
                }
            tests.push(t);
        }
        var l=tests.length;
        for(i=0;i<=l-1;i++)
        {
            
            ht=ht+'<span class="label label-info" style="margin: 10px; cursor:pointer;font-size:12px; display: inline-block" data-toggle="tooltip" onclick="remtests('+i+')">'+tests[i]+'</span>';
        }
        if(l>0)
        {
           ht=ht+srchbtn; 
        }
        else
        {
            ht="No Test(s) selected or Added.";
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
    document.getElementById('testsel').value='na';
    l2=tmplist.length;
    for(p=0;p<=l2-1;p++)
    {
        if(document.getElementById('testsel').value=='na')
            {
                document.getElementById('testsel').value=tmplist[p];
            }
            else{
                    document.getElementById('testsel').value=document.getElementById('testsel').value+"ʭ"+tmplist[p];
                    console.log(document.getElementById('testsel').value);
                }
        tests.push(tmplist[p]);
    }
    addtesttile("");
}


function srchtests()
{
    document.getElementById('tsrch').submit();
}

function showtest(lid)
    {
        $('#tmodal').modal('show');
        $('#testsf').attr('src','labtests.php?lid='+lid);
    }
    
function checkmob(item)
{
    var v=document.getElementById('mob').value;
    if (v.length>=10)
    {
        $.ajax({
            url : 'modules/patient/checkpatient.php',
            type : 'GET',
            dataType : 'json',
            data : {m: v},
            success:function(data,status)
            {
                if(data.success)
                {
                    console.log("Enabling Btn");
                    $('#mobnum').animate({marginTop:"80px"});
                    $('#otherinfo').collapse('hide');
                    $('input[name="pname"]').removeAttr("required");
                    $('input[name="pdob"]').removeAttr("required");
                    $('input[name="paddress"]').removeAttr("required");
                    $('input[name="pname"]').val("");
                    $('input[name="pdob"]').val("");
                    $('input[name="paddress"]').val("");
                    $('#newcustsubmit').removeClass('disabled');
                    $('#newcustsubmit').removeAttr('disabled');
                    oldnewpatient="old";
                    
                }
                else
                {
                    $('#mobnum').animate({marginTop:"30px"});
                    $('#otherinfo').collapse('show');
                    $('input[name="pname"]').attr("required","true");
                    $('input[name="pdob"]').attr("required","true");
                    $('input[name="paddress"]').attr("required","true");
                    $('#newcustsubmit').removeClass('disabled');
                    oldnewpatient="new";
                }
            }
        })
    }
    else
    {
        $('#newcustsubmit').addClass('disabled');
        $('#newcustsubmit').attr('disabled','disabled');
    }
}


function starrating(eid,stars,val,typ)
{
    clrratingstars(eid,typ);
    switch(stars)
    {
        case '1':
            
            $('#'+eid+typ+'_'+1).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+1).addClass("glyphicon-star");
            $('#'+val).val('1');
            break;
        
        case '2':
            $('#'+eid+typ+'_'+1).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+2).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+1).addClass("glyphicon-star");
            $('#'+eid+typ+'_'+2).addClass("glyphicon-star");
            $('#'+val).val('2');
            break;
        case '3':
            $('#'+eid+typ+'_'+1).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+2).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+3).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+1).addClass("glyphicon-star");
            $('#'+eid+typ+'_'+2).addClass("glyphicon-star");
            $('#'+eid+typ+'_'+3).addClass("glyphicon-star");
            $('#'+val).val('3');
            break;
            
        case '4':
            $('#'+eid+typ+'_'+1).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+2).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+3).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+4).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+1).addClass("glyphicon-star");
            $('#'+eid+typ+'_'+2).addClass("glyphicon-star");
            $('#'+eid+typ+'_'+3).addClass("glyphicon-star");
            $('#'+eid+typ+'_'+4).addClass("glyphicon-star");
            $('#'+val).val('4');
            break;
        case '5':
            $('#'+eid+typ+'_'+1).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+2).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+3).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+4).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+5).removeClass("glyphicon-star-empty");
            $('#'+eid+typ+'_'+1).addClass("glyphicon-star");
            $('#'+eid+typ+'_'+2).addClass("glyphicon-star");
            $('#'+eid+typ+'_'+3).addClass("glyphicon-star");
            $('#'+eid+typ+'_'+4).addClass("glyphicon-star");
            $('#'+eid+typ+'_'+5).addClass("glyphicon-star");
            $('#'+val).val('5');
            break;
       
    }
    
}

function clrratingstars(eid,typ)
{
    $('#'+eid+typ+'_'+1).removeClass("glyphicon-star");
    $('#'+eid+typ+'_'+2).removeClass("glyphicon-star");
    $('#'+eid+typ+'_'+3).removeClass("glyphicon-star");
    $('#'+eid+typ+'_'+4).removeClass("glyphicon-star");
    $('#'+eid+typ+'_'+5).removeClass("glyphicon-star"); 
    $('#'+eid+typ+'_'+1).addClass("glyphicon-star-empty");
    $('#'+eid+typ+'_'+2).addClass("glyphicon-star-empty");
    $('#'+eid+typ+'_'+3).addClass("glyphicon-star-empty");
    $('#'+eid+typ+'_'+4).addClass("glyphicon-star-empty");
    $('#'+eid+typ+'_'+5).addClass("glyphicon-star-empty");
}


function submitrating(type,stars,fb,appid,patientid,eid)
{
    var r=$('#'+stars).val();
    var f=$('#'+fb).val();
    if(r=='0' && f=='')
    {
        alert("Nothing to Submit");
    }
    else
    {
        $.ajax({

            url: 'modules/patient/saverating.php',
            type: 'POST',
            data: {rtype:type,rating:r,feedback:f,app:appid,pid:patientid,id:eid},
            dataType: 'JSON',
            success:function(data,status)
            {
                if(data.success)
                {
                    alert(data.err);
                }
                else
                {
                    alert(data.err);
                }
            }
        })
    }
}


$(window).scroll(function()
{
    if($(window).scrollTop() > 200)
    {
        $('#logodiv').css("margin-top","-15px");
        $('#logodiv').css("width","150px");
        $('#logodiv').css("height","50px");
        $('#header1').slideUp(100);
    }
    else
    {
        $('#logodiv').css("margin-top","-35px");
        $('#logodiv').css("width","220px");
        $('#logodiv').css("height","80px");
        $('#header1').slideDown(200);
    }
});


function showmap()
{
    console.log('Showing Map Modal');
    initMap(l1,l2,'chmapmod');
    $('#chlocationmodal').modal('show');
    
}