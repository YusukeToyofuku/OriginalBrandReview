　　
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
        <h1>Original Brand レビュ-</h1>
        <div class="square"></div>
        
        
    <div class=search_box>
          <form method="GET" action="/search">
        <input type="text" size="60" placeholder="商品名もしくはブランド名を入力" name="keyword" value="<?php if(isset($keyword)): ?> <?php endif; ?>">
       <input type="submit" value="検索">
     </form>
    </div>
     
    <div class=create_new>
      <a class="Link" href="/posts/create">新規作成</a>
    </div>
     
         <div class=create_new>
      <a class="Link" href="/posts/review">新規作成</a>
    </div>
     
<div class="name_boxes">
    <p>オリジナルブランド一覧</p>
     <div class="Top_Value">
      Top Value
      <a class ="Link" href="/posts/topvalue"> </a>
     </div>
  
     <div class="Sselect">
      Sセレクト
      <a class ="Link" href=""></a>
     </div>
  
     <div class="Coops">
      Coop's
      <a class ="Link" href="" ></a>
     </div>
</div>

<div class="category_boxes">
    <p>カテゴリ一覧</p>
     <div class="foods">
      食料品
      <a class ="Link" href=""> </a>
     </div>
  
     <div class="papers">
      紙製品
      <a class ="Link" href=""></a>
     </div>
  
     <div class="cleaners">
      掃除用品
      <a class ="Link" href="" ></a>
     </div>
     
     <div class="others">
      その他
      <a class ="Link" href="" ></a>
     </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/posts/index.blade.php ENDPATH**/ ?>