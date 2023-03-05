$(function(){
  $(document).on('click','#confirm_search', function(event){
    event.preventDefault();

    var plateforme = $("#plateforme").val();
    var _token = $('input[type="hidden"]').attr('value');

    $.ajax({
      url : "/searchFormation",
      data : {
        plateforme,
        _token
      },
      dataType : 'json',
      method : 'POST',
      success : function(data){
        $('#resultatTable').show();

        for (let i = 0; i < data.length; i++) {
          $("#resultat").append('<tr><td>'+data[i].jeu+'</td></tr>');
        }
      } 
    })
  })
});
