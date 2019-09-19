<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pendatang</title>
    @include('inc.link')
</head>
<body class="animsition bg-dark">
@include('inc.header')
<body>
    	<!-- Headline -->
        <div row>
        <div class="bg-dark flex-wr-sb-c p-rl-20 p-tb-8 ">
   
			<div class="col-lg-12 " >
                                <div class="main-card mb-5 card">
									<div class="card-body"><p style="color:dark;font-size:26px;font-family:verdana;">Tabel Data Pendatang</p>
									 <a type="button" class="btn mr-2 mb-2 btn-info float-right" href="pnd/tambah" >+Tambah data</a>
									  
     
                                    <table class="mb-0 table table-hover mb-2">
                                    
                                            <thead>
                                            <tr >
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Agama</th>
												<th>JK</th>
                                                <th>Status Perkawinan</th>
                                                <th>Pekerjaan </th>

                                                <!-- <th>Agama</th>
												<th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
												<th>JK</th>
                                                <th>RT/RW</th>
                                                <th>Pekerjaan </th> -->
                                                <!-- <th>Pendidikan Terakhir</th>
                                                <th>Kewarganegaraan</th>                                               
                                                <th>Keterangan Membaca</th>
                                                <th>Umur</th>
                                                <th>Gol Darah</th> -->
                                                <th>Tanggal Datang</th>	
                                                <th>Alamat Asal</th>
                                                <th>Alasan Pindah</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <?php $no=1;?>
                                            
                                            <tbody>
                                            <tr>
                                                @foreach($pendatang as $p)

                                                <td>{{($no++)}}</td>
												 <td>{{ $p->nik }}</td>
												<td>{{ $p->nama}}</td>
                                                <td>{{ $p->agama}}</td>
                                                <td>{{ $p->jk }}</td>
                                                <td>{{ $p->set_kawin }}</td>
												<td>{{ $p->pekerjaan }}</td>
                                                
                                                <!-- <td>{{ $p->agama}}</td>
                                                <td>{{ $p->tempat_lahir}}</td>
												<td>{{ $p->tgl_lahir}}</td>
                                                <td>{{ $p->jk }}</td>
                                                <td>{{ $p->rtrw }}</td>
												<td>{{ $p->pekerjaan }}</td> -->
                                                <!-- <td>{{ $p->pend_ahir }}</td>
                                                <td>{{ $p->kwn }}</td>
                                                <td>{{ $p->ket_membaca }}</td>
                                                <td>{{ $p->set_kawin }}</td>
												<td>{{ $p->umur }}</td>
                                                <td>{{ $p->gol_darah }}</td>  -->
                                                <td>{{ $p->tgl_datang}}</td>
                                                <td>{{ $p->asal}}</td>
                                                <td>{{ $p->ket_pindah}}</td>
                                                <td> 
                                                <a type="button" class="btn mr-2 mb-2 btn-success float-left" href="{{ route('pnd.edit',$p->id)}}" > <i class="far fa-edit"></i></a>
                                                <a type="button" class="btn mr-2 mb-2 btn-danger " href="{{ route('pnd.destroy', $p->id) }}" data-toggle="tooltip" data-placement="top" title="Delete " ><i class="far fa-trash-alt"></i> </i></a>
                                                <a type="button" class="btn mr-2 mb-2 btn-success bg-warning " href=""><i class="far fa-user"></i></a></td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



				</div></div></div>

    


</body>
</html>
@include('inc.footer')