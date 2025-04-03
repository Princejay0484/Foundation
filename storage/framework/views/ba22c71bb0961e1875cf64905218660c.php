<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>Account Information</title>
    <style>
    /* General Body Style with Fade-in Effect */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #B2C9AD;
    animation: fadeIn 1.5s ease; /* Fade-in for the body */
}

/* Header and Footer Slide-down Animation */
header, footer {
    color: #fff;
    padding: 10px 20px;
    text-align: center;
    animation: slideDown 1s ease; /* Slide-down effect */
}

main {
    padding: 20px;
}

/* Heading Animation */
h2 {
    color: #000080;
    
    border-radius: 25px;
    text-align: center;
    padding: 10px;
    animation: fadeInUp 1.2s ease; /* Fade-in and slide-up */
}

/* Search Form with Animated Button */
.search-form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    gap: 10px;
}

.search-input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #66785F;
    border-radius: 4px;
    width: 300px;
}

.search-button {
    padding: 15px;
    font-size: 16px;
    background-color: #91AC8F;
    color: #fff;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.search-button:hover {
    background-color: #66785F;
    transform: scale(1.05); /* Slight zoom on hover */
}

/* Create New Section with Animation */
.create-new {
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: #f0e68c;
    padding: 10px;
    gap: 5px;
    font-size: 16px;
    transition: transform 0.3s ease;
}

.create-new:hover {
    transform: translateY(-5px); /* Float up on hover */
}

.create-new img {
    width: 24px;
    height: 24px;
}

/* Content Layout Fade-in Animation */
.content-layout {
    display: flex;
    gap: 20px;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1.2s forwards; /* Fade-in and slide-up animation */
}

/* Table Container */
.table-container {
    flex: 0 0 30%;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    animation: fadeIn 1.5s ease; /* Table fades in */
}

/* Table Row Hover Effect */
table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
    transition: background-color 0.3s ease; /* Smooth transition for hover */
}

table th {
    background-color: #f0e68c;
    color: #000080;
}

table tr:hover {
    background-color: #f0f5f0; /* Light green highlight */
}

/* Actions Hover Animation */
.actions img {
    width: 20px;
    height: 20px;
    margin: 0 5px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.actions img:hover {
    transform: scale(1.2); /* Slight zoom effect */
    opacity: 0.8;
}

/* Footer Links */
footer a {
    color: #fff;
    text-decoration: underline;
    transition: color 0.3s ease;
}

footer a:hover {
    text-decoration: none;
    color: #f0f5f0; /* Light green color */
}
.create-new span{
    color: white;
    transition: all 0.3s ease 0s;
    background-color: #24252A;
    border: none;
    padding: 15px;
    border-radius: 50px;
}
.create-new span:hover{
    color: #0088a9;
}

/* Keyframe Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideDown {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Mobile Responsiveness */
@media screen and (max-width: 768px) {
    body {
        font-size: 14px;
        padding: 10px;
    }

    header, footer {
        padding: 10px;
    }

    main {
        padding: 15px;
    }

    h2 {
        font-size: 20px;
    }

    .search-form {
        flex-direction: column;
        gap: 10px;
    }

    .search-input {
        width: 100%;
    }

    .search-button {
        width: 100%;
        text-align: center;
    }

    .create-new {
        font-size: 14px;
        justify-content: center;
    }

    .content-layout {
        flex-direction: column;
        gap: 15px;
    }

    .table-container {
        width: 100%;
        padding: 10px;
    }

    table {
        font-size: 12px;
    }

    th, td {
        padding: 8px;
    }

    .actions img {
        width: 24px;
        height: 24px;
    }
}

/* For Phone Screens (max-width: 480px) */
@media screen and (max-width: 480px) {
    body {
        font-size: 12px;
    }

    header, footer {
        padding: 8px;
    }

    main {
        padding: 10px;
    }

    h2 {
        font-size: 18px;
    }

    .search-form {
        flex-direction: column;
        gap: 8px;
    }

    .search-input, .search-button {
        width: 100%;
        font-size: 14px;
    }

    .create-new {
        font-size: 12px;
        gap: 8px;
    }

    .content-layout {
        gap: 10px;
    }

    .table-container {
        padding: 5px;
    }

    table {
        font-size:65%;
        display: block;
        overflow-x: auto; /* Make table scrollable */
        white-space: wrap; /* Prevent wrapping */
    }

    th, td {
        padding: 5px;
    }

    .actions img {
        width: 20px;
        height: 20px;
    }
}


    </style>
</head>
<body>
    <header id="header">
        <?php echo $__env->make('/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <main id="main">
        <div class="main_second_div">
            <h2>Account Information</h2>

          
                <a href="/create_account" class="create-new">
                 
                    <span>CREATE NEW</span>
                </a>
          

            <div class="content-layout">
                <!-- Left Section: Table -->
                <div class="table-container">
                <table>
                 <thead>
                     <tr>
                     
                         <th>Full Name</th>
                         <th>Email Address</th>
                         <th>Date Create</th>
                         <th>Account type</th>
                         <th class="actions">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                     <?php $__currentLoopData = $accoutinformation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                     <td><?php echo e($data['name']); ?></td>
                     <td><?php echo e($data['email']); ?></td>
                     <td><?php echo e($data['updated_at']); ?></td>
                     <td><?php echo e($data['account_type']); ?></td>
                         
                         <td class="actions">

                         <div class="a">
                                 
                                    <a href = <?php echo e("accouninformation_delete/".$data['id']); ?>><img src="/img/delete.png" alt="edit"></a>
                                    <br>
                                    <a href=  <?php echo e("accouninformation_print/".$data['id']); ?>><img src="/img/print.png" alt="edit"></a> </div>
                           
                        
                         </td>
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </tbody>
             </table>
                </div>
            </div>
        </div>
    </main>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\fundation-main\resources\views/accoutinformation.blade.php ENDPATH**/ ?>