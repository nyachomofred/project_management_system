<?php
include('login.php');
//select finance information form balance table
$sessionid=$_SESSION['id'];
$query=mysqli_query($conn,"select * from credit where student_id=$sessionid")or die(mysqli_error($conn))
?>
<?php include('sidebar.php')?>
<?php include('navbar.php')?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Payment history</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	
                                    	<th>amount paid (Ksh)</th>
                                    	<th>Payment Mode (ksh)</th>
                                        <th>Reference no </th>
                                        <th>Date Paid</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($query as $record){ ?>
                                        <tr>
                                        	<td><?php echo$record['id']?></td>
                                        	
                                        	<td><?php echo$record['amount_paid']?></td>
                                        	<td><?php echo$record['payment_mode']?></td>
                                            <td><?php echo$record['reference_no']?></td>
                                            <td><?php echo$record['date_paid']?></td>
                                        </tr>
                                     <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
</div>
<?php include('footer.php')?>