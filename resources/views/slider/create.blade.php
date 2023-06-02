<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Gambar
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/slider') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="name">Nama Gambar</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" name="url" class="form-control" >
                            @error('url')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="banner">Gambar</label>
                        <input type="file" name="banner" class="form-control-file">
                        @error('banner')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</x-app>
