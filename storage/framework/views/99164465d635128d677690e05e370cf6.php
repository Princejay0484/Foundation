<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add_event.css">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>Account Information</title>
</head>
<body>

<header id="header">
        <?php echo $__env->make('/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
        
        <main id="main">

            <div class="main_second_div">
            <div class="main_second_div_top">
                <a href="events"><img src="img/arrow.png" alt="arrow"></a>
                <h2>Events</h2>
            </div>


                
            </div>

        </main>
        
    <footer id="footer">

         <div class="footer_container">

              

              <div class="footer_2">

              <form action="add_events" method="POST"  enctype="multipart/form-data">
                  
                        <label for="event">Event:</label>
                        <input type="text" id="event" name="event" required>
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date" required>
                        <label for="location">Location:</label>
                        <input type="text" id="location" name="location" required>
                        <label for="Information">Information:</label>
                        <input type="text" id="Information" name="Information" required>
                        <br>
                        <label for="image">image1</label>
                        <input type="file" id="image" name="image" required>
                        <label for="image1">image2</label>
                        <input type="file" id="image2" name="image2" >
                        <label for="image2">image3</label>
                        <input type="file" id="image3" name="image3" >
                        <label for="image3">image4</label>
                        <input type="file" id="image4" name="image4" >
                       
              <div class="footer_9">
                    <button type="submit">Save</button>
              </div>

              </form>
         </div>

    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\fundation-main\resources\views/add_events.blade.php ENDPATH**/ ?>