@extends('layouts.main')

    @section('container')
    <div class="row justify-content-center">
        <div>
            <h1 class="text-center">About</h1>
            <p>Website ini dibangun menggunakan teknologi Laravel, sebuah framework open-source yang digunakan untuk membangun aplikasi web dengan PHP. Pemilik website ini memilih Laravel sebagai teknologi pembangunan website karena ia telah mempelajari Laravel dan ingin mengimplementasikan pemahamannya dalam membangun sebuah aplikasi web ini.</p>

            <p>Website ini didesain untuk menjadi tempat bagi pengguna untuk memposting artikel. Melalui fitur postingan, pengguna dapat membuat artikel yang berkaitan dengan topik yang ingin dibahas dan membagikannya dengan pengguna lain di website.</p>


            <p>Website ini dibangun dengan menggunakan data faker. Faker adalah sebuah library laravel yang digunakan untuk menghasilkan data palsu atau acak secara otomatis. Dengan menggunakan library ini, pembuat website dapat menghasilkan sejumlah data palsu, seperti nama, email, username dan postingan. yang dapat digunakan sebagai data uji coba pada aplikasi web ini.</p>
 
            <p>Website ini dibuat dengan dilengkapi fitur login untuk tiga jenis pengguna yaitu guest, user, dan admin.

                Fitur login sebagai guest memungkinkan pengguna untuk mengakses beberapa fitur website tanpa harus mendaftar terlebih dahulu. Fitur ini sangat berguna bagi pengguna yang hanya ingin mencari informasi umum dari website.
                
                Fitur login sebagai user memungkinkan pengguna untuk mendaftar ke website dan mengakses fitur yang lebih banyak. Pengguna yang sudah terdaftar dapat mengakses fitur untuk menambahkan postingan.
                
                Sementara itu, fitur login sebagai admin memungkinkan administrator website untuk mengelola seluruh konten dan pengguna yang terdaftar di website. Admin dapat mengedit postingan, category, dan mengatur izin kepada user yang telah terdaftar di website ini.</p>
            <br>
            <br>
            <br>

            <p>untuk repository dari website ini. klik <a href="">di sini<a></p>

        </div>
        <div class="bg-primary">
            <p class="text-white text-center">Created By Abdul Latif</p>
        </div>
            
    </div>
        
    @endsection
