<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('inc.link')

			
    <div class="container1 bg-dark h">
            <div class="page bg- flex-wr-sb-c p-rl-5 p-tb-8  ">
                <div class="main-card col-md-10 card ">
                   <div class="card-body m-9 ">
                                        <h2 class="card-title">EDIT DATA PINDAH</h5>
                                        @foreach($pindah as $pi)
                                        <form action="{{ route('pin.update',$pi->id)}}" method="post" class="ftb mt-20" style="">
                                        {{ csrf_field() }}
                                        <input name="id_diri" type="hidden" id=""  class="form-control" value="{{$pi->id_diri}}">
                                        <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10"><input name="nama" id="example" placeholder="" type="text" class="form-control" value="{{$pi->nama}}" disabled></div>
                                            </div>

                                                <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">Tanggal Pindah</label>
                                            <div class="col-sm-10 "><input class="form-control" type="date" id="start" name="tgl_pindah"
                                                value="{{$pi->tgl_pindah}}"
                                                min="1940-01-01" max="2019-12-31" style="" required></div> </div>

                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Tempat Tujuan </label>
                                                <div class="col-sm-10"><input name="almt_tujuan" id="example" placeholder="" type="text" class="form-control" value="{{$pi->almt_tujuan}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Penyebab Pindah </label>
                                                <div class="col-sm-10"><input name="alasan" id="example" placeholder="" type="text" class="form-control" value="{{$pi->alasan}}" required></div>
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
   