<div class="container mb-5">
    <div class="card mt-5 w-75 m-auto">
        <div class="card-header bg-primary text-white">
            Nouvel Article
        </div>
        <div class="card-body">
            <form class="row g-3" method="$_POST" action="<?=WEBROOT?>">
                <div class="col-md-6">
                    <label for="nomArticle" class="form-label">Nom Article</label>
                    <input type="text" name="nomArticle" class="form-control" id="nomArticle" aria-describedby="nomArticleHelp">
                </div>
                <div class="col-md-6">
                    <label for="qteStock" class="form-label">Quantité en stock</label>
                    <input type="number" name="qteStock" class="form-control" id="qteStock" aria-describedby="qteStockHelp">
                </div>
                <div class="col-md-6">
                    <label for="prix" class="form-label">Prix</label>
                    <input type="number" name="prix" class="form-control" id="prix" aria-describedby="prixHelp">
                </div>
                <div class="col-md-6">
                    <label for="categorie" class="form-label">Catégorie</label>
                    <select name="id_categorie" id="id_categorie" class="form-select" aria-label="categorieSelect">
                        <option selected>Choisir une catégorie
                            <?php foreach ($categories as $categorie): ?>
                            <option value="<?= $categorie['id'] ?>"><?= $categorie['nomCategorie'] ?></option>
                            <?php endforeach ?>
                        </option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="type" class="form-label">Type</label>
                    <select name="id_type" id="id_type" class="form-select" aria-label="typeSelect">
                        <option selected>Choisir un type</option>
                        <?php foreach ($types as $type): ?>
                        <option value="<?= $type['id'] ?>"><?= $type['nomType'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col-12">
                    <input type="hidden" name="controller" value="article">
                    <input type="hidden" name="action" value="add-article">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
