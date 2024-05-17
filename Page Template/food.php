<?php
/**
 * Template Name: Food Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @since Twenty Twenty 1.0
 */?>

 
<?php get_header(); ?>
<body class="inner-page our-food-page">

<?php get_template_part('template-parts/header-template-inner'); ?>
<div class="inner-top wf-section">
<?php 
			    $banner_sec = get_field('banner_food');
                $banner_image = $banner_sec['background_image'];
			    $banner_title = $banner_sec['banner_title'];
                ?>
    <div class="bg-image-top visibility-both"  style="background-image: url('<?php echo $banner_image['url']; ?>');"></div>
        <div class="dark-overlay visibility-both"  style="opacity: 0.31;"></div>
        <div class="visibility-both h-100">
          <div class="h-100 w-container">
            <h2 class="top-inner-heading fade-in"><?php echo $banner_title; ?></h2>
          </div>
        </div>
      
    

</div>

<div class="pattern-bg px-30 wf-section">
    <div class="pattern-bg-bg"></div>
    <div class="mw-1360 py30 w-container">
    <?php if(have_rows('services_flexible_layout')):?>
				<?php while(have_rows('services_flexible_layout')): the_row();?>
				
				<?php
				if(get_row_layout() == 'content_with_left_image'): ?>
        <div class="our-food-item">
            <div class="columns w-row">
                <div class="column-3 w-col w-col-6 w-col-medium-6 w-col-small-small-stack">
                  <div class="chicken-animation">
                    <div class="highlight"></div>
                    <?php $left_img = get_sub_field('image');?>
                    <img src="<?php echo $left_img['url'];?>" alt="" class="psp-img">
                  </div>
                </div>
                <div class="column w-col w-col-6 w-col-medium-6 w-col-small-small-stack">
                    <h3 class="of-heading slide-in-bottom"><?php the_sub_field('heading');?></h3>
                    <div class="of-text slide-in-bottom-200ms"><?php the_sub_field('paragraph');?></div>
                </div>
            </div>
        </div>
        <?php
				elseif(get_row_layout() == 'content_with_right_image'): ?>
        <div class="our-food-item">
            <div class="columns-2 w-row">
                <div class="column-5 w-col w-col-7">
                    <h3 class="of-heading slide-in-bottom"><?php the_sub_field('heading');?></h3>
                    <div class="of-text slide-in-bottom-200ms"><?php the_sub_field('paragraph');?></div>
                </div>
                <div class="column-2 w-col w-col-5">
                <div class="psp-img-animation">
                        <div class="highlight"></div>
                        <?php $right_img = get_sub_field('image');?>
                        <img src="<?php echo $right_img['url'];?>" alt="" class="psp-img">
                    </div>
                </div>
            </div>
        </div>
        <?php
				elseif(get_row_layout() == 'content_with_left2_image'): ?>
        <div class="our-food-item last">
            <div class="columns-3 w-row">
                <div class="column-4 w-col w-col-5">
                <div class="fruits-animation">
                        <div class="highlight"></div>
                        <?php $lr_img = get_sub_field('image');?>
                        <img src="<?php echo $lr_img['url'];?>" alt="" class="fruits-img">
                    </div>
                </div>
                <div class="column-6 w-col w-col-7">
                    <h3 class="of-heading slide-in-bottom"> <?php the_sub_field('heading');?></h3>
                    <div class="of-text slide-in-bottom-200ms"><?php the_sub_field('paragraph');?></div>
                </div>
            </div>
        </div>
        <?php endif;?>
				<?php endwhile;?>
			<?php endif;?>
    </div>
</div>
<a href="#" class="cd-top text-replace js-cd-top"></a>
<?php get_footer(); ?>