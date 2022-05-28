

<?php $__env->startSection('content'); ?>
<div class="container">
    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteArticleModal">
        Delete
      </button>
           <a href="<?php echo e(route('article.edit',$article->id)); ?>" class="btn btn-success btn-sm">Edit</a>

      <div class="modal fade" id="deleteArticleModal">
         <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-body">
                       <p>Are you sure?</p>
                       <form action="<?php echo e(route('article.destroy',$article->id)); ?>" method="POST">
                        <?php echo method_field('DELETE'); ?>   
                        <?php echo csrf_field(); ?> 
                           
                             <button type="submit" class="btn btn-danger">Delete</button>

                       </form>
                   </div>
               </div>

         </div>

      </div>


<div class="mt-3">
    <img src="<?php echo e(asset('storage/' . $article->image)); ?>" alt="" class="img-fluid">
    <h1><?php echo e($article->title); ?></h1>
    <p><?php echo nl2br($article->description); ?></p>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelterbaru\CrudProject\resources\views/articles/show.blade.php ENDPATH**/ ?>