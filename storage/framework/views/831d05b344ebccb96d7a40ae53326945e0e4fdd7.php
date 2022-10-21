　　
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <title>Topvalue</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>TopValue</h1>
        <div class='posts'>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class='post'>
                    <h2 class='title'><?php echo e($post->title); ?></h2>
                    <p class='body'><?php echo e($post->body); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class='paginate'>
            <?php echo e($posts->links()); ?>

        </div>
        <h2 class='title'>
    <a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a>
</h2>
    </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/posts/topvalue.blade.php ENDPATH**/ ?>