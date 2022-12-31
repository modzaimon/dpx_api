<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


 
```Setup
 - แก้ไขชื่อไฟล์ .env.example เป็น .env
 - สร้าง database ในmysql และ แก้ไข ค่าการเชื่อมต่อ mysql ในไหล์ .env 
 - ใช้ cmd เข้าพาร์ทไดเรกทอที่เก็บโปรเจค $composer install เพื่อติดตั้ง dependencies

 
```run migration
 - ใช้ cmd เข้าพาร์ทไดเรกทอที่เก็บโปรเจค $php artisan migrate เพื่อสร้าง products table


```run server
- ใช้ cmd เข้าพาร์ทไดเรกทอที่เก็บโปรเจค $php artisan serve --port=8080

## API

```insert products data
- copy ข้อมูลในไฟล์ dpx_products.json 
- เปิด postman สร้าง request 
  URL : http://127.0.0.1:8000/api/product 
  Method: POST
  Body : ช้อมูลในไฟล์ dpx_products.json
- กด send รายการขข้อมูลจะถูกบันทึกใน table


```select all products
- เปิด postman สร้าง request  
  URL : http://127.0.0.1:8000/api/product 
  Method: GET


```select one products
- เปิด postman สร้าง request  
  URL : http://127.0.0.1:8000/api/product/{product_id} 
  Method: GET

