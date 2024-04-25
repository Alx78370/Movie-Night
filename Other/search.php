<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$search = $_GET['search'];

$Statement = $pdo->prepare("SELECT id, name FROM movies WHERE name LIKE :search");
$Statement->bindValue(':search', "%$search%", PDO::PARAM_STR);
$Statement->execute();
$movieResults = $Statement->fetchAll(PDO::FETCH_ASSOC);

$Statement = $pdo->prepare("SELECT id, first_name, last_name FROM directors WHERE first_name LIKE :search OR last_name LIKE :search");
$Statement->bindValue(':search', "%$search%", PDO::PARAM_STR);
$Statement->execute();
$directorResults = $Statement->fetchAll(PDO::FETCH_ASSOC);

$Statement = $pdo->prepare("SELECT id, name FROM genres WHERE name LIKE :search");
$Statement->bindValue(':search', "%$search%", PDO::PARAM_STR);
$Statement->execute();
$genreResults = $Statement->fetchAll(PDO::FETCH_ASSOC);

?>

<body class='backgroundAccueil'>
    <div class="cardDetailCart">
        <h1>Search Results</h1><br>
        <?php if(count($movieResults) > 0) { ?>
                <p>Movies(<?php echo count($movieResults)?>):</p> <?php
                    foreach ($movieResults as $movieResult) { ?>
                         <a href="../Movies/detail_movie.php?movie_id=<?=$movieResult['id']?>"><?=$movieResult['name']?></a>
        <?php       }
            }?> <br>
        
        <?php if(count($directorResults) > 0) { ?>
                    <p>Directors(<?php echo count($directorResults)?>):</p> <?php
                    foreach ($directorResults as $directorResult) { ?>
                         <a href="../Directors/detail_director.php?director_id=<?=$directorResult['id']?>"><?=$directorResult['first_name'] . ' ' . $directorResult['last_name']?></a>
        <?php       }
            }?><br>
        
        <?php if(count($genreResults) > 0) { ?>
                    <p>Genres(<?php echo count($genreResults)?>):</p> <?php
                    foreach ($genreResults as $genreResult) { ?>
                         <a href="../Genres/detail_genre.php?genre_id=<?=$genreResult['id']?>"><?=$genreResult['name']?></a>
        <?php       }
            }?>

    </div>
</body>


