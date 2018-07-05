<?php $__env->startSection('content'); ?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Blog</a> <a href="#" class="current">Edit Blog</a> </div>
    <h1>Blog</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Blog</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="<?php echo e(url('/admin/edit_blog/'.$blogDetails->id)); ?>" name="edit_blog" id="edit_blog" novalidate="novalidate">
              <div class="control-group">
              	<?php echo e(csrf_field()); ?>

                <label class="control-label">Blog Name</label>
                <div class="controls">
                  <input type="text" name="blog_name" id="blog_name" value="<?php echo e($blogDetails->blog_name); ?>">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Date</label>
                <div class="controls">
                  <input type="date" name="date" id="date" value="<?php echo e($blogDetails->date); ?>" >
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea type="text" name="description" id="description"><?php echo e($blogDetails->description); ?></textarea>
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