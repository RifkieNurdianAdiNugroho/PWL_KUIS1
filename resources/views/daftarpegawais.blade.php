@extends('master')
@yield('header')
<br/>
<br/>
<br/>
<br/>
 <p>Daftar Pegawai</p>
 @section('content')
 <html>
     <body>
         <table border=" 2">
             <tr>
                 <th>Nama</th>
                 <th>Alamat</th>
                 <th>no_telp</th>
             </tr>
             @foreach ($daftarpegawais as $dftr)
              <tr>
                  <td> {{ $dftr->nama}}</td>
                  <td> {{ $dftr->alamat}}</td>
                  <td> {{ $dftr->no_telp}}</td>
                  </tr>
             @endforeach
         </table>
         Halaman : {{ $daftarpegawais->currentPage() }} <br/>
         Jumlah Data : {{ $daftarpegawais->total() }} <br/>
         Data Per Halaman : {{ $daftarpegawais->perPage() }} <br/>


         {{ $daftarpegawais->links() }}
     </body>
 </html>

@endsection
