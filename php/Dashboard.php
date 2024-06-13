<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Bytes</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/AdminPanel.css">
    <link rel="stylesheet" href="../css/Dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand d-md-none" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
            Digital Bytes
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasLabel">Digital Bytes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="../dist/Index.php">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="../dist/Smartphone.php">Smartphones</a></li>
                    <li class="nav-item"><a class="nav-link" href="../dist/Laptop.php">Laptops</a></li>
                    <li class="nav-item"><a class="nav-link" href="../dist/Computer.php">Computers</a></li>
                    <li class="nav-item"><a class="nav-link" href="../dist/Login.php">  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#8e8e8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M20.5899 22C20.5899 18.13 16.7399 15 11.9999 15C7.25991 15 3.40991 18.13 3.40991 22" stroke="#8e8e8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="bi" width="24" height="24"><use xlink:href="#cart"/></svg>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: Login.php");
    exit();
}

if ($_SESSION['type'] != 'admin') {
    echo "Access denied. You do not have permission to access this page.";
    exit();
}
?>
<div class="container-fluid dashboard">
<?php
echo "Welcome to the Database Manager, " . "<b>" . htmlspecialchars($_SESSION['username'])."!"."</b>"."<br><small>A quick and easy way to manage the database. Current time: </small>";
?>
    <script src="../js/Clock.js"></script>
    <small><span id="clock"></span></small>
</div>
    <br>
<div class="container-fluid dashboard">
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>Database Manager <small>Creator </small></b><br>
            <small>Add new products</small>
        </div>
        <div class="panel-body">
            <form action="../php/AddNewProduct.php" method="POST">
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="type">Type:</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                </div>
                <div class="form-group">
                    <label for="amount">Amount:</label>
                    <input type="number" class="form-control" id="amount" name="amount" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid dashboard">

    <div class="panel panel-default">
        <div class="panel-heading"><b>Database Manager <small>Editor</small></b><br><small>Edit product values in database</small></div>

        <div class="panel-body">

            <?php
            global $conn;
            include '../php/Config.php';

            $sql = "SELECT product_id, name, description, type, amount FROM Products";
            $result = $conn->query($sql);
            ?>

            <script>
                function confirmDelete(product_id) {
                    if (confirm("Are you sure you want to delete this product?")) {
                        window.location.href = 'delete.php?id=' + product_id;
                    }
                }
            </script>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                global $conn;
                                include '../php/Config.php';

                                $sql = "SELECT product_id, name, description, type, amount FROM Products";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                    <td>".$row['product_id']."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['description']."</td>
                                    <td>".$row['type']."</td>
                                    <td>".$row['amount']."</td>
                                    <td>
                                        <a href='edit.php?id=".$row['product_id']."' class='btn btn-primary btn-sm'>Edit</a>
                                        <button onclick='confirmDelete(".$row['product_id'].")' class='btn btn-danger btn-sm'>Delete</button>
                                    </td>
                                  </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No products found</td></tr>";
                                }
                                $conn->close();
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>




<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jq.js"></script>
<script src="../js/app.js"></script>
</body>
</html>
