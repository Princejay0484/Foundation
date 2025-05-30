<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/logins.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>logins</title>
</head>
<body>  
    <header id="head">  
   <!--  <?php if($errors->any()): ?>
                   <div class="header_error">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="header_alert">
                                <?php echo e($error); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </div>
               <?php endif; ?>

               <?php if(session()->has('error')): ?>
                    <div class="header_alert">
                         <?php echo e(session('error')); ?>

                    </div>
               <?php endif; ?>

               <?php if(session()->has('Succes')): ?>
                    <div class="header_alert">
                         <?php echo e(session('Succes')); ?>

                    </div>
               <?php endif; ?> -->
    </header>

        <main id="main">
            <div class="first_div">
                <img src="/img/image1.png" alt="" class="main_img_first_div">
            </div>
         
            


            <div class="second_div">
            
             <div class="second_div_logo">
                    <img src="/img/logo.png" alt="logo" class="Logo">
                    <h3>BYSMP BLESS THE CHILDREN FOUNDATION</h3>
                    <p>INSPIRING CHANGE, BUILDING WITH HOPE</p>
             </div>
                  
                 <div class="second_div_login">
                 <h1>SIGN IN</h1>
                    <form action="<?php echo e(route('login.post')); ?>" method="POST">
                                
                         <?php echo csrf_field(); ?>
                        

                        <div class="password-container">
                            <input type="email" class="password-input" placeholder="Email Address" name="email">
                        </div>

                        <div class="password-container">
                            <input type="password" class="password-input" placeholder="Password" name="password">
                            
                           <!--  <div class="eye-icon"></div> -->
                            
                            <a href="/forgotpassword">Forgot Password?</a>
                           
                        </div>

                    

                    <div class="seoncd_div_btn">
                      <button type="submit">SIGN IN</button>
                      

                    </div> 
                </form>

                   
                    <?php if($errors->any()): ?>
                   <div class="header_error">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="header_alert">
                                <?php echo e($error); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </div>
               <?php endif; ?>

               <?php if(session()->has('error')): ?>
                    <div class="header_alert">
                         <?php echo e(session('error')); ?>

                    </div>
               <?php endif; ?>

               <?php if(session()->has('Succes')): ?>
                    <div class="header_alert">
                         <?php echo e(session('Succes')); ?>

                    </div>
               <?php endif; ?>
                 </div>
            </div>
            
        </main>

    <footer id="footer">

    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\fundation-main\resources\views/login.blade.php ENDPATH**/ ?>