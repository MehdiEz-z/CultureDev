<div class="modal fade" id="addArt">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="titre-form"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="ajoutArticle" id="article-form" enctype="multipart/form-data">
                <input class="form-control" name="article-id" id="article-id" type="hidden">
                    <div class="mb-2">
                        <label class="form-label">Titre*</label>
                        <input class="form-control" name="article-titre" id="article-titre" type="text">
                    </div>
                    <div class="mb-2 text-start">
                        <label class="form-label">Categories*</label>
                        <select class="form-select" name="article-categorie" id="article_cat">
                            <option value="">Please select</option>
                            <?php foreach(getCategories() as $category){ ?>
                                <option value="<?= $category['category_id'] ?>" id="<?= $category['category_id'] ?>"><?= $category['name'] ?></option> 
                            <?php } ?>                                                               
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="col-form-label ">Description*</label>
                        <textarea class="form-control" name="article-description" id="article-descrip" rows="3"></textarea>
                    </div>
                    <div class="mb-2"> 
                        <label class="form-label">Date*</label>
                        <input class="form-control" name="article-date" id="article-date" type="date" value="">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Images*</label>
                        <input class="form-control" name="article-cover" type="file" required>
                        <input class="form-control" name="old-article-cover" id="old-article-cover" type="hidden">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" name="addArt" id="save-btn" class="btn btn-primary">Ajouter</button>
                        <button type="submit" name="updtArt" id="updt-btn" class="btn btn-warning">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>