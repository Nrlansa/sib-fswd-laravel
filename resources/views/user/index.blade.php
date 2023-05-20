<x-app>
    <!------ card tabel user ------>
    <div class="row">
        <div class="col-12">
            <div class="card mt-2">
                <div class="card-header">
                    <h3 class="card-title">User</h3>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_user as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('/user', $user->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-info"></i></a>
                                            <a href="{{ url('/user', $user->id) }}/edit" class="btn btn-warning"><i
                                                    class="fas fa-edit"></i></a>
                                            <form action="{{ url('/user', $user->id) }}" method="POST"
                                                onsubmit="return confirm('apakah anda yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('delete ')
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>


                                        </div>
                                    </td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->phone }}</td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
</x-app>
