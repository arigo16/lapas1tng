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
    <center><strong><span style="font-size:160%;">Laporan Statistik Pengunjungan Tahunan</span></strong></center>
    <center><strong><span style="font-size:100%;">Periode 2018</span></strong></center>
    <br>
    <table width="100%" border="1">
      <tbody>
        <tr>
          <th width="15%" scope="col">Bulan</th>
          <th width="25%" style="text-align: center" scope="col"><span style="text-align: center"></span>Data Pengunjung</th>
          <th width="20%" style="text-align: center" scope="col">Pengunjung Pria</th>
          <th width="20%" style="text-align: center" scope="col">Pengunjung Wanita</th>
          <th width="20%" style="text-align: center" scope="col">Pengunjung Anak2</th>
        </tr>
        <tr>
          <th scope="row">Januari</th>
          <td style="text-align: center">26</td>
          <td style="text-align: center">60</td>
          <td style="text-align: center">20</td>
          <td style="text-align: center">8</td>
        </tr>
        <tr>
          <th scope="row">Februari</th>
          <td style="text-align: center">24</td>
          <td style="text-align: center">58</td>
          <td style="text-align: center">22</td>
          <td style="text-align: center">5</td>
        </tr>
        <tr>
          <th scope="row">Maret</th>
          <td style="text-align: center">28</td>
          <td style="text-align: center">48</td>
          <td style="text-align: center">25</td>
          <td style="text-align: center">2</td>
        </tr>
        <tr>
          <th scope="row">April</th>
          <td style="text-align: center">22</td>
          <td style="text-align: center">88</td>
          <td style="text-align: center">12</td>
          <td style="text-align: center">10</td>
        </tr>
        <tr>
          <th scope="row">Mei</th>
          <td style="text-align: center">21</td>
          <td style="text-align: center">32</td>
          <td style="text-align: center">23</td>
          <td style="text-align: center">6</td>
        </tr>
        <tr>
          <th scope="row">Juni</th>
          <td style="text-align: center">17</td>
          <td style="text-align: center">35</td>
          <td style="text-align: center">24</td>
          <td style="text-align: center">9</td>
        </tr>
        <tr>
          <th scope="row">Juli</th>
          <td style="text-align: center">26</td>
          <td style="text-align: center">34</td>
          <td style="text-align: center">22</td>
          <td style="text-align: center">6</td>
        </tr>
        <tr>
          <th scope="row">Agustus</th>
          <td style="text-align: center">24</td>
          <td style="text-align: center">31</td>
          <td style="text-align: center">21</td>
          <td style="text-align: center">8</td>
        </tr>
        <tr>
          <th scope="row">September</th>
          <td style="text-align: center">29</td>
          <td style="text-align: center">35</td>
          <td style="text-align: center">16</td>
          <td style="text-align: center">7</td>
        </tr>
        <tr>
          <th scope="row">Oktober</th>
          <td style="text-align: center">30</td>
          <td style="text-align: center">32</td>
          <td style="text-align: center">18</td>
          <td style="text-align: center">5</td>
        </tr>
        <tr>
          <th scope="row">November</th>
          <td style="text-align: center">32</td>
          <td style="text-align: center">35</td>
          <td style="text-align: center">20</td>
          <td style="text-align: center">4</td>
        </tr>
        <tr>
          <th scope="row">Desember</th>
          <td style="text-align: center">38</td>
          <td style="text-align: center">36</td>
          <td style="text-align: center">21</td>
          <td style="text-align: center">2</td>
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