$(document).ready(function () {
    $("form").submit(function (event) {
      let formData = {
          nom: $('#nom').val(), 
          email: $('#email').val(),
          tel: $('#tel').val(),
          message: $('#message').val()
      };
      console.log(formData);
      $.ajax({
        type: "POST",
        url: "/Views/mail_send.php",
        data: formData,
        dataType: "text",
        encode: true,
        success: function(response){
          // console.log(response);
          $('#response').css('display', 'flex');
          $('#response').append(response);
        }
      }).done(function (data) {
        console.log(JSON.stringify(data));
      });
  
      event.preventDefault();
    });
  });		
