<!DOCTYPE html>
<html lang="en">
<head>
	<title>dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('inc.link')
<form action="/pnd/store" method="POST">
			{{ csrf_field() }}
			
        <div class="container bg-dark h">
            <div class="page bg- flex-wr-sb-c p-rl-5 p-tb-8  ">
                <div class="main-card col-md-10 card ">
                   <div class="card-body m-9 ">
			
                                        <h2 class="card-title">FORM TAMBAH DATA PENDATANG</h5>
                                      
                                        <form action="/pnd/store" method="POST" class="ftb mt-20" style="">
                                        <!-- <div class="position-relative row form-group"><label for="nik" class="col-sm-3 col-form-label">ID</label>
                                                <div class="col-sm-9"><input name="id" id="company" placeholder="id" type="text" class="form-control"></div>
                                            </div> -->
                                            <!-- <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                                <div class="col-sm-9"> <select name="id_diri" id="select" class="form-control">
                                          <option value="">-NIK-</option>
                                          @foreach($penduduk as $p)
                                          <option value="{{$p->id}}">{{$p->nik}}</option>
                                          @endforeach
                                        </select>
                                        </div>
                                            </div> -->
                                            <div class="position-relative row form-group"><label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                                <div class="col-sm-9"><input name="nik" name="nik" id="company" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                                <div class="col-sm-9"><input name="nama" id="example" placeholder="" type="text" class="form-control" required></div>
											</div>
                                            <div class="position-relative row form-group"><label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                                <div class="col-sm-9"><input name="agama" id="example" placeholder="" type="text" class="form-control" required></div>
											</div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-9"><input name="tempat_lahir" id="example" placeholder="" type="text" class="form-control" required></div>
											</div>
                                            <div class="position-relative row form-group"><label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                           
                                           <div class="col-sm-9 "><input class="form-control" type="date" id="start" name="tgl_lahir"
                                                value=" "
                                               style="" required></div> </div>

											<div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">JK</label>
											<div class="col-sm-9">
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="jk" type="radio" class="form-check-input" value="Laki-laki" required>L</label></div>
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="jk" type="radio" class="form-check-input" value="Perempuan" required> P</label></div>
                                                     </div></div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">RT/RW</label>
                                                <div class="col-sm-9"><input name="rtrw" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Pekerjaan</label>
                                                <div class="col-sm-9"><input name="pekerjaan" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Warga Negara</label>
                                                <div class="col-sm-9"><input name="kwn" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Pendidikan Terahir</label>
                                                <div class="col-sm-9"><input name="pend_ahir" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Keterangan Membaca</label>
                                                <div class="col-sm-9"><input name="ket_membaca" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Setatus Perkawinan</label>
                                                <div class="col-sm-9"><input name="set_kawin" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Umur</label>
                                                <div class="col-sm-9"><input name="umur" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Gol Darah </label>
                                                <div class="col-sm-9"><input name="gol_darah" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>

<!-- //batas                                 -->
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Tanggal Datang </label>
                                                <div class="col-sm-9"><input class="form-control" type="date" id="start" name="tgl_datang"
                                                value=" "
                                                min="1940-01-01" max="2019-12-31" style="" required></div> </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Tempat Asal </label>
                                                <div class="col-sm-9"><input name="asal" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Penyebab Pindah </label>
                                                <div class="col-sm-9"><input name="ket_pindah" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-check">
											
												<button type="submit" class="btn btn-primary btn-sm  " style="background-color: rgb(41, 73, 128) ,float:right">
                                                       Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm" style="background-color: rgb(146, 24, 24) ">
                                                       Reset
                                                    </button>
                                        </div>
                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  