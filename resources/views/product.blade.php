@extends('master')
@section('content')
 <p>Halaman Product</p>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Laporan Artikel</title>
 </head>
 <body>
 <style type="text/css">
 table tr td{padding:2px 4px; background-color:#f65; color:#fff;},
 table tr th{padding:2px 4px; background-color:#f60; color:#fff;}
 font-size: 9pt;
 }
 </style>
 <center>
 <h5>Laporan Nama Artikel</h4>
 </center>
 <table class='table table-bordered'>
 <thead>
 <tr>
 <th>nomor</th>
 <th>Judul</th>
 <th>NamaArtikel</th>
 </tr>
 </thead>
 <tbody>
 @php $i=1 @endphp
 @foreach($article as $a)
 <tr>
 <td>{{ $i++ }}</td>
 <td>{{$a->judul}}</td>
 <td>{{$a->NamaArtikel}}</td>
 <td><img width="90px" src = "{{public_path('storage/'.$a->featured_image)}}"</td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </body>
 </html>
@endsection
