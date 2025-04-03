<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Mayaform.css">
    <title>Maya's Hope Surgery Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .main_second_div_top {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .main_second_div_top img {
            width: 30px;
            height: 30px;
        }
        h2 {
            margin: 0;
        }
        main{
            display:flex;

            justify-content: space-between;
            align-items: center;
        }
  
       img{
        height:15%;
        width: 30%;
    
    }
       
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .footer_container {
            margin-top: 30px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
   

    <main id="main">
        <div class="main_second_div">
            <div class="main_second_div_top">
                <h2>Maya's Hope Surgery Record</h2>
            </div>
            <img src="data:image/jpeg;base64,<?php echo e($data->base64Image); ?>" alt="Image">
            <table class="table">
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr><?php echo e($data->Admin_notes); ?>

                <tr>
                    <td>Guardian</td>
                    <td><?php echo e($data->guardian); ?></td>
                </tr>
                <tr>
                    <td>Contact Details</td>
                    <td><?php echo e($data->contact_details); ?></td>
                </tr>
                <tr>
                    <td>Procedure</td>
                    <td><?php echo e($data->procedure); ?></td>
                </tr>
                <tr>
                    <td>No. of Surgeries Done</td>
                    <td><?php echo e($data->no_of_surgery_done); ?></td>
                </tr>
                <tr>
                    <td>Date of Admission</td>
                    <td><?php echo e($data->date_of_admission); ?></td>
                </tr>
                <tr>
                    <td>Date of Surgery</td>
                    <td><?php echo e($data->date_of_surgery); ?></td>
                </tr>
                <tr>
                    <td>Anesthesiologist</td>
                    <td><?php echo e($data->anesthesislologist); ?></td>
                </tr>
                <tr>
                    <td>Diagnosis</td>
                    <td><?php echo e($data->diagnosis); ?></td>
                </tr>
                <tr>
                    <td>Additional Doctors</td>
                    <td><?php echo e($data->additional_doctors); ?></td>
                </tr>
                <tr>
                    <td>Post-op Notes</td>
                    <td><?php echo e($data->post_op_Notes); ?></td>
                </tr>
                <tr>
                    <td>Additional Notes</td>
                    <td><?php echo e($data->additional_notes); ?></td>
                </tr>
                <tr>
                    <td>Admin Notes</td>
                    <td><?php echo e($data->Admin_notes); ?></td>
                </tr>
            </table>
           
        </div>
    
        
    </main>

    <footer id="footer">
        <div class="footer_container">
        <table>
    <tr>
        <th>Summary</th>
        <th>Description</th>
        <th>Amount</th>
        <th>Paid by</th>
        <th>Remarks</th>
    </tr>
    <tr>
        <td><?php echo e($data->summary); ?></td>
        <td><?php echo e($data->description); ?></td>
        <td><?php echo e($data->amount); ?></td>
        <td><?php echo e($data->paid_by); ?></td>
        <td><?php echo e($data->remarks); ?></td>
    </tr>
    <tr>
        <td><?php echo e($data->summary2); ?></td>
        <td><?php echo e($data->description2); ?></td>
        <td><?php echo e($data->amount2); ?></td>
        <td><?php echo e($data->paid_by2); ?></td>
        <td><?php echo e($data->remarks2); ?></td>
    </tr>
    <tr>
        <td><?php echo e($data->summary3); ?></td>
        <td><?php echo e($data->description3); ?></td>
        <td><?php echo e($data->amount3); ?></td>
        <td><?php echo e($data->paid_by3); ?></td>
        <td><?php echo e($data->remarks3); ?></td>
    </tr>
    <tr>
        <td><?php echo e($data->summary4); ?></td>
        <td><?php echo e($data->description4); ?></td>
        <td><?php echo e($data->amount4); ?></td>
        <td><?php echo e($data->paid_by4); ?></td>
        <td><?php echo e($data->remarks4); ?></td>
    </tr>
    <tr>
        <td><?php echo e($data->summary5); ?></td>
        <td><?php echo e($data->description5); ?></td>
        <td><?php echo e($data->amount5); ?></td>
        <td><?php echo e($data->paid_by5); ?></td>
        <td><?php echo e($data->remarks5); ?></td>
    </tr>
    <tr>
        <td><?php echo e($data->summary6); ?></td>
        <td><?php echo e($data->description6); ?></td>
        <td><?php echo e($data->amount6); ?></td>
        <td><?php echo e($data->paid_by6); ?></td>
        <td><?php echo e($data->remarks6); ?></td>
    </tr>
    <!-- <tr>
        <td colspan="2"><strong>Total</strong></td>
        <td>
            <?php echo e($data->amount +
                $data->amount2 +
                $data->amount3 +
                $data->amount4 +
                $data->amount5 +
                $data->amount6); ?>

        </td>
        <td colspan="2"></td>
    </tr> -->
</table>

        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\fundation-main\resources\views//mayashope_onrtime_record_print.blade.php ENDPATH**/ ?>