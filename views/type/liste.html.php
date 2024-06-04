<div class="container mb-5">
    <div class="card mt-5 w-75 m-auto">
        <div class="card-header bg-primary text-white">
            Liste des Types
        </div>
        <div class="card-body">
            <form class="d-flex" method="POST" action="<?= WEBROOT ?>">
                <div class="col">
                    <div>
                        <label for="nomType" class="form-label">Nom Type</label>
                        <input type="text" name="nomType" id="nomType" class="form-control" placeholder="" required>
                        <div id="error-message" style="color: red;"></div>
                    </div>
                </div>
                <div class="col" style="margin-top: 32px; margin-left:10px">
                    <div class="mb-3">
                        
                        <input type="hidden" name="controller" value="type">
                        <input type="hidden" name="action" value="add-type">
                        <button type="submit" class="btn btn-dark">
                            Enregistrer
                        </button>
                    </div>
                </div>
            </form>
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($types as $type): ?>
                        <tr>
                            <td><?= $type['id'] ?></td>
                            <td><?= $type['nomType'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
