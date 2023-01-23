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
                            <h1><?= $countCategorie ?></h1>
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
                            <h1><?= $countCategorie ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tableau d'affichage  des Articles-->
            <div class="articles">
                <h2>Articles</h2>
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
                        <tr>
                            <td>Mehdi</td>
                            <td>Article number 222</td>
                            <td>FrontEnd</td>
                            <td>ddddddddddddddddddddddddddddddddddddddddd</td>
                            <td>22/12/2022</td>
                            <td>image</td>
                            <td class="actions">
                                <a href=""><i class="fa-solid fa-pen-to-square btnUpda"></i></a>
                                <a href=""><i class="fa-solid fa-trash-can btnDelete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>yasser</td>
                            <td>Article number 222</td>
                            <td>FrontEnd</td>
                            <td>ddddddddddddddddddddddddddddddddddddddddd</td>
                            <td>22/12/2022</td>
                            <td>image</td>
                            <td class="actions">
                                <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href=""><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- Right Dashboard content -->
        <div class="right-dash">
            <!-- Top Right Dashboard -->
            <div class="top">
                <button id="menu-btn">
                        <i class="fa-solid fa-bars"></i>
                </button>
                <!-- Dark & Light Mode -->
                <div class="theme-toggler">
                    <i class="fa-solid fa-lightbulb active"></i>
                    <i class="fa-solid fa-moon"></i>
                </div>
                <!-- Profile infos -->
                <div class="profile">
                    <div class="infos">
                        <p>Hey, <span><?php echo $_SESSION['fname'].' '.$_SESSION['lname'] ?></span></p>
                        <small>Admin</small>
                    </div>
                    <div class="photo-profile">
                        <img src="../Assets/Images/Users/<?php echo $_SESSION['image'] ?>" alt="Photo de profile">
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
             <?php   }?>
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
</html>