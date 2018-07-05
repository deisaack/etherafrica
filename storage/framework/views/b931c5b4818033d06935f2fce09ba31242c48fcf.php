<?php $__env->startSection('content'); ?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Team</a> <a href="#" class="current">Your Team</a> </div>
    <h1>Team</h1>
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
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Your Team</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Memeber ID</th>
                  <th>Member Name</th>
                  <th>description</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="gradeX">
                  <td><?php echo e($team->id); ?></td>
                  <td><?php echo e($team->name); ?></td>
                  <td><?php echo e($team->description); ?></td>
                  <td>
                    <?php if(!empty($team->image)): ?>
                      <img src="<?php echo e(asset('/images/pictures/small/'.$team->image)); ?>" style="width:60px;">
                    <?php endif; ?>
                  </td>
                  <td class="center">
                    <a href="<?php echo e(url('/admin/edit_team/'.$team->id)); ?>" class="btn btn-primary btn-mini">Edit</a> 
                    <a <?php /*id="delCat" href="{{url('/admin/delete_category/'.$category->id)}}" */?> rel ="<?php echo e($team->id); ?>" rel1 = "delete_team" href = "javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.admin_design', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>