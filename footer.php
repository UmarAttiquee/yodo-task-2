<?php

wp_footer();

?>
<?php
$section_six_text_field_1 = get_field('section_six_text_field_1');
$img = get_field('img-top');
?>


<div class="container-fluid footer_container">
    <div class="row footer_row">
        <div class="col-4 footer_first_col">
        <?php if ($img) {
                        // If the field returns the image URL directly
                        echo '<img src="' . esc_url($img) . '" alt="Image" />';

                        // If the field returns an image object (recommended)
                        // Replace 'thumbnail' with your desired image size
                        echo wp_get_attachment_image($img, 'thumbnail');
                    }
                    ?>
        </div>
        <div class="col-4 footer_second_col">
            <?php
            echo $section_six_text_field_1;
            ?>
        </div>
        <div class="col-4 footer_third_col">

            <i class="icon1 fa-solid fa-x" style="color: #ffffff;"></i>
            <i class="icon2 fa-brands fa-twitter" style="color: #ffffff;"></i>
            <i class="icon3 fa-brands fa-facebook" style=""></i>
            <i class="icon4 fa-brands fa-instagram" style="color: #ffffff;"></i>
            <i class="icon5 icon5 fa-brands fa-youtube"></i>
            <i class="icon1 icon6 fa-brands fa-tiktok" style="color: #ffffff;"></i>

        </div>
    </div>
</div>



</body>

</html>