@extends("admin.engineer.main")

@section("content")

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gkuncis.index') }}">GKunci</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambahkan Data </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('gkuncis.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="id_sentral" class="font-weight-bold">Sentral</label>
                                    <select class="form-control @error('id_sentral') is-invalid @enderror" name="id_sentral" required>
                                        <option value="" selected disabled>Pilih Sentral</option>
                                        @foreach ($sentrals as $sentral)
                                            <option value="{{ $sentral->id }}" {{ old('id') == $sentral->id ? 'selected' : '' }}>
                                                {{ $sentral->SITE_ID }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('id_sentral')
                                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
