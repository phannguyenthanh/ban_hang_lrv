# Hệ Thống Website Thương Mại Điện Tử (Laravel E-Commerce)

Dự án website bán hàng trực tuyến xây dựng trên nền tảng **Laravel Framework** (PHP), tích hợp đầy đủ tính năng mua sắm dành cho khách hàng và trang quản trị (Admin Dashboard) dành cho người quản lý cửa hàng.

---

## 📌 Mục Lục
- [Giới Thiệu](#-giới-thiệu)
- [Công Nghệ Sử Dụng](#-công-nghệ-sử-dụng)
- [Các Tính Năng Chính](#-các-tính-năng-chính)
  - [Giao Diện Khách Hàng (Client/Frontend)](#1-giao-diện-khách-hàng-clientfrontend)
  - [Trang Quản Trị (Admin Panel)](#2-trang-quản-trị-admin-panel)
- [Cấu Trúc Thư Mục](#-cấu-trúc-thư-mục)
- [Hướng Dẫn Cài Đặt & Chạy Dự Án](#-hướng-dẫn-cài-đặt--chạy-dự-án)
- [Tài Khoản Quản Trị Mặc Định](#-tài-khoản-quản-trị-mặc-định)

---

## 📖 Giới Thiệu

Hệ thống cung cấp giải pháp bán hàng đa năng:
* Hỗ trợ phân cấp danh mục đa tầng (Menu $\rightarrow$ Category $\rightarrow$ Products).
* Quy trình đặt hàng, giỏ hàng trực quan và dễ sử dụng.
* Quản trị nội dung toàn diện (sản phẩm, hình ảnh, bài viết, banner quảng cáo, đơn hàng).

---

## 🛠 Công Nghệ Sử Dụng

* **Ngôn ngữ:** PHP (>= 7.1)
* **Framework:** Laravel 5.6.*
* **Cơ sở dữ liệu:** MySQL (sử dụng Laravel Eloquent ORM, Migrations, Seeders)
* **Thư viện mua sắm:** `gloudemans/shoppingcart`
* **Giao diện (Frontend):** Blade Template Engine, HTML5, CSS3, Bootstrap, jQuery, Javascript

---

## 🚀 Các Tính Năng Chính

### 1. Giao Diện Khách Hàng (Client/Frontend)
* **Trang chủ:** Banner trình chiếu (Slider), hiển thị các danh mục nổi bật, sản phẩm mới, sản phẩm bán chạy.
* **Danh mục sản phẩm:** Phân loại sản phẩm đa cấp, xem danh sách sản phẩm theo từng danh mục.
* **Chi tiết sản phẩm:** Xem thông tin giá, mô tả, thư viện hình ảnh chi tiết và danh sách sản phẩm liên quan.
* **Tìm kiếm:** Tìm kiếm sản phẩm theo tên và từ khóa nhanh chóng.
* **Giỏ hàng & Đặt hàng:**
  * Thêm/xóa/cập nhật số lượng sản phẩm trong giỏ hàng.
  * Nhập thông tin thanh toán & lưu đơn hàng vào hệ thống.
* **Tin tức & Sự kiện:** Phân loại chuyên mục tin, đọc tin tức, bài viết khuyến mãi.
* **Tài khoản:** Đăng ký, đăng nhập, bảo vệ thông tin người dùng.
* **Liên hệ & Phản hồi:** Gửi liên hệ/hỗ trợ, đăng ký nhận bản tin khuyến mãi.

### 2. Trang Quản Trị (Admin Panel)
* **Xác thực bảo mật:** Đăng nhập trang Admin, bảo vệ route bằng Middleware `adminlogin`.
* **Quản lý Menu:** Thêm, sửa, xóa các menu chính của hệ thống.
* **Quản lý Danh mục (Categories):** Quản lý danh mục con gắn theo từng Menu.
* **Quản lý Sản phẩm (Products):**
  * Thêm/sửa/xóa sản phẩm, cấu hình giá bán, giảm giá, mô tả.
  * Quản lý hình ảnh đại diện và thư viện ảnh gallery của sản phẩm.
* **Quản lý Đơn hàng (Orders/Cart Detail):** Theo dõi danh sách đơn đặt hàng từ khách hàng.
* **Quản lý Bài viết & Loại tin (News & Types of News):** Soạn thảo và quản lý bài viết trên website.
* **Quản lý Slider:** Tùy biến banner quảng cáo trên trang chủ.
* **Quản lý Người dùng (Users):** Quản lý tài khoản khách hàng và phân quyền quản trị viên.
* **Quản lý Hộp thư & Liên hệ (Letters/Support):** Xem phản hồi và danh sách đăng ký nhận tin từ khách hàng.

---

## 📂 Cấu Trúc Thư Mục Chính

```text
ban_hang_lrv/
├── app/
│   ├── Http/
│   │   ├── Controllers/     # Controller xử lý logic Admin và Client
│   │   └── Middleware/      # Middleware phân quyền (AdminLogin, ...)
│   ├── Category.php         # Model Danh mục
│   ├── Products.php         # Model Sản phẩm
│   ├── Menu.php             # Model Menu
│   ├── User.php             # Model Người dùng
│   └── ...
├── config/                  # Thiết lập cấu hình hệ thống
├── database/
│   ├── migrations/          # Cấu trúc bảng CSDL
│   └── seeds/               # Dữ liệu mẫu (UsersTableSeeder, ...)
├── public/                  # Tài nguyên tĩnh (CSS, JS, Fonts, hình ảnh upload)
├── resources/
│   └── views/
│       ├── admin/           # Giao diện trang quản trị
│       └── wep/             # Giao diện trang khách hàng (Client)
├── routes/
│   └── web.php              # Định tuyến toàn bộ ứng dụng
└── composer.json            # Quản lý thư viện PHP & Laravel
```

---

## ⚙️ Hướng Dẫn Cài Đặt & Chạy Dự Án

### Yêu cầu hệ thống:
* **PHP:** phiên bản 7.1.3 đến 7.4
* **MySQL:** 5.7+ hoặc MariaDB 10.x
* **Composer:** Công cụ quản lý dependency PHP

### Các bước cài đặt:

1. **Clone mã nguồn (nếu chưa tải về):**
   ```bash
   git clone git@github.com:phannguyenthanh/ban_hang_lrv.git
   cd ban_hang_lrv
   ```

2. **Cài đặt các gói phụ thuộc qua Composer:**
   ```bash
   composer install
   ```

3. **Cấu hình môi trường (.env):**
   ```bash
   cp .env.example .env
   ```
   Mở file `.env` và thiết lập kết nối cơ sở dữ liệu MySQL của bạn:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ban_hang_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Khởi tạo Application Key:**
   ```bash
   php artisan key:generate
   ```

5. **Chạy Migration & khởi tạo dữ liệu mẫu (Seeder):**
   ```bash
   php artisan migrate --seed
   ```

6. **Khởi chạy ứng dụng:**
   ```bash
   php artisan serve
   ```
   Truy cập website tại: `http://localhost:8000`

---

## 🔑 Tài Khoản Quản Trị Mặc Định

Sau khi chạy lệnh `db:seed`, bạn có thể đăng nhập trang Admin tại `http://localhost:8000/admin/login`:

* **Email:** `admin@example.com`
* **Mật khẩu:** `123456`
* **Quyền:** Quản trị viên (Admin)
