<x-app>
    <div class="card">
        <div class="card-header">
            <div class="container">
                <div class="row">
                    <div class="col-8 col-md-6">
                        <h4>Data Kategori</h4>
                    </div>
                    <div class="col-4 col-md-6">
                        <div class="d-flex flex-wrap justify-content-center justify-content-md-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                 Tambah Kategori
                            </button>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_kategori as $kategori)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('/kategori', $kategori->id) }}/edit" class="btn btn-warning"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ url('/kategori', $kategori->id) }}" method="POST"
                                            onsubmit="return confirm('apakah anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('delete ')
                                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $kategori->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                        <form action="{{ url('/kategori') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Ketegori</label>
                                        <input type="longtext" name="name" id="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary float-md-right float-right">
                            <i class="fa fa-save mx-2"></i> Simpan
                        </button>
                    </div>
                    </form>
    </div>
  </div>
</div>
</x-app>
