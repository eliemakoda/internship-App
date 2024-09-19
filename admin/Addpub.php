<?php
require "../config/app.php";
$app= new DatabaseQuery;
if (isset($_POST["submit"])) {
    $urlsImages = [];

    $uploadDirectory = "../images/";

    // Vérifier s'il y a des erreurs lors du téléchargement des images
    if (!empty($_FILES["images"]["name"][0])) {
        foreach ($_FILES["images"]["name"] as $key => $imageName) {
            $imageTmpName = $_FILES["images"]["tmp_name"][$key];
            $urlsImages[] = $imageName;
            $imagePath = $uploadDirectory . $imageName;
            move_uploaded_file($imageTmpName, $imagePath);
        }

        $images = implode(",", $urlsImages);
        $titre = $_POST["name"];
        $desc = $_POST["desc"];

        $sql = "INSERT INTO blog(tittreblog, descriptionBlog, imagesBlog) VALUES(:tittreblog, :descriptionBlog, :imagesBlog)";
        $tab = [
            ":tittreblog" => $titre,
            ":descriptionBlog" => $desc,
            ":imagesBlog" => $images
        ];
        $app->inserer($sql, $tab,"./blog.php");
    }
}
require "./config/header.php";
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <!-- `blog`(`idBlog`, `tittreblog`, `descriptionBlog`, `imagesBlog`, `DateAjoutBlog`) -->
                <h4 class="card-title mb-4">Ajouter une Publication </h4>
                <form method="POST" action="./Addpub.php" enctype="multipart/form-data">
                    <div class="row mb-4">
                        <label for="name" class="col-form-label col-lg-2">Titre </label>
                        <div class="col-lg-10">
                            <input id="projectname" name="name" type="text" class="form-control" placeholder="Entrez le titre du post..." required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="descriptionPoste" class="col-form-label col-lg-2"> Description de la publications</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" id="projectdesc" name="desc" rows="3" placeholder="Entrez la Description de la publication ..." required></textarea>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="descriptionPoste" class="col-form-label col-lg-2"> Images de la publication </label>
                        <div class="col-lg-10">
                            <input id="projectname" name="images[]" type="file" class="form-control" placeholder="importez les images du post..." required multiple>

                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php
require "./config/footer.php";
?>