<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

?>

<body class="backgroundAccueil">
    <div class="cardForm">
        <h1>Add a new movie</h1>
        <form action="../Movies/save_movie.php" method="post">
            <div class="mb-3">
                <label for="movie_name" class="form-label">Movie name:</label>
                <input type="text" name="movie_name" id="movie_name" placeholder="movie" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="movie_release_date" class="form-label">Release date:</label>
                <input type="number" min="1900" max="2099" step="1" name="movie_release_date" id="movie_release_date" name="movie_release_date" placeholder="XXXX" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="movie_imdb_grade" class="form-label">Imdb grade:</label>
                <input type="number" placeholder="X.X" step="0.1" min="0" max="10" name="movie_imdb_grade" id="movie_imdb_grade" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="movie_synopsis" class="form-label">Synopsis:</label>
                <textarea class="form-control" name="movie_synopsis" id="movie_synopsis" cols="30" rows="10" placeholder="Synopsis"></textarea>
            </div>
            <div class="mb-3">
                <label for="movie_director">Director:</label>
                <select class="form-select" aria-label="Default select example" name="movie_director" id="movie_director" required>
                    <?php
                    $query = "SELECT * FROM directors";
                    $statement = $pdo->query($query);
                    $directors = $statement->fetchAll();

                    foreach ($directors as $id => $director) {
                        $directorName = $director['first_name'] . ' ' . $director['last_name'];
                        $directorId = $director['id'];
                    ?>
                        <option value="<?= $directorId ?>"><?= $directorName ?></option>
                    <?php
                    }
                    ?>
                </select><br>
            </div>
            <div>
                <label>Choose the movie's genre(s):</label><br>
                <?php
                $query = "SELECT * FROM genres";
                $statement = $pdo->query($query);
                $genres = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($genres as $id => $genre) {
                    $genreName = $genre['name'];
                    $genreId = $genre['id'];
                ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="<?= $genreName ?>" name="<?= $genreName ?>" value="<?= $genreId ?>" />
                        <label class="form-check-label" for="<?= $genreName ?>"><?= $genreName ?></label>
                    </div>
                <?php
                }
                ?>
            </div><br>
            <div class="mb-3">
                <label for="movie_cover" class="form-label">Add a movie cover:</label>
                <input class="form-control" type="file" id="movie_cover" name="movie_cover">
            </div>

            <input class="btn btn-primary" type="submit" value="Add a movie">
        </form>
    </div>
</body>
<?php
