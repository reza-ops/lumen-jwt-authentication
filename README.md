![image](https://user-images.githubusercontent.com/52590303/221745642-1afe850d-cfc0-4286-a9ec-d050a70b550d.png)

Laravel Lumen adalah PHP micro framework yang dikembangkan oleh laravel untuk mengakomodasi developer dalam mengembangkan website dari sisi server. Laravel lumen biasa digunakan dalam pembuatan Rest API dan Refsfull API.

## JWT
JWT atau Json Web Token adalah sebuah token menggunakan JSON, JWT bisa digunakan sebagai authentifikasi untuk akses REST API. Karena JWT dapat menyimpan informasi yang dibutuhkan, dan juga kita bisa set untuk expired dari token JWT tersebut

## Cara install
<ul>
    <li>
        Anda bisa pull/clone
    </li>
    <li>
        Jangan lupa composer update
    </li>
    <li>
        Setting .ENV (sesuaikan dengan database anda)
    </li> 
    <li>
        Jalan kan "php artisan migrate"   
    </li>
    <li>
        Jika sudah selesai setting anda bisa menjalankan lumen, Disini ada 3 route
        <ul>
            <li>
            Route Register :  menggunakan body <br>
            {<br>
                "name" : "admin",<br>
                "email" : "admin@mail.com",<br>
                "password" : "123456"<br>
            }<br>
            </li>
        </ul>
        <ul>
            <li>
            Route Login :  menggunakan body <br>
            {<br>
                "email" : "admin@mail.com",<br>
                "password" : "123456"<br>
            }<br>
            </li>
        </ul>
        <ul>
            <li>
            Route Get User Profile :  tidak menggunakan body tetapi memakai Authorization <br>
                <ul>
                    <li>
                        Jalankan route login/register untuk mendapatkan token
                    </li>
                    <li>
                        Setelah itu copy token
                    </li>
                    <li>
                        Masuk ke route user-profile
                    </li>
                    <li>
                        Masuk ke Authorization dan pilih type "Bearer Token"
                    </li>
                    <li>
                       Paste token
                    </li>
                    <li>
                       Kemudian Send, jika token cocok maka akan keluar informasi user
                    </li>
                 </ul>
            </li>
        </ul>
    </li>
</ul>
