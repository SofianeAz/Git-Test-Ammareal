<main>

		<form method="post">
			<p>Contactez-nous</p>
			<div class="form-part-1">
				<div class="form-control">
					<input id="nom" type="text" name="nom" placeholder="Nom"  />
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
					<textarea id="message" name="message" placeholder="Message"></textarea>
				</div>

				<div class="hidden">
					<input class="hidden" type="text" name="honeypot" placeholder="honey" />
				</div>
				<input id="submit" type="submit" value="Envoyer" />
			</div>
		</form>
	</main>
	<!-- container response de l'api -->
	<div class="message-container">
		<div id="response" class="message-card">

		</div>
	</div>
	<script src="./js/script.js" type="text/javascript"></script>