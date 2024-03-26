<?php

/**
 * Template Name: Custom Template Home
 *
 * Description: A custom template for your content.
 */

get_header();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Hello, world!</title>
</head>

<body>
    <!--******************************************** section_One Started *******************************-->
    <?php
    $section_one_text_field_1 = get_field('section_one_text_field_1' , 'option');
    $section_one_text_field_2 = get_field('section_one_text_field_2' , 'option');
    $section_one_text_field_3 = get_field('section_one_text_field_3' , 'option');
    $img = get_field('img-top');
    ?>

    <section class="one_section">
        <video class="video_01" type="video" autoplay loop muted>
            <source src="<?php echo get_template_directory_uri() . '/imgs/bg_vid.mp4'; ?>">
            Your browser does not support the video tag.
        </video>
        <div class="container-fluid one_section_container">

            <div class="row one_section_one_row">


                <div class="col-12 one_section_first_coloum">
                    <!-- <img src="<?php echo get_template_directory_uri() . '/imgs/iknowyou.svg' ?>" alt=""> -->
                    <?php if ($img) {
                        // If the field returns the image URL directly
                        echo '<img src="' . esc_url($img) . '" alt="Image" />';

                        // If the field returns an image object (recommended)
                        // Replace 'thumbnail' with your desired image size
                        echo wp_get_attachment_image($img, 'thumbnail');
                    }
                    ?>
                </div>
                <div class="col-12 one_section_full ">
                    <div class="one_section_second_coloum">
                        <div>
                            <h1 class="one_section_first_heading"><?php echo $section_one_text_field_1  ?> </h1>
                            <h1 class="one_section_second_heading"><?php echo $section_one_text_field_2  ?></h1>

                            <p class="one_section_paragraph"><?php echo $section_one_text_field_3 ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--******************************************** section_One Ended*******************************-->





















    <!--******************************************** section_second Started *******************************-->
    <?php
    $section_two_text_field_1 = get_field('section_two_text_field_1' , 'option');
    $section_two_text_field_2 = get_field('section_two_text_field_2' , 'option');
    $section_two_text_field_3 = get_field('section_two_text_field_3' , 'option');
    ?>
    <div class="container-fluid section_second_container">
        <div class="row section_second_row">
            <div class="col-12 section_second_upper_col">
                <span class="section_second_span1"><?php echo $section_two_text_field_1 ?></span> <span class="section_second_span2"><?php echo $section_two_text_field_2 ?></span>
                <p class="section_second_p"><?php echo $section_two_text_field_3 ?></p>
            </div>

            <div class="container-fluid">
                <div class="row wooPosts_row">
                    <div class="col-12">
                        <div class="owl-carousel" id="slider-1-carousal">

                            <div >
                                <div>
                                <img src="<?php echo get_template_directory_uri() . '/imgs/bk1.png' ?>" alt="">
                                </div>
                                <div>
                                <?php
                                $file_array1 = get_field('file1'); // Get the ACF file field array

                                // Check if the file array is not empty and contains the URL
                                if (!empty($file_array1['url'])) {
                                    // Use the URL from the file array
                                    echo '<a class="read-more" href="' . esc_url($file_array1['url']) . '" download>Download File</a>';
                                } else {
                                    echo 'File not found.';
                                }
                                ?>
                                </div>
                            </div>

                            <div>
                                <img src="<?php echo get_template_directory_uri() . '/imgs/bk2.png' ?>" alt="">
                                <?php
                                $file_array2 = get_field('file2'); // Get the ACF file field array

                                // Check if the file array is not empty and contains the URL
                                if (!empty($file_array2['url'])) {
                                    // Use the URL from the file array
                                    echo '<a class="read-more" href="' . esc_url($file_array2['url']) . '" download>Download Filee</a>';
                                } else {
                                    echo 'File not found.';
                                }
                                ?>
                            </div>


                            <div>
                                <img  src="<?php echo get_template_directory_uri() . '/imgs/bk3.png' ?>" alt="">
                                <?php
                                $file_array3 = get_field('file3'); // Get the ACF file field array

                                // Check if the file array is not empty and contains the URL
                                if (!empty($file_array3['url'])) {
                                    // Use the URL from the file array
                                    echo '<a class="read-more" href="' . esc_url($file_array3['url']) . '" download>Download Filee</a>';
                                } else {
                                    echo 'File not found.';
                                }
                                ?>
                            </div>


                            <div>
                                <img src="<?php echo get_template_directory_uri() . '/imgs/bk4.png' ?>" alt="">
                                <?php
                                $file_array4 = get_field('file4'); // Get the ACF file field array

                                // Check if the file array is not empty and contains the URL
                                if (!empty($file_array4['url'])) {
                                    // Use the URL from the file array
                                    echo '<a class="read-more" href="' . esc_url($file_array4['url']) . '" download>Download Filee</a>';
                                } else {
                                    echo 'File not found.';
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--******************************************** section_second Ended *******************************-->






    <!--************************************************* third_section Started ************************-->


    <?php
    $section_three_text_field_1 = get_field('section_three_text_field_1' , 'option');
    $section_three_text_field_2 = get_field('section_three_text_field_2' , 'option');
    $section_three_text_field_3 = get_field('section_three_text_field_3' , 'option');
    $section_three_text_field_4 = get_field('section_three_text_field_4' , 'option');
    $section_three_text_field_5 = get_field('section_three_text_field_5' , 'option');
    $section_three_text_field_6 = get_field('section_three_text_field_6' , 'option');
    $section_three_text_field_7 = get_field('section_three_text_field_7' , 'option');
    $section_three_text_field_8 = get_field('section_three_text_field_8' , 'option');
    ?>

    <section class="third_section">
        <div class="container-fluid third_section_container">
            <div class="row third_section_row">
                <div class="col-6 left">
                    <div class="third_section_left_inside">
                        <span class="third_second_span1"><?php echo $section_three_text_field_1 ?> </span> <span class="third_second_span2"><?php echo $section_three_text_field_2 ?></span> <br>
                        <div class="third_section_2ndcontent">
                            <span><i class="fa-solid fa-check third_section_icon_tick"></i> <span class="third_section_left_icon_paara"><?php echo $section_three_text_field_3 ?></span> </span> <br>
                            <span><i class="fa-solid fa-check third_section_icon_tick"></i> <span class="third_section_left_icon_paara"><?php echo $section_three_text_field_4 ?></span> </span> <br>
                            <span><i class="fa-solid fa-check third_section_icon_tick"></i> <span class="third_section_left_icon_paara"><?php echo $section_three_text_field_5 ?></span> </span> <br>
                            <span><i class="fa-solid fa-check third_section_icon_tick"></i> <span class="third_section_left_icon_paara"><?php echo $section_three_text_field_6 ?></span> </span> <br>
                            <span><i class="fa-solid fa-check third_section_icon_tick"></i> <span class="third_section_left_icon_paara"><?php echo $section_three_text_field_7 ?></span> </span> <br>

                        </div>
                        <button href="#" type="submit" class="third_section_icon_button"><?php echo $section_three_text_field_8 ?></button>
                    </div>
                </div>
                <div class="col-6 vid">
                    <video class="video_02" type="video" autoplay loop muted>
                        <source src="<?php echo get_template_directory_uri() . '/imgs/bg_vid.mp4'; ?>">
                        Your browser does not support the video tag.
                    </video>
                    <!-- Your content goes here -->
                    <div class="content">
                        <div class="right_white"> <img src="<?php echo get_template_directory_uri() . '/imgs/white.png' ?>" alt=""> </div>
                        <div class="right_play"> <img src="<?php echo get_template_directory_uri() . '/imgs/play.png' ?>" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/*************************************************Third_section Ended ************************/-->






    <!--/*************************************************Fouth th section Started ************************/-->

    <?php
    $section_four_text_field_1 = get_field('section_four_text_field_1' , 'option');
    $section_four_text_field_2 = get_field('section_four_text_field_2' , 'option');
    $section_four_text_field_3 = get_field('section_four_text_field_3' , 'option');
    ?>

    <div class="container-fluid section_fourth_container " style="background-image: url('<?php echo get_template_directory_uri() . '/imgs/sect1.png' ?>');">
        <div class="row section_fourth_row">
            <div class="col-12">


                <div class="inside_section_fourth_img " style="background-image: url('<?php echo get_template_directory_uri() . '/imgs/sec2.png' ?>');">
                    <div class=" inside_section_fourth_2">
                        <span class="fourth_Section_s1"><?php echo $section_four_text_field_1 ?> </span> <span class="fourth_Section_s2"><?php echo $section_four_text_field_2 ?></span> <br>
                        <p class="fourth_second_p">
                            <?php echo $section_four_text_field_3 ?>
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!--/*************************************************Fouth th section Ended************************/-->





    <!--/*************************************************Fifth section Started ************************/-->

    <?php

    $section_five_text_field_1 = get_field('section_five_text_field_1' , 'option');
    $section_five_text_field_2 = get_field('section_five_text_field_2' , 'option');
    $section_five_text_field_3 = get_field('section_five_text_field_3' , 'option');
    ?>


    <div class="container-fluid Fifth_">
        <div class="row Fifth_row">
            <div class="col-6 ">
                <div class="Fifth_left">

                    <p class="Fifth_left_p1"><?php echo $section_five_text_field_1 ?></p>
                    <p class="Fifth_left_p2"><?php echo $section_five_text_field_2 ?></p>

                </div>
            </div>
            <div class="col-6">
                <div class="Fifth_right">
                    <span><input class="Fifth_input" type="email" placeholder="Your Email"></span>
                    <span><button href="#" type="submit" class="fifth_section_icon_button"><?php echo $section_five_text_field_3 ?></button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!--/*************************************************Fifth section Ended ************************/-->









    <!--/*************************************************Sixth section Started ************************/-->

    <section>
        <div class="container-fluid container-fluid_bg ">
            <div class="row post-grid_exp">
                <div class="col-12 col-lg-12 c">
                    <div class="owl-carousel" id="slider-4-exp">
                        <?php
                        // Query custom post type 'explore'
                        $args = array(
                            'post_type' => 'explore',
                            'posts_per_page' => -1,
                        );

                        $explore_query = new WP_Query($args);

                        // Check if any posts are found
                        if ($explore_query->have_posts()) {
                            // Loop through each post
                            $post_ids = array(); // Store post IDs to avoid duplication
                            while ($explore_query->have_posts()) {
                                $explore_query->the_post();

                                // Get the post ID
                                $post_id = get_the_ID();

                                // Check if this post has been displayed before
                                if (in_array($post_id, $post_ids)) {
                                    continue; // Skip this post if it has already been displayed
                                }

                                // Add the post ID to the array
                                $post_ids[] = $post_id;

                                // Get ACF fields for each post
                                $tags = get_field('tags');
                                $job = get_field('job');
                                $image = get_field('img');
                        ?>
                                <div class="card transparent-border mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img class="card-img-top" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title_attribute(); ?>" />
                                        <?php endif; ?>
                                        <div class="card-body">
                                            <p class="exp_content"><?php the_content(); ?></p>
                                            <p class="exp_tags" style=" background-color: white;"><?php echo $tags; ?></p>

                                            <div class="exp_flex">
                                                <span>
                                                    <?php if ($image) : ?>
                                                        <img class="fec" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="custom-thumbnail" />
                                                    <?php endif; ?>
                                                </span>
                                                <span class="exp_span">
                                                    <span class="exp_title" style=" background-color:white;"><?php the_title(); ?></span><br>
                                                    <span class="exp_tags" style="color: black;"><?php echo $job; ?></span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        <?php
                            }
                            // Restore original post data
                            wp_reset_postdata();
                        } else {
                            echo '<p>No posts found</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



































    <!--/*************************************************Sixth section Ended ************************/-->


    <?php
    get_footer();
    ?>