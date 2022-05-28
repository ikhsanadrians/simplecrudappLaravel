


<?php $__env->startSection('content'); ?>

<div class="container">
    <h2>Create New Article</h2>
   <form action="<?php echo e(route('article.store')); ?>" method="POST" enctype="multipart/form-data">
    
       <?php echo $__env->make('articles.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

   </form>



</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelterbaru\CrudProject\resources\views/articles/create.blade.php ENDPATH**/ ?>