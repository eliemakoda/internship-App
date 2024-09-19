<?php
session_start();
require "./config/app.php";
$fichiers = "";
$app = new DatabaseQuery;

if (isset($_POST["submit"])) {
	$urlsImages = [];

	$uploadDirectory = "./images/";
	$motivationUrl = [];
	// Vérifier s'il y a des erreurs lors du téléchargement des images
	if (!empty($_FILES["images"]["name"][0])) {
		foreach ($_FILES["images"]["name"] as $key => $imageName) {
			$imageTmpName = $_FILES["images"]["tmp_name"][$key];
			$urlsImages[] = $imageName;
			$imagePath = $uploadDirectory . $imageName;
			move_uploaded_file($imageTmpName, $imagePath);
		}
		foreach ($_FILES["lettres"]["name"] as $key => $imageName) {
			$imageTmpName = $_FILES["lettres"]["tmp_name"][$key];
			$motivationUrl[] = $imageName;
			$imagePath = $uploadDirectory . $imageName;
			move_uploaded_file($imageTmpName, $imagePath);
		}
		$lettre= implode(",",$motivationUrl);
		$images = implode(",", $urlsImages);
		$idUser = $_SESSION['idUser'];
		$sql = "INSERT INTO demandesstage(iduserDemande, idstageDemande,cvDemande,LettreMotivation) VALUE(:iduserDemande, :idstageDemande,:cvDemande,:LettreMotivation)";
		$tab = [
			":iduserDemande" => $idUser,
			":idstageDemande" => $_GET["id"],
			":cvDemande" => $images,
			":LettreMotivation"=>$lettre
		];

		$app->inserer($sql, $tab, "./historiqueCandidature.php");
	}
}
$id = $_GET["id"];
$result = $app->SelectionnerUn("SELECT * FROM stage WHERE idStage=$id");
$results = $app->SelectionnerTout("SELECT * FROM stage WHERE 1 ORDER BY DateAjoutStage asc");
require "./config/header.php";
?>
<div class="about-us-banner mb-160 md-mb-100">
	<div class="about-three-rapper position-relative">
		<img src="images/shape/shape-2.png" alt="" class="shape shape-12">
		<img src="images/shape/shape-3.png" alt="" class="shape shape-13">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center flex-column text-center">
				<div class="d-flex align-items-center justify-content-center mt-240 md-mt-100">
					<h1 class="mb-30">Stagiaire <?php echo $result->TitrePoste ?>.</h1>

				</div>
				<div class="d-flex align-items-center justify-content-center mt-60">

				</div>
			</div>
		</div>
	</div>
</div>
<!-- // INSERT INTO `stage`(`idStage`, `TitrePoste`, `LieuStage`, `Statut`,  -->
<!-- // `Description`, `competencesReq`, `competenceAnnex`, `DateAjoutStage`) -->
<section class="job-details mb-160 md-mb-80">
	<div class="job-details-rapper">
		<div class="container">
			<div class="row g-5 d-flex align-items-start justify-content-center">
				<div class="col-lg-4">
					<div class="job-details-left d-flex flex-column justify-content-center">
						<div class="left-1">
							<img src="images/eneo.png" alt="">
							<strong>Agence de Distribution d'énergie Electrique </strong>
							<p class="mt-30">A l'écoute de Notre clientèle.</p>
						</div>
						<div class="left-1 pt-40">
							<p class="mb-20">Postes Ouverts</p>
							<span>45</span>
						</div>
						<div class="left-1 pt-40">
							<p class="mb-20">Nombre d'employés</p>
							<span>150-500</span>
						</div>
						<div class="left-1 pt-40">
							<p class="mb-20">créé en</p>
							<span>1998</span>
						</div>
						<div class="left-1 pt-40">
							<p class="mb-20">Email</p>
							<span>serviceeneo@eneo.com</span>
						</div>
						<div class="left-1 pt-40">
							<p class="mb-20">localisation</p>
							<span>Douala, Cameroun</span>
						</div>
						<div class="left-2 pt-40">
							<!-- <a href="" class="">View Full Profile</a> -->
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="job-details-right">
						<div class="job-list-1 md-pt-40">
							<div class="list-company pb-20 g-5 d-flex align-items-center justify-content-between">
								<img src="images/eneo.png" alt="">
								<!-- <span>$5000<small>/Month</small></span> -->
							</div>
							<div class="job-list-name d-flex pt-20 align-items-center justify-content-between">
								<div class="d-flex flex-column align-items-start justify-content-start">
									<h4><?php echo $result->TitrePoste ?></h4>
									<div class="mt-20">
										<span><i class="bi bi-geo-alt"></i></span>
										<span><?php echo $result->LieuStage ?></span>
										<span><i class="bi bi-clock"></i></span>
										<span><?php echo $result->DateAjoutStage ?></span>
									</div>
								</div>
								<div class="job-apply d-flex align-items-center justify-content-center">
									<form action="./job-details.php?id=<?php echo $result->idStage ?>" method="POST" enctype="multipart/form-data">
										<div class="col-lg">
											<label class="form-label mb-10" for="image">veuillez joindre votre cv </label>
											<input class="form-control" type="file" name="images[]" placeholder="importez votre cv" accept=".pdf" required />
										</div>
										<div class="col-lg">
											<label class="form-label mb-10" for="image">veuillez joindre votre lettre de Recommandation </label>
											<input class="form-control" type="file" name="lettres[]" placeholder="importez votre lettre" accept=".pdf" required aria-label="importez votre lettre de recommandation" />
										</div>
										<a class="">
											<button style="color: black" type="submit" name="submit">postuler</button>
										</a>

									</form>
								</div>
							</div>
						</div>
						<div class="job-list-details d-flex flex-column pt-60">
							<h4 class=""> Description du stage</h4>
							<p><?php echo $result->Description ?> </p>
							<h4 class="mt-50">Responsbilités:</h4>
							<p>Vos responsabilités aucours de ce stage seront les suivantes.</p>
							<ul>
								<?php
								$data = explode("#", $result->competencesReq);
								foreach ($data as $resp) :
								?>
									<li><?php echo $resp ?> </li>
								<?php
								endforeach;
								?>
							</ul>
							<h4>Competences:</h4>
							<p class="mb-20">Le stagiaire doit avoir les compétences ci après</p>
							<div class="btn-group me-auto">
								<?php
								$data = explode("#", $result->competenceAnnex);
								foreach ($data as $resp) :
								?>
									<a href="#" class="btn btn-primary"><?php echo $resp ?></a>

								<?php
								endforeach;
								?>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =========================================
			.job-details
			============================================= -->
<!-- =========================================
			.FEATURED JOBS   6
			============================================= -->
<section class="recent-job mb-160 md-mb-80">
	<div class="recent-job-rapper">
		<div class="container">
			<div class="feature-job-title">
				<h3 class="heading-3 mb-80">Recents Stage</h3>
			</div>
			<div class="recent-job-slider " id="recent-job-slider">
				<?php
				if (isset($results) && $results != null) :
					// INSERT INTO `stage`(`idStage`, `TitrePoste`, `LieuStage`, `Statut`, 
					// `Description`, `competencesReq`, `competenceAnnex`, `DateAjoutStage`)
					foreach ($results as $stage) :
				?>
						<div class="recent-job-item">
							<div class="row pt-30 px-0 g-5">
								<div class="col">
									<div class="job-1 d-flex flex-column">
										<div class="job-company">
											<div class="company-name">
												<img src="images/eneo.png" alt="">
												<span><?php echo $stage->Statut ?></span>
											</div>
											<div class="company-taq">
												<i class="bi bi-bookmark"></i>
											</div>
										</div>
										<div class="job-title">
											<h3><?php echo $stage->TitrePoste ?></h3>
										</div>
										<div class="job-type">
											<span><i class="bi bi-geo-alt"></i></span>
											<span><?php echo $stage->LieuStage ?></span>
											<span><i class="bi bi-clock"></i></span>
											<span>6 mois</span>
										</div>
										<div class="job-sallary pt-20">
											<span><strong><s>@@</s></strong>/FCFA</span>
											<a href="./job-details.php?id=<?php echo $stage->idStage ?>" class="">Detail</a>
										</div>

									</div>
								</div>
							</div>
						</div>
				<?php
					endforeach;
				endif
				?>

			</div>
		</div>
	</div>
</section>
<!-- =========================================
			.FEATURED JOBS
			============================================= -->
<!-- =========================================
			Customers 10
			============================================= -->
<section class="Customer-one mb-160 md-mb-80">
	<div class="container">
		<div class="customer_rapper">
			<img src="images/shape/shape-4.png" alt="">
			<img src="images/shape/shape-4.png" alt="">
			<div class="row">
				<div class=" col customer_content text-center pt-80 pb-80">
					<h2 class="">200k+ Customers Regular Visit Our Site.Try it now!</h2>
					<p class="mb-30">Enthusiastically mesh user friendly content with long-term high-impact architectures. Proactively underwhelm .</p>
					<a href="" class="custom-btn">Apply Now</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
require "./config/footer.php";
?>