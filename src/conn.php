
<?php 
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','netflixsignup');
if($conn->connect_error){
    echo "connection failed";
}
else{
    $stmt = $conn->prepare("insert into signup(email , password)
    values(?,?)");
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
    header("Location:streampage.php");
    $stmt->close();
    $conn->close();
}
?>