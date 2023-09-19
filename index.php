<?php get_header(); ?>
        <main class="main">
            <div class="container">
                <div class="main__title">
                <?php the_field('main__title') ?>
                </div>
                <div class="main__text">
                <?php the_field('main__text') ?>
                </div>
                <div class="main__img">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="img">
                </div>
                <div class="project">
                    <div class="project__title">
                        <?php the_field('project__title') ?>
                    </div>
                    
                    <?php $featured_posts = get_field('project__item'); 
                        if( $featured_posts ): ?>
                            <ul>
                                <?php foreach( $featured_posts as $post ): ?>
                                    <?php  setup_postdata($post); ?>
                                        <li class="project__item">
                                            <div class="project__name">
                                                <?php the_field('project__name') ?>
                                            </div>
                                            <div class="project__size">
                                                <?php the_field('project__size') ?>
                                            </div>
                                            <div class="project__area">
                                                <?php the_field('project__area') ?>
                                            </div>
                                            <div class="project__price">
                                                <?php the_field('project__price') ?>
                                            </div>
                                            <div class="project__images">
                                                <div class="project__images-item">
                                                
                                                    <img src=" <?php the_field('project__images-item-1') ?>" alt="project-1">
                                                </div>
                                                <div class="project__images-item">
                                                <img src=" <?php the_field('project__images-item-2') ?>" alt="project-2">
                                                </div>
                                            </div>
                                        </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php 
                            wp_reset_postdata(); ?>
                        <?php endif; ?>              
                <div class="download">
                    <img  src="<?php bloginfo( 'template_url' ); ?>/assets/img/home-download.png" alt="download">
                    <div class="download__link">
                        <a href="<?php the_field('download__link') ?>" download>СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
                    </div>
                </div>
                <div class="galery">
                    <div class="galery__title">
                    <?php the_field('galery__title') ?>
                    </div>
                    <div class="galery__text">
                    <?php the_field('galery__text') ?>
                    </div>
                    <div id="gallery__inner">
                        <?php the_field('photo') ?>
                    </div>
                    <div class="main__img">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="img">
                    </div>
                </div>
            </div>
        </main>
        <?php get_footer(); ?>
            