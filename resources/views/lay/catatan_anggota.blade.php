<x-app-layout>

    <h3><i class="nav-icon fas fa-file"></i> Catatan Anggota</h3><hr>
    <div class="form-style-5 ">
  		<form method="get" action="/search">
        @csrf
  			<label for="date">Tanggal:</label>
        <input type="date" name="date_search" id="date_search">
        <span class="form-group-btn">
          <button type="submit" class="btn btn-primary sm mb-1">Pilih Tanggal</button>
          {{-- <a target="_blank" href="{{url('storage/TemplatePdf/', $f->file)}}" class="btn btn-primary btn-sm">Unduh File</button> --}}
        <a href="/export" class="btn btn-success">Export</a>
      </div>      
  		</form>
      
    <table class="table table-striped table-bordered">

      <thead>
        <tr>
            <th style="width:5%">No.</th>
            <th>Nama</th>
            <th>Nomor Seri</th>
            <th>Fingerprint ID</th>
            <th>Tanggal</th>
            <th>Masuk</th>
            <th>Keluar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ca as $ca)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $ca->username }}</td>
          <td>{{ $ca->serial_number }}</td>
          <td>{{ $ca->fingerprint_id }}</td>
          <td>{{ $ca->check_in_date }}</td>
          <td>{{ $ca->time_in }}</td>
          <td>{{ $ca->time_out }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </label>
</x-app-layout>