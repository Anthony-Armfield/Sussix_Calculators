<?php include ('../views/header.php'); ?>
<!-- Header with Background Image -->
<header class="meeting header">
</header>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1>Employees</h1>

            <!-- Display a list of Employees -->
            <?php foreach($employees as $employee) : ?>
                <li style="list-style: none;">
                    <a href="?employee_id=<?php echo $employee->getEmployeeID(); ?>">
                        <b><?php echo $employee->getEmployeeFirstName() . ' ' . $employee->getEmployeeLastName(); ?></b>
                    </a>
                </li>
            <?php endforeach; ?>
        </div>
        <div class="col-sm-6">

            <!-- Display the details of the current customer -->
            <h1><?php echo $customer->getCustomerFirstName() . ' ' .  $customer->getCustomerLastName(); ?></h1>
            <p><b>Name: </b><?php echo $customer->getCustomerFirstName() . ' ' .  $customer->getCustomerLastName(); ?></p>
            <p><b>Email Address: </b><?php echo $customer->getCustomerEmail(); ?></p>
            <p><b>Comment: </b><?php echo $customer->getComment(); ?></p>
            <p><b>Date Entered/Updated: </b><?php echo $customer->getEntryDate(); ?></p>

            <!-- Instead of deleting the entire customer, I decided to update the comment cell to an answer -->
            <form action="." method="post" id="delete_comment">
                <input type="hidden" name="action" value="delete_comment">
                <input type="hidden" name="customer_id" value="<?php echo $customer->getCustomerID(); ?>">
                <input type="submit" value="Mark as Answered">
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Today's date is: <script>
                date();
            </script></p>
        <p class="m-0 text-center text-white">Copyright &copy; Sussix Creative Calculators 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
