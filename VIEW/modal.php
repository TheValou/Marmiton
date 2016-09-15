<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Contact</h4>
			</div>
			<div class="modal-body">

				<form method="post" action="mail.php" class="form-horizontal">

					<div class="form-group">
						<label class="col-sm-2 control-label">Sujet</label>
						<div class="col-sm-10">
							<input class="form-control" id="subject" type="text" name="subject" required=/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="message" rows="10" cols="50" id="title" type="text" name="subject" required> </textarea>
						</div>
					</div>

					<div class="modal-footer">
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
								<button type="submit" class="btn btn-primary" >Envoyer</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>