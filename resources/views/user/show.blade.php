 <x-app>
     <div class="card">
         <div class="card-header">
             <div class="container">
                 <h4>Data User</h4>
             </div>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
             <dl>
                 <dt>Nama</dt>
                 <dd>{{ $user->nama }}</dd>
                 <dt>Email</dt>
                 <dd>{{ $user->email }}</dd>
                 <dt>Role</dt>
                 <dd>{{ $user->role }}</dd>
                 <dt>Phone</dt>
                 <dd>{{ $user->phone }}</dd>
                 <dt>Address</dt>
                 <dd>{{ $user->address }}</dd>
             </dl>
         </div>
     </div>
 </x-app>
