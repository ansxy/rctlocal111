<x-app-layout>

            <h3><i class="nav-icon fas fa-th"></i> Data Anggota</h3><hr>
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                    <th style="width:5%">No.</th>
                    <th>Nama</th>
                    <th>Nomor Seri </th>
                    <th>Jenis Kelamin</th>
                    <th>Finger ID</th>
                    <th>Tanggal</th>
                    <th>Waktu Masuk</th>

                </tr>
              </thead>
              <tbody>
              @foreach ($da as $da)
                    
                
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $da->username }}</td>
                  <td>{{ $da->serial_number }}</td>
                  <td>{{ $da->gender }}</td>
                  <td>{{ $da->fingerprint_id }}</td>
                  <td>{{ $da->user_date }}</td>
                  <td>{{ $da->time_in }}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
</x-app-layout>
