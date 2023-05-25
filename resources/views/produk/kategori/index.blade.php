<x-app>
    <!------ card tabel user ------>
    <div class="row">
        <div class="col-12">
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">Kategori</h3>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
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
                                            <a href="{{ url('/kategori', $kategori->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-info"></i></a>
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
        </div>
</x-app>
