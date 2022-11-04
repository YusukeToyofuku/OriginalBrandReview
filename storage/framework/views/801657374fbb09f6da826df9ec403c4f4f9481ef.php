　　
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
        
   <link rel="stylesheet" href="css/styles.css">

    </head>
 <body>
        <div class="title">
         <span>Original Brand レビュー</span>
         </div>
         
        <div class="square"></div>
        
    <div class=search_box>
          <form method="GET" action="/search">
        <input type="text" size="60" placeholder="商品名を入力" name="keyword" value="<?php if(isset($keyword)): ?> <?php endif; ?>">
       <input type="submit" value="検索">
     </form>
    </div>
     <?php if(auth()->guard()->check()): ?>
      <a class="Link" href="/posts/create">
       <div class=create_new>商品新規追加</div>
      </a>
    <?php endif; ?>
<div class="name_boxes">
    <p>オリジナルブランド一覧</p>
    
     <a href="/brandnames/1"> 
     <div class="Top_Value">イオン：Top Value </div>
     </a>
 
      <a href="/brandnames/2">
       <div class="Sselect">スギ薬局：Sセレクト</div>
       </a>
  
      <a href="brandnames/3" >
       <div class="Coops">コープ：Coop's</div>
      </a>
     
      <a href="" >
       <div class="bothers">その他ブランド：その他商品</div>
      </a>
</div>

<div class="category_boxes">
    <p>カテゴリ一覧</p>
    
      <a href="/categories/1">
      <div class="foods">食料品</div>
      </a>
      
  　　<a href="">
     <div class="papers">紙製品</div>
     </a>
 　　　
 　　　 <a href="">
     <div class="cleaners">掃除用品</div>
     </a>
     
     <a href="">
     <div class="cothers">その他</div>
     </a>
     
</div>

</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/posts/index.blade.php ENDPATH**/ ?>