　　
<?php $__env->startSection('content'); ?>
<!DOCTYPE HTML>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <title>OriginalBrandReview商品投稿画面</title>
        <link rel="stylesheet" href="<?php echo e(secure_asset('css/create.css')); ?>">
        
    </head>
<body>
<h1>商品内容投稿画面</h1>
<div class="posts">
<form action="/posts/store" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
<div class="image">
    <h3>画像選択:&nbsp;</h3>
    <input type="file" name="image" accept="image/png, image/jpeg">
    <?php echo e(csrf_field()); ?>

</div>

 <div class="title">
    <h3>商品名入力:&nbsp;</h3>
    <input type="text" name="post[title]" placeholder="商品名" value="<?php echo e(old('post.title')); ?>"/>
    <p class="title__error" style="color:red"><?php echo e($errors->first('post.title')); ?></p>
 </div>
 <div class="body">
    <h3>商品概要入力</h3>
    <textarea name="post[body]" placeholder="商品概要"><?php echo e(old('post.body')); ?></textarea>
    <p class="body__error" style="color:red"><?php echo e($errors->first('post.body')); ?></p>
 </div>

 <div class="brandname">
    <h3>ブランド名:&nbsp;</h3>
    <select name="post[brandname_id]">
        <?php $__currentLoopData = $brandnames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brandname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($brandname->id); ?>"><?php echo e($brandname->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
 </div>
 <div class="category">
    <h3>商品カテゴリー:&nbsp;</h3>
    <select name="post[category_id]">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
 </div>
</div>
            <div class='caution'>※商品名と商品概要は必ず入力してください。</div>
            <input type="submit" class='submission' value="上記内容で投稿する"/>
</form>

        <div class="back">[<a href="/">トップページに戻る</a>]</div>
    </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/posts/create.blade.php ENDPATH**/ ?>