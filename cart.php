<?php
session_start(); ?>
<?php
if (isset($_POST['loginname']) && !empty($_POST['loginname'])) {
    $_SESSION['user'] = $_POST['loginname'];
}
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}

?>

<section class="cookies container-fluid">
    <table class="table table-bordered">
        <thead>
             <tr>
                <th> Type </th>
                <th> Quantity </th>
            </tr>
         </thead>
         <tbody>
            <tr>
                <td> Chocolate chips</td>
                <td>    <?php if (isset($_SESSION['cart'][36])) {
                echo $_SESSION['cart'][36];}?> </td>
            </tr>
            <tr>
                <td> Pecan nuts</td>
                <td>    <?php if (isset($_SESSION['cart'][46])) {
                echo $_SESSION['cart'][46];}?> </td>
            </tr>
            <tr>
                <td> Chocolate cookie</td>
                <td>    <?php if (isset($_SESSION['cart'][58])) {
                echo $_SESSION['cart'][58];}?> </td>
            </tr>
            <tr>
                <td> M&M's&copy; cookies</td>
                <td>    <?php if (isset($_SESSION['cart'][32])) {
                echo $_SESSION['cart'][32];}?> </td>
             </tr>
            </tbody>
    </table>
</section>




<?php require 'inc/foot.php'; ?>
