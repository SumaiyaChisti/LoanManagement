<?php
require '../vendor/autoload.php';
include('../admin/components/conn.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$sql = "SELECT * FROM `leads`";
$result = $conn->query($sql);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Add headers to the Excel file
$headers = ['Id', 'Upload Date', 'Upload Time', 'Reference Number','Campaign Name','Customer Name','State','City','Pin Code','Customer Contact Number','Customer Email ID','Cibil','Report','Annual Income','Max Loan Amount','Min Loan Amount','Pan ID','Processing Fee','Tenure','Minimum Tenure','Lead Status','Status','Follow Up Date','Comments'];
$sheet->fromArray([$headers], null, 'A1');

// Populate data from the database
$row = 2;
while ($row_data = $result->fetch_assoc()) {
    $sheet->fromArray([
        $row_data['id'],$row_data['Upload_Date'], $row_data['Upload_Time'], $row_data['Reference_Number'],
        $row_data['Campaign_Name'], $row_data['Customer_Name'], $row_data['State'],
        $row_data['City'], $row_data['Pin_Code'], $row_data['Customer_Contact_Number'],   
        $row_data['Customer_Email_ID'], $row_data['Cibil'], $row_data['Report'] ,  $row_data['Annual_Income'], $row_data['Max_Loan_Amount'], $row_data['Min_Loan_Amount'], $row_data['Pan_ID'], $row_data['Processing_Fee'],    
        $row_data['Tenure'], $row_data['Minimum_Tenure'], $row_data['Lead_Status'], $row_data['FollowUp_Date'], $row_data['Comments'],
    
    ] , null, 'A' . $row);
    $row++;
}

// Save Excel file
$writer = new Xlsx($spreadsheet);
$writer->save('output.xlsx');







header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="abc.xlsx"');
header('Cache-Control: max-age=0');
$writer->save('php://output');
 header('location:../admin/viewall.php');
?>