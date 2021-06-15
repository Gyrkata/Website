<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
/** @var $id array */
/** @var $title array */
/** @var $fk_movie */
/** @var $movieImg */
require_once '../connection/conn.php';
include_once '../partials/headerLogin.php';
$conn = mysqli_connect($hn, $un, $pw, $db);
$id = $_GET['id'];
$stmt = $conn->prepare('SELECT 
       m_title,
       m.genre,
       m.release_date,
       m.show_date,
       m.m_img_path,
       m.description,
        r.review,
       r.rating,
       u.username,
       r.fk_movie_id,
       r.fk_user_id
       FROM theatre.movie m

        left join theatre.review r on m.id = r.fk_movie_id
        left join theatre.user u on u.id = r.fk_user_id
        where m.id = '.$id.' ');

$stmt->execute();
$stmt->store_result();
$stmt->bind_result( $title,$genre, $release, $aired, $movieImg, $movDesc, $review, $rating, $username, $fk_movie, $fk_user);
$stmt->fetch();

$reviews = $conn->prepare('SELECT 
       m.m_title,
       m.m_img_path,
        r.review,
       r.rating,
       u.username,
       u.is_active
       FROM theatre.movie m
        left join theatre.review r on m.id = r.fk_movie_id
        left join theatre.user u on u.id = r.fk_user_id
            where u.is_active = 1 and m.id = '.$id.'
        order by rand() limit 5
      ');
$reviews->execute();
$reviews->store_result();
$reviews->bind_result($title, $movieImg, $review, $rating, $username, $active);
?>
<main class="home">
    <section class="middle">
        <button id="go-back" class="review-btn"> < Back to all Movies</button>
        <div class="movie-review">
            <div class="movie-review-img">
                <img src="../images/movies/<?= $movieImg ?>" alt="">
            </div>
            <div class="movie-review-desc">
                <h3><?= $title ?></h3>
                <pre><?= $movDesc ?></pre>
            </div>
        </div>
    </section>
    <?php include_once 'thumbnailSlider.php'; ?>
    <section class="middle">
        <h2>Recent Reviews</h2>
        <div class="movies">
            <?php if ($reviews->num_rows == 0): ?>
                <h2>There are no reviews yet - Check back later</h2>
            <?php else: ?>
            <?php while ($reviews->fetch()): ?>
                <div class="movies-inner">
                    <h3><?= $title?></h3>
                    <img src="../images/movies/<?= $movieImg ?>" alt="" class="review-img">
                    <h4>Rated <?= $rating ?> <i class="far fa-star"></i> </h4>
                    <h4>by <?= $username ?></h4>
                    <pre><?=$review?></pre>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <button onclick="window.location.href='../reviews'" class="review-btn"> VIEW ALL REVIEWS</button>

    </section>
</main>
<script>
    document.getElementById('go-back').addEventListener('click', () => {
        history.back();
    });
</script>
<?php include_once '../partials/footer.php'; ?>
