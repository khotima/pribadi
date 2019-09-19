<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('inc.link')

			
			<div class="container bg-dark h">
            <div class="page bg- flex-wr-sb-c p-rl-5 p-tb-8  ">
                <div class="main-card col-md-10 card ">
                   <div class="card-body m-9 ">
                                        <h2 class="card-title">EDIT DATA PENDATANG</h5>
                                        @foreach($pendatang as $pd)
                                        <form action="{{ route('pnd.update',$pd->id)}}" method="post" class="ftb mt-20" style="">
                                        {{ csrf_field() }}
                                        <input name="id_diri" type="hidden" id=""  class="form-control" value="{{$pd->id_diri}}">

                                        <div class="position-relative row form-group"><label for="" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9"><input name="nama" id="example" placeholder="" type="text" class="form-control" value="{{$pd->nama}}" readonly required></div>
                                            </div>
                                        <!-- <select name="id_diri" id="select" class="form-control">
                                        @foreach($penduduk as $pn)                                       
                                          <option value="{{$d->id_diri}}">{{$pn->nama}}</option>
                                          @endforeach
                                        </select>
                                        </div> -->
                                            </div>

                                                <div class="position-relative row form-group"><label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Datang</label>
                                            <div class="col-sm-9 "><input class="form-control" type="date" id="start" name="tgl_datang"
                                                value="{{$pd->tgl_datang}}"
                                                min="1940-01-01" max="2019-12-31" style="" required></div> </div>

                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Tempat Asal </label>
                                                <div class="col-sm-9"><input name="asal" id="example" placeholder="" type="text" class="form-control" value="{{$pd->asal}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Penyebab Pindah </label>
                                                <div class="col-sm-9"><input name="ket_pindah" id="example" placeholder="" type="text" class="form-control" value="{{$pd->ket_pindah}}" required></div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
   