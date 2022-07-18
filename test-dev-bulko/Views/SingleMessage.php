<?php

use App\Controllers\MailController\MailController;

$MailController = new MailController;
// id venant de l'url "get request"
$id = intval($urlArray[2]);
$mailData = [];

?>

<div class="message-container">
        <?php
       
        if(is_int($id) && $id <> 0){
            $mailData = $MailController->getOneMail($id);
        } 
        ?>
        <script type="text/javascript">

            const container = document.querySelector('.message-container');

            const data = [<?php echo $mailData; ?>];

            if(data[0] !== false){
                console.log(data);
                data.forEach((e)=>{
                    container.innerHTML = ` <div class="message-card">
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