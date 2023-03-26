

<?php $__env->startSection('title'); ?>   
    Update Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 mx-auto">
            <br> <br>
            <form id="demo-form2" action="<?php echo e(route('updatePostComplete', [$result->id])); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="title" id="title" class="form-control" value="<?php echo e($result->title); ?>" required>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 ">
                        <textarea type="text" name="description" id="description" class="form-control" required><?php echo e($result->description); ?></textarea>
                    </div>
                </div>
                <div class="item form-group">
                    <label for="image" class="col-form-label col-md-3 col-sm-3 label-align">Image*</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="file" name="image" id="image" class="form-control" value="<?php echo e($result->image); ?>" required>
                    </div>
                </div>
                <div class="item form-group">
                    <label for="date" class="col-form-label col-md-3 col-sm-3 label-align">Date*</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="date" name="postDate" id="date" class="form-control" value="<?php echo e($result->postDate); ?>" required>
                    </div>
                </div>
            
                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="button">Cancel</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <br />
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Blog\resources\views/admin/updatePost.blade.php ENDPATH**/ ?>