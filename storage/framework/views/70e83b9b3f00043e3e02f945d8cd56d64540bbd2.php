<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-sm-6">
        <h1 class="m-0">Адмінпанель</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Головна</a></li>
            <li class="breadcrumb-item active">Редагувати категорію</li>
        </ol>
    </div><!-- /.col -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="<?php echo e(route('categories.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Головна</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Назва категорії </label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="<?php echo e(route('categories.store')); ?>" class="btn btn-secondary" >Вийти</a>
                    <input type="submit" value="Редагувати" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\blog-main\resources\views/back/categories/create.blade.php ENDPATH**/ ?>