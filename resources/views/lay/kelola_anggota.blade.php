<x-app-layout>

    <h3><i class="nav-icon fas fa-copy"></i> Kelola Anggota</h3><hr>
    <a href="tambah_anggota" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Anggota</a>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Serial Number</th>
            <th>Date</th>
            <th>Time in</th>
            <th colspan="2" scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        
      @foreach ($da as $da)        
        <tr>
          <td>{{ $da->id }}</td>
          <td>{{ $da->username }}</td>
          <td>{{ $da->gender }}</td>
          <td>{{ $da->serial_number }}</td>
          <td>{{ $da->user_date }}</td>
          <td>{{ $da->time_in }}</td>
          <td><a href="/edit_anggota/{{ $da->id }}"><i class="fas fa-edit bg-secondary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></a></i></td>
              <td>
                  <form action="{{ url('delete_anggota', $da->id) }} " method="POST" >
                    {{ csrf_field() }}  
                    @method('DELETE')
                  <button class="border-0 shadow-none p-0" type="submit">
                      <i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Hapus"></i>
                  </button>
              </form>
              </td>
        </tr>
      @endforeach
        
      </tbody>
    </table>
</x-app-layout>