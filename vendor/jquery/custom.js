
$("#izracunaj").click(function(){

$.ajax({
    type: "POST",
    url: "izracunaj.php",
    data:$("#firstform").serialize() ,
    success: function(html){
     $('#rezultat').html(html);
    }

  });
return false;



});









