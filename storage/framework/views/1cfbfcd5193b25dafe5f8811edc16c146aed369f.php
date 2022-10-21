　　
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Original Brand レビュー</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <title>OBMR</title>
</head>
<body>
  <H1>検索結果</H1>
  <p>検索キーワード：<?php echo e($search); ?></p> 
<?php if(!$keywords->isEmpty()): ?>
<table>
    <th>商品ID</th><th>商品名</th><th>内容</th>
  <?php $__currentLoopData = $keywords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($keyword->id); ?></td>
    <td><?php echo e($keyword->title); ?></td>
    <td><?php echo e($keyword->body); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php echo e($keywords->appends(Request::only('keyword'))->links()); ?>

  </table>
<?php else: ?>　
   <p>該当する検索結果は存在しません</p>
   <form  method="GET" action="/search">
       <input type="text" name="keyword">
       <input type="submit" value="検索">
   </form>
<?php endif; ?>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/posts/result.blade.php ENDPATH**/ ?>