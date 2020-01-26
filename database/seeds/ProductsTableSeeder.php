<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'id' => 1,
                'product_category_id' => 1,
                'name' => 'Apple Watch 1',
                'slug' => 'appple-watch-1',
                'description' => 'có màn hình rộng 42mm, độ phân giải 272x340 pixels, dây đeo bằng cao su tổng hợp tạo sự thoải mái cho người đeo. Thiết bị sử dụng sạc không dây, kho ứng dụng đa dạng phong phú',
                'quantity' => rand(10, 100),
                'price' => 7999000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 2,
                'product_category_id' => 1,
                'name' => 'Apple Watch 2',
                'slug' => 'appple-watch-2',
                'description' => 'Apple Watch 2 có màn hình 38mm, chạy hệ điều hành WatchOS 3, dung lượng pin nên tới 18 giờ, sản phẩm này của Apple cam kết sẽ cho bạn những trải nghiệm hết sức thú vị.',
                'quantity' => rand(10, 100),
                'price' => 8390000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 3,
                'product_category_id' => 1,
                'name' => 'Apple Watch 3',
                'slug' => 'appple-watch-3',
                'description' => 'Sản phẩm này là Series thứ 3 của Apple, màn hình rộng 38mm hoặc 42mm, có khả năng chống nước ở độ sâu 50m, sở hữu cấu hình Chip W2, lõi kép mạnh mẽ. Thời gian sử dụng là 18 giờ.',
                'quantity' => rand(10, 100),
                'price' => 10190000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 4,
                'product_category_id' => 2,
                'name' => 'Gear S3 Frontier',
                'slug' => 'gear-s3-frontier',
                'description' => 'Sản phẩm này có màn hình rộng 1,3 inch, độ phân giải 360x360 pixels, sử dụng hệ điều hành Tizen, thời hạn sử dụng lên tới 72 giờ, công suất pin là 380 mA',
                'quantity' => rand(10, 100),
                'price' => 7490000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 5,
                'product_category_id' => 2,
                'name' => 'Gear S3 Classic',
                'slug' => 'gear-s3-classic',
                'description' => 'Gear S3 có màn hình rộng 1,3 inch, độ phân giải 360 x 360 Pixels được bảo vệ bởi tấm kính cường lực Gorilla glass 3, được trang bị tính năng chống nước theo tiêu chuẩn IP68, pin dung lượng 380mAh giá của sản phẩm khoảng 7.790.000 VNĐ. Gear S3 cũng là một lựa chọn hoàn hảo cho các tín đồ công nghệ.',
                'quantity' => rand(10, 100),
                'price' => 7790000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 6,
                'product_category_id' => 3,
                'name' => 'Xiaomi Huami Amazfit Bip Lite',
                'slug' => 'xiaomi-huami-amazfit-bip-lite',
                'description' => 'Sản phẩm có độ phân giải là 176x176 pixels, chuẩn chống nước IP68, thời hạn dùng là 22 giờ khi bật GPS và có thể lên tới 4 tháng nếu như chỉ dùng để xem giờ. Đây còn là sản phẩm đồng hồ thông minh giá rẻ được đánh giá cao nhất hiện nay. Giá của sản phẩm này là 1.518.000 VNĐ.',
                'quantity' => rand(10, 100),
                'price' => 1518000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 7,
                'product_category_id' => 3,
                'name' => 'Xiaomi Mijia SYB01',
                'slug' => 'xiaomi-mijia-pyb01',
                'description' => 'Đây là một sản phẩm thuộc phân khúc giá dưới 2.000.000 VNĐ của Xiaomi, đường kính mặt đồng hồ 40mm, độ dày của đồng hồ chỉ là 3,2 mm tối ưu hóa hiệu quả thẩm mỹ, có trang bị tính năng chống nước chuẩn IP67.',
                'quantity' => rand(10, 100),
                'price' => 2000000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 8,
                'product_category_id' => 3,
                'name' => 'Xiaomi Mi Band 2',
                'slug' => 'xiaomi-mi-band-2',
                'description' => 'Đây là một sản phẩm thuộc phân khúc giá dưới 2.000.000 VNĐ của Xiaomi, đường kính mặt đồng hồ 40mm, độ dày của đồng hồ chỉ là 3,2 mm tối ưu hóa hiệu quả thẩm mỹ, có trang bị tính năng chống nước chuẩn IP67.',
                'quantity' => rand(10, 100),
                'price' => 1000000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 9,
                'product_category_id' => 4,
                'name' => 'Fitbit Ionic',
                'slug' => 'fitbit-ionic',
                'description' => 'Sản phẩm này có sử dụng gia tốc kế-3 trục, thời hạn sử dụng pin khi bật GPS là 10 giờ thời gian sạc là từ 1-2 tiếng, có nhiều tính năng hiện đại nhằm theo dõi sức khỏe của bạn. Có cảm biến nhịp tim quang học, cảm biến ánh sáng xung quanh, cảm biến rung… Giá của mỗi chiếc Fitbit Ionic là 7.090.000 VNĐ.',
                'quantity' => rand(10, 100),
                'price' =>7090000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 10,
                'product_category_id' => 4,
                'name' => 'Fitbit Versa',
                'slug' => 'fitbit-versa',
                'description' => 'Có giá là 5.390.000 VNĐ cho một sản phẩm, thiết bị này có thiết kế bắt mắt, có khả năng lưu trữ hơn 300 bài hát trên đồng hồ. Có sử dụng cảm biến ánh sáng xung quanh, thời dung lượng pin lên tới 4 ngày thời gian sạc là 2 tiếng. Có tính năng chống nước ở độ sâu tới 50m.',
                'quantity' => rand(10, 100),
                'price' =>5390000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 11,
                'product_category_id' => 4,
                'name' => 'Fitbit Charge 2',
                'slug' => 'fitbit-charge-2',
                'description' => 'Thuộc phân khúc thấp hơn so với hai sản phẩm trên, chỉ tầm 3.690.000 VNĐ là bạn đã có thể sở hữu cho mình một chiếc Fitbit Charge 2. Đây là một sản phẩm đồng hồ thông minh theo dõi sức khỏe hot nhất hiện nay. Sản phẩm có màn hình rộng 0.84 inch giúp việc sử dụng gọn nhẹ và dễ dàng.',
                'quantity' => rand(10, 100),
                'price' =>3690000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 12,
                'product_category_id' => 5,
                'name' => 'Huawei Fit',
                'slug' => 'huawei-fit',
                'description' => 'Các model đồng hồ công nghệ 4.0 của Huawei Fit tập chung nhiều tính năng nhằm chăm sóc sức khỏe của người sử dụng. Mỗi sản phẩm Huawei Fit đều theo dõi các thông số tập luyện thể thao và theo dõi sức khỏe bằng cách đếm bước chân, cảm biến đo nhịp tim,... Sản phẩm này có màn hình rộng 1.04 inch, độ phân giải 208x208 pixels, thiết bị có hỗ trợ cảm biến đeo tay, nhịp tim, gia tốc kế, con quay hồi chuyển, cảm biến ánh sáng, dung lượng pin đạt 80 mA cho sử dụng 6 ngày liên tục ở chế độ chờ, đem lại cảm giác thú vị cho người trải nghiệm.',
                'quantity' => rand(10, 100),
                'price' =>2200000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 13,
                'product_category_id' => 6,
                'name' => 'LG G Watch W100',
                'slug' => 'lg-g-watch-w100',
                'description' => 'Màn hình có thiết kế hình chữ nhật, rộng 1,65 inch độ phân giải 280x280 pixels, các cạnh của chiếc đồng hồ được thiết kế dạng bo tròn đem lại cảm giác thanh lịch đơn giản và đầy thanh thoát. Dây đeo bằng cao su đem lại cho người đeo sự dễ chịu thoải mái. Giá của sản phẩm là 6.500.000 VNĐ.',
                'quantity' => rand(10, 100),
                'price' =>6500000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
            [
                'id' => 14,
                'product_category_id' => 6,
                'name' => 'LG Watch Style Titanium',
                'slug' => 'lg-watch-styletitanium',
                'description' => 'Sản phẩm có kích thước 42,3x45,7x10,8mm, màn hình P-OLED rộng 1,2 inch gồm 1,6 triệu màu. Dung lượng pin 240mA sử dụng được 48 giờ, sạc nhanh. Với thiết kế bắt mắt, đây là mẫu đồng hồ thông minh được phái đẹp ưa chuộng. Sản phẩm này có giá là 2.490.000 VNĐ.',
                'quantity' => rand(10, 100),
                'price' =>2490000,
                'image' => '[{"name":"public\/uploads\/products\/jhyewXR25h3IMSzvLUNbrLW21JU3JVMgv9Dj9iN8.jpeg"},{"name":"public\/uploads\/products\/x15Fb4TQtl1ek3vzeiX8CJAOvdCMWNk9tvF73fHU.jpeg"},{"name":"public\/uploads\/products\/R6u039Mi2NklXLWF7UMXXmq7rObZaBwMsmJWgfxU.jpeg"}]',
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate (
                [
                    'id' => $product['id'],
                ],
                [
                    'product_category_id' => $product['product_category_id'],
                    'name' => $product['name'],
                    'slug' => $product['slug'],
                    'description' => $product['description'],
                    'quantity' => $product['quantity'],
                    'price' => $product['price'],
                    'image' => $product['image'],
                ]
                );
        }
    }
}
