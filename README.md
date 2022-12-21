# Đồ án quản lý căn tin
* Môn học: Nhập môn công nghệ phần mềm 
* Lớp: 20_1
* Khóa: 2020 - 2024
* Giảng viên lý thuyết: Ngô Ngọc Đăng Khoa
* Giảng viên thực hành: Nguyễn Đức Huy

<!-- TABLE OF CONTENT -->
## Table of content
- [Thành viên](#thành-viên)
- [Công nghệ](#công-nghệ)
- [Cây thư mục](#cây-thư-mục)
- [Cài đặt và sử dụng](#cài-đặt-và-sử-dụng)
- [Tiến trình](#tiến-trình)
- [Tài liệu tham khảo](#tài-liệu-tham-khảo)
- [Contributing](#contributing)

<!-- MEMBER -->
## Thành viên

| MSSV      | Họ và Tên           |
|   :---:   |   :---              |
| 20120251  | Trần Đức Anh        | 
| 20120485  | Lê Văn Hùng         | 
| 20120244  | Hoàng Tuấn Anh      | 
| 20120130  | Đinh Thị Hoàng Linh | 

<!-- BUILD WITH -->
## Công nghệ

* Design
    - Diagram: Draw.io
    - Prototype: Figma
* Front-end
    - HTML
    - CSS / Bootstrap
    - Javascript
* Back-end
    - PHP
    - MySQL
* Server
    - Localhost: Apache
    - Web hosting: ~~Heroku~~

 ![image](https://user-images.githubusercontent.com/72942607/208275072-34d8215e-0ef1-42f3-9e55-ef447aab7030.png)

<!-- FOLDER STRUCTURE -->
## Cây thư mục

    hcmus_fit_nmcnpm
        ├── asset                   # Folder liên quan đến phần front-end
        │   ├── css                 
        │   ├── js
        |   └── images              # Hình ảnh sử dụng trong chương trình
        |   │   ├── png 
        |   │   ├── svg 
        |   │   └── userImage
        ├── Model                   # Folder liên quan đến kết nối đến database 
        ├── View                    # Folder liên quan đến hiện giao diện trên trang web
        ├── Control                 # Folder liên quan đến xử lý form, truy vấn, cập nhật database
        ├── license
        ├── index.php
        ├── register.php
        └── README.md               # bạn đang ở đây nè

<!-- GETTING STARTED -->
## Cài đặt và sử dụng


<!-- LOCAL HOST -->
### Local host
> Hướng dẫn tập trung đến việc cài đặt phần mềm, việc cài đặt XAMPP tùy thuộc vào hệ điều hành người dùng sử dụng. Đồng thời XAMPP là một phần mềm lâu đời trong việc triển khai Localhost, các hướng dẫn trên mạng khá đầy đủ, Mong bạn bỏ qua thiếu sót này

1. Tải và sử dụng [XAMPP](https://www.apachefriends.org/download.html)

    ![xampp](https://user-images.githubusercontent.com/72942607/208273459-58d1cbc4-e088-4b2a-8293-d910fba35ab4.png)

2. Nếu tiếp cận bằng CLI, sử dụng câu lệnh `$ sudo /opt/lampp/lampp start` hoặc tiếp cận thông qua GUI, sử dụng XAMPP Control Panel để bật Apache và Mysql nhằm khởi tạo localhost và database

    ![xampp control panel](https://user-images.githubusercontent.com/72942607/208273677-533bd522-a64e-4864-bd52-72fa81418dc1.png)

3. Mở Browser và truy cập [Localhost](http://localhost/dashboard/) để kiểm tra chương trình đã hoạt động chưa

    ![image](https://user-images.githubusercontent.com/72942607/208277294-e729edce-f096-41b0-a912-12d830d296a0.png)

4. Clone repository
    1. Với Window
        - Đến thư mục cài đặt XAMPP (mặc định là `C:\xampp\htdocs`)
        - Sử dụng terminal, window shell hoặc cmd và clone repository: 
        ```
        git clone https://github.com/Erel0251/hcmus_fit_nmcnpm.git
        ``` 

    2. Với Linux
        - Mở Terminal, di chuyển đến thư mục của xampp với lệnh cd
        ```
        sudo cd /opt/lampp/htdocs
        ```
        - git clone repository:
        ```
        sudo git clone https://github.com/Erel0251/hcmus_fit_nmcnpm.git
        ```

5. Mở Browser bất kỳ và truy cập đến trang [phpMyAdmin](http://localhost/phpmyadmin/) để thiết lập database cho chương trình

    ![image](https://user-images.githubusercontent.com/72942607/208274907-499e9eab-abe2-4813-a508-5c8b8dbaafd0.png)

6. Mở tab SQL, copy toàn bộ nội dung trong file `/hcmus_fit_nmcnpm/Model/createddb_Cantin.sql` và thực hiện truy vấn

    ![image](https://user-images.githubusercontent.com/72942607/208276467-aaf5d33d-3c75-40ea-be94-c576267e6a82.png)

7. Sử dụng chương trình tại [hcmus_fit_nmcnpm](http://localhost/hcmus_fit_nmcnpm/)

    ![image](https://user-images.githubusercontent.com/72942607/208275072-34d8215e-0ef1-42f3-9e55-ef447aab7030.png)


<!-- HOSTING -->
### Hosting
-  ~~Truy cập [heroku](#)~~

<!-- ROADMAP -->
## Tiến trình
- [X] Thiết kế biểu đồ với Draw.io
- [X] Thiết kế Prototype với Figma
- [X] Tạo front-end với Html/Bootstrap
- [X] Chuyển thành back-end kiến trúc Serverside với PHP
- [X] Tạo cơ sở dữ liệu với MySQL
- [ ] Tính năng
    - [X] Đăng nhập/đăng ký sử dụng tài khoản
    - [X] Cập nhật thông tin tài khoản người dùng
    - [X] Hiện thực đơn
    - [X] Tìm kiếm đồ ăn, thức uống
    - [X] Hiện chức năng tùy thuộc vào vai trò (Khách hàng, thu ngân, quản lý)
    - [X] Hiện doanh thu theo ngày/tháng (thu ngân)
    - [ ] Thanh toán (thu ngân)
    - [ ] Nhập hàng (quản lý)
    - [ ] Cập nhật thực đơn (quản lý)
- [X] Viết readme và báo cáo
- [X] Triển khai (local/ hosting)
- [ ] Cải thiện UI

<!-- ACKNOWLEDGMENTS -->
## Tài liệu tham khảo
* [Bootstrap Cheatsheet](https://getbootstrap.com/docs/5.0/examples/cheatsheet/)
* [Login/Register Form with PHP and MySQL](https://www.youtube.com/watch?v=JDn6OAMnJwQ&list=PL2WFgdVk-usHxUamQzEKTNq36WSdQaXlz)
* [Upload image to Database](https://www.youtube.com/watch?v=onu3w8kqASU)
* [README template](https://www.readme-templates.com)


<!-- CONTRIBUTING -->
## Contributing

1. Fork it (<https://github.com/Erel0251/hcmus_fit_nmcnpm.git>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request


<!-- Markdown link & img dfn's -->

