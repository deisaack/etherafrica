<?php $__env->startSection('content'); ?>
<!-- Blog-area -->
    <section class="section-padding" id="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h2 class="title">Latest Blog</h2>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 wow fadeInUp">
                    <div class="blog-box">
                        <div class="blog-image">
                            <img src="images/blog-md-2.jpg" alt="">
                        </div>
                        <div class="blog-details">
                            <h4><a href="#">Business Consultance Meetup, 10 Jan, 2016</a></h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="blog-lists">
                      <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogger): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                        <div class="blog-list wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-list-image">
                                <img src="<?php echo e(asset('images/pictures/small/'.$blogger->image)); ?>" alt="">
                            </div>
                            <h5><a href="#"><?php echo e($blogger->blog_name); ?></a></h5>
                            <div class="blog-list-meta"> <i class="icofont icofont-ui-calendar"></i><?php echo e($blogger->date); ?></div>
                            <p><?php echo e($blogger->description); ?>.</p>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Blog-area / -->
 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.front_design', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>