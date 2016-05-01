/**
 * Created by sunyan on 2015/9/19.
 */
//$.checkbutton=function(whichbutton){
    //var login=$('#login').val();
    //var register=$('#register').val();
    /*if(whichbutton==login){
        $('#login').style.display="display";
        $('#register').style.display="none";
    }else{
        $('#login').style.display="none";
        $('#register').style.display="display";
    }

}*/
/*$(function(){
    /*$('#login').onclick(function(){
        $('#login').style.display="display";
        $('#register').style.display="none";

    });
    $('#register').onclick(function(){
        $('#login').style.display="none";
        $('#register').style.display="display";

    });*/

       // alert("º”‘ÿÕÍ±œ");
    //$.checkbutton=function(whichbutton) {
//var login=$('#login').val();
//var register=$('#register').val();
       // if (whichbutton == "login") {
           /* $('#login').style.display = "display";
            $('#register').style.display = "none";
        } else {
            $('#login').style.display = "none";
            $('#register').style.display = "display";
        }
    }


});*/

function checkbutton(f){
    var l=document.getElementById('login');
    var r=document.getElementById('register');
    if(f=="login"){
        l.style.display="block";
        r.style.display="none";
        alert("nfab");
    }else{
        l.style.display="none";
        r.style.display="block";
    }

}
