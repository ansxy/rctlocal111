<x-app-layout>

    <h3><i class="nav-icon fas fa-file"></i> Catatan Anggota</h3><hr>
    <div class="form-style-5 ">
        <form method="get" action="/check_in_reports">
            @csrf
            <label for="fromDate">Dari</label>
            <input type="date" name="fromDate" id="fromDate">
            <span class="form-group-btn">
            <label for="toDate">Ke</label>
            <input type="date" name="toDate" id="toDate">
            <span class="form-group-btn">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name">
            <span class="form-group-btn">
                <button type="submit" class="btn btn-primary sm mb-1">Cari</button>
  	    </form>
    </div> 
    <br>
    @yield('data')
  </label>
</x-app-layout>