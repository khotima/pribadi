<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kematian</title>
    @include('inc.link')
</head>
<body class="animsition bg-dark">
@include('inc.header')

<body>
    	<!-- Headline -->
        <div row>
        <div class="bg-dark flex-wr-sb-c p-rl-20 p-tb-8 ">
            
			<div class=" col-lg-12 " >
            <div class="main-card mb-5 card">
                <div class="card-body"><p style="color:dark;font-size:26px;font-family:verdana;">Tabel Data Kematian</p>
                    <a type="button" class="btn mr-2 mb-2 btn-info float-right" href="{{route('kmt.tambah')}}" >+Tambah data</a>
									  
     
                                    <table class="mb-0 table table-hover mb-2">
                                    
                                            <thead>
                                            <tr >
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tanggal Meningal</th>
												<th>Tempat Meninggal</th>
                                                <th>Penyebab</th>
                                                <th>Makam</th>
                                                <th>Pelapor</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <?php $no=1;?>
                                            @foreach($kematians as $km)
                                           
                                            <tbody>
                                            <tr>
                                                
                                                <td>{{($no++)}}</td>
                                                <td>{{ $km->nama }}</td>
                                                <td>{{ $km->tgl }}</td>		
                                                <td>{{ $km->tempat}}</td>
                                                <td>{{ $km->penyebab}}</td>
                                                <td>{{ $km->makam}}</td>
												<td>{{ $km->pelapor}}</td>
                                                <td> 
                                                <a type="button" class="btn mr-2 mb-2 btn-success float-left" href="{{ route('kmt.edit',$km->id)}}" > <i class="far fa-edit"></i></a>
                                                <a type="button" class="btn mr-2 mb-2 btn-danger " href="{{ route('kmt.destroy', $km->id) }}" data-toggle="tooltip" data-placement="top" title="Delete " ><i class="far fa-trash-alt"></i> </i></a>
                                               </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



				</div>
</body>
</html>
@include('inc.footer')