<?php if(session()->has('addPostSuccess')): ?>
    <?php $__env->startSection('alerts'); ?>
        <div class="alert alert-success alert-dismissible fade show light-green" role="alert">
            <?php echo session('addPostSuccess'); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-sm-6">
        
        <a class="btn btn-success" href="<?php echo e(route('categories.create')); ?>">
           Створити нову категорію
        </a>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Головна</a></li>
            <li class="breadcrumb-item active">Категорії</li>
        </ol>
    </div><!-- /.col -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Категорії</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 60%">
                                Назва Категорії
                            </th>
                            <th style="width: 39%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    #
                                </td>
                                <td>
                                    <a>
                                        <?php echo e($category->title); ?>

                                    </a>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="<?php echo e(route('categories.edit', $category->id)); ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редагувати
                                    </a>
                                    <form class="deletion-form" action="<?php echo e(route('categories.destroy', $category->id)); ?>"
                                        method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm show-alert">
                                            <i class="fas fa-trash">
                                            </i>
                                            Видалити
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
    <script>
        // show alert before deleting post
        $('.show-alert').on('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Ви впевнені?',
                text: "Ви не зможете повернути це!",
                icon: 'обережно',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Так, видалити!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('.deletion-form').submit();
                }
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\blog-main\resources\views/back/categories/index.blade.php ENDPATH**/ ?>