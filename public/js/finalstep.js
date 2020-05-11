$(function(){
    $("#createTest").steps({
         headerTag: "step",
        bodyTag: "section ",
        moveStep: function (movement) { 
            var filiere = $('#filiere_id').val() ;
            var niveau = $('#niveau_id').val();
            var matier = $('#matiere_id').val();
            var numetui = $('#nei').val();
            var gender = $('form input[type=radio]:checked').val();
            var numetu = $('#ng').val();

            $('#filiere_id-val').text(filiere);
            $('#niveau_id-val').text(niveau);
            $('#matiere_id-val').text(matier);
            $('#nei-val').text(numetui);
            $('#address-val').text(address);
            $('#ng-val').text(numetu);

            return true;
        }
    });
  
});
