$(document).ready(function(){
    recupMessages();
   $('.formulaire').submit(function(){
       var nom = $('.nom').val();
       var message = $('.message').val();

       $.post('send.php', {nom:nom,message:message}, function(donnees){
           $('.return').html(donnees).slideDown();
           $('.nom').val('');
           $('.message').val('');
           recupMessages();
       });
       return false;
   });

    function recupMessages(){
        $.post('recup.php', function(data){
            $('.afficher').html(data);
        });
    }
    setInterval(recupMessages,1000);
});
