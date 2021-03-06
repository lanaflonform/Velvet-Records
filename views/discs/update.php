<?php require_once "../../controllers/discs/update.php"; ?>

<!doctype html>
<html lang="fr">
<?php include_once "../templates/head.php" ?>
<body>
<?php include_once "../templates/navbar.php" ?>

<main role="main">
    <div class="container">
        <h1 class="center-align">Modification</h1>
        <form enctype="multipart/form-data" method="POST" id="updateDisc">
            <input type="hidden" name="crsf_token" value="<?= $_SESSION['crsf_token'] ?>">
            <!-- First Row -->
            <div class="row">
                <div class="col s12 input-field">
                    <label for="title">Titre</label>
                    <input name="title" id="title" type="text" value="<?= $discDetails->disc_title ?>">
                    <span class="helper-text red-text"><?= $formErrors["title"] ?? "" ?></span>
                </div>
            </div>
            <!-- Second Row -->
            <div class="row">
                <div class="col s12 input-field">
                    <select name="artists" id="artists">
                        <?php foreach ($artists as $artist): ?>
                            <?php if ($artist->artist_id === $discDetails->artist_id): ?>
                                <option value="<?= $artist->artist_id ?>" selected><?= $artist->artist_name ?></option>
                            <?php else: ?>
                                <option value="<?= $artist->artist_id ?>"><?= $artist->artist_name ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <label for="artists">Artiste</label>
                    <span class="helper-text red-text" id="artistsError"><?= $formErrors["artists"] ?? "" ?></span>
                </div>
            </div>
            <!-- Third Row -->
            <div class="row">
                <div class="col s12 input-field">
                    <label for="year">Année</label>
                    <input name="year" id="year" type="text" value="<?= $discDetails->disc_year ?>">
                    <span class="helper-text red-text"><?= $formErrors["year"] ?? "" ?></span>
                </div>
            </div>
            <!-- Fourth Row -->
            <div class="row">
                <div class="col s12 input-field">
                    <label for="genre">Genre</label>
                    <input name="genre" id="genre" type="text" value="<?= $discDetails->disc_genre ?>">
                    <span class="helper-text red-text"><?= $formErrors["genre"] ?? "" ?></span>
                </div>
            </div>
            <!-- Fifth Row -->
            <div class="row">
                <div class="col s12 input-field">
                    <label for="label">Label</label>
                    <input name="label" id="label" type="text" value="<?= $discDetails->disc_label ?>">
                    <span class="helper-text red-text"><?= $formErrors["label"] ?? "" ?></span>
                </div>
            </div>
            <!-- Sixth Row -->
            <div class="row">
                <div class="col s12 input-field">
                    <label for="price">Prix</label>
                    <input name="price" id="price" type="text" value="<?= $discDetails->disc_price ?>">
                    <span class="helper-text red-text"><?= $formErrors["price"] ?? "" ?></span>
                </div>
            </div>
            <!-- Seventh Row -->
            <div class="row">
                <div class="col s12 file-field input-field">
                    <div class="btn deep-orange lighten-1">
                        <span>Image</span>
                        <input name="image" id="image" type="file"">
                    </div>
                    <div class="file-path-wrapper">
                        <label for="filePath"></label>
                        <input class="file-path" name="filePath" id="filePath" type="text"
                               value="<?= $discDetails->disc_picture ?>">
                        <span class="helper-text red-text"><?= $formErrors["filePath"] ?? "" ?></span>
                        <span class="helper-text red-text"><?= $formErrors["image"] ?? "" ?></span>
                    </div>
                </div>
            </div>
            <!-- Eigth row -->
            <div class="row">
                <div class="col s12">
                    <img
                        alt="Image de prévisualisation"
                        class="responsive-img"
                        id="imagePreview"
                        src="../../assets/img/<?= $discDetails->disc_picture ?>"
                    >
                </div>
            </div>
            <!-- Ninth Row -->
            <div class="row">
                <div class="col s12 input-field">
                    <button class="btn deep-orange lighten-1 waves-effect waves-light" type="submit">
                        Modifier
                        <i class="material-icons right">edit</i>
                    </button>
                    <a class="btn red waves-effect waves-light" href="list.php" type="reset">
                        Retour
                        <i class="material-icons right">cancel</i>
                    </a>
                </div>
            </div>
        </form>
    </div>
</main>

<?php include_once "../templates/footer.php" ?>
<script src="../../assets/js/vendors/sweetalert2.min.js"></script>
<script src="../../assets/js/discs/form.js"></script>
</body>
</html>
