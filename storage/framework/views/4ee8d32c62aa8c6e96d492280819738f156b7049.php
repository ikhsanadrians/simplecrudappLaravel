


<?php $__env->startSection('content'); ?>

<div class="container">
    <h2>Edit This Article</h2>
<?php if(Session::has('success')): ?>
<div class="alert alert-success">
<?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?>

   <form action=<?php echo e(route('article.update',$article->id)); ?>"" method="POST" enctype="multipart/form-data">
    <?php echo method_field('PUT'); ?>
     <?php echo $__env->make('articles.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

   </form>



</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelterbaru\CrudProject\resources\views/articles/edit.blade.php ENDPATH**/ ?>