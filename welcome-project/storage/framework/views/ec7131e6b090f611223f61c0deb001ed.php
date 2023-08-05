<?php $__env->startSection('content'); ?>
<div class="text-center p-4 m-0">
    <h1>Class List from Controller</h1>
</div>
    <div class="p-4 pt-0">
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="p-4 bg-info mb-2">
            <p> 
                <?php echo e($student['id']); ?>. 
                <?php echo e($student['name']); ?> 
                <a href="<?php echo e(route('studentdetails', ['id' => $student['id']])); ?>">details</a> 
            </p>

            <p>
                <?php if($student['score'] >= 30): ?>
                <span class="text-success">Congratulations my friend you scored <?php echo e($student['score']); ?> which is a pass mark</span>
                <?php else: ?>
                <span class="text-danger">Oops sorry, you scored <?php echo e($student['score']); ?> which is a fail mark</span>
                <?php endif; ?>
            </p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<!-- <h2>Static Class List</h2>
        <ol>
            <li>Mosongo Adina <a href="<?php echo e(route('studentdetails', ['id' => 11])); ?>">details</a></li>
            <li>Formasit Chijoh <a href="<?php echo e(route('studentdetails', ['id' => 12])); ?>">details</a></li>
            <li>Fongoh Martin <a href="<?php echo e(route('studentdetails', ['id' => 13])); ?>">details</a></li>
            <li>Ndalegh Noela <a href="<?php echo e(route('studentdetails', ['id' => 14])); ?>">details</a></li>
            <li>Nkwetakem Bruno <a href="<?php echo e(route('studentdetails', ['id' => 15])); ?>">details</a></li>
            <li>Mbi-Enow Appelgryn <a href="<?php echo e(route('studentdetails', ['id' => 16])); ?>">details</a></li>
        </ol> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/learnlaraveleasyway/welcome-project/resources/views/students.blade.php ENDPATH**/ ?>