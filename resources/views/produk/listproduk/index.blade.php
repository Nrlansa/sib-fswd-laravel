<x-app>
    <div class="card">
        <div class="card-header">
            <div class="container">
                <div class="row">
                    <div class="col-8 col-md-6">
                        <h4>Data Produk</h4>
                    </div>
                    <div class="col-4 col-md-6">
                        <div class="d-flex flex-wrap justify-content-center justify-content-md-end">
                            <a href="{{ url('/listproduk/create') }}" class="btn btn-primary"><i
                                    class="fa fa-plus mx-2 "></i>Tambah Data Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>kategori</th>
                            <th>Deskripsi</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_listproduk as $lproduk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('/listproduk', $lproduk->id) }}/edit" class="btn btn-warning"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ url('/listproduk', $lproduk->id) }}" method="POST"
                                            onsubmit="return confirm('apakah anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('delete ')
                                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $lproduk->name }}</td>
                                <td></td>
                                <td>{{ $lproduk->description }}</td>
                                <td>{{ $lproduk->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</x-app>
