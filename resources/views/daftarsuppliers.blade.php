@extends('master')
@yield('header')
<br/>
<br/>
<br/>
<br/>
 <p>Daftar Supplier</p>
 @section('content')
 <html>
     <body>
         <table border=" 2">
             <tr>
                 <th>Nama</th>
                 <th>No Telepon</th>
                 <th>Alamat</th>
             </tr>
             @foreach ($daftarsuppliers as $dftr)
              <tr>
                  <td> {{ $dftr->nama}}</td>
                  <td> {{ $dftr->no_telp}}</td>
                  <td> {{ $dftr->alamat}}</td>
                  </tr>
             @endforeach
         </table>
         Halaman : {{ $daftarsuppliers->currentPage() }} <br/>
         Jumlah Data : {{ $daftarsuppliers->total() }} <br/>
         Data Per Halaman : {{ $daftarsuppliers->perPage() }} <br/>


         {{ $daftarsuppliers->links() }}
     </body>
 </html>

@endsection
