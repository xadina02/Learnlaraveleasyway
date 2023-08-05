<?php $__env->startSection('content'); ?>

    <div class="p-5 bg-dark">
    <h1 class="text-white p-2">Creating Student...</h1>
    <?php echo e($errors); ?>

        <form class="bg-white p-4" method="POST" action="<?php echo e(route('student.store')); ?>">
        <?php echo csrf_field(); ?>
            <div class="form-group mb-4">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Type name">
            </div>
            <div class="form-group mb-4">
                <label for="">Score</label>
                <input type="number" class="form-control" name="score" placeholder="Score">
            </div>
            <div class="form-group mb-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/learnlaraveleasyway/welcome-project/resources/views/students/create.blade.php ENDPATH**/ ?>