/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


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
            }
        }
        
    })
}

window.closeModal = function(){
    $('#gamodal').modal('hide');
};