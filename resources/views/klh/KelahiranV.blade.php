<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kelahiran</title>
    @include('inc.link')
</head>
<body class="animsition bg-dark">
@include('inc.header')
<body>
    	<!-- Headline -->

        <div row >
        <div class="bg-dark flex-wr-sb-c p-rl-20 p-tb-8 ">
            
			<div class=" col-lg-12 " >
            <div class="main-card mb-5 card">
                <div class="card-body"><p style="color:dark;font-size:26px;font-family:verdana;">Tabel Data Kelahiran</p>
                    <a type="button" class="btn mr-2 mb-2 btn-info float-right" href="klh/tambah" >+Tambah data</a>
									  
     
                                    <table class="mb-0 table table-hover mb-2">
                                    
                                            <thead>
                                            <tr >
                                                
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>No Akta</th>
                                                <th>Nama</th>
												<th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
												<th>JK</th>
                                                <th>Anak Ke</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <?php $no=1;?>
                                            @foreach($kelahiran as $kl)
                                           
                                            <tbody>
                                            <tr>
                                                
                                                <td>{{($no++)}}</td>
                                                <td>{{ $kl->nik }}</td>
                                                <td>{{ $kl->akta }}</td>		
                                                <td>{{ $kl->nama}}</td>										
                                                <td>{{ $kl->tempat_lahir}}</td>
												<td>{{ $kl->tgl_lahir}}</td>
                                                <td>{{ $kl->jk }}</td>                                             
                                                <td>{{ $kl->anak_ke }}</td>
                                                <td> 
                                                <a type="button" class="btn mr-2 mb-2 btn-success float-left" href="{{ route('klh.edit',$kl->id)}}" > <i class="far fa-edit"></i></a>
                                                <a type="button" class="btn mr-2 mb-2 btn-danger " href="{{ route('klh.destroy', $kl->id) }}" data-toggle="tooltip" data-placement="top" title="Delete " ><i class="far fa-trash-alt"></i> </i></a>
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


