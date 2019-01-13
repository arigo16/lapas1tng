<?php
    require_once("../dompdf/autoload.inc.php");
    require_once('../include/config.php');

    use Dompdf\Dompdf;

    $html = '<!doctype html>
    <html>
    <head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
    <title>Laporan Kunjungan</title>
    </head>
    
    <body>
    <center><strong><span style="font-size:160%;">Laporan Kunjungan</span></strong></center>
    <center><strong><span style="font-size:100%;">Periode 01 Desember 2018 s/d 30 Januari 2019</span></strong></center>
    <br>
    <table style="width:100%">
      <tbody>
        <tr>
          <th width="10%" scope="col">ID</th>
          <th width="20%" scope="col">Nama</th>
          <th width="15%" scope="col">No KTP</th>
          <th width="10%" scope="col">Jenis Kelamin</th>
          <th width="20%" scope="col">Napi</th>
          <th width="10%" scope="col">Hubungan</th>
          <th width="15%" scope="col">Kunjungan</th>
        </tr>
        <tr>
          <td>19ht01b801</td>
          <td>Arigo</td>
          <td>3671021602960005</td>
          <td>Pria</td>
          <td>Desta</td>
          <td>Ayah</td>
          <td>2019-01-05 08:30:00</td>
        </tr>
        <tr>
          <td>19st01a201</td>
          <td>Fitri Nurul</td>
          <td>3671021602960002</td>
          <td>Wanita</td>
          <td>Joko</td>
          <td>Ibu</td>
          <td>2019-01-05 08:00:00</td>
        </tr>
        <tr>
          <td>19ht01b801</td>
          <td>Arigo</td>
          <td>3671021602960005</td>
          <td>Pria</td>
          <td>Desta</td>
          <td>Ayah</td>
          <td>2019-01-05 08:30:00</td>
        </tr>
        <tr>
          <td>19st01a201</td>
          <td>Fitri Nurul</td>
          <td>3671021602960002</td>
          <td>Wanita</td>
          <td>Joko</td>
          <td>Ibu</td>
          <td>2019-01-05 08:00:00</td>
        </tr>
        <tr>
          <td>19ht01b801</td>
          <td>Arigo</td>
          <td>3671021602960005</td>
          <td>Pria</td>
          <td>Desta</td>
          <td>Ayah</td>
          <td>2019-01-05 08:30:00</td>
        </tr>
        <tr>
          <td>19st01a201</td>
          <td>Fitri Nurul</td>
          <td>3671021602960002</td>
          <td>Wanita</td>
          <td>Joko</td>
          <td>Ibu</td>
          <td>2019-01-05 08:00:00</td>
        </tr>
        <tr>
          <td colspan="6" style="text-align:right; font-weight: bold;">
            Total Pengunjung
          </td>
          <td style="text-align:right; font-weight: bold;">
            2
          </td>
        </tr>
      </tbody>
    </table>
    </body>
    </html>';

    $date = date("Y-m-d");
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'landscape');

    $dompdf->render();

    $dompdf->stream('LapKunjungan-'.$date, array('Attachment'=>0));
    $output = $dompdf->output();
?>