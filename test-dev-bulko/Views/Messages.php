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
                                                    <h3>Adresse Email : ${e.email}</h3>
                                                    <h3>N° de Téléphone : ${e.tel}</h3>
                                                    
                                                     <a class="msg-link" href="/message/${e.id}"> Voir plus</a>
                                            </div>
                                            `;
                }) 
            } else {
                container.innerHTML = `<h1 class="error">Mauvaise requête </h1>`
            }


            </script>

</div>

?>