<?php $__env->startSection('content'); ?>
    <h3>Welcome to students details</h3>
    <p>We are returning the student of ID <?php echo e($studentId); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/learnlaraveleasyway/example-app/resources/views/studentsdetails.blade.php ENDPATH**/ ?>