<?php
include_once 'partials/header4.php';
include_once 'connection/conn.php'
?>
<main class="home">
    <section class="top">
        <h1>Home Page - IMAGE SLIDER 4</h1>
    </section>
    <!-- START OF IMAGE SLIDER -->
    <div style="padding:20px 0;background:#333; color: transparent;">
        <div id="thumbnail-slider">
            <div class="inner">
                <ul>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/1.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/2.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/3.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/4.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/5.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/6.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/7.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/8.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/9.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/10.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/11.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/2.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/3.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/4.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/5.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/6.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/7.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/8.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/9.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/10.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/11.jpg"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="thumbs2" style="display:none;">
            <div class="inner">
                <ul>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/1.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/2.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/3.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/4.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/5.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/6.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/7.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/8.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/9.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/10.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/11.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/2.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/3.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/4.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/5.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/6.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/7.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/8.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/9.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/10.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/11.jpg"></a>
                    </li>
                </ul>
            </div>
            <div id="closeBtn">CLOSE</div>
        </div>
        <script>
            //Note: this script should be placed at the bottom of the page, or after the slider markup. It cannot be placed in the head section of the page.
            let thumbs1 = document.getElementById("thumbnail-slider");
            let thumbs2 = document.getElementById("thumbs2");
            let closeBtn = document.getElementById("closeBtn");
            let slides = thumbs1.getElementsByTagName("li");
            for (let i = 0; i < slides.length; i++) {
                slides[i].index = i;
                slides[i].onclick = function (e) {
                    let li = this;
                    let clickedEnlargeBtn = false;
                    if (e.offsetX > 220 && e.offsetY < 25) clickedEnlargeBtn = true;
                    if (li.className.indexOf("active") != -1 || clickedEnlargeBtn) {
                        thumbs2.style.display = "block";
                        mcThumbs2.init(li.index);
                    }
                };
            }

            thumbs2.onclick = closeBtn.onclick = function (e) {
                //This event will be triggered only when clicking the area outside the thumbs or clicking the CLOSE button
                thumbs2.style.display = "none";
            };
        </script>
    </div>
    <!-- END OF IMAGE SLIDER -->

    <section class="middle">
        <div class="movies">
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
                <button id="modal_show" class="review">Read Reviews</button>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
        </div>

    </section>
    <div id="modal" class="modal">
        <div class="modal-top">
            <div class="modal-img">
                <img src="images/movie-placeholder.png" alt="">
            </div>
            <div class="modal-text">
                <h4>Movie Name</h4>
                <h4>Movie Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur dignissimos dolor, ea
                    impedit ipsum iure labore magni numquam tempora? Atque autem beatae eligendi eum fugiat ipsum
                    laudantium omnis totam.</p>
            </div>
        </div>
        <hr>
        <div class="movie-review">
            <div class="review-inner">
                 <pre id="review-text" class="review-text">
                <!-- This will come in dynamically from the database -->
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur dignissimos dolor, ea
                impedit ipsum iure labore magni numquam tempora? Atque autem beatae eligendi eum fugiat ipsum
                laudantium omnis totam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur dignissimos dolor, ea
                impedit ipsum iure labore magni numquam tempora? Atque autem beatae eligendi eum fugiat ipsum
                laudantium omnis totam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur dignissimos dolor, ea
                impedit ipsum iure labore magni numquam tempora? Atque autem beatae eligendi eum fugiat ipsum
                laudantium omnis totam.
            </pre>
                <p id="review-name">
                    <!-- This will come in dynamically from the database -->
                    Reviewers Name
                </p>
            </div>
        </div>

    </div>
</main>


<?php include_once 'partials/footer.php'; ?>
