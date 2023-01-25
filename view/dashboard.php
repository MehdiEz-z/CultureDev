<?php
$Title='Dashboard | CultureDev.to';
require_once './includes/head.php';
require_once '../controller/shared.php';

if(!isset($_SESSION['user'])) header("Location:login.php");

require_once './includes/sidebar.php';

?>
        <!-- Main Content -->
        <main class="dashbd">
            <div class="top-main">
                <h1>Dashboard</h1>
                <div class="search">
                    <input type="text">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <!-- Statistiques -->
            <div class="statistiques">
                <!-- Post Statistiques -->
                <div class="posts">
                    <i class="fa-solid fa-envelopes-bulk"></i>
                    <div class="middle">
                        <div class="express">
                            <h3>Total Articles</h3></div>
                        <div class="count">
                            <h1><?= $countArticle ?></h1>
                        </div>
                    </div>
                </div>
                <!-- Categories Statistiques -->
                <div class="categories">
                    <i class="fa-solid fa-chart-pie"></i>
                    <div class="middle">
                        <div class="express">
                            <h3>Total Catégories</h3></div>
                        <div class="count">
                            <h1><?= $countCategorie ?></h1>
                        </div>
                    </div>
                </div>
                <!-- Admin Statistiques -->
                <div class="admins">
                    <i class="fa-solid fa-user"></i>
                    <div class="middle">
                        <div class="express">
                            <h3>Total Admins</h3></div>
                        <div class="count">
                            <h1><?= $countUser ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tableau d'affichage  des Articles-->
            <div class="articles">
                <h2>Articles</h2>
                <div class="table-head">
                    <div class="searchTable">
                        <input type="text">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div> 
                    <button type="button" id="add-btn" class="addArticles" data-bs-toggle="modal" data-bs-target="#addArt"><i class="fa-solid fa-plus"></i>Ajouter un article</button>
                </div>
                <div class="articleTable">
                    <div class="tableContent">
                        <table id="articles-table">
                            <thead>
                                <tr>
                                    <th>Auteurs</th>
                                    <th>Titres</th>
                                    <th>Categories</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Cover</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(getArticles() as $article){ ?>
                                <tr>
                                    <td><?= $article['fname'];?></td>
                                    <td><?= $article['titre'];?></td>
                                    <td><?= $article['name'];?></td>
                                    <td><?= $article['description'];?></td>
                                    <td><?= $article['date'];?></td>
                                    <td><img src="../Assets/Images/Articles/<?= $article['cover'];?>" alt=""></td>

                                    <td class="actions">
                                        <a href="dashboard.php" data-bs-toggle="modal" data-bs-target="#addArt" 
                                            onclick="updateArticle(<?= $article['article_id'];?>,'<?= $article['titre'];?>', <?= $article['id_category'];?>,'<?= $article['description'];?>',
                                            '<?= $article['date'];?>','<?= $article['cover'] ;?>')"><i class="fa-solid fa-pen-to-square btnUpdate"></i></a>

                                        <a href="dashboard.php?article_Did=<?= $article['article_id']?>&cover-article=<?= $article['cover']?>"><i class="fa-solid fa-trash-can btnDelete"></i></a>
                                    </td>

                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                    
            <?php
                require_once './includes/modal.php';
            ?>
        </main>
        <!-- Right Dashboard content -->
        <div class="right-dash">
            <!-- Top Right Dashboard -->
            <div class="top">
                <button class="menu-btn" id="menu-btn"><i class="fa-solid fa-bars"></i> </button>
                <!-- Dark & Light Mode -->
                <div class="theme-toggler">
                    <i class="fa-solid fa-lightbulb active"></i>
                    <i class="fa-solid fa-moon"></i>
                </div>
                <!-- Profile infos -->
                <div class="profile">
                    <?php $user = displayUser(); ?>
                    <div class="infos">
                        <p>Hey, <span><?= $user['fname'].' '.$user['lname']; ?></span></p>
                        <small>Admin</small>
                    </div>
                    <div class="photo-profile">
                        <img src="../Assets/Images/Users/<?= $user['image'];?>" alt="Photo de profile">
                    </div>
                </div>
            </div>
            <!-- Recents Posts -->
            <div class="catégories">
                <h2>Catégories</h2>
                <?php
                foreach(getCategories() as $category){ ?>
                <div class="category">
                    <div class="category-infos">
                        <p><span class="username-category">Categorie : </span><?= $category['name'] ?></p>
                    </div>
                    <a href="dashboard.php?cat_id=<?= $category['category_id'] ?>"><i class="delete-cat fa-solid fa-xmark "></i></a>
                    </div>
                <?php }?>
            </div>
            <form action="" method="POST" class="formCategory">
                <?php if(isset($_SESSION['errorCategory'])){ ?>         
                    <span class="errorCategory"><?= $_SESSION['errorCategory'];?></span>             
                <?php } unset($_SESSION['errorCategory']); ?>  
                <!-- Button add Categories -->  
                <div class="add-categorie">
                    <button type="submit" name ="saveCategory"><i class="fa-solid fa-plus"></i>Ajouter une catégorie</button>
                </div>
                <div class="formContent">
                    <input class="input-categorie" name="name-categorie" id="add-categorie" type="text" >
                    <label>Nom du catégorie</label>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="../Assets/Javascript/modal-article.js"></script>
</html>