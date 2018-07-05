<?php $__env->startSection('content'); ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">About Us</a> <a href="#" class="current">Comment about the organisation</a> </div>
    <h1>Comments</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Organization Comments</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="<?php echo e(url('/admin/homepage')); ?>" name="homepage" id="homepage" novalidate="novalidate">
              <?php echo e(csrf_field()); ?>

              <div class="control-group">
                <label class="control-label">Heading</label>
                <div class="controls">
                  <input type="text" name="heading" id="heading">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Comment(s)</label>
                <div class="controls">
                  <textarea type="text" name="description" id="description"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Submit" class="btn btn-success">
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