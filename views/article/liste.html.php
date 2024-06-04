<div class="container mb-5">
    <div class="card mt-5 w-75 m-auto">
        <div class="card-header bg-primary text-white">
            Liste des Articles
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end mb-4">
                <a id="" class="d-flex justify-content-end nb-2" href="<?= WEBROOT ?>/?controller=article&action=form-article" class="btn btn-outline-secondary">Nouveau</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Libellé</th>
                            <th scope="col">Quantité en Stock</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Catégorie</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articles as $article): ?>
                        <tr>
                            <td><?= $article['nomArticle'] ?></td>
                            <td><?= $article['qteStock'] ?></td>
                            <td><?= $article['prixAppro'] ?></td>
                            <td><?= $article['nomCategorie'] ?></td>
                            <td><?= $article['nomType'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
