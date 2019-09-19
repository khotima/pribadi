<!DOCTYPE html>
<html lang="en">
<head>
	<title>dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('inc.link')
<form action="/pin/store" method="POST">
			{{ csrf_field() }}
			
			<div class="container1 bg-dark h">
            <div class="page bg- flex-wr-sb-c p-rl-5 p-tb-8  ">
                <div class="main-card col-md-10 card ">
                   <div class="card-body m-9 ">
                                        <h2 class="card-title">FORM TAMBAH DATA PINDAH</h5>
                                      
                                        <form action="/pin/store" method="POST" class="ftb mt-20" style="">
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10"> <select name="id_diri" id="select" class="form-control">
                                          <option value="">-NIK-</option>
                                          @foreach($penduduk as $p)
                                          <option value="{{$p->id}}">{{$p->nik}}</option>
                                          @endforeach
                                        </select>
                                        </div>
                                            </div>
                                         
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Tanggal Pindah </label>
                                                <div class="col-sm-10"><input class="form-control" type="date" id="start" name="tgl_pindah"
                                                value=" "
                                                min="1940-01-01" max="2019-12-31" style="" required></div> </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Tempat Tujuan </label>
                                                <div class="col-sm-10"><input name="almt_tujuan" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Penyebab Pindah </label>
                                                <div class="col-sm-10"><input name="alasan" id="example" placeholder="" type="text" class="form-control" required></div>
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
  