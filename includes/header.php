<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(!empty($pageTitle)): ?>
        <title>Portfolio &bull; <?php echo $pageTitle; ?></title>
    <?php else: ?>
        <title>Portfolio</title>
    <?php endif; ?>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"><!--Link to boxicons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"><!--Link to bootstrap css-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script><!--Link to bootstrap js-->
</head>
<body>
    <header>
        <!--Create navbar container-->
        <div class="container">

            <!--Create navbar-->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Daniel <span>Velez</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center justify-content-lg-between" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php if(!empty($pageKey) && $pageKey == 'home') echo 'active'; ?>" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(!empty($pageKey) && $pageKey == 'about') echo 'active'; ?>" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(!empty($pageKey) && $pageKey == 'projects') echo 'active'; ?>" href="projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(!empty($pageKey) && $pageKey == 'contact') echo 'active'; ?>" href="contact.php">Contact</a>
                        </li>
                    </ul>

                    <!--Github icon-->
                    <div class="ms-lg-auto text-lg-end">
                        <a href="https://github.com/Daniel1000c" target="_blank">
                            <i class="bx bxl-github"></i>
                        </a>
                    </div>
                    </div>
                    
                </div>
            </nav>

        </div>
    </header>
    <main>