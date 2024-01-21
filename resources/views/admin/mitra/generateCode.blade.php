@extends("admin.mitra.main")

@section("content")
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Generate Code</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('mitras.verifyCode') }}" method="post">
                                    @csrf
                                    
                                    <p class="mb-0">Kode yang dihasilkan untuk Mitra :</p>
                                    <h4 class="font-weight-bold">{{ $generateCode }}</h4>
                                    
                                    <div id="qrcode"></div>
                        
                                    <div class="form-group">
                                        <label for="inputCode">Masukkan Kode</label>
                                        <input type="hidden" name="idkey" value="{{ $mitra->kuncis_id }}">
                                        <input type="hidden" name="generatedCode" value="{{ $generateCode }}">
                                        <input type="hidden" name="id_kunci" value="{{ $idKunci }}">
                                        <input type="text" class="form-control" id="inputCode" name="inputCode" required>
                                    </div>
                                    <button type="submit" class="btn btn-md btn-primary">Verifikasi</button>
                                </form>
                            </div>
                        
                            <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
                            <script>
                                var qrcode = new QRCode(document.getElementById("qrcode"), {
                                    text: "{{ $generateCode }}",
                                    width: 128,
                                    height: 128,
                                    colorDark : "#000000",
                                    colorLight : "#ffffff",
                                    correctLevel : QRCode.CorrectLevel.H
                                });
                            </script>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
