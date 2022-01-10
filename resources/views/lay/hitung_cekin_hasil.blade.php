@extends    ('lay.hitung_cekin')

@section('data')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{{$name->username}}</h5>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Tepat Waktu : {{$filterTimeIn}}</li>
        <li class="list-group-item">Jumlah Absen : {{$filterLate}}</li>
        <li class="list-group-item">Waktu Keluar Lebih : {{$filterTimeOut}}</li>
        </ul>
    </div>
@endsection