<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('inc.link')
<body class="bg-dark">
    
    <div class="container bg-dark h">
            <div class="page bg- flex-wr-sb-c p-rl-5 p-tb-8  ">
                <div class="main-card col-md-10 card ">
                   <div class="card-body m-9 ">
                                        <h2 class="card-title">EDIT DATA KEMATIAN</h5>
                                        @foreach($kematians as $km)
                                        <form action="{{ route('kmt.update',$km->id)}}" method="post" class="ftb mt-20" style="">
                                        {{ csrf_field() }}
                                        <input name="id_diri" type="hidden" id=""  class="form-control" value="{{$km->id_diri}}"></div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10"><input name="nama" id="example" placeholder="" type="text" class="form-control" value="{{$km->nama}}" disabled></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="tgl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10 "><input class="form-control" type="date" id="start" name="tgl"
                                                value="{{$km->tgl}}"
                                                style="" required></div> </div>
                                            
                                            
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Tempat Meninggal</label>
                                                <div class="col-sm-10"><input name="tempat" id="example" placeholder="" type="text" class="form-control" value="{{$km->tempat}}" ></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Penyebab Meninggal</label>
                                                <div class="col-sm-10"><input name="penyebab" id="example" placeholder="" type="text" class="form-control" value="{{$km->penyebab}}" ></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Tempat Makam</label>
                                                <div class="col-sm-10"><input name="makam" id="example" placeholder="" type="text" class="form-control" value="{{$km->makam}}" ></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Tempat Makam</label>
                                                <div class="col-sm-10"><input name="pelapor" id="example" placeholder="" type="text" class="form-control" value="{{$km->pelapor}}" ></div>
                                            </div>


                                    
                                           
                                            <div class="position-relative row form-check">
                                          
                                            <div class="col text-right"><button type="submit" class="btn btn-primary btn-sm  " style="background-color: rgb(41, 73, 128) ,float:right">
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
   @include('inc.footer')

</body>