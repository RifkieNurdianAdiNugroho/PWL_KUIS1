@extends('master')
@yield('header')
<br/>
<br/>
<br/>
<br/>
 <p>Daftar Pelanggan</p>
 @section('content')
 <html>
     <body>
         <table border=" 2">
             <tr>
                 <th>Nama</th>
                 <th>No Telepon</th>
             </tr>
             @foreach ($daftarpelanggans as $dftr)
              <tr>
                  <td> {{ $dftr->nama}}</td>
                  <td> {{ $dftr->no_telp}}</td>
                  </tr>
             @endforeach
         </table>
         Halaman : {{ $daftarpelanggans->currentPage() }} <br/>
         Jumlah Data : {{ $daftarpelanggans->total() }} <br/>
         Data Per Halaman : {{ $daftarpelanggans->perPage() }} <br/>


         {{ $daftarpelanggans->links() }}
     </body>
 </html>

@endsection
