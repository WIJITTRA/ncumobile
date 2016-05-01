/**
 * Created by wacharapongnachiengmai on 12/3/15 AD.
 */
$(function(){
    $("#reg-btn").click(function () {
        window.open("application.php");
    });
    $("#pay-btn").click(function () {
        var vFlag = true;
        if($("#team-name").val()=="")
            vFlag = false;
        if($("#team-school").val()=="")
            vFlag = false;
        if($("#team-pay").val()=="")
            vFlag = false;
        if (vFlag){
            $("#pay-form").submit();
        }
        else
            alert("กรุณากรอกข้อมูลให้ครบ");
    })
});