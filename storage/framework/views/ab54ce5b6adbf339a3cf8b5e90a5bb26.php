<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/chalice_edit.css">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>Account Information</title>
</head>
<body>
   
        
        <main id="main">

            <div class="main_second_div">
            <div class="main_second_div_top">
                <a href="/chalice"><img src="/img/arrow.png" alt="arrow"></a>
                <h2>Maya's Hope</h2>
            </div>

            <div class="main_3rd_div">
                <div class="main_3rd_div_1">
                   <img src="/storage/<?php echo e($chalice['image']); ?>" alt="Child">
                </div>

                <!-- <div class="main_3rd_div_2">
                         <h3><?php echo e($chalice['fname']); ?></h3>
                         <h4><?php echo e($chalice['id']); ?></h4>
                           <div class="main_3rd_div_2_container">
                                <p>SPONSORED</p> <img src="/img/triangle.png" alt="arrow down">
                           </div>
                </div> -->
                
                    
                <div class="main_3rd_div_3">
                <!--         <a href="/chalice_edit_edit">CANCEL</a>
                        <a href="/chalice_edit_edit">UPDATE</a> -->
                </div>
            </div>

        </main>
        
    <footer id="footer">

         <div class="footer_container">

              <div class="footer_1">
                    <h2>Personal Information</h2>
              </div>

              <div class="footer_2">

              <form action="/chalice_Edit" method="POST" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                        <label for="fname">NAME:</label>
                        <input hidden type="number" id="id" name="id" value="<?php echo e($chalice['id']); ?>" required>
                        <input type="text" id="fname" name="fname" value="<?php echo e($chalice['fname']); ?>" required>
                        <br>       
                        <label for="status">STATUS:</label>
                        <input type="text" id="status" name="status" value="<?php echo e($chalice['status']); ?>" required>
                        <br>
                        <label for="image">Image:</label>
                        <input type="file" id="image" name="image" value="<?php echo e($chalice['image']); ?>">
               <br>
                        <label for="YEARSTARTED">YEAR STARTED AS A BENEFICIARY:</label>
                        <input type="text" id="YEARSTARTED" name="YEARSTARTED" value="<?php echo e($chalice['YEARSTARTED']); ?>" required>
                        
                  
                       <br>
                        <br>
                        <label for="birthdate">BIRTH DATE:</label>
                        <input type="text" id="birthdate" name="birthdate" value="<?php echo e($chalice['birthdate']); ?>" required>
                        <br>
                        <label for="age">AGE:</label>
                        <input type="text" id="age" name="age" value="<?php echo e($chalice['age']); ?>" required>
                        <br>
                        <label for="gender">GENDER:</label>
                        <input type="text" id="gender" name="gender" value="<?php echo e($chalice['gender']); ?>" required>
                        

              
              </div>

              <div class="footer_3">
                   
                    <label for="address">ADDRESS:</label>
                    <input type="text" id="address" name="address" value="<?php echo e($chalice['address']); ?>" required>

                    <label for="religion">RELIGION:</label>
                    <input type="text" id="religion" name="religion" value="<?php echo e($chalice['religion']); ?>" required> 
              </div>

              <div class="footer_4">
                    <label for="hobbies">HOBBIES:</label>
                    <input type="text" id="hobbies" name="hobbies" value="<?php echo e($chalice['hobbies']); ?>" required> 
              </div>
                     
              <div class="footer_5">
                    <label for="diagnosis">DIAGNOSIS:</label>
                    <input type="text" id="diagnosis" name="diagnosis" value="<?php echo e($chalice['diagnosis']); ?>" required> 
              </div>

              <div class="footer_6">
                    <h4>FAMILY INFORMATION</h4>
              </div>

              <div class="footer_7">
                    <label for="mothername">MOTHER'S NAME:</label>
                    <input type="text" id="mothername" name="mothername" value="<?php echo e($chalice['mothername']); ?>" required> 

                    <label for="mother_occupation">OCCUPATION:</label>
                    <input type="text" id="mother_occupation" name="mother_occupation" value="<?php echo e($chalice['mother_occupation']); ?>" required> 
              </div>

              <div class="footer_8">
                    <label for="fathername">FATHER'S NAME:</label>
                    <input type="text" id="fathername" name="fathername" value="<?php echo e($chalice['fathername']); ?>" required> 

                    <label for="father_occupation">OCCUPATION:</label>
                    <input type="text" id="father_occupation" name="father_occupation" value="<?php echo e($chalice['father_occupation']); ?>" required> 
              </div>

              <div class="footer_9">
                    <button type="submit">Save</button>
              </div>

              </form>
         </div>

    </footer>
</body>
</html>























































<?php /**PATH C:\xampp\htdocs\fundation-main\resources\views/chalice_edit_edit.blade.php ENDPATH**/ ?>