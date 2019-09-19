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
                                        <h2 class="card-title">EDIT DATA KK</h5>
                                        @foreach($kk as $kak)
                                        <form class="ftb mt-20"  action="{{route('kk.update',$kak->id)}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="position-relative row form-group"><label for="" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                        <select name="id_diri" id="select" class="form-control">
                                        @foreach($penduduk as $pn)                                       
                                          <option value="{{$pn->id}}">{{$pn->nama}}</option>
                                          @endforeach
                                          
                                        </select>
                                        </div>
                                            </div>
                                        <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">NO KK</label>
                                                <div class="col-sm-9"> <input name="no_kk" id="example" placeholder="" type="text" class="form-control" value="{{$kak->no_kk}}"required>
                                            </div>
                                            </div>
                                         
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Ayah </label>
                                                <div class="col-sm-9"><input class="form-control" type="text" id="start" name="ayah" value="{{$kak->ayah}}" required>
                                            </div> </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Ibu </label>
                                                <div class="col-sm-9"><input name="ibu" id="example" placeholder="" type="text" class="form-control" value="{{$kak->ibu}}" required></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-3 col-form-label">Status Dalam Keluarga</label>
                                                <div class="col-sm-9"><input name="status" id="example" placeholder="" type="text" class="form-control" value="{{$kak->status}}" required></div>
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
   