<?php
include('login.php');
//select finance information form balance table
$sessionid=$_SESSION['id'];
$query=mysqli_query($conn,"select * from balance where student_id=$sessionid")or die(mysqli_error($conn))
?>
<?php include('sidebar.php')?>
<?php include('navbar.php')?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Student finance information</h4>
                                <p class="category"><a href="paymenthistory.php" class="btn btn-success">View payment history</a></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Stident id</th>
                                    	<th>Required amount (ksh)</th>
                                    	<th>Amount to pay (ksh)</th>
                                        <th>Amount paid (ksh)</th>
                                        <th>Balance</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($query as $record){ ?>
                                        <tr>
                                        	<td><?php echo$record['id']?></td>
                                        	<td><?php echo$record['student_id']?></td>
                                        	<td><?php echo$record['required_amount']?></td>
                                        	<td><?php echo$record['amount_to_pay']?></td>
                                            <td><?php echo$record['amount_paid']?></td>
                                            <td><?php echo$record['balance']?></td>
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