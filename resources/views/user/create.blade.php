<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                tambah data User
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('/user') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text"  name="name" id=""
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Role</label>
                            <select name="role" class="form-select" aria-label="Default select example" required>
                                <option selected>Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" name="email" id=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" name="password" id="" class="form-control">
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
