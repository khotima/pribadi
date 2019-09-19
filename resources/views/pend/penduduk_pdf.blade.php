<!DOCTYPE html>
<html>
<head>
    <title>LAPORAN DATA PENDUDUK </title>
    
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 6pt;
      border: 1px solid #ddd;
		}
	</style>
	<center>
		<h5>LAPORAN DATA PENDUDUK</h4>
	</center>
    <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
                                            <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Agama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>JK</th>
                                            <th>RT/RW</th>
                                            <th>Pekerjaan </th>
                                            <th>Pend. Terakhir</th>
                                            <th>Kewarganegaraan</th>                                               
                                            <th>Ket. Membaca</th>
                                            <th>Status </th>
                                            <th>Umur</th>
                                            <th>Gol Darah</th>	
                                            </tr>
                                            </thead>
                                            <tbody><?php $no=1;?>
                                               @foreach($penduduk as $p)
                                            <tr>
                                            <td>{{($no++)}}</td>
                                            <td>{{ $p->nik }}</td>
                                            <td>{{ $p->nama}}</td>
                                            <td>{{ $p->agama}}</td>
                                            <td>{{ $p->tempat_lahir}}</td>
                                            <td>{{ $p->tgl_lahir}}</td>
                                            <td>{{ $p->jk }}</td>
                                            <td>{{ $p->rtrw }}</td>
                                            <td>{{ $p->pekerjaan }}</td>
                                            <td>{{ $p->pend_ahir }}</td>
                                            <td>{{ $p->kwn }}</td>
                                            
                                            <td>{{ $p->ket_membaca }}</td>
                                            <td>{{ $p->set_kawin }}</td>
                                            <td>{{ $p->umur }}</td>
                                            <td>{{ $p->gol_darah }}</td> 
                                        
                                            @endforeach
                                            </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



	<!-- <table>
		<thead>
        <thead>
        <tr >
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Agama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>JK</th>
            <th>RT/RW</th>
            <th>Pekerjaan </th>
            <th>Pend. Terakhir</th>
            <th>Kewarganegaraan</th>                                               
            <th>Ket. Membaca</th>
            <th>Status </th>
            <th>Umur</th>
            <th>Gol Darah</th>	
        </tr>
        </thead>
        <?php $no=1;?>
        @foreach($penduduk as $p)
        
        <tbody>
        <tr>
            
            <td>{{($no++)}}</td>
            <td>{{ $p->nik }}</td>
            <td>{{ $p->nama}}</td>
            <td>{{ $p->agama}}</td>
            <td>{{ $p->tempat_lahir}}</td>
            <td>{{ $p->tgl_lahir}}</td>
            <td>{{ $p->jk }}</td>
            <td>{{ $p->rtrw }}</td>
            <td>{{ $p->pekerjaan }}</td>
            <td>{{ $p->pend_ahir }}</td>
            <td>{{ $p->kwn }}</td>
            
            <td>{{ $p->ket_membaca }}</td>
            <td>{{ $p->set_kawin }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->gol_darah }}</td> 
        
			@endforeach
		</tbody>
	</table>
  -->
</body>
</html>