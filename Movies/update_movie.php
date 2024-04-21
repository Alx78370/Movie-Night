<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);
$movie_id = $_GET['movie_id'];

$queryMovie = "SELECT * FROM movies WHERE id = :movie_id";
$statement = $pdo->prepare($queryMovie);
$statement->bindValue(':movie_id', $movie_id, \PDO::PARAM_INT);
$statement->execute();
$movie = $statement->fetch(PDO::FETCH_ASSOC);
?>

<body class="backgroundAccueil">
    <div class="cardForm">
        <h1>Update <?= $movie['name'] ?></h1>
        <form action="../Movies/save_update_movie.php?movie_id=<?= $movie['id'] ?>" method="post">
            <div class="mb-3">
                <label class="form-label" for="movie_name">Movie name:</label>
                <input class="form-control" type="text" name="movie_name" id="movie_name" value="<?= $movie['name'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="movie_release_date">Release date:</label>
                <input class="form-control" type="number" min="1900" max="2099" step="1" name="movie_release_date" id="movie_release_date" name="movie_release_date" value="<?= $movie['release_date'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="movie_imdb_grade" class="form-label">Imdb grade:</label>
                <input type="number" value="<?= $movie['imdb_grade'] ?>" step="0.1" min="0" max="10" name="movie_imdb_grade" id="movie_imdb_grade" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="movie_synopsis" class="form-label">Synopsis:</label>
                <textarea class="form-control" name="movie_synopsis" id="movie_synopsis" cols="30" rows="10"><?= $movie['synopsis'] ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="movie_director">Director:</label>
                <select class="form-select" aria-label="Default select example" name="movie_director" id="movie_director" required>
                    <?php
                    $query = "SELECT * FROM directors";
                    $statement = $pdo->query($query);
                    $directors = $statement->fetchAll();

                    foreach ($directors as $id => $director) {
                        $directorName = $director['first_name'] . ' ' . $director['last_name'];
                        $directorId = $director['id'];
                    ?>
                        <option <?php if ($movie['directors_id'] == $directorId) {
                                    echo 'selected="selected"';
                                } ?> value="<?= $directorId ?>"><?= $directorName ?></option>
                    <?php
                    }
                    ?>
                </select><br>
            </div>
            <label class="form-check-label">Choose the movie's genre(s): </label>
            <?php
            $query = "SELECT * FROM genres";
            $statement = $pdo->query($query);
            $genres = $statement->fetchAll(PDO::FETCH_ASSOC);

            $queryMovieGenres = "SELECT genres.id, genres.name FROM genres JOIN movies_genres ON genres.id = movies_genres.genres_id JOIN movies ON movies_genres.movies_id = movies.id WHERE movies_id = :movie_id";
            $statement = $pdo->prepare($queryMovieGenres);
            $statement->bindValue(':movie_id', $movie_id, \PDO::PARAM_INT);
            $statement->execute();
            $movieGenres = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($movieGenres as $movieGenre) {
                $checkedGenre[] = $movieGenre['id'];
            }

            foreach ($genres as $id => $genre) {
                $genreName = $genre['name'];
                $genreId = $genre['id'];

            ?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" <?php if (in_array($genreId, $checkedGenre)) {
                                                                        echo 'checked="checked"';
                                                                    } ?> id="<?= $genreName ?>" name="<?= $genreName ?>" value="<?= $genreId ?>" />
                    <label class="form-check-label" for="<?= $genreName ?>"><?= $genreName ?></label>
                </div>
            <?php
            }
            ?>
            <br><br>
            <div class="mb-3">
                <label for="movie_cover" class="form-label">Add a movie cover:</label>
                <input class="form-control" type="file" id="movie_cover" name="movie_cover">
            </div>
            <input class="btn btn-primary" type="submit" value="Update the movie">
        </form>
    </div>
</body>