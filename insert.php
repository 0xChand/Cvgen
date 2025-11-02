<?php
include("db.php");

try {
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $about = $_POST['about'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $skills = $_POST['skills'];

    if(empty($name) || empty($email) || empty($phone) || empty($address) || empty($about) || empty($education) || empty($experience) || empty($skills)){
        echo "Please enter correct credentials";
    } else {

        $sql = "INSERT INTO users(name, email, phone, address, education, about, experience, skills) VALUES('$name', '$email', '$phone', '$address', '$education', '$about', '$experience', '$skills')";

        if($conn->query($sql) === TRUE){
            header("Location: user.php");
            exit();     
        } else {
            echo "Registration not successfull";
        }
    
    }
}
} catch (mysqli_sql_exception) {
    echo "User with this email/phone is already registered!";
    echo "<form action='index.html'>
            <input type='submit' value='Go back'>
          </form>";
}

?>