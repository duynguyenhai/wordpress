<?php
    get_header(); ?>
            <div class="content-main">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()) : the_post();?>
                    <div <?php post_class() ?>>
                        <div class="post-single">
                            <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                            <div class="post-meta">
                                Đăng bởi <a href="<?php the_author_link();?>"><?php the_author();?></a> trong mục <?php the_category(', '); ?>
                            </div>
                            <div class="entry-content">
                                <?php the_content();?>
                            </div>
                        </div><!--end .post-info-->
                        <div class="comment-box">
                            <?php comments_template(); ?>
                        </div>
                    </div><!--end .post-->
                <?php endwhile; endif; //End Loop ?>
            </div><!--end .content-main-->
            <?php get_sidebar(); ?>
    <?php get_footer(); ?>
