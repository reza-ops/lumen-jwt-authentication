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
            Contoh API Register: 
            ![image](https://user-images.githubusercontent.com/52590303/221747335-a730b8ea-8c03-4817-add2-0dc624bee306.png)
            </li>
        </ul>
        <ul>
            <li>
            Route Login :  menggunakan body <br>
            {<br>
                "email" : "admin@mail.com",<br>
                "password" : "123456"<br>
            }<br>
            Contoh API Login: 
            ![image](https://user-images.githubusercontent.com/52590303/221747541-b70f4cb3-8152-4cd1-b846-cf751bb930ee.png)
            </li>
        </ul>
        <ul>
            <li>
            Route Get User Profile :  tidak menggunakan body tetapi memakai header <br>
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
                        ![image](https://user-images.githubusercontent.com/52590303/221748166-eff0755f-d3c2-49b5-9efd-b76d7dd9f2a9.png)
                    </li>
                    <li>
                       Kemudian Send, jika token cocok maka akan keluar informasi user
                       ![image](https://user-images.githubusercontent.com/52590303/221748313-d8954032-fe47-4d76-943b-f8bc85a0a911.png)
                 </li>
         </ul>
     </li>
</ul>
