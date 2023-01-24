<div class="modal fade" id="addArt">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Ajouter un article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="ajoutArticle" enctype="multipart/form-data">
                    <div class="mb-2">
                        <label class="form-label">Titre*</label>
                        <input class="form-control" name="article-titre" type="text">
                    </div>
                    <div class="mb-2 text-start">
                        <label class="form-label">Categories*</label>
                        <select class="form-select" name="article-categorie">
                            <option value="">Please select</option>
                            <?php foreach(getCategories() as $category){ ?>
                                <option value="<?= $category['category_id'] ?>"><?= $category['name'] ?></option> 
                            <?php } ?>                                                               
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="col-form-label ">Description*</label>
                        <textarea class="form-control" name="article-description" rows="3"></textarea>
                    </div>
                    <div class="mb-2"> 
                        <label class="form-label">Date*</label>
                        <input class="form-control" name="article-date" type="date" value="">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Images*</label>
                        <input class="form-control" name="article-cover" type="file" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" name="addArt" class="btn btn-primary">Ajouter</button>
                        <button type="button" class="btn btn-warning d-none">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>