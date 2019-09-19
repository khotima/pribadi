<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('inc.link')
 			
    <div row>
			                    <div class="container bg-dark h">
                                <div class="page bg- flex-wr-sb-c p-rl-5 p-tb-8  ">
								<div class="main-card col-md-10 card ">
                                    <div class="card-body m-9 ">
                                        <h2 class="card-title text-center c-info">EDIT DATA PENDUDUK</h2>
                                        @foreach($penduduk as $pn)
                                        <form action="{{ route('pend.update',$pn->id)}}" method="post" class="ftb mt-20" style="">
                                        {{ csrf_field() }}
                                            </div>
                                        <div class="position-relative row form-group"><div class="col-sm-3"><input name="nik" id="company"  class="form-control" value="NIK" readonly>
                                        </div>  <div class="col-sm-9"><input name="nik" id="company"  class="form-control" value="{{$pn->nik}}"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                                <div class="col-sm-9"><input name="nama" id="example" type="text" class="form-control" value="{{$pn->nama}}"></div>
											</div>
                                            <div class="position-relative row form-group"><label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                                <div class="col-sm-9"><input name="agama" id="example" value="{{$pn->agama}}" type="text" class="form-control"></div>
											</div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-9"><input name="tempat_lahir" id="example" value="{{$pn->tempat_lahir}}"type="text" class="form-control"></div>
											</div>
                                            <div class="position-relative row form-group"><label for="tgl_lahir"   class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                           
                                           <div class="col-sm-9 "><input class="form-control" type="date" id="start" name="tgl_lahir"
                                                value="{{$pn->tgl_lahir}}"
                                                min="1940-01-01" max="2019-12-31" style=""></div> </div>

											<div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">JK</label>
											<div class="col-sm-9">
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="jk" type="radio" class="form-check-input" value="Laki-laki" {{ $pn->jk == 'Laki-laki' ? 'checked' : ''}}>L</label></div>
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="jk" type="radio" class="form-check-input" value="Perempuan" {{ $pn->jk == 'Perempuan' ? 'checked' : ''}}> P</label></div>
                                                     </div></div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">RT/RW</label>
                                                <div class="col-sm-9"><input name="rtrw" id="example" value="{{$pn->rtrw}}" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Pekerjaan</label>
                                                <div class="col-sm-9"><input name="pekerjaan" id="example" value="{{$pn->pekerjaan}}" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Warga Negara</label>
                                                <div class="col-sm-9"><input name="kwn" id="example" value="{{$pn->kwn}}" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Pend. Terahir</label>
                                                <div class="col-sm-9"><input name="pend_ahir" id="example" value="{{$pn->pend_ahir}}" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Ket. Membaca</label>
                                                <div class="col-sm-9"><input name="ket_membaca" id="example" value="{{$pn->ket_membaca}}"type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Set. Perkawinan</label>
                                                <div class="col-sm-9"><input name="set_kawin" id="example" value="{{$pn->set_kawin}}" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Umur</label>
                                                <div class="col-sm-9"><input name="umur" id="example" value="{{$pn->umur}}"  type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Gol Darah </label>
                                                <div class="col-sm-9"><input name="gol_darah" id="example" value="{{$pn->gol_darah}}" type="text" class="form-control"></div>
                                            </div>


                                            <div class="position-relative row form-check">
                                            <div class="col text-right">
												<button type="submit" class="btn btn-primary btn-sm  " style="background-color: rgb(41, 73, 128) ,float:right">
                                                       Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm" style="background-color: rgb(146, 24, 24) ">
                                                       Reset
                                                    </button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                          </div>