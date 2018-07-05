<?php $__env->startSection('content'); ?>

<div id="content">
  <div id=" content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Blogs</a> <a href="#" class="current">Add Blog</a> </div>
    <h1>Blogs</h1>
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
            <h5>Add Blog</h5>
          </div>
          <div class="widget-content nopadding">
            <form  enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo e(url('/admin/add_blog')); ?>" name="add_blog" id="add_blog" novalidate="novalidate">
              <?php echo e(csrf_field()); ?>

              <div class="control-group">
                <label class="control-label">Blog Name</label>
                <div class="controls">
                  <input type="text" name="blog_name" id="blog_name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Pick Date</label>
                <div class="controls">
                  <input type="date" name="date" id="date">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Summary</label>
                <div class="controls">
                  <input type="text" name="summary" id="summary">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Blog" class="btn btn-success">
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