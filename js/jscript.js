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
    
    
    
    function taguntag(lid,tid)
    {
        var rateid="rate_"+lid+tid;
        var btnid="btn_"+lid+tid;
        if(document.getElementById(rateid).value !="")
        {
            $.post("labtestmapping.php",{
                labid: lid,
                testid: tid,
                rate: document.getElementById(rateid).value},
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
    
    
    function getappointment(did)
    {
        $('#gamodal').modal('show');
        $('#appointmentframe').attr('src','docappoinment.php?did='+did);
    }
    
    
    
    var ot1=false;
    function allsetot1(v)
    {
        if(!ot1)
        {
            $("[name='sun_ot1']").val(v);
            $("[name='mon_ot1']").val(v);
            $("[name='tue_ot1']").val(v);
            $("[name='wed_ot1']").val(v);
            $("[name='thu_ot1']").val(v);
            $("[name='fri_ot1']").val(v);
            $("[name='sat_ot1']").val(v);
        }
    }