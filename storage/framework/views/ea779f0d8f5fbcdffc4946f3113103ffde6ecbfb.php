<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="#">Головна</a></li>
    <li class="breadcrumb-item active">Адмінпанель</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h4>Ласкаво просимо, <?php echo e(auth()->user()->name); ?></h4>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\blog-main\resources\views/back/dashboard.blade.php ENDPATH**/ ?>