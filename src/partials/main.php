<main>
    <div class="container d-flex flex-wrap">
        <?php
        // Import the database and fetch the movie data
        include __DIR__ . '../../../database.php';

        foreach ($movies as $movie) :
        ?>
            <div class="movie">
                <div class="title-div">
                    <h4><?= $movie->getTitle() ?></h4>
                </div>

                <p>Year: <?= $movie->year ?></p>
                <p>Genre:</p>
                <div class="d-flex justify-content-around">
                    <p><?= $movie->genre->genre1 ?></p>
                    <?php if ($movie->genre->genre2 !== null) : ?>
                        <p><?= $movie->genre->genre2 ?></p>
                    <?php endif; ?>
                    <?php if ($movie->genre->genre3 !== null) : ?>
                        <p><?= $movie->genre->genre3 ?></p>
                    <?php endif; ?>
                </div>
                <p><?= $movie->director ?></p>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</main>