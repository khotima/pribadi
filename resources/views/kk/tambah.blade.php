<!DOCTYPE html>
<html lang="en">
<head>
	<title>dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('inc.link')
		@include('inc.header')
			
        <div class="container bg-dark h">
            <div class="page bg- flex-wr-sb-c p-rl-5 p-tb-8  ">
			
								<div class="main-card col-md-10 card">
                                    <div class="card-body m-9 ">
                                        <h2 class="card-title">FORM TAMBAH DATA KK</h5>
                                      
                                        <form action="/kk/store" method="POST" class="ftb mt-20" style="">
                                        {{ csrf_field() }}
                                        <!-- <div class="position-relative row form-group"><label for="nik" class="col-sm-2 col-form-label">ID</label>
                                                <div class="col-sm-10"><input name="id" id="company" placeholder="id" type="text" class="form-control"></div>
                                            </div> -->
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">NO KK</label>
                                                <div class="col-sm-10"> <input name="no_kk" id="example" placeholder="" type="text" class="form-control" required>
                                            </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                            <select name="id_diri" id="select" class="form-control">
                                            <option value="">Nama</option>
                                            @foreach($penduduk as $p)
                                            <option value="{{$p->id}}">{{$p->nama}}</option>
                                            @endforeach
                                            </select>
                                            </div></div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Status Dalam Keluarga</label>
                                                <div class="col-sm-10"><input name="status" id="example" placeholder="" type="text" class="form-control" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Ayah </label>
                                                <div class="col-sm-10"><input class="form-control" type="text" id="start" name="ayah" required>
                                            </div> </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Ibu </label>
                                                <div class="col-sm-10"><input name="ibu" id="example" placeholder="" type="text" class="form-control" required></div>
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
  