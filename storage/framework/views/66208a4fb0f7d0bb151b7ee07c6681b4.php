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
            border: 2px solid #ddd;
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
        img{
            width: 15%;
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
    <img src="data:image/jpeg;base64,<?php echo e($data->base64Image); ?>" alt="Image">
        <table>
            <thead> 
                <h2>Personal Information</h2>
                <tr>
                   
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Birthdate</th>
                    <th>YEARSTARTED</th>
                    <th>Status</th>
                    <th>Address</th>
                    <th>Religion</th>
                    <th>Hobbies</th>
                    <th>Diagnosis</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td><?php echo e($data->fname); ?></td>
                    <td><?php echo e($data->gender); ?></td>
                    <td><?php echo e($data->age); ?></td>
                    <td><?php echo e($data->birthdate); ?></td>
                    <td><?php echo e($data->YEARSTARTED); ?></td>
                    <td><?php echo e($data->status); ?></td>
                    <td><?php echo e($data->address); ?></td>
                    <td><?php echo e($data->religion); ?></td>
                    <td><?php echo e($data->hobbies); ?></td>
                    <td><?php echo e($data->diagnosis); ?></td>
                 
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
      <br>
      <br>
        <table>
            <thead> <h2>Family Information</h2>
                    <tr> 
                       
                        <th>Mother Name</th>
                        <th>Father Name</th>
                        <th>Mother Occupation</th>
                        <th>Father Occupation</th>
                        
                        
                    </tr>
            </thead>
            <tbody>   
                    <td><?php echo e($data->mothername); ?></td>
                    <td><?php echo e($data->fathername); ?></td>
                    <td><?php echo e($data->mother_occupation); ?></td>
                    <td><?php echo e($data->father_occupation); ?></td>
                             
                    
                   
            </tbody>
     
        </table>
        <br>
        <table>
            <thead>
            <h2>Contact Information</h2>
                    <tr> 
                      
                       <th>Contact Person</th>
                        <th>Relation</th>
                        <th>Phone number</th>
                        
                    </tr>
            </thead>
            <tbody>   
                    <td><?php echo e($data->Contact_Person); ?></td>
                    <td><?php echo e($data->Relation); ?></td>
                    <td><?php echo e($data->Phone_Number); ?></td>           
                    
                   
            </tbody>
     
        </table>
<br>
        <table>
            <h2>Living Condition</h2>
            <thead>
                     
                        <th>Running Water</th>
                        <th>Electricity</th>
                        <th>Latrine</th>
                        <th>Walls</th>
                        <th>Foor</th>
                        <th>Number of Rooms</th>
            </thead>

            <tbody>
                    <td><?php echo e($data->Running_Water); ?></td>
                    <td><?php echo e($data->Electricity); ?></td>
                    <td><?php echo e($data->Latrine); ?></td>
                    <td><?php echo e($data->Walls); ?></td>
                    <td><?php echo e($data->Floor); ?></td>
                    <td><?php echo e($data->No_of_Rooms); ?></td>
            </tbody>
        </table>
        <br>
        <table>
        <h2>Child Details</h2>
            <thead>
                       
                        <th>Child History of Diagnosis</th>
                        <th>Current Condition of the Child</th>
                        <th>Additional Notes</th>
                        <th>Prepared by</th>
            </thead>

            <tbody>
                    
                    <td><?php echo e($data->Child_History_of_Diagnosis); ?></td>
                    <td><?php echo e($data->Current_Condition_of_the_Child); ?></td>
                    <td><?php echo e($data->Additional_Notes); ?></td>
                    <td><?php echo e($data->Prepared_by); ?></td>
                    
            </tbody>
        </table>
     
    </div>
 

</body>
</html>
<?php /**PATH C:\xampp\htdocs\fundation-main\resources\views//print.blade.php ENDPATH**/ ?>