<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Icon -->
    <title>Dashboard | CultureDev.to</title>
    <link rel="icon" href="./Assets/Images/logo.png">

    <!-- My Style -->
    <link rel="stylesheet" href="./Assets/Css/mains.css">

    <!-- Fontawesome link -->
    <script src="https://kit.fontawesome.com/f57667c685.js" crossorigin="anonymous"></script>

</head>
<body class="dash">
    <div class="container">

        <!-- Sidebar -->
        <aside>
            <!-- Top Sidebar -->
            <div class="top">
                <!-- Logo Sidebar -->
                <div class="logo">
                    <img src="./Assets/Images/logo.png" alt="CultureDevLogo">
                    <h3>ulture<span>D</span>ev</h3>
                </div>
                <div class="close" id="close-btn">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <!-- Sidebar Content -->
            <div class="sidebar">
                <a href="#" class="active">
                    <i class="icon fa-brands fa-slack"></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <i class="fa-solid fa-plus"></i>
                    <h3>Add Post</h3>
                </a>
                <a href="#">
                    <i class="icon fa-solid fa-user"></i>
                    <h3>Profile</h3>
                </a>
                <a href="#">
                    <i class="icon fa-solid fa-gear"></i>
                    <h3>Paramétre</h3>
                </a>
                <a href="#">
                    <i class="icon fa-solid fa-right-from-bracket"></i>
                    <h3>Déconnexion</h3>
                </a>
            </div>
        </aside>

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
                            <h3>Total Posts</h3></div>
                        <div class="count">
                            <h1>25</h1>
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
                            <h1>25</h1>
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
                            <h1>25</h1>
                        </div>
                    </div>
                </div>
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
                        <p>Hey, <span>DANIEL</span></p>
                        <small>Admin</small>
                    </div>
                    <div class="photo-profile">
                        <img src="./Assets/Images/user-1.jpg" alt="Photo de profile">
                    </div>
                </div>
            </div>
        <!-- Recents Posts -->
        <div class="recent-posts">
            <h2>Recents Post</h2>
            <div class="posts">
                <div class="post">
                    <div class="profile-photo">
                        <img src="./Assets/Images/user-1.jpg" alt="Photo de profile">
                    </div>
                    <div class="post-infos">
                        <p><span>Mehdi Ezzahri</span> a publié un post</p>
                        <small>Il y a 2 minutes</small>
                    </div>
                </div>
                <div class="post">
                    <div class="profile-photo">
                        <img src="./Assets/Images/user-1.jpg" alt="Photo de profile">
                    </div>
                    <div class="post-infos">
                        <p><span>Mehdi Ezzahri</span> a publié un post</p>
                        <small>Il y a 2 minutes</small>
                    </div>
                </div>
                <div class="post">
                    <div class="profile-photo">
                        <img src="./Assets/Images/user-1.jpg" alt="Photo de profile">
                    </div>
                    <div class="post-infos">
                        <p><span>Mehdi Ezzahri</span> a publié un post</p>
                        <small>Il y a 2 minutes</small>
                    </div>
                </div>
                <div class="post">
                    <div class="profile-photo">
                        <img src="./Assets/Images/user-1.jpg" alt="Photo de profile">
                    </div>
                    <div class="post-infos">
                        <p><span>Mehdi Ezzahri</span> a publié un post</p>
                        <small>Il y a 2 minutes</small>
                    </div>
                </div>
                <div class="post">
                    <div class="profile-photo">
                        <img src="./Assets/Images/user-1.jpg" alt="Photo de profile">
                    </div>
                    <div class="post-infos">
                        <p><span>Mehdi Ezzahri</span> a publié un post</p>
                        <small>Il y a 2 minutes</small>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>