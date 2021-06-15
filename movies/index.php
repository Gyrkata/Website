<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
include_once '../partials/headerLogin.php';
$conn = mysqli_connect($hn, $un, $pw, $db);
$stmt = $conn->prepare('SELECT 
       distinct (m.id), 
       m.m_title,
       m.genre,
       m.m_img_path
    FROM theatre.movie m
    order by id DESC ');
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $title, $genre, $movieImg);
$stmt->fetch();

?>

<main class="home">
    <?php include_once 'thumbnailSlider.php';
 ?>
    <section class="middle">
        <h2 class="header">MOVIES</h2>
        <div class="movies">
            <?php while ($stmt->fetch()): ?>
                <div class="movies-inner" class="<?= $genre ?>">
                    <h3><?= $title ?></h3>
                    <img src="<?= ROOT_DIR ?>images/movies/<?= $movieImg ?>" alt="">
                    <h3>GENRE: <?= $genre ?></h3>
                    <a href="<?= ROOT_DIR ?>movies/details.php?id=<?=$id?>" class="view-details">View Movie</a>
                </div>
            <?php endwhile; ?>
        </div>

    </section>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    //filter for movies - Genre - stars -
        $(document).ready(function(){
            $("#hide").click(function(){
                $("p").hide();
            });
            $("#show").click(function(){
            $("p").show();
        });
    });

</script>
<?php include_once '../partials/footer.php'; ?>
