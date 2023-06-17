<link href="../css/sb-admin-2.min.css" rel="stylesheet">
<?php
$databaseHost = "localhost:3307";
$databaseUsername = "laura";
$databasePassword = "laura";
$databaseName = "form";

$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$dbconfig = mysqli_select_db($connection,$databaseName);

if($dbconfig)
{
    echo "Database connected";
}
else
{
    echo 
    '<div class="container">
    <div class="row">
        <div class="col-md-6 mr-auto text-center py-5 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title bg-warning">DB connection failed</h1>
                    <h2 class="card-title">DB failure</h2>
                    <p class="card-text"> Check your DB connection</p>
                    <a href="../index.php" class="btn btn-primary">Go to Home Page</a>
                </div>
            </div>
        </div>
    </div>
</div>';


}
 

?>
