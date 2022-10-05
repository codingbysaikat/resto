<?php
/*
*Template Name: about

*/
if(!is_front_page()){
    get_header();
}
$page_details = get_pages( array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'hierarchical' => 0,
    'meta_value' => 'template-parts/about.php'
   ));
   
$title;
$content;
foreach ( $page_details as $value ) {
        $title = $value->post_title;
        $content = $value->post_content;
     }

?>
<section id="gtco-welcome" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/hero-2.jpg'?>);">
                    
                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">
                        <span class="subheading">
                            About
                        </span>
                        <h2>
                            <?php echo $title ;?>
                        </h2>
                    </div>
                    <div class="pl-lg-5 ml-md-5">
                        <p><?php $strriped_content = strip_tags($content); echo $strriped_content  ?></p>
                        <h3 class="mt-5">Special Recipe</h3>
                        <div class="row">
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="<?php echo get_template_directory_uri().'/assets/img/hero-1.jpg'?>" />
                                    <h6>Australian Organic Beef</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="<?php echo get_template_directory_uri().'/assets/img/hero-1.jpg'?>" />
                                    <h6>Australian Organic Beef</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="<?php echo get_template_directory_uri().'/assets/img/hero-1.jpg'?>"/>
                                    <h6>Australian Organic Beef</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
if(!is_front_page()){
get_footer();
}

?>