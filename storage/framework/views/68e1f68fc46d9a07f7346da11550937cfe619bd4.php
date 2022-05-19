<?php if(session()->has('updatePostSuccess')): ?>
    <?php $__env->startSection('alerts'); ?>
        <div class="alert alert-success alert-dismissible fade show light-green" role="alert">
            <?php echo session('updatePostSuccess'); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-sm-6">
        <h1 class="m-0">Адмінпанель</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Головна</a></li>
            <li class="breadcrumb-item active">Редагувати пост</li>
        </ol>
    </div><!-- /.col -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="<?php echo e(route('posts.update', $post->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Головна</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Назва поста</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="<?php echo e($post->title); ?>">
                            </div>
                            <div class="form-group">
                                <label for="resume">Витяг поста</label>
                                <textarea id="resume" name="excerpt" class="form-control"
                                    rows="3"><?php echo e($post->excerpt); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="body">Опис поста</label>
                                <textarea id="body" name="body" class="form-control"
                                    rows="5"><?php echo e($post->excerpt); ?></textarea>
                            </div>
                            <div class="image-preview">
                                <img src="<?php echo e(asset('images/' . $post->image)); ?>" alt="">
                            </div>
                            <div class="form-group">
                                <label for="image">Нове зображення</label>
                                <input type="file" name="image" class="form-control-file" id="image" >
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Додатково</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category">Категорії</label>
                                <select id="category" name="category" class="form-control custom-select">
                                    <option disabled>Оберіть категорію</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"
                                            <?php echo e($category->id == $categories->first()->id ? 'selected' : ''); ?>>
                                            <?php echo e($category->title); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="<?php echo e(route('posts.index', $post->id)); ?>" class="btn btn-secondary">Вийти</a>
                    <input type="submit" value="Зберегти зміни" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\blog-main\resources\views/back/posts/edit.blade.php ENDPATH**/ ?>