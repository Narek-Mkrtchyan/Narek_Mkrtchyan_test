<?php
require_once 'header.php';
$blogs = new Blog();
$from_date = !empty($_POST['from_date']) ? $_POST['from_date'] : '';
$to_date = !empty($_POST['to_date']) ? $_POST['to_date'] : '';
$pages = $blogs->GetBlogs($from_date, $to_date);
?>
    <div class="wrapper">
        <div class="center posts_container flex_center">
            <?
            foreach ($pages as $row) { ?>
                <div class="posts">

                    <div class="info_posts">
                        <h3><a href="<?= $row['b_page_url'] ?>" target="_blank"><?= $row['b_title'] ?></a></h3>
                        <p>Author <span><?= $row['b_creator'] ?></span> </p>
                        <p>Scraped date <span> <?= $row['b_scrap_date'] ?></span></p>
                        <p>Article date <span><?= $row['b_created_date'] ?></span> </p>

                    </div>


                    <? if (!empty($row['b_image_src'])) { ?>
                        <img class="posts_photo" src="<?= $row['b_image_src'] ?>">
                    <? } ?>
                    <div class="description">
                        <p><?= $row['b_blog_text'] ?></p>
                    </div>

                </div>
            <? } ?>
        </div>
    </div>
<?php
require_once 'footer.php';