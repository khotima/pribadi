<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data KK</title>
    @include('inc.link')
</head>
<body class="animsition bg-dark">
@include('inc.header')
<body>
    	<!-- Headline -->

        <div class=" bg-dark flex-wr-sb-c p-rl-20 p-tb-8 ">
            
			<div class="col-lg-12 " >
                                <div class="main-card mb-5 card">
									<div class="card-body"><p style="color:dark;font-size:26px;font-family:verdana;">Tabel Data KK</p>
									 <a type="button" class="btn mr-2 mb-2 btn-info float-right" href="kk/tambah" >+Tambah data</a>
									  
     
                                    <table class="mb-0 table table-hover mb-2">
                                    
                                            <thead>
                                            <tr >
                                                <th>No</th>
                                                <th>No KK</th>
                                                <th>Nis</th>
                                                <th>Nama</th>
												<th>Status Dalam Kluarga</th>
                                                <th>Ayah</th>
                                                <th>Ibu</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <?php $no=1;?>
                                            @foreach($kk as $kak)
                                           
                                            <tbody>
                                            <tr>
                                                
                                                <td>{{($no++)}}</td>
                                                <td>{{ $kak->no_kk }}</td>
                                                <td>{{ $kak->nik}}</td>										
                                                <td>{{ $kak->nama}}</td>										
                                                <td>{{ $kak->status}}</td>										
                                                <td>{{ $kak->ayah}}</td>										
                                                <td>{{ $kak->ibu}}</td>
                                                <td> 
                                                <a type="button" class="btn mr-2 mb-2 btn-success float-left" href="{{ route('kk.edit',$kak->id)}}" > <i class="far fa-edit"></i></a>
                                                <a type="button" class="btn mr-2 mb-2 btn-danger " href="{{ route('kk.destroy', $kak->id) }}" data-toggle="tooltip" data-placement="top" title="Delete " ><i class="far fa-trash-alt"></i> </i></a>
                                                <a type="button" class="btn mr-2 mb-2 btn-success bg-warning "  href="{{ route('kk.detail', $kak->id) }}" title="Detail"  ><i class="far fa-user"></i></a></td>

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