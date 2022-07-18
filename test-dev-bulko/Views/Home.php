<main>
		<!-- <div class="form-ok hidden">Pour votre message de validation de formulaire</div> -->
		<!-- <div class="form-error hidden">Pour votre message d'erreur</div> -->
		<form method="post">
			<p>Contactez-nous</p>
			<div class="form-part-1">
				<div class="form-control">
					<input id="nom" type="text" name="nom" placeholder="Nom" required />
				</div>
				<div class="form-control">
					<input id="email" type="email" name="email" placeholder="Email" required />
				</div>
				<div class="form-control">
					<input id="tel" type="tel" name="tel" placeholder="Téléphone" required  />
				</div>
			</div>
			<div class="form-part-2">
				<div class="form-control">
					<textarea id="message" name="message" placeholder="Message" required > </textarea>
				</div>
				<input id="submit" type="submit" value="Envoyer" />
			</div>
		</form>
	</main>
	<div class="message-container">
		<div id="response" class="message-card">

		</div>
	</div>
	<script src="./js/script.js" type="text/javascript"></script>