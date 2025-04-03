<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Table</title>
    <style>
        /* Basic Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        /* Make the table horizontally scrollable */
        .table-container {
            overflow-x: auto;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            th, td {
                font-size: 12px;
                padding: 6px;
            }
        }

        @media (max-width: 480px) {
            th, td {
                font-size: 10px;
                padding: 4px;
            }
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h1>Personal Infomation</h1>
        <table>
            <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Sponsor</th>
                    <th>Dateofbirth</th>
                    <th>Nameofchild</th>
                    <th>School</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td><?php echo e($data->Sponsor); ?></td>
                    <td><?php echo e($data->dateofbirth); ?></td>
                    <td><?php echo e($data->nameofchild); ?></td>
                    <td><?php echo e($data->school); ?></td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <br>
        <table>
            <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Address</th>
                    <th>Grade</th>
                    <th>Sub site</th>
                    <th>Gender</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td><?php echo e($data->address); ?></td>
                    <td><?php echo e($data->Grade); ?></td>
                    <td><?php echo e($data->sub_site); ?></td>
                    <td><?php echo e($data->gender); ?></td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <br>
        <table>
            <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Reilogion</th>
                    <th>Fathername</th>
                    <th>Father_occupation</th>
                    <th>Mothername</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td><?php echo e($data->reilogion); ?></td>
                    <td><?php echo e($data->fathername); ?></td>
                    <td><?php echo e($data->father_occupation); ?></td>
                    <td><?php echo e($data->mothername); ?></td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <br>

        <table>
            <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Mother occupation</th>
                    <th>Father income</th>
                    <th>Mother income</th>
                    <th>Mother employment</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td><?php echo e($data->mother_occupation); ?></td>
                    <td><?php echo e($data->father_income); ?></td>
                    <td><?php echo e($data->mother_income); ?></td>
                    <td><?php echo e($data->mother_employment); ?></td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <br>
        <table>
            <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Evaluation</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Status</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td><?php echo e($data->evaluation); ?></td>
                    <td><?php echo e($data->created_at); ?></td>
                    <td><?php echo e($data->updated_at); ?></td>
                    <td><?php echo e($data->status); ?></td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>

     
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\fundation-main\resources\views//mayaform_print.blade.php ENDPATH**/ ?>