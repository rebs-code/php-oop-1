<main>
    <div class="container d-flex flex-wrap">
        <?php
        // Import the database and fetch the movie data
        include __DIR__ . '../../../database.php';

        foreach ($movies as $movie) {
            echo '<div class="movie">';
            echo '<h4>' . $movie->getTitle() . '</h4>';
            echo '<p>' . $movie->year . '</p>';
            echo '<p>' . $movie->genre->genre1 . '</p>';
            if ($movie->genre->genre2 !== null) {
                echo '<p>' . $movie->genre->genre2 . '</p>';
            };
            if ($movie->genre->genre3 !== null) {
                echo '<p>' . $movie->genre->genre3 . '</p>';
            };
            echo '<p>' . $movie->director . '</p>';
            echo '</div>';
        }


        ?>
    </div>
</main>