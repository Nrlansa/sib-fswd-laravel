<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah data Produk
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/listproduk') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Produk</label>
                            <input type="text"  name="name" id=""
                                class="form-control @error('name') is-invalid @enderror" >
                                @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                       <div class="form-group">
                            <label for="" class="control-label">
                                Kategori Produk
                            </label>
                            <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror">
                                <option selected>Pilih Kategori</option>
                                @foreach ($list_kategori as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                @endforeach
                            </select>
                             @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
                            <input type="text" name="price" id="" placeholder="Masukkan nominal tanpa rupiah" class="form-control @error('price') is-invalid @enderror" >
                                @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="" class="control-label">Status</label>
                            <select name="status" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example" >
                                <option selected>Pilih Status</option>
                                <option value="accepted">Accepted</option>
                                <option value="rejected">Rejected</option>
                                <option value="waiting">Waiting</option>
                                 
                            </select>
                            @error('status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <button type="submit" class="btn btn-primary float-md-right float-right">
                            simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
