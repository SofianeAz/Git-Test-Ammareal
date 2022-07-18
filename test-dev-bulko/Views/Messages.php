<?php

use App\Controllers\MailController\MailController;

$MailController = new MailController();
$mailData = $MailController->getMails();

?>

<div class="message-container">
            
        <script type="text/javascript">

            const container = document.querySelector('.message-container');

            const data = <?php echo $mailData; ?>;

            if(data[0] !== false){
                console.log(data);
                data.forEach((e)=>{
                    container.innerHTML += ` <div class="message-card">
                                                    <h3>Nom : ${e.nom}</h3>
                                                    <h4>Mail ${e.email}</h4>
                                                    <h4>Tel ${e.tel}</h4>
                                                     <p>${e.message}</p>
                                            </div>
                                            `;
                }) 
            } else {
                container.innerHTML = `<h1 class="error">Mauvaise requête </h1>`
            }


            </script>

</div>

?>