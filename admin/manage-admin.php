
     <style>
        <?php include "../css/admin.css" ?>
    </style>

<?php include('partials/menu.php');?>

    <!-- Main content Section starts-->
    <div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
<br>

<?php
    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add']; // displaying session message
        unset($_SESSION['add']); // removing session message
    }
?>
<br>
<br> <br>
<!-- button to add admin -->
<a href="add-admin.php" class="btn-primary">Add admin</a>
<br>
<br>
        <table class="tbl-full">
            <tr>
                <th>S.No.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>Amit Kumar</td>
                <td>amit_kumar07</td>
                <td>
                    <a href="#" class="btn-secondary">update admin</a>
                    <a href="#" class="btn-danger">Delete admin</a>
                </td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Amit Kumar</td>
                <td>amit_kumar07</td>
                <td>
                <a href="#" class="btn-secondary">update admin</a>
                    <a href="#" class="btn-danger">Delete admin</a>
                </td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Amit Kumar</td>
                <td>amit_kumar07</td>
                <td>
                <a href="#" class="btn-secondary">update admin</a>
                    <a href="#" class="btn-danger">Delete admin</a>
                </td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Amit Kumar</td>
                <td>amit_kumar07</td>
                <td>
                <a href="#" class="btn-secondary">update admin</a>
                    <a href="#" class="btn-danger">Delete admin</a>
                </td>
            </tr>
        </table>
    </div>
    </div>
    <!-- Main content section end-->

    <?php include('partials/footer.php');?>