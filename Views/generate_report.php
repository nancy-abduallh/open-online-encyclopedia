<?php
session_start();
require_once'../controls/dbcon.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encyclopedia";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
    }

    header('Content-Type: text/html; charset=utf-8');



    
        $sql = "SELECT * FROM user";
        $result = $con->query($sql);
        
        // Create new PDF document   
             require_once('tcpdf/tcpdf.php'); 
        $pdf = new TCPDF( PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('User Details Report');
        
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        
        $pdf->AddPage();
        
        // Set font
        $pdf->SetFont('dejavusans', '', 12);

        $pdf->Cell(0, 10, 'Users Details: ', 0, 1);



        // Output user details in the PDF
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $pdf->Cell(0, 10, 'User ID: ' . $row['user_id'], 0, 1);
                $pdf->Cell(0, 10, 'Name: ' . $row['username'], 0, 1);
                $pdf->Cell(0, 10, 'Email: ' . $row['email'], 0, 1);
                $pdf->Cell(0, 10, 'Age: ' . $row['age'], 0, 1);
                $pdf->Cell(0, 10, 'Gender: ' . $row['gender'], 0, 1);

                $pdf->Cell(0, 10, '-------------------------------------------', 0, 1);
            }
        }
        
        // Close and output PDF document
        $pdf->Output('user_details_report.pdf', 'D');
        
        // Close MySQL connection
        $con->close();





?>