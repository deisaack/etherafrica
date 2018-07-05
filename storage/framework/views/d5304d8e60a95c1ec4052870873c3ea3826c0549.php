<?php $__env->startSection('content'); ?>

<div id="content">
  <div id=" content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">About Us</a> <a href="#" class="current">Add Organization Details</a> </div>
    <h1>About Us</h1>
    <?php if(Session::has('flash_message_error')): ?>
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong><?php echo session('flash_message_error'); ?></strong>
            </div>        
        <?php endif; ?>
        <?php if(Session::has('flash_message_success')): ?>
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong><?php echo session('flash_message_success'); ?></strong>
            </div>        
        <?php endif; ?>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>What is the company about</h5>
          </div>
          <div class="widget-content nopadding">
            <form  enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo e(url('/admin/headerinfo/about')); ?>" name="about" id="about" novalidate="novalidate">
              <?php echo e(csrf_field()); ?>

              <div class="control-group">
                <label class="control-label">Heading</label>
                <div class="controls">
                  <input type="text" name="heading" id="heading">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Mission</label>
                <div class="controls">
                  <textarea name="mission" id="mission"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Vision</label>
                <div class="controls">
                  <textarea name="vision" id="vision"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Support</label>
                <div class="controls">
                  <textarea name="support" id="support"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Member" class="btn btn-success">
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