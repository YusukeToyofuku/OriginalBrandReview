　　
<?php $__env->startSection('content'); ?>
<!DOCTYPE HTML>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <title>OriginalBrandReview投稿</title>
        <link rel="stylesheet" href="<?php echo e(secure_asset('css/create.css')); ?>">
        
    </head>
    <body>
        <h1>商品内容投稿</h1>
        <form action="/posts" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="<?php echo e(old('post.title')); ?>"/>
                <p class="title__error" style="color:red"><?php echo e($errors->first('post.title')); ?></p>
            </div>
            <div class="image">
                <label>画像</label><br />
    <input type="file" name="image" accept="image/png, image/jpeg">
    <?php echo e(csrf_field()); ?>

            </div>
            <div class="body">
                <h2>内容</h2>
                <textarea name="post[body]" placeholder="レビュー内容"><?php echo e(old('post.body')); ?></textarea>
                <p class="body__error" style="color:red"><?php echo e($errors->first('post.body')); ?></p>
            </div>
            <div class="brandname">
    <h3>ブランド名</h>
    <select name="post[brandname_id]">
        <?php $__currentLoopData = $brandnames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brandname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($brandname->id); ?>"><?php echo e($brandname->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="category">
    <h3>商品種類</h>
    <select name="post[category_id]">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
            
            <input type="submit" value="投稿する"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/posts/create.blade.php ENDPATH**/ ?>