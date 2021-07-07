<?php 

    get_header();

    $names = array('Brad','John','Jane', "Meowsalot");

    $count = 0;

    while($count < count($names)){
        echo "<li>$names[$count]</li>";
        $count++;
    }

    while(have_posts()){
        // 
        the_post(); ?>
<h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
<?php the_content();?>
<hr>
<?php }

        get_footer();
?>