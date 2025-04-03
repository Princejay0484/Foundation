<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/chalice_view.css">
    <title>chalice view</title>
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

               
                
                    
                <div class="main_3rd_div_3">
               
                </div>
            </div>

        </main>
        
    <footer id="footer">

         <div class="footer_container">

              <div class="footer_1">
                    <h2>Personal Information</h2>
              </div>

              <div class="footer_2">

              <form action="/chalice_Edit" method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; font-family: Arial, sans-serif; background-color: #f9f9f9;">
  <?php echo csrf_field(); ?>
  
  <div style="margin-bottom: 15px;">
    <label for="fname" style="display: block; font-weight: bold;">Name:</label>
    <input hidden type="number" id="id" name="id" value="<?php echo e($chalice['id']); ?>" required>
    <input type="text" id="fname" name="fname" value="<?php echo e($chalice['fname']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="status" style="display: block; font-weight: bold;">Status:</label>
    <input type="text" id="status" name="status" value="<?php echo e($chalice['status']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="YEARSTARTED" style="display: block; font-weight: bold;">Year Started as a Beneficiary:</label>
    <input type="text" id="YEARSTARTED" name="YEARSTARTED" value="<?php echo e($chalice['YEARSTARTED']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="birthdate" style="display: block; font-weight: bold;">Birth Date:</label>
    <input type="text" id="birthdate" name="birthdate" value="<?php echo e($chalice['birthdate']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="age" style="display: block; font-weight: bold;">Age:</label>
    <input type="text" id="age" name="age" value="<?php echo e($chalice['age']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="gender" style="display: block; font-weight: bold;">Gender:</label>
    <input type="text" id="gender" name="gender" value="<?php echo e($chalice['gender']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="address" style="display: block; font-weight: bold;">Address:</label>
    <input type="text" id="address" name="address" value="<?php echo e($chalice['address']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="religion" style="display: block; font-weight: bold;">Religion:</label>
    <input type="text" id="religion" name="religion" value="<?php echo e($chalice['religion']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="hobbies" style="display: block; font-weight: bold;">Hobbies:</label>
    <input type="text" id="hobbies" name="hobbies" value="<?php echo e($chalice['hobbies']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="diagnosis" style="display: block; font-weight: bold;">Diagnosis:</label>
    <input type="text" id="diagnosis" name="diagnosis" value="<?php echo e($chalice['diagnosis']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>


  <div style="margin-bottom: 15px;">
    <label for="mothername" style="display: block; font-weight: bold;">Mother's Name:</label>
    <input type="text" id="mothername" name="mothername" value="<?php echo e($chalice['mothername']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="mother_occupation" style="display: block; font-weight: bold;">Mother's Occupation:</label>
    <input type="text" id="mother_occupation" name="mother_occupation" value="<?php echo e($chalice['mother_occupation']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="fathername" style="display: block; font-weight: bold;">Father's Name:</label>
    <input type="text" id="fathername" name="fathername" value="<?php echo e($chalice['fathername']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="father_occupation" style="display: block; font-weight: bold;">Father's Occupation:</label>
    <input type="text" id="father_occupation" name="father_occupation" value="<?php echo e($chalice['father_occupation']); ?>" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="text-align: center; margin-top: 20px;">
    <button type="submit" style="padding: 10px 20px; font-size: 16px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Save</button>
  </div>
</form>

         </div>

    </footer>
</body>
</html>























































<?php /**PATH C:\xampp\htdocs\fundation-main\resources\views/chalice_view.blade.php ENDPATH**/ ?>