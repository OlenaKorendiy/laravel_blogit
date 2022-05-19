<?php $__env->startSection('content'); ?>

    <section class="s-content">

        <div class="row">
            <div class="column large-12">

                <article class="s-content__entry format-standard">

                    <div class="s-content__media">
                        <div class="s-content__post-thumb text-center">
                            <img src="<?php echo e(asset('images/' . $post->image)); ?>" alt="">
                        </div>
                    </div> <!-- end s-content__media -->

                    <div class="s-content__entry-header">
                        <h1 class="s-content__title s-content__title--post"><?php echo e($post->title); ?></h1>
                    </div> <!-- end s-content__entry-header -->

                    <div class="s-content__primary">

                        <div class="s-content__entry-content">

                            <p class="lead">
                                <?php echo e($post->body); ?>

                            </p>


                        </div> <!-- end s-entry__entry-content -->

                        <div class="s-content__entry-meta">

                            <div class="entry-author meta-blk">
                                <div class="byline">
                                    <span class="bytext">Автор</span>
                                    <a href="#"><?php echo e($post->user->name); ?></a>
                                </div>
                            </div>
                            <div class="meta-bottom">
                                <div class="entry-tags meta-blk">
                                    <span class="tagtext">Категорії</span>
                                     <!-- <a href="<?php echo e(route('categories.view', $categories->first()->id)); ?>"><?php echo e($categories->first()->title); ?></a>  -->
                                </div>

                            </div>

                        </div> <!-- s-content__entry-meta -->

                        <div class="s-content__pagenav">
                            <?php if($post->previousPost()): ?>
                                <div class="prev-nav">
                                    <a href="<?php echo e(route('categories.view', $categories->first()->id)); ?>" rel="prev">
                                    <?php echo e($post->previousPost()->title); ?>

                                    <span>Попередній</span>
                                        
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if($post->nextPost()): ?>
                                <div class="next-nav">
                                    <a href="<?php echo e(route('categories.view', $categories->first()->id)); ?> }}" rel="next">
                                        <span>Наступний</span>
                                        <?php echo e($post->nextPost()->title); ?>

                                    </a>
                                </div>
                            <?php endif; ?>
                        </div> <!-- end s-content__pagenav -->

                    </div> <!-- end s-content__primary -->
                </article> <!-- end entry -->

            </div> <!-- end column -->
        </div> <!-- end row -->
    </section> <!-- end s-content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.innerFront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\blog-main\resources\views/front/posts/show.blade.php ENDPATH**/ ?>