<?php $__env->startSection('content'); ?>
    <section class="s-content">

        <div class="s-pageheader">
            <div class="row">
                <div class="column large-12">
                    <h1 class="page-title">
                        <span class="page-title__small-type">Категорії</span>
                        <?php echo e($category->title); ?>

                    </h1>
                </div>
            </div>
        </div>
        <div class="s-bricks s-bricks--half-top-padding">

            <div class="masonry">
                <div class="bricks-wrapper h-group">

                    <div class="grid-sizer"></div>
                    
                    <?php $__currentLoopData = $category->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    
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
                                    <span class="byline">By:
                                        <span class='author'>
                                            <a href="#"><?php echo e($post->user->name); ?></a>
                                        </span>
                                    </span>
                                    <span class="cat-links">
                                        <a href="#"><?php echo e($category->title); ?></a>
                                    </span>
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

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.innerFront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\blog-main\resources\views/front/categories/show.blade.php ENDPATH**/ ?>