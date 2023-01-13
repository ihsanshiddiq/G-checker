<?php
session_start();

require_once __DIR__ . '/../../vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();
    require_once('../inc.koneksi.php'); 		

    require_once('../class/class.barang.php'); 		
    $objBarang = new Barang(); 
    $arrayResult = $objBarang->SelectAllBarang();

    #careful when u wanna use (') and (")
    $print_report = '
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>print-user</title>

            <style>
                table, th, td{
                    border : 1px solid black;
                    border-collapse: collapse;
                    text-align: center;
                }
                tr:nth-child(even) {
                    background-color: #d4d4d4;
                  }

            </style>
            
            
        </head>
        <body>
        <H1>Report Barang</H1>
        <br>
        <table>
            <tr>
            <th>Serial Number</th>
            <th>Jenis Barang</th>
            <th>Tanggal Keluar</th>
            <th>Tanggal Garansi</th>
            <th>Status</th>
            </tr>';

            if(count($arrayResult) == 0){
                $print_report.= '<tr><td colspan="5">Tidak ada data!</td></tr>';
            } else{	
                $no = 1;	
                foreach ($arrayResult as $dataBarang) {
                    $print_report.='<tr>
                    <td>'.$dataBarang->serial_number.'</td>	
                    <td>'.$dataBarang->jenis_barang.'</td>
                    <td>'.$dataBarang->tanggal_keluar.'</td>
                    <td>'.$dataBarang->tanggal_garansi.'</td>
                    <td>'.$dataBarang->status.'</td>
                    </tr>';
				
                    $no++;	
                }
            }



 $print_report.= '</table>
            <p>'.date('l, d-m-Y  h:i:s a').'</p>
            <p>oleh : '.$_SESSION['nama'].'</p>
        </body>
    </html>
    ';

    #fungsi untuk ngeprint bang
    $mpdf->WriteHTML($print_report);
    $mpdf->Output('ReportPDF-' .$_SESSION['nama'] . '.pdf', \Mpdf\Output\Destination::INLINE);
    #u can also use Output('daftar-user.pdf', 'I'); 
    #note : read the documentation for more





    
