<?php

use App\Controllers\MailController\MailController;

$MailController = new MailController;
// id venant de l'url "get request"
$id = intval($urlArray[2]);
$mailData = [];

?>
<span class="return-link-container">
    <a class="return-link" href="/message">Retour à mes messages.</a>
</span>
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
                    container.innerHTML = ` <div class="message-full-card">
                                                    <div class="card-desc">
                                                        <h3>Nom : ${e.nom}</h3>
                                                        <h3>Adresse Email : ${e.email}</h3>
                                                        <h3>N° de Téléphone : ${e.tel}</h3>
                                                    </div>
                                                     <h4> Message :</h3>
                                                     <p>${e.message}</p>
                                            </div>
                                            `;
                }) 
            } else {
                container.innerHTML = `<h1 class="error">Mauvaise requête </h1>`
            }


            </script>

</div>