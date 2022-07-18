$(document).ready(function () {
    $("form").submit(function (event) {
      let formData = {
          nom: $('#nom').val(), 
          email: $('#email').val(),
          tel: $('#tel').val(),
          message: $('#message').val()
      };
  
      $.ajax({
        type: "POST",
        url: "/Views/mail_send.php",
        data: formData,
        dataType: "text",
        encode: true,
        success: function(response){
          $('#response').css('display', 'flex');
          let p = document.createElement('p');
          
          $('#response').append(p);
          p.innerHTML = response;
          setTimeout(() => {
            $('#response > p').remove();
            $('#response').css('display', 'none');          
          }, 5000)
        }
      }).done(function (data) {
        // console.log(JSON.stringify(data));
      });
  
      event.preventDefault();
    });
  });		
