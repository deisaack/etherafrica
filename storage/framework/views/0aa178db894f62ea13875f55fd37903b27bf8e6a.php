<?php $__env->startSection('content'); ?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Home Details</a> <a href="#" class="current">Edit Home Details</a> </div>
    <h1>Home Details</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Home Details</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="<?php echo e(url('/admin/edit_home/'.$homeDetails->id)); ?>" name="edit_home" id="edit_home" novalidate="novalidate">
              <div class="control-group">
              	<?php echo e(csrf_field()); ?>

                <label class="control-label">Heading</label>
                <div class="controls">
                  <input type="text" name="heading" id="heading" value="<?php echo e($homeDetails->heading); ?>">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea type="text" name="description" id="description"><?php echo e($homeDetails->description); ?></textarea>
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                  <input type="hidden" name="image" value="<?php echo e($homeDetails->image); ?>">
                  <?php if(!empty($homeDetails->image)): ?>
                  <img style="width::10px; height: 40px;" src="<?php echo e(asset('/images/home/small/'.$homeDetails->image)); ?>"><a href="<?php echo e(url('/admin/delete_home_image/'.$homeDetails->id)); ?>">Delete</a>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Edit Category" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.admin_design', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>