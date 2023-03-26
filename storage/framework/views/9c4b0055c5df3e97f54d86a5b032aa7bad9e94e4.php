

<?php $__env->startSection('title'); ?>
  View Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="right_col" role="main">
  <div class="row">
    <div class="col-sm-12 mx-auto">
      <br>
      <table class="table table-bordered table-hover text-center">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Date</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $postData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($values->title); ?></td>
              <td><?php echo e($values->description); ?></td>
              <td><?php echo e($values->postDate); ?></td>
              <td><?php echo e($values->image); ?></td>
              <td>
                <a class="btn btn-secondary" href="<?php echo e(route('updatePost', [$values->id])); ?>">Update</a>
                <a class="btn btn-secondary" href="<?php echo e(route('deletePost', [$values->id])); ?>">Delete</a>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
  <br />
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Blog\resources\views/admin/viewPost.blade.php ENDPATH**/ ?>