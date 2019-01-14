<?php
    require_once("../dompdf/autoload.inc.php");
    require_once('../include/config.php');

    use Dompdf\Dompdf;

    $tgl_awal = $_POST['tgl_awal'];
    $tgl_akhir = $_POST['tgl_akhir'];
    $nama_napi = $_POST['nama_napi'];

    $r = $con->query("SELECT * FROM napi INNER JOIN kunjungan_online ON napi.id_napi = kunjungan_online.id_napi WHERE nama_napi='$nama_napi' AND date(tgl_kunjungan) between DATE('$tgl_awal') AND DATE('$tgl_akhir')");

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
    <center><strong><span style="font-size:100%;">Periode '.$tgl_awal.' s/d '.$tgl_akhir.'</span></strong></center>
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
        </tr>';
        while ($rr = $r->fetch_array()) {
        $html .='
        <tr>
          <td>'.$rr['id_kunjungan_online'].'</td>
          <td>'.$rr['nama'].'</td>
          <td>'.$rr['no_ktp'].'</td>
          <td>'.$rr['jenis_kelamin'].'</td>
          <td>'.$rr['nama_napi'].'</td>
          <td>'.$rr['hubungan'].'</td>
          <td>'.$rr['tgl_kunjungan'].'</td>
        </tr>';
        }
        $html .= '
        <tr>
          <td colspan="6" style="text-align:right; font-weight: bold;">
            Total Pengunjung
          </td>';
          $result = $con->query("SELECT COUNT(*) FROM napi INNER JOIN kunjungan_online ON napi.id_napi = kunjungan_online.id_napi WHERE nama_napi='$nama_napi' AND date(tgl_kunjungan) between DATE('$tgl_awal') AND DATE('$tgl_akhir')");
          $row = $result->fetch_row();
          $html .='
          <td style="text-align:center; font-weight: bold;">
            '.$row[0].'
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