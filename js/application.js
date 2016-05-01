/**
 * Created by wacharapongnachiengmai on 12/9/15 AD.
 */
$(function () {
    $("#submit-app-btn").click(function () {
        var sFlag = false;
        if ($("#team-password-1").val() != $("#team-password-2").val()) {
            $("#alert-team-password-3").show();
            sFlag = false;
        }
        else {
            $("#alert-team-password-3").hide();
            sFlag = true;
        }
        if ($("#team-name").val() == "") {
            $("#alert-team-name").show();
            sFlag = false;
        }
        else {
            $("#alert-team-name").hide();
            sFlag = true;
        }
        if ($("#team-school").val() == "") {
            $("#alert-team-school").show();
            sFlag = false;
        }
        else {
            $("#alert-team-school").hide();
            sFlag = true;
        }
        if ($("#team-std1").val() == "") {
            $("#alert-team-std1").show();
            sFlag = false;
        }
        else {
            $("#alert-team-std1").hide();
            sFlag = true;
        }
        if ($("#team-std2").val() == "") {
            $("#alert-team-std2").show();
            sFlag = false;
        }
        else {
            $("#alert-team-std2").hide();
            sFlag = true;
        }
        if ($("#team-teacher").val() == "") {
            $("#alert-team-teacher").show();
            sFlag = false;
        }
        else {
            $("#alert-team-teacher").hide();
            sFlag = true;
        }
        if ($("#team-tel").val() == "") {
            $("#alert-team-tel").show();
            sFlag = false;
        }
        else {
            $("#alert-team-tel").hide();
            sFlag = true;
        }
        if ($("#team-email").val() == "") {
            $("#alert-team-email").show();
            sFlag = false;
        }
        else {
            $("#alert-team-email").hide();
            sFlag = true;
        }
        if ($("#team-password-1").val() == "") {
            $("#alert-team-password-1").show();
            sFlag = false;
        }
        else {
            $("#alert-team-password-1").hide();
            sFlag = true;
        }
        if ($("#team-password-2").val() == "") {
            $("#alert-team-password-2").show();
            sFlag = false;
        }
        else {
            $("#alert-team-password-2").hide();
            sFlag = true;
        }

        //form valid
        if (sFlag) {
            $.post("all-function.php", {
                mode: "newApplication",
                teamName: $("#team-name").val(),
                teamSchool: $("#team-school").val(),
                teamStd1: $("#team-std1").val(),
                teamStd2: $("#team-std2").val(),
                teamTeacher: $("#team-teacher").val(),
                teamTel: $("#team-tel").val(),
                teamEmail: $("#team-email").val(),
                teamPassword: $("#team-password-1").val()
            }, function(resultText){
                if(resultText==1)
                    window.open("newapp.php", "_self");
                else
                    alert(resultText);
            });
        }
    });

});