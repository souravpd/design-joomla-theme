<?php
/**
 * @version     1.0
 * @package     mod_italiaJumbotron
 * @copyright   Copyright (C) 2019. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Sourav Prasad
 */
//No Direct Access
defined('_JEXEC') or die;
define('DS','/');
?>


<link rel="stylesheet" href="modules/mod_italiajumbotron/css/italia.min.css" type="text/css" />

<script type="text/javascript" src="modules/mod_italiajumbotron/js/italia.bundle.min.js"></script>
<style>
<?php if($foreground_image_width !='auto'|| $foreground_image_width !='') {
    $foreground_image_width=$foreground_image_width.'px';
}

?>.foreground_image {
    width: <?php echo $foreground_image_width;
    ?>
}

<?php if(isset($background_image) && $background_image !='') : ?>.it-hero-wrapper {
    background: url(<?php echo JURI::base();
    ?><?php echo $background_image;
    ?>) no-repeat <?php echo $x_pos;
    ?>px <?php echo $y_pos;
    ?>px;
}

<?php endif;

?><?php if( !isset($background_image) && isset($background_color)) : ?>.it-hero-wrapper {
    background: <?php echo $background_color;
    ?>
}

<?php endif;

?>.it-hero-wrapper h1 {
    color: <?php echo $headingtextcolor;
    ?>;
    <?php echo ($center_text==1 ? 'text-align:center;': '');
    ?>
}

.it-hero-wrapper p {
    color: <?php echo $paragraphtextcolor;
    ?>;
    <?php echo ($center_text==1 ? 'text-align:center;': '');
    ?>
}

.it-hero-wrapper .btn {
    color: #fff !important;
    <?php echo ($center_text==1 ? 'text-align:center;': '');
    ?>
}

.it-hero-wrapper .foreground_image_wrap {
    <?php echo ($center_text==1 ? 'text-align:center;': '');
    ?>
}
</style>
<div class="it-hero-wrapper <?php echo $moduleclass_sfx; ?>">
    <div class="container" style="padding:15px;">
        <div class="row">
            <div class="col-12">
                <h1 class="no_toc"><?php echo $header_text; ?></h1>
                <p class="d-none d-lg-block"><?php echo $paragraph_text; ?></p>
                <?php if(isset($foreground_image)) : ?>
                <p class="foreground_image_wrap"><img class="foreground_image"
                        src="<?php echo JURI::base(); ?><?php echo $foreground_image; ?>"
                        alt="<?php echo $header_text; ?>" /></p>
                <?php endif; ?>
                <?php if($show_read_more) : ?>
                <p><a class="<?php echo $buttonstyle; ?> it-btn-container" role="button"
                        href="<?php echo $read_more_link; ?>"><?php echo $read_more_text; ?></a></p>
                <?php endif; ?>
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.jumbotron -->