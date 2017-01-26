var form = document.getElementsByClassName('sendmail')[0];
$('#button').on('click', function(){
  var email = form.children[1].value;
  var name = form.children[2].value;
  var sujet = form.children[0].value;
  var content = form.children[3].value;
  $.ajax({
        method: "POST",
        url: "/sendmail",
        data: { name: name, email:email, content:content, sujet:sujet }
    })
    .always(function(data){

    })
    .done(function(data) {
      $.each(form.children,function(e,y){
        y.value = "";
      })
    });
})
