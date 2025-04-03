<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/gallery.css">
    <title>Image Gallery</title>
    <style>
      
    </style>
</head>
<body>
    <a href="/forviewing" class="back-button">&#8592; Back</a>
    
    <h1 style="text-align: center; padding: 20px;">Gallery</h1>
    <div class="gallery">
    <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(!empty($data['image'])): ?>
            <img src="/storage/<?php echo e($data['image']); ?>" alt="">
        <?php endif; ?>
        <?php if(!empty($data['image2'])): ?>
            <img src="/storage/<?php echo e($data['image2']); ?>" alt="">
        <?php endif; ?>
        <?php if(!empty($data['image3'])): ?>
            <img src="/storage/<?php echo e($data['image3']); ?>" alt="">
        <?php endif; ?>
        <?php if(!empty($data['image4'])): ?>
            <img src="/storage/<?php echo e($data['image4']); ?>" alt="">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\fundation-main\resources\views/gallery.blade.php ENDPATH**/ ?>