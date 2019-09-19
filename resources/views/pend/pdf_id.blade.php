<!DOCTYPE html>
<html>
<head>
    <title>LAPORAN DATA PENDUDUK </title>
    
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
</head>
<body>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
  margin-left:170px;
  margin-top:20px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th :nth-child(even){background-color: #f2f2f2;}{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: 0;
  color: black;
}
#customers th:hover {background-color: #ddd;}
#title{
    text-align:center;
}
</style>

<h1 id="title">Detail Data Penduduk </h1> 
<hr>
 <table id="customers" >
 @foreach($penduduk as $pn)    
 <tr>
        <th>NIK</th>
            <td>:</td>
            <td>{{$pn->nik}}</td></tr>
            <tr>
        <th>Nama</th>
            <td>:</td>
            <td>{{$pn->nama}}</td></tr>
            <tr>
        <th>Agama</th>
            <td>:</td>
            <td>{{$pn->agama}}</td></tr>
            <tr>
        <th>Tempat Lahir</th>
            <td>:</td>
            <td>{{$pn->tempat_lahir}}</td></tr>
            <tr>
        <th>Tanggal Lahir</th>
            <td>:</td>
            <td>{{$pn->tgl_lahir}}</td></tr>
            <tr>
        <th>JK</th>
            <td>:</td>
            <td>{{$pn->jk}}</td></tr>
            <tr>
        <th>RT/RW</th>
            <td>:</td>
            <td>{{$pn->rtrw}}</td></tr>
            <tr>
        <th>Pekerjaan</th>
            <td>:</td>
            <td>{{$pn->pekerjaan}}</td></tr>
            <tr>
        <th>Kewarganegaraan</th>
            <td>:</td>
            <td>{{$pn->kwn}}</td></tr>
            <tr>
        <th>Pendidikan Terakhir</th>
            <td>:</td>
            <td>{{$pn->pend_ahir}}</td></tr>
            <tr>
        <th>Keterangan Membaca</th>
            <td>:</td>
            <td>{{$pn->ket_membaca}}</td></tr>
            <tr>
        <th>Status Perkawinan</th>
            <td>:</td>
            <td>{{$pn->set_kawin}}</td></tr> 
            <tr>
        <th>Umur</th>
            <td>:</td>
            <td>{{$pn->umur}}</td></tr>
            <tr>
        <th>Golongan Darah</th>
            <td>:</td>
            <td>{{$pn->gol_darah}}</td></tr>
           @endforeach    
</table>           
</center>     

</body>
</html>