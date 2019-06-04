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
    
    
    function getappointment(did)
    {
        $('#gamodal').modal('show');
        $('#appointmentframe').attr('src','docappointment.php?did='+did);
    }
    
function getctiming()
{
    
}