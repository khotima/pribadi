<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('inc.link')
    @include('inc.header')
			
                            <div class="container bg-dark h">
                                <div class="page bg- flex-wr-sb-c p-rl-5 p-tb-8  ">
								<div class="main-card col-md-10 card ">
                                    <div class="card-body m-9 ">
                                        <h2 class="card-title">EDIT DATA KELAHIRAN</h5>
                                        @foreach($kelahiran as $kl)
                                        <form action="{{ route('klh.update',$kl->id)}}" method="post" class="ftb mt-20" style="">
                                        {{ csrf_field() }}
                                        <input name="id_diri" type="hidden" id=""  class="form-control" value="{{$kl->id_diri}}">
                                        
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">No Akta</label>
                                                <div class="col-sm-9"><input name="akta"  id=""  class="form-control" value="{{$kl->akta}}"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="" class="col-sm-3 col-form-label">Nama</label>
                                            <div class="col-sm-9"><input name="nama" id="example" placeholder="" type="text" class="form-control" value="{{$kl->nama}}"></div>
											                      </div>
                                            <div class="position-relative row form-group"><label for="" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-9"><input name="tempat_lahir" id="example" placeholder="" type="text" class="form-control" value="{{$kl->tempat_lahir}}"></div>
											                      </div>
                                            <div class="position-relative row form-group"><label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-9 "><input class="0 border:1" type="date" id="start" name="tgl_lahir"
                                                value="{{$kl->tgl_lahir}}"
                                                min="1940-01-01" max="2019-12-31" style="" required></div> </div>
                                              <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">JK</label>
										  	                      <div class="col-sm-9">
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="jk" type="radio" class="form-check-input" value="Laki-laki"{{ $kl->jk == 'Laki-laki' ? 'checked' : ''}} >L</label></div>
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="jk" type="radio" class="form-check-input" value="Perempuan"{{ $kl->jk == 'Perempuan' ? 'checked' : ''}} > P</label></div>
                                                     </div></div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label"> Anak Ke</label>
                                                <div class="col-sm-9"><input name="anak_ke" id="example" value="{{$kl->anak_ke}}" type="text" class="form-control"></div>
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
                    @include('inc.footer')
   