<?php include ('../views/header.php'); ?>
<!-- Header with Background Image -->
<header class="meeting header">
</header>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1>Employees</h1>

            <!-- display a list of the employees -->
            <?php foreach($employees as $employee) : ?>
            <li style="list-style: none;">
                <a href="?employee_id=<?php echo $employee->getEmployeeID(); ?>">
                    <b><?php echo $employee->getEmployeeFirstName() . ' ' . $employee->getEmployeeLastName(); ?></b>
                </a>
            </li>
            <?php endforeach; ?>
        </div>
        <div class="col-sm-6">
            <!-- display a list of customers assigned to the current employee -->
            <h4 style="background: none;"><?php echo $current_employee->getEmployeeFirstName() . ' ' .  $current_employee->getEmployeeLastName(); ?></h4>
            <nav>
                <ul style="list-style: none;">
                    <?php foreach ($customers as $customer) : ?>
                    <li style="list-style: none;">
                        <a href="?action=view_customer&amp;customer_id=<?php echo $customer->getCustomerID(); ?>"> <?php echo $customer->getCustomerFirstName() . ' ' . $customer->getCustomerLastName(); ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
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
