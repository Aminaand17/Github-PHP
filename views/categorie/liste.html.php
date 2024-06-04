<div class="container mb-5">
    <div class="card mt-5 w-75 m-auto">
        <div class="card-header bg-primary text-white">
            Liste des Catégories
        </div>
        <div class="card-body">
            <form class="d-flex" method="POST" action="<?= WEBROOT ?>" onsubmit="return validateForm()">
                <div class="col">
                    <div>
                        <label for="nomCategorie" class="form-label">Nom Catégorie</label>
                        <input type="text" name="nomCategorie" id="nomCategorie" class="form-control" placeholder="" required>
                        <div id="error-message" style="color: red;"></div>
                    </div>
                </div>
                <div class="col" style="margin-top: 32px; margin-left:10px">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">
                            Enregistrer
                        </button>
                    </div>
                </div>
                <input type="hidden" name="controller" value="categorie">
                <input type="hidden" name="action" value="add-categorie">
            </form>
        
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom Catégorie</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $categorie): ?>
                        <tr>
                            <td><?= $categorie['id'] ?></td>
                            <td><?= $categorie['nomCategorie'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
function validateForm() {
    var nomCategorie = document.getElementById('nomCategorie').value;
    var errorMessage = document.getElementById('error-message');

    if (nomCategorie === "") {
        errorMessage.textContent = "Le nom de la catégorie est obligatoire.";
        return false;
    }

    errorMessage.textContent = "";
    return true;
}
</script>
