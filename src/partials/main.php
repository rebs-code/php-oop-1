<main>
    <div class="container">
        <?php
        // Import the database and fetch the movie data
        include __DIR__ . '../../../database.php';

        foreach ($movies as $movie) {
            echo '<h4>' . $movie->getTitle() . '</h4>';
        }


        ?>
    </div>
</main>