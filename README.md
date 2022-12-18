# Đồ án quản lý căn tin
* Môn học: Nhập môn công nghệ phần mềm 
* Lớp: 20_1
* Khóa: 2020 - 2024
* Giảng viên lý thuyết: Ngô Ngọc Đăng Khoa
* Giảng viên thực hành: Nguyễn Đức Huy

<!-- TABLE OF CONTENT -->
## Table of content
- [Member](#member)
- [Build with](#build-with)
- [Getting started](#getting-started)
- [Example](#example)
- [Roadmap](#roadmap)
- [Acknowledgments](#acknowledgments)
- [Contributing](#contributing)

<!-- MEMBER -->
## Member

| MSSV      | Họ và Tên           |
|   :---:   |   :---              |
| 20120251  | Trần Đức Anh        | 
| 20120485  | Lê Văn Hùng         | 
| 20120244  | Hoàng Tuấn Anh      | 
| 20120130  | Đinh Thị Hoàng Linh | 

<!-- BUILD WITH -->
## Build with

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



> ảnh header nếu có![](header.png)


<!-- GETTING STARTED -->
## Getting Started


<!-- LOCAL HOST -->
### Local host
> Hướng dẫn tập trung đến việc cài đặt phần mềm, việc cài đặt XAMPP tùy thuộc vào mỗi hệ điều hành khác nhau,
> Đồng thời XAMPP là một phần mềm lâu đời cho việc triển khai Localhost, các hướng dẫn trên mạng khá đầy đủ,
> Mong bạn bỏ qua thiếu sót này

1. Tải và sử dụng [XAMPP](https://www.apachefriends.org/download.html)
![image](https://user-images.githubusercontent.com/72942607/208273459-58d1cbc4-e088-4b2a-8293-d910fba35ab4.png)

2. Sử dụng XAMPP Control Panel, Bật Apache và Mysql để khởi tạo localhost và database
![image](https://user-images.githubusercontent.com/72942607/208273677-533bd522-a64e-4864-bd52-72fa81418dc1.png)

3. Clone repository
    1. Với Window
    - Đến thư mục cài đặt XAMPP (mặc định là `C:\xampp\htdocs`)
    - Sử dụng terminal, window shell hoặc cmd và clone repository này: 
    ```
    git clone https://github.com/Erel0251/hcmus_fit_nmcnpm.git
    ``` 

    2. Với Linux
    - Mở Terminal, di chuyển đến thư mục của xampp với lệnh cd
    ```
    cd 
    ```

4. Mở Browser bất kỳ và truy cập đến trang [Localhost](http://localhost/phpmyadmin/)
5. Sử dụng file `/hcmus_fit_nmcnpm/Model/createddb_Cantin.sql` để thiết lập database
![image](https://user-images.githubusercontent.com/72942607/208274907-499e9eab-abe2-4813-a508-5c8b8dbaafd0.png)

6. Sử dụng chương trình tại [localhost/hcmus_fit_nmcnpm](http://localhost/hcmus_fit_nmcnpm/)
![image](https://user-images.githubusercontent.com/72942607/208275072-34d8215e-0ef1-42f3-9e55-ef447aab7030.png)


<!-- HOSTING -->
### Hosting
-  ~~Truy cập [heroku](#)~~


<!-- EXAMPLE -->
## Example


<!-- ROADMAP -->
## Roadmap
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
    - [ ] Hiện chức năng tùy thuộc vào vai trò (Khách hàng, thu ngân, quản lý)
    - [X] Hiện doanh thu theo ngày/tháng (thu ngân)
    - [ ] Thanh toán (thu ngân)
    - [ ] Nhập hàng (quản lý)
    - [ ] Cập nhật thực đơn (quản lý)A
- [X] Viết readme và báo cáo
- [X] Triển khai (local/ hosting)
- [ ] Cải thiện UI


<!-- ACKNOWLEDGMENTS -->
## Acknowledgments
Gửi lời cảm ơn trân trọng nhất đến Nhà trường, đến thầy cô giảng dạy môn học này.

Nguồn tham khảo:

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

