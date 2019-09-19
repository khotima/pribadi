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

        <div class="bg-dark flex-wr-sb-c p-rl-20 p-tb-8 ">
            
			<div class="col-lg-12 " >
                                <div class="main-card mb-5 card">
									<div class="card-body"><p style="color:dark;font-size:26px;font-family:verdana;">Tabel Data Pendatang</p>
									 <a type="button" class="btn mr-2 mb-2 btn-info float-right" href="pin/tambah" >+Tambah data</a>
									  
     
                                    <table class="mb-0 table table-hover mb-2">
                                    
                                            <thead>
                                           

                                            <tr >
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Tanggal Pindah</th>
                                                <th>Tempat Tujuan</th>
                                                <th>Alasan Pindah</th>

                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <?php $no=1;?>
                                            @foreach($pindah as $pi)
                                           
                                            <tbody>
                                            <tr>
                                                
                                                <td>{{($no++)}}</td>
                                                <td>{{ $pi->nik }}</td>
                                                <td>{{ $pi->nama}}</td>
                                                <td>{{ $pi->tgl_pindah }}</td>		
                                                <td>{{ $pi->almt_tujuan}}</td>										
												<td>{{ $pi->alasan}}</td>
                                                <td><a type="button" class="btn mr-2 mb-2 btn-success float-left" href="{{ route('pin.edit',$pi->id)}}" > <i class="far fa-edit"></i></a>
                                                <a type="button" class="btn mr-2 mb-2 btn-danger " href="{{ route('pin.destroy', $pi->id) }}" data-toggle="tooltip" data-placement="top" title="Delete " ><i class="far fa-trash-alt"></i> </i></a>
                                                </td>
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




