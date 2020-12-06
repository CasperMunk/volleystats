<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VolleyStats - <?php echo $current_page_title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
 


</head>
<body class="d-flex flex-column h-100<?php if ($full_page) echo ' fullpage' ?>">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/fh-3.1.7/datatables.min.js"></script>
    
    <?php if ($full_page == false): ?>
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="?"><img src="img/icon-volleyball.png" height="25" border="none" /> VolleyStats</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <?php 
            foreach ($navigation as $url => $name){ 
                if (is_array($name)){
                    echo '
                    <li class="nav-item dropdown';
                    if (array_key_exists($current_page,$name) == true) echo ' active';
                    echo '">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown'.$url.'" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            '.$url.'
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown'.$url.'">
                    ';
                    foreach ($name as $dropdown_item_url => $dropdown_item_name) {
                        echo '<a class="dropdown-item';
                        if ($current_page == $dropdown_item_url) echo ' active';
                        echo '" href="'.$dropdown_item_url.'">'.$dropdown_item_name.'</a>';
                    }
                    echo '
                        </div>
                    </li>
                    ';
                        
                }else{
                    echo '<li class="nav-item';
                    if ($current_page == $url) echo ' active';
                    echo '">
                        <a class="nav-link" href="'.$url.'">'.$name.'</a>
                    </li>';
                }
            }
            ?>
            
            </ul>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5"><?php echo $current_page_title ?></h1>
    <?php endif; ?>