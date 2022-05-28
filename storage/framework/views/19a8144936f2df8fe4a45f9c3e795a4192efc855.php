<?php echo csrf_field(); ?>
<div class="mb-3">
 <label for="image" class="form-label">Thumbnail</label>
 <input type="file" class="form-control" name="image" id="image">
<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<small class="text-danger"><?php echo e($message); ?></small>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>


<div class="mb-3">
<label for="title" class="form-label">Title</label>

<input type="text" placeholder="" id="title" name="title" class="form-control" value="<?php echo e(old('title') ?? $article->title); ?>">
<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<small class="text-danger"><?php echo e($message); ?></small>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-3">
<label for="desription">Description</label>
<textarea name="description" id="description"  rows="10" class="form-control"><?php echo e(old('article') ?? $article->description); ?></textarea>        
<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<small class="text-danger"><?php echo e($message); ?></small>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>     
</div>

<button type="submit" class="btn btn-primary">Submit</button><?php /**PATH D:\laravelterbaru\CrudProject\resources\views/articles/partials/form.blade.php ENDPATH**/ ?>