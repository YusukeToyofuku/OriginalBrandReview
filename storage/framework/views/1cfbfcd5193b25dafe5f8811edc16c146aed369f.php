　　
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Original Brand レビュー</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(secure_asset('css/list.css')); ?>">
        <title>Result</title>
</head>
<body>
  <h1>検索結果</h1>
  <h1>検索キーワード：<?php echo e($search); ?></h1> 
<?php if(!$keywords->isEmpty()): ?>
<div class='lists'>
  <?php $__currentLoopData = $keywords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class='list'>
    　　<img src="<?php echo e($keyword->image_path); ?>">
                    <div class='content'>
                      <h2 class='title'><?php echo e($keyword->title); ?></h2>
                      <p class='body'><?php echo e($keyword->body); ?></p>
                    </div>
                    <div class='detail'>
                      <div class='brandname_name'>ブランド名<?php echo e($keyword->brandname->name); ?></div>
                      <div class='category_name'>カテゴリー名<?php echo e($keyword->category->name); ?></div>
                      <a class="btn pushdown" href="<?php echo e(route ('posts.show',['post'=>$keyword->id])); ?>"><span>レビューを閲覧・投稿</span></a>
                    </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>　
   <div>該当する検索結果は存在しません</div>
   <form  method="GET" action="/search">
       <input type="text" name="keyword">
       <input type="submit" value="検索">
   </form>
<?php endif; ?>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/posts/result.blade.php ENDPATH**/ ?>