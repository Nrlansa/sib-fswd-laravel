<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah data Produk
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('/listproduk') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Produk</label>
                            <input type="text"  name="name" id=""
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                       <div class="form-group">
                            <label for="" class="control-label">
                                Kategori Produk
                            </label>
                            <select name="category_id" id="" class="form-control">
                                <option selected>Pilih Kategori</option>
                                @foreach ($list_kategori as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Description</label>
                            <input type="longtext" name="description" id=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Price</label>
                            <input type="text" name="price" id="" placeholder="Masukkan nominal tanpa rupiah" class="form-control" >
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="" class="control-label">Status</label>
                            <select name="status" class="form-select" aria-label="Default select example" required>
                                <option selected>Pilih Status</option>
                                <option value="accepted">Accepted</option>
                                <option value="rejected">Rejected</option>
                                <option value="waiting">Waiting</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <button class="btn btn-primary float-md-right float-right">
                            simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
