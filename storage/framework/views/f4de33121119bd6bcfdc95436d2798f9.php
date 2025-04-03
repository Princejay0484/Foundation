<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Forviewing.css">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>Dashboard</title>
</head>
<body>
        <header>
        <img src="/img/logo.png" alt="header_logo" class="header_logo">
                    <nav>
                        <ul class="nav_links">
                        <li><a href="https://www.facebook.com/BYSMPblessthechildren" target="_blank">Support a Program</a></li>
                        <li><a href="/forviewing">Home</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/ourstory">Our Story</a></li>
                        </ul>
                    </nav>
            <a class="cta" href="/login"><button>Login</button></a>
        </header>


        <main id="main">
             <div class="main_firstdiv background background-container "> 
                <h1 class="main_firsdiv_h1">BYSMP</h1>
                <h5 class="main_firstdiv_h5">BLESS THE CHILDREN FOUNDATION</h5>
                <p class="main_firstdiv_p">INSPIRING CHANGE, BUILDING WITH HOPE.</p>
                <div class="horizontal-line"></div>
             </div>

             <div class="main_div1">
                <h2>Events And Programs</h2>
             </div>
             <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

             <div class="main_div2">
                <div class="main_div2_info">
                    <div class="main_div2_info_top">
                            <h2><?php echo e($data['event']); ?> </h2>
                            <h3><?php echo e($data['date']); ?></h3>
                            <h2><?php echo e($data['location']); ?></h2>
                    </div>
                    <div class="main_div2_info_p">
                        <p><?php echo e($data['information']); ?></p>
                    </div>
                  
                </div>
                <div class="main_div2_image">
                   <img src="/storage/<?php echo e($data['image']); ?>" alt="">
                   <img src="/storage/<?php echo e($data['image2']); ?>" alt="">
                   <img src="/storage/<?php echo e($data['image3']); ?>" alt="">
                   <img src="/storage/<?php echo e($data['image4']); ?>" alt="">
                </div>
                
                
             </div>
            
                        <!-- <tr>  
                            
                                <td><?php echo e($data['id']); ?></td>
                                <td></td>
                                <td><?php echo e($data['date']); ?></td>
                                <td><?php echo e($data['location']); ?></td>
                                <td class="actions" >
                                    
                                </td>
                            </tr>
   -->
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
           
        </main>

        <footer id="footer">
 

   
        <div class="contact-info">
            <h4>Contact Information:</h4>
            <p><i class="fas fa-envelope"></i> Email: info@bysmpblessthechildren.com</p>
            <p><i class="fas fa-globe"></i> Website & Social Media: @BYSMPblessthechildren</p>
            <p><i class="fas fa-phone"></i> Contact Numbers: +8521 1938 | +63 991 731 1461</p>
            <h4>Office Locations:</h4>
            <p><i class="fas fa-map-marker-alt"></i> <b>Main Office:</b><br>Centro Salvador Bldg.,<br>18 Maginoo St., Tondo, Manila 1013</p>
            <p><i class="fas fa-map-marker-alt"></i> <b>Branch Office:</b><br>Casa Soledad & Vicente Bldg.,<br>063 Blk 1, Gasangan, Baseco, Brgy. 649, Port Area, Manila, 1018</p>
        </div>

        <div class="partners">
            <h4>Major Partners:</h4>
            <p>Chalice</p>
            <p>Maya's Hope</p>
            <p>John D.V. Salvador Foundation</p>
        </div>

        <div class="enterprise">
            <h4>Social Enterprise:</h4>
            <p>Be Blessed Marketplace</p>
            <p>Smokey Tours</p>
        </div>
    </div>
    <?php echo $__env->make('/FAQ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>




</body>
</html><?php /**PATH C:\xampp\htdocs\fundation-main\resources\views/forviewing.blade.php ENDPATH**/ ?>