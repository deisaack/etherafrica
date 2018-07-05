<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?php echo e(url('/admin/dashboard')); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Info</span> <span class="   label label-important"></span></a>
      <ul>
        <li><a href="<?php echo e(url('/admin/headerinfo/about')); ?>">About Us</a></li>
        <li><a href="<?php echo e(url('/admin/headerinfo/view_about')); ?>">View About-us Message</a></li>
        <li><a href="<?php echo e(url('/admin/headerinfo/home')); ?>">Homepage Info</a></li>
        <li><a href="<?php echo e(url('/admin/headerinfo/view_homeinfo')); ?>">View Homepage Info</a></li>
        <li><a href="<?php echo e(url('/admin/headerinfo/team')); ?>">EtherAfrica Team</a></li>
        <li><a href="<?php echo e(url('/admin/headerinfo/view_team')); ?>">Check Team</a></li>
      </ul>
    </li> 
     <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Blogs</span> <span class="   label label-important"></span></a>
      <ul>
        <li><a href="<?php echo e(url('/admin/add_blog')); ?>">Add blog</a></li>
        <li><a href="<?php echo e(url('/admin/headerinfo/view_blogs')); ?>">View Blogs</a></li>
      </ul>
      </li> 
  </ul>
</div>
<!--sidebar-menu-->
