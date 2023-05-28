<x-app>
    <div class="card">
        <div class="card-header">
            <div class="container">
                <div class="row">
                    <div class="col-8 col-md-6">
                        <h4>Detail Slider</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" value="{{ $slider->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="url" value="{{ $slider->url }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="banner">Banner</label>
                        @if ($slider->banner)
                            <img src="{{ asset('storage/' . $slider->banner) }}" alt="Banner" style="width: 100%">
                        @else
                            <p>Tidak ada gambar</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</x-app>
