<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Data</title>
	@include('inc.link')

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  @include('inc.header')
<form action="/ank/store" method="POST">
			
<div class="container1 bg-dark h">
            <div class="page bg- flex-wr-sb-c p-rl-5 p-tb-8  ">
                <div class="main-card col-md-10 card ">
                   <div class="card-body m-9 ">
                                        <h2 class="card-title">FORM TAMBAH DATA KELAHIRAN</h5>
                                       
                                        <form action="/ank/store" method="POST" class="ftb mt-20" style="">                                    
			                                {{ csrf_field() }}
                                        <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                        <select name="id_diri" id="select" class="form-control">
                                          <option value="">-Pilihan-</option>
                                          @foreach($penduduk as $p)
                                          <option value="{{$p->id}}">{{$p->nik}}</option>
                                          @endforeach
                                        </select>
                                        </div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">No KK</label>
                                        <div class="col-sm-10">
                                            <select name="id_kk" id="select" class="form-control">
                                          <option value="">-Pilihan-</option>
                                          @foreach($kk as $kk)
                                          <option value="{{$kk->id}}">{{$kk->no_kk}}</option>
                                          @endforeach
                                        </select>
                                        </div>
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
  @include('inc.footer')
  