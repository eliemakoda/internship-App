<?php
require "../config/app.php";
$app = new DatabaseQuery;
if (isset($_GET["del"])) {
    $id = $_GET["del"];
    $app->supprimer("DELETE from blog WHERE idBlog=$id", "./blog.php");
}
$sql = "SELECT * FROM blog WHERE 1";
$results = $app->SelectionnerTout($sql);
require "./config/header.php"
?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Liste des Publications</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active"><a href="./Addpub.php"><i class="fa fa-plus" aria-hidden="true"></i>  Ajouter une publication</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" style="width: 70px;">#</th>
                                <th scope="col">Titre </th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($results) && $results != null) :
                                foreach ($results as $pub) :
                                    // (`idBlog`, `tittreblog`, `descriptionBlog`, `imagesBlog`, `DateAjoutBlog`)
                            ?>
                                    <tr>
                                        <td>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle">

                                                    <?php echo $pub->tittreblog[0]; ?>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">

                                                    <?php echo $pub->tittreblog; ?>

                                                </a></h5>
                                            <p class="text-muted mb-0">
                                                <?php echo $pub->idBlog; ?>

                                            </p>
                                        </td>
                                        <td>
                                            <a href="./blog.php?del=<?php echo $pub->idBlog ?>"> <i style="color:red;"  class="fa fa-trash"></i></a>


                                        </td>
                                    </tr>
                            <?php
                                endforeach;
                            endif;

                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
require "./config/footer.php";
?>