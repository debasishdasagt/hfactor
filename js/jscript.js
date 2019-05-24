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