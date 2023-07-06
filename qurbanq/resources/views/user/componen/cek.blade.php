@extends('user.home')

@section('cek')


hsdfgdfgh
<div class="d-flex justify-content-between">


    <div class="chartt w-[500px] py-4" >
        <div class="d-flex justify-content-between"><div class="bar2" style="width: {{ $cek->dipotong }}%;"><p style="color: #ffffff"> {{ $cek->dipotong }}%</p></div></div>
        <div class="d-flex justify-content-between"><div class="bar3" style="width: {{ $cek->dicaca }}%;"><p style="color: #ffffff"> {{ $cek->dicaca }}%</p></div></div>
        <div class="d-flex justify-content-between"><div class="bar4" style="width: {{ $cek->dibungkus }}%;"><p style="color: #ffffff"> {{ $cek->dibungkus }}%</p></div></div>
        <div><br></div>
<div style=" display:flex;">
    <div style="margin-left: 10px ; color: #fe3700">Dipotong:{{ $cek->dipotong }}%</div>
    <div style="margin-left: 10px ; color: #24690d">Dicacah:{{ $cek->dicaca }}%</div>
    <div style="margin-left: 10px ; color: #960e43">Dibungkus:{{ $cek->dibungkus }}%</div>
</div>

</div>
</div>
@endsection
