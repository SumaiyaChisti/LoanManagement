<?php
include('components/conn.php');
$sql="CREATE TABLE IF NOT EXISTS `campaign_$_POST[name]` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Refrence_Number VARCHAR(30) NOT NULL,
    Customer_Name VARCHAR(255) NOT NULL,
    State_ VARCHAR(255) NOT NULL,
    City VARCHAR(255) NOT NULL,
    Pin_Code VARCHAR(30) NOT NULL,
    Customer_Contact_Number VARCHAR(30) NOT NULL,
    Customer_Email_ID VARCHAR(255) NOT NULL,
    Cibil VARCHAR(30) NOT NULL,
    Report VARCHAR(255) NOT NULL,
    Annual_Income VARCHAR(50) NOT NULL,
    Max_Loan_Amount VARCHAR(50) NOT NULL,   
    Min_Loan_Amount VARCHAR(50) NOT NULL,
    Pan_ID VARCHAR(50) NOT NULL,
    Processing_Fee VARCHAR(30) NOT NULL, 
    Tenure VARCHAR(50) NOT NULL,
    Minimun_Tenure VARCHAR(50) NOT NULL,
    Lead_Status VARCHAR(50) NOT NULL,
    FollowUp_Date VARCHAR(30) NOT NULL,
    Comments VARCHAR(255) NOT NULL,
    Phone_Call VARCHAR(30) NOT NULL,
    Link_To_Customer VARCHAR(255) NOT NULL,
    HIT_API VARCHAR(30) NOT NULL
    )";
mysqli_query($conn,$sql);
echo "ok";
?>