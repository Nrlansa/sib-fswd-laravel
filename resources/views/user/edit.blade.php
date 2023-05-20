<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit data User
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('/user', $user->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" value="{{ $user->nama }}" name="nama" id=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Role</label>
                            <select name="role" class="form-select" aria-label="Default select example">
                                <option selected>Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Phone</label>
                            <input type="text" value="{{ $user->phone }}"name="phone" id=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Address</label>
                            <input type="text" value="{{ $user->address }}"name="address" id=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" value="{{ $user->email }}"name="email" id=""
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
