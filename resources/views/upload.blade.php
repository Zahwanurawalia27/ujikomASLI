@extends('layouts.main')

@section('content')

<section class="contact__page">
		<div class="contact__warp">
            <div class="inputbox">
			<div class="row">
				
					<h2 align="center" class="upl">Upload Image</h2>
					
			</div>
            <form>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Input Foto</label>
                    <div class="col-sm-10">
                        <input type="file">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Foto</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi Foto</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal / Unggah</label>
                    <div class="col-sm-10">
                        <input type="date" name="" id="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi File</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="btn">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </form>
		</div>
	</section>

@endsection