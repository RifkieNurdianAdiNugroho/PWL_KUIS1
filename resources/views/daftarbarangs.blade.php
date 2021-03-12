@extends('master')
@yield('header')
<br/>
<br/>
<br/>
<br/>
 <p>Daftar Barangs</p>
 @section('content')
 <html>
     <body>
         <table border=" 2">
             <tr>
                 <th>Nama Barang</th>
                 <th>Jumlah Barang</th>
             </tr>
             @foreach ($daftarbarangs as $dftr)
              <tr>
                  <td> {{ $dftr->nama_barang}}</td>
                  <td> {{ $dftr->jumlah_barang}}</td>
                  </tr>
             @endforeach
         </table>
         <body>
            Halaman : {{ $daftarbarangs->currentPage() }} <br/>
            Jumlah Data : {{ $daftarbarangs->total() }} <br/>
            Data Per Halaman : {{ $daftarbarangs->perPage() }} <br/>


            {{ $daftarbarangs->links() }}
         </body>
     </body>

 </html>

@endsection
