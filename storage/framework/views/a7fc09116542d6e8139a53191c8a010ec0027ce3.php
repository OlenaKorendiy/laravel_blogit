    
    <?php $__env->startSection('content'); ?>

        <section id="hero" class="s-hero">

            <div class="s-hero__slider">
                <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="s-hero__slide">

                        <div class="s-hero__slide-bg" style="background-image: url('images/<?php echo e($post->image); ?>');"></div>

                        <div class="row s-hero__slide-content animate-this">
                            <div class="column">
                                <div class="s-hero__slide-meta">
                                    <span class="cat-links">
                                     <a href="#"><?php echo e($categories->first()->title); ?></a>
                                    </span>
                                    <span class="byline">
                                        Автор
                                        <span class="author">
                                            <a href="#"><?php echo e($post->user->name); ?></a>
                                        </span>
                                    </span>
                                </div>
                                <h1 class="s-hero__slide-text">
                                    <a href="<?php echo e(route('posts.view', $post->id)); ?>">
                                        <?php echo e($post->title); ?>

                                    </a>
                                </h1>
                            </div>
                        </div>

                    </div> <!-- end s-hero__slide -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <div class="nav-arrows s-hero__nav-arrows">
                    <button class="s-hero__arrow-prev">
                        <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                            <path d="M1.5 7.5l4-4m-4 4l4 4m-4-4H14" stroke="currentColor"></path>
                        </svg>
                    </button>
                    <button class="s-hero__arrow-next">
                        <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                            <path d="M13.5 7.5l-4-4m4 4l-4 4m4-4H1" stroke="currentColor"></path>
                        </svg>
                    </button>
                </div> <!-- end s-hero__arrows -->

        </section> <!-- end s-hero -->

        <section class="s-content s-content--no-top-padding">

            <div class="s-bricks">

                <div class="masonry">
                    <div class="bricks-wrapper h-group">

                        <div class="grid-sizer"></div>

                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="brick entry" data-aos="fade-up">

                                <div class="entry__thumb">
                                    <a href="<?php echo e(route('posts.view', $post->id)); ?>" class="thumb-link">
                                        <img src="<?php echo e(asset('images/' . $post->image)); ?>" alt="">
                                    </a>
                                </div> <!-- end entry__thumb -->

                                <div class="entry__text">
                                    <div class="entry__header">
                                        <h1 class="entry__title"><a
                                                href="<?php echo e(route('posts.view', $post->id)); ?>"><?php echo e($post->title); ?></a></h1>

                                        <div class="entry__meta">
                                            <span class="byline">Від:
                                                <span class='author'>
                                                    <a href="#"><?php echo e($post->user->first()->name); ?></a>
                                                </span>
                                            </span>
                                            <!-- <span class="cat-links">
                                                <a href="#"><?php echo e($categories->first()->title); ?></a>
                                            </span> -->
                                        </div>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p>
                                            <?php echo e($post->excerpt); ?>

                                        </p>
                                    </div>
                                    <a class="entry__more-link" href="<?php echo e(route('posts.view', $post->id)); ?>">Читати далі...</a>
                                </div> <!-- end entry__text -->

                            </article> <!-- end article -->

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div> <!-- end brick-wrapper -->

                </div> <!-- end masonry -->

            </div> <!-- end s-bricks -->

        </section> <!-- end s-content -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\blog-main\resources\views/front/index.blade.php ENDPATH**/ ?>