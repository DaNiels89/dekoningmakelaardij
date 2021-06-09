<?php
	if (isset($_POST["contact"]))
	{
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$message = $_POST["message"];

		$emailMessage = "Naam: " . $name . "\n";
		$emailMessage .= "Telefoon: " . $phone . "\n";
		$emailMessage .= "E-mail: " . $email . "\n";
		$emailMessage .= "Bericht: " . $message . "\n";

		if (!empty($email))
		{
			mail("niels@inkoppers.nl", $subject, $emailMessage);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
			integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="wp-content/themes/inkoppers/css/styles.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="js/custom.js"></script>
		<title>De Koning Makelaardij - Woning taxeren</title>
	</head>
	<body>

		<div class="container-fluid">
			<div class="row">
				<div class="col my-4 d-flex justify-content-center">
					<p class="mb-0 font-weight-bold">Taxaties Meierijstad <img src="img/icoon.png" alt="De Koning Makelaardij Icoon" class="header-icon"> Woning taxeren <img src="img/icoon.png" alt="De Koning Makelaardij" class="header-icon"> De Koning Makelaardij Sint-Oedenrode</p>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row vh-50 d-flex align-items-center py-5 mb-5">
				<div class="col-xl-5 offset-xl-1 p-4 p-md-5">
					<h1 class="mb-5">Uw woning taxeren Meierijstad</h1>
					<p class="main-p font-weight-bold">
						Een vakkundig en gevalideerd taxatierapport voor slechts € 495 incl.
						btw.
					</p>
					<button type="button" class="my-5" data-toggle="modal" data-target="#modalForm">Neem direct contact op</button>
				</div>
				<div class="col-xl-5 bgc-light p-4 p-md-5">
					<p class="text-center">
						<span class="span-h1">Ja, ik wil mijn woning laten taxeren</span>
					</p>
					<p class="text-center my-3">Laat je gegevens achter en wij nemen contact met je op.</p>
					<form class="dkm-form" method="post">
						<div class="row">
							<div class="col-sm-6 d-flex flex-column justify-content-between">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="d-none" for="name"></label>
											<input class="form-control dkm-input" type="text" id="name" name="name" placeholder="Naam" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="d-none" for="phone"></label>
											<input class="form-control dkm-input" type="number" id="phone" name="phone" placeholder="Telefoonnummer" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="d-none" for="email"></label>
											<input class="form-control dkm-input" type="email" id="email" name="email" placeholder="E-mailadres*" required />
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-sm-6">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="d-none" for="message"></label>
											<textarea class="form-control dkm-input" id="message" name="message" rows="4" placeholder="Bericht"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<button class="form-control dkm-form-btn" name="contact" type="submit">Neem contact met ons op</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<p class="text-center">
						<?php if (isset($_POST["contact"])): echo "Bedankt voor uw e-mail!"; endif; ?>
					</p>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row d-flex align-items-center">
				<div class="col-xl-4 order-xl-2 p-0">
					<img src="img/blok1-stock-photo-smiling-real-estate-agent-offering-to-young-couple-to-buy-a-cottage-while-meeting-at-office-677813482.jpg" alt="" class="">
				</div>
				<div class="col-xl-6 order-xl-1 offset-xl-1 p-4 p-md-5">
					<h2 class="mb-5">Een vakkundige taxatie laten uitvoeren</h2>
					<p class="mr-5">
						Een taxatierapport kan benodigd zijn voor verschillende doeleinden.
						Meestal zal een taxatie benodigd zijn voor de financiering van een
						woning. Het komt echter ook voor dat er een taxatie benodigd is voor
						bijvoorbeeld een aan- of verkoopbeslissing, een echtscheiding of een
						minnelijke waardering.
					</p>
					<button type="button" class="my-4" data-toggle="modal" data-target="#modalForm">Neem direct contact op</button>
				</div>
			</div>
		</div>

		<div class="container-fluid bgc-light-gray">
			<div class="row my-5">
				<div class="col-xl-6 offset-xl-3 p-4 p-md-5 px-xl-0">
					<h2 class="mb-5">Wanneer/waarom je huis taxeren?</h2>
					<p class="p-wanneer-waarom font-italic fs-19 py-4 mb-0">
						<i class="arrow right mr-3"></i>
						Je hebt een gevalideerde taxatie nodig voor de financiering van je
						woning
					</p>
					<p class="p-wanneer-waarom font-italic fs-19 py-4 mb-0">
						<i class="arrow right mr-3"></i>
						Je gebruikt een taxatie voor een aan- of verkoopbeslissing</p>
					<p class="p-wanneer-waarom font-italic fs-19 py-4 mb-0">
						<i class="arrow right mr-3"></i>
						Je wilt je huis door een derde partij laten waarderen i.v.m. een
						echtscheiding
					</p>
					<p class="p-wanneer-waarom font-italic fs-19 py-4 mb-0">
						<i class="arrow right mr-3"></i>
						Als belastingaangifte wordt je verzocht mee te werken aan een
						“minnelijke waardering”
					</p>
					<div class="d-flex justify-content-center">
						<button type="button" class="mt-5" data-toggle="modal" data-target="#modalForm">Neem direct contact op</button>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid pt-5">
			<div class="row d-flex align-items-center">
				<div class="col-xl-6 bg-image vh-40 p-0">
					<img src="img/blok2-stock-photo-concept-office-paperwork-close-up-of-the-hand-of-a-business-woman-writing-with-a-silver-pen-and-1901418667.jpg" alt="" class="">
				</div>
				<div class="col-xl-5 p-4 p-md-5">
					<h2 class="mb-5">Verzekerd van een gevalideerd taxatierapport</h2>
					<p class="">
						U bent bij ons verzekerd van een vakkundig rapport dat opgesteld is
						volgens de richtlijnen van het NWWI (Nederlands Woning Waarde
						Instituut). Tevens worden de taxatierapporten van De Koning Makelaardij
						geaccepteerd door alle (NHG) geldverstrekkers.
					</p>
					<p class="">
						Het bedrag wat wij voor een
						<strong>gevalideerd taxatierapport</strong> rekenen is
						<strong
							>€495,- inclusief BTW, validatiekosten en kadastrale
							recherche.</strong
						>
					</p>
					<p class="">
						</strong>Geen gekke kosten achteraf, maar gewoon één duidelijk tarief.</strong>
						Dat is zeker in vergelijking met collega makelaars een zéér scherp
						tarief.
					</p>
					<button type="button" class="my-4" data-toggle="modal" data-target="#modalForm">Neem direct contact op</button>
				</div>
			</div>
		</div>

		<div class="container-fluid pt-5 my-5">
			<div class="row">
				<div class="col d-md-flex justify-content-md-center">
					<div class="p-3">
						<a href="https://www.funda.nl/" class="" rel="nofollow noreffer" target="_blank">
							<img src="img/funda.png" alt="" class="mx-2">
						</a>
					</div>
					<div class="p-3">
						<a href="https://www.nvm.nl/" class="" rel="nofollow noreffer" target="_blank">
							<img src="img/nvm.png" alt="" class="mx-2">
						</a>
					</div>
					<div class="p-3">
						<a href="https://www.nwwi.nl/" class="" rel="nofollow noreffer" target="_blank">
							<img src="img/nwwi.png" alt="" class="mx-2">
						</a>
					</div>
					<div class="p-3">
						<a href="https://www.vastgoedcert.nl/" class="" rel="nofollow noreffer" target="_blank">
							<img src="img/vastgoedcert.png" alt="" class="mx-2">
						</a>
					</div>
					<div class="p-3">
						<a href="https://www.taxateursunie.nl/" class="" rel="nofollow noreffer" target="_blank">
							<img src="img/taxateurs_unie.png" alt="" class="mx-2">
						</a>
					</div>
					<div class="p-3">
						<a href="https://www.nrvt.nl/" class="" rel="nofollow noreffer" target="_blank">
							<img src="img/nrvt-rt-r.jpeg" alt="" class="mx-2">
						</a>
					</div>
				</div>	
			</div>
		</div>

		<div class="container-fluid my-5">
			<div class="row d-flex align-items-center">
				<div class="col-md-6 d-flex justify-content-md-end p-4 p-md-5">
					<div class="">
						<img src="img/logo.png" alt="" class="">
					</div>
				</div>
				<div class="col-md-6 p-4 p-md-5">
					<div class="">
						<p class=""><strong>De Koning Makelaardij B.V.</strong></p>
						<p class="">Kofferen 23 5492 BL Sint Oedenrode<br />0413-490000 - info@dekoningmakelaardij.nl</p>
						<p class="">BTW: NL812474454B01 | KvK: 17156591</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid bgc-pure-pink">
			<div class="row">
				<div class="col my-4 d-flex justify-content-center">
					<p class="mb-0 text-white">Copyright &copy; De Koning Makelaardij Sint-Oedenrode - Taxaties Meierijstad</p>
				</div>
			</div>
		</div>

		<div class="modal" id="modalForm" tabindex="-1">
			<div class="modal-dialog modal-xl modal-dialog-centered">
			  <div class="modal-content">
				<div class="modal-header">
				  <h2 class="modal-title">Neem contact met ons op</h2>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body py-5 my-lg-5">
				  <form class="dkm-form" method="post">
						<div class="row">
							<div class="col-sm-6 d-flex flex-column justify-content-between">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="d-none" for="name"></label>
											<input class="form-control form-control-lg dkm-input" type="text" id="name" name="name" placeholder="Naam" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="d-none" for="phone"></label>
											<input class="form-control form-control-lg dkm-input" type="number" id="phone" name="phone" placeholder="Telefoonnummer" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="d-none" for="email"></label>
											<input class="form-control form-control-lg dkm-input" type="email" id="email" name="email" placeholder="E-mailadres*" required />
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-sm-6">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="d-none" for="message"></label>
											<textarea class="form-control form-control-lg dkm-input" id="message" name="message" rows="4" placeholder="Bericht"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<button class="form-control form-control-lg dkm-form-btn" name="contact" type="submit">Neem contact met ons op</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<p class="text-center">
						<?php if (isset($_POST["contact"])): echo "Bedankt voor uw e-mail!"; endif; ?>
					</p>
				</div>
				<!-- <div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				  <button type="button" class="btn btn-primary">Save changes</button>
				</div> -->
			  </div>
			</div>
		</div>

		<script
			src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
			crossorigin="anonymous"
		></script>
		
	</body>
</html>
