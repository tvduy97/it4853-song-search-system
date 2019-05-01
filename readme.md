Hướng dẫn cài đặt
## Điều kiện:
- Đã cài Solr
- Đã cài Composer đề làm việc với Laravel

## Bướic 1: Khởi động solr thủ công
- Mở cmd với role admin và di chuyển vào thư mục đã giải nén solr.
- Khởi động solr:
		bin\solr.cmd start
- Tạo core "nhaccuatui":
		bin\solr.cmd create -c nhaccuatui -s 2 -rf 2
- Import data:
		curl "http://localhost:8983/solr/nhaccuatui/update?commit=true" --data-binary "@C:\Users\abc\nhaccuatui\song.json" -H "Content-type:application/json"
	Lưu ý: Sửa lại đường dẫn file json cho đúng.
- Nếu muốn thay đổi data đã import, xóa data cũ vad import lại, lệnh xóa như sau:
		curl "http://localhost:8983/solr/nhaccuatui/update?commit=true" --data-binary "<delete><query>*:*</query></delete>" -H "Content-Type:text/xml"

## Bước 2: Chạy mã nguồn này
- Pull code về
- Chạy lệnh sau đây để tải vendor:
		composer install
	Lưu ý: Có thể hơi mất thời gian một chút.
- Tạo file .env và copy nội dung từ .env.example, nhanh hơn có thể dùng lênh:
		cp .env.example .env
- Sinh khóa cho app:
		php artisan key:generate
- Khởi động serve:
		php artisan serve
- Truy cập url sau:
		http://localhost:8000/search
