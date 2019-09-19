                
                          <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('inc.link')
<body class="bg-dark">
  
<div class="bg-dark flex-wr-sb-c p-rl-20 p-tb-8 ">
    <div class=" col-lg-9  " >
            <div class="container main-card mb-5 card float-center ">
    <div>
    @foreach($penduduk as $pn)  
    <h3 class="text mb-2">Detail Penduduk <a type="export" href="{{ route('cetak', $pn->id) }}"  class="btn btn-primary mb-2 btn-sm float-right" style="background-color: rgb(41, 73, 128) ,float:right">
                CETAK
              </a></h3> 
    
      
        </div>
        <hr>
     
      {{ csrf_field() }}
          <table><tr>
        <th>NIK</th>
            <td>:</td>
            <td>{{$pn->nik}}</td></tr>
            <tr>
        <th>Nama</td>
            <td>:</td>
            <td>{{$pn->nama}}</td></tr>
        <th>Agama</td>
            <td>:</td>
            <td>{{$pn->agama}}</td></tr>
        <th>Tempat Lahir</td>
            <td>:</td>
            <td>{{$pn->tempat_lahir}}</td></tr>
        <th>Tanggal Lahir</td>
            <td>:</td>
            <td>{{$pn->tgl_lahir}}</td></tr>
        <th>JK</td>
            <td>:</td>
            <td>{{$pn->jk}}</td></tr>
        <th>RT/RW</td>
            <td>:</td>
            <td>{{$pn->rtrw}}</td></tr>
        <th>Pekerjaan</td>
            <td>:</td>
            <td>{{$pn->pekerjaan}}</td></tr>
        <th>Kewarganegaraan</td>
            <td>:</td>
            <td>{{$pn->kwn}}</td></tr>
        <th>Pendidikan Terakhir</td>
            <td>:</td>
            <td>{{$pn->pend_ahir}}</td></tr>
        <th>Keterangan Membaca</td>
            <td>:</td>
            <td>{{$pn->ket_membaca}}</td></tr>
        <th>Status Perkawinan</td>
            <td>:</td>
            <td>{{$pn->set_kawin}}</td></tr> 
        <th>Umur</td>
            <td>:</td>
            <td>{{$pn->umur}}</td></tr>
        <th>Golongan Darah</td>
            <td>:</td>
            <td>{{$pn->gol_darah}}</td></tr>
    
    

<script>
function goBack() {
  window.history.back();
}
</script>

     
      </table>
      <hr>
      <button class="btn btn-success mb-2 btn-sm float-right" onclick="goBack()">Kembali</button>

      @endforeach
    </div>
  </div>
</div>
</body>
</html>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
    position: fixed;
	top: 40%;
	left: 50%;
	margin-top: -140px;
	margin-left: -240px;
	text-align: none;
	padding:40px;
	display: table;
    width: 35%;
    max-width: 1000px;
  height: 80%;
/*  
  float: none;
 

  padding: 0 10px; */
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 100%) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
.text{
    font-family:verdana;
    font-size:30px;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 10px;
  background-color: #f1f1f1;
  top: 40%;
	left: 50%;
	margin-top: 100px;
	margin-left: -240px;
	text-align: none;
	padding:40px;
	display: table;
    width: 45%;
}
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 10px;
  background-color: white;}

.container{ max-width: 100%;
  margin-left:0px;
  background-color: #f1f1f1;
  position: relative;
  
  
}
</style>
