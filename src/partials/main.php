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
                <div class="year-div">
                    <p class="fw-bold me-1">Year: </p>
                    <p><?= $movie->year ?></p>
                </div>
                <div class="d-flex justify-content-center genre-div align-items-center p-3">
                    <p class="fw-bold me-3">Genre:</p>
                    <p class="border border-black p-1 me-1"><?= $movie->genre->genre1 ?></p>
                    <?php if ($movie->genre->genre2 !== null) : ?>
                        <p class="border border-black p-1 me-1"><?= $movie->genre->genre2 ?></p>
                    <?php endif; ?>
                    <?php if ($movie->genre->genre3 !== null) : ?>
                        <p class="border border-black p-1 me-1"><?= $movie->genre->genre3 ?></p>
                    <?php endif; ?>
                </div>
                <div class="director-div">
                    <p><?= $movie->director ?></p>
                </div>

            </div>
        <?php
        endforeach;
        ?>
    </div>
</main>