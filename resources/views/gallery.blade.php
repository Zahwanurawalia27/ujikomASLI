@extends('layouts.main')


@section('content')
    <!-- About Page -->
	<div class="gallery__page">
		<div class="gallery__warp">
			<div class="row">

				<div class="row pb-3">
                    @foreach ($foto as $foto)
                    <div class="col-lg-4 mb-4">
                      <div class="card border-0 shadow-sm mb-2">
                        
                        <img class="card-img-top mb-2" src="{{asset('storage/images/photo-images/'.$foto->LokasiFile)}}" alt="" style="width: 100%;" />
                        <div class="card-body bg-light text-center p-4">
                          <h4>{{$foto->JudulFoto}}</h4>
                          <div class="d-flex justify-content-center mb-3">
                            <small class="mr-3"><i class="fa fa-user text-secondary" value="{{$foto->UserID}}"></i> {{ $foto->NamaLengkap}} </small>
                            <small class="mr-3"><i class="fa fa-folder text-secondary"></i> {{ $foto->album->NamaAlbum }} </small>
                            <small class="mr-3"><i class="fa fa-comments text-secondary"></i> {{ $foto->komentarsCount() }} </small>
                            <!-- <small class="mr-3"><i class="fa fa-regular fa-heart"></i></small> -->
                            <!-- <small class="mr-3"><a href="{{ route('like.toggle', $foto->FotoID) }}"><i class="fa fa-heart {{ $foto->likedByUser(auth()->id()) ? 'text-danger' : 'text-muted' }}"></i></a></small> -->
                            <form action="{{ route('like.toggle', $foto->FotoID) }}" method="post">
                                @csrf
                                <button type="submit">
                                    <i class="fa fa-heart"></i>
                                    {{ $foto->likesCount() }}
                                </button>
                            </form>
 
                          </div>
                          <p>{{ $foto->DeskripsiFoto }}</p>

                          <!-- Form untuk menambahkan komentar baru -->
                            <!-- <form action="{{ route('foto.comment', $foto->FotoID) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="IsiKomentar">Tambahkan Komentar:</label>
                                    <textarea class="form-control" id="IsiKomentar" name="IsiKomentar" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-secondary">Kirim Komentar</button>
                            </form> -->
                          <!-- <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a> -->
        
                          <a href="{{ route('foto.show', $foto->FotoID) }}" class="btn btn-secondary px-4 mx-auto my-2">Read More</a>

                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>


			</div>
		</div>
	</div>
	<!-- About Page end -->
@endsection