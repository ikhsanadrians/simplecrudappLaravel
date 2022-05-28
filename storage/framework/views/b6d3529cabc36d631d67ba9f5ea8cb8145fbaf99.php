



<?php $__env->startSection('content'); ?>





<div class="container">
    <div class="row">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
        <div class="col-3 card m-1">
            <a href="<?php echo e(route('article.show',$article->id)); ?>">
            <div class="card-body">
  <h4 class="card-title"><?php echo e(Str::limit($article->title,50)); ?></h4>
  <p class="card-text"><?php echo e(Str::limit($article->description,100)); ?></p>
            </div>
        </a>
        </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelterbaru\CrudProject\resources\views/articles/index.blade.php ENDPATH**/ ?>