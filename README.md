# Dự án Uniberty
## Run project
- composer i
- php artisan hozitech:generate-admin
- php artisan serve
## Make module
- php artisan module make <ModuleName>
- Change name in composer module. EX: hozitech/blog
- composer require hozitech/blog

## Git flow
- Pull code mới nhất từ nhánh dev về
- Tạo một branch mới từ nhánh dev
- Quy tắc đặt tên nhánh: /ten_dev/ten_man_hinh-mo_ta VD: tuanvd/tin_tuc-fix_bug
- Trong commit message mô tả ngắn gọn nội dung chỉnh sửa
- Sau khi commit những nội dung chỉ sửa xong. Thực hiện merge lại code của nhánh dev vào nhánh của mình
- Xử lý conflic nếu có
- Push code lên và tạo merge request
# laravel-module
