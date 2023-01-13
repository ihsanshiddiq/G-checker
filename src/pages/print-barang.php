<?php
// session_start();

require_once __DIR__ . '/../../vendor/autoload.php';

    
    require_once('./inc.koneksi.php'); 		

    // require_once('../class/class.barang.php');  		
    // $objBarang = new Barang(); 
    // $arrayResult = $objBarang->SelectOneBarang();
    
    
    
class Print_barang{
    
        function printOne($serial_number, $jenis_barang, $tanggal_keluar, $tanggal_garansi){
            $mpdf = new \Mpdf\Mpdf();
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
            </tr>             
                    <tr>
                        <td>'.$serial_number.'</td>	
                        <td>'.$jenis_barang.'</td>
                        <td>'.$tanggal_keluar.'</td>
                        <td>'.$tanggal_garansi.'</td>
                                          
                    </tr>';         



 $print_report.= '</table>
            <p>'.date('l, d-m-Y  h:i:s a').'</p>
            <p>oleh : '.$_SESSION['nama'].'</p>
        </body>
    </html>
    ';

    #fungsi untuk ngeprint bang
    $mpdf->WriteHTML($print_report);
    $mpdf->Output('SerialNumber-' .$dataBarang->serial_number . '.pdf', \Mpdf\Output\Destination::INLINE);

    }
}



    #careful when u wanna use (') and (")
    #u can also use Output('daftar-user.pdf', 'I'); 
    #note : read the documentation for more





    
