　　
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
        <link rel="stylesheet" href="<?php echo e(secure_asset('css/styles.css')); ?>">
    </head>
 <body>
        <div class="top">
         <img src="<?php echo e(asset('images/main.jpg')); ?>">
         </div>
         

    <div class=search_box>
          <form method="GET" action="/search">
        <input type="text" size="60" placeholder="商品名を入力" name="keyword" value="<?php if(isset($keyword)): ?> <?php endif; ?>">
       <input type="submit" value="検索">
     </form>
    </div>
     <?php if(auth()->guard()->check()): ?>
     <div class="create">
      <a class="create_new pushright" href="/posts/create"><span>商品新規追加</span></a>
    </div>
    <?php endif; ?>
<div class="name_boxes">
    <p>オリジナルブランド一覧</p>
    
     <a class="Top_Value pushright" href="/brandnames/1"><span>イオン：Top Value</span></a>
     
      <a href="/brandnames/2" class="Sselect pushright"><span>スギドラッグ：Sセレクト</span></a>
  
      <a href="brandnames/3" class="Coops pushright"><span>コープ：Coop's</span></a>
     
      <a href="" class="bothers pushright"><span>その他ブランド：その他商品</span></a>
</div>

<div class="category_boxes">
    <p>カテゴリ一覧</p>
    
     <a href="/categories/1" class="foods pushright"><span>食料品</span></a>
      
  　　<a  href="" class="papers pushright"><span>紙製品</span></a>

     <a href="" class="cleaners pushright"><span>掃除用品</span></a>
     
     <a href="" class="cothers pushright"><span>その他</span></a>
     
</div>

</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/posts/index.blade.php ENDPATH**/ ?>