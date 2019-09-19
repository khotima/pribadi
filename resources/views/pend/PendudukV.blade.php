<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penduduk</title>
    @include('inc.link')
</head>
<body class="animsition bg-dark">
@include('inc.header')

    	<!-- Headline -->

            <div row>
        <div class="bg-dark flex-wr-sb-c p-rl-20 p-tb-8 ">
             

			<div class=" col-lg-12   " >
            <div class="main-card mb-5 card">
                <div class="card-body"><p style="color:dark;font-size:26px;font-family:verdana;">Tabel Data Penduduk</p>
                <a type="button" class="btn mr-2 mb-2 btn-info float-right" href="pend/tambah" >+Tambah data</a>
                <select id="my_selection" class="btn mr-2 mb-2 btn-dark float-right"  target="_blank" value="Cetak">
                    <option  value="w" href="#" readonly >Cetak</option>
                    <option value="x" href="/penduduk/cetak_pdf"><i class="fas fa-print"></i>PDF</option>
                    <option value="y" href="/penduduk/cetak_excel">Exel</option>
                    </select>
                    </a>
                    <script>
                    document.getElementById('my_selection').onchange = function() {
                        window.location.href = this.children[this.selectedIndex].getAttribute('href');
                    }
                    </script>
               
               
               
               
                <!-- <a href="/penduduk/cetak_pdf" type="button" class="btn mr-2 mb-2 btn-primary " target="_blank"><i class="fas fa-print"></i>Cetak </a>     -->
    <form class="form-inline my-2 my-lg-0" method="get" action="{{ route('pend.search') }}">
    {{ csrf_field() }}
   <input class="form-control mr-sm-2 mb-2" type="text" name="search" placeholder="Cari Berdasarkan NIK/Nama" >
    <button class="btn mr-2 mb-2 btn-info" type="submit">Cari</button> 
    </form>

									  
     
                                    <table class="mb-0 table table-hover mb-2">
                                    
                                            <thead>
                                            <tr >
                                                <th>no</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Agama</th>
												<th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
												<th>JK</th>
                                                <th>RT/RW</th>
                                                <th>Pekerjaan </th>
                                                <th>Pendidikan Terakhir</th>
                                                <!-- <th>Kewarganegaraan</th>                                               
                                                <th>Keterangan Membaca</th>
                                                <th>Status Perkawinan</th>
                                                <th>Umur</th>
                                                <th>Gol Darah</th>	 -->
                                                <th>Aksi</th>
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
                                                <!-- <td>{{ $p->kwn }}</td>
                                               
                                                <td>{{ $p->ket_membaca }}</td>
                                                <td>{{ $p->set_kawin }}</td>
												<td>{{ $p->umur }}</td>
                                                <td>{{ $p->gol_darah }}</td> --> 
                                                <td> 
                                                <a type="button" class="btn mr-2 mb-2 btn-success float-left" href="{{ route('pend.edit',$p->id)}}"  title="Edit"> <i class="far fa-edit"></i></a>
                                                <a type="button" class="btn mr-2 mb-2 btn-danger "  href="{{ route('pend.destroy', $p->id) }}" data-toggle="tooltip" data-placement="top" title="Delete " ><i class="far fa-trash-alt"></i> </i></a>
                                                <a type="button" class="btn mr-2 mb-2 btn-success bg-warning "  href="{{ route('cetak', $p->id) }}" title="Detail"  ><i class="far fa-user"></i></a></td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



				</div></div></div>

                <!-- 1
<script>
$(document).on('ajaxComplete ready', function () {
    $('.modalMd').off('click').on('click', function () {
        $('#modalMdContent').load($(this).attr('value'));
        $('#modalMdTitle').html($(this).attr('title'));
    });
});
</script>

<div class="modal fade" id="modalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="modalMdTitle"></h4>
                  </div>
                  <div class="modal-body">
                      <div class="modalError"></div>
                      <div id="modalMdContent"></div>
                  </div>
              </div>
          </div>
        </div> -->

</body>
</html>
@include('inc.footer')
<!-- onclick="return confirm('Confirm delete?')" -->
<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">The Sun Also Rises</h4>
      </div>
      <div class="modal-body">
        
     
                                    <table>
                                    <thead>
                                    <tr > @foreach($penduduk as $p)
                                      
                                        <tr>
                                        <th>NIK</th><td></td><td>:</td>
                                        <td>{{ $p->nik }}</td>
                                        </tr>


                                        <tr>
                                        <th>Nama</th><td>:</td>
                                        <td>{{ $p->nama}}</td>
                                        </tr>
                                        <tr>
                                        <th>Agama</th><td>:</td>
                                        <td>{{ $p->agama}}</td>
                                        </tr>
                                        <tr>
                                        <th>Tempat Lahir</th><td>:</td>
                                        <td>{{ $p->tempat_lahir}}</td>
                                        </tr>
                                        <tr>
                                        <th>Tanggal Lahir</th><td>:</td>
                                        <td>{{ $p->tgl_lahir}}</td>
                                        </tr>
                                        <tr>
                                        <th>JK</th><td>:</td>
                                        <td>{{ $p->jk }}</td>
                                        </tr>
                                        <tr>
                                        <th>RT/RW</th><td>:</td>
                                        <td>{{ $p->rtrw }}</td>
                                        </tr>
                                        <tr>
                                        <th>Pekerjaan </th><td>:</td>
                                        <td>{{ $p->pekerjaan }}</td>
                                        </tr>
                                        <tr>
                                        <th>Pendidikan Terakhir</th><td></td><td>:</td>
                                        <td>{{ $p->pend_ahir }}</td>


                                        </tr>

                                        <!-- <th>Kewarganegaraan</th>                                               
                                        <th>Keterangan Membaca</th>
                                        <th>Status Perkawinan</th>
                                        <th>Umur</th>
                                        <th>Gol Darah</th>	 -->
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                   
                                   
                                    <tbody>
                                    <tr>
                                        
                                        <!-- <td>{{ $p->kwn }}</td>
                                       
                                        <td>{{ $p->ket_membaca }}</td>
                                        <td>{{ $p->set_kawin }}</td>
                                        <td>{{ $p->umur }}</td>
                                        <td>{{ $p->gol_darah }}</td> --> 
                                       
                                    </tr>

                                    @endforeach
                                    </table>


      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Close</button>
        <span class="pull-right">
          <button type="cancel" class="btn btn-primary">
            Batal
          </button>
        </span>
      </div>
    </div>
  </div>
</div>