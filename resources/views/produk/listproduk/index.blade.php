<x-app>
    <!------ card tabel user ------>
    <div class="row">
        <div class="col-12">
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">Produk</h3>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Aksi</th>
                                <th>Nama</th>
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
                                            <a href="{{ url('/listproduk', $lproduk->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-info"></i></a>
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
                                    <td>{{ $lproduk->NAME}}</td>
                                    <td>{{ $lproduk->description }}</td>
                                    <td>{{ $lproduk->STATUS}}</td>
                                </tr>  
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
</x-app>
