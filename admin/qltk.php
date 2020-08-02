
<?php
require 'chucnangqltk.php';
$getdata = get_all_tk();
disconnect_db();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách tài khoản</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>
    <body>
        <div class="p-3 mb-2 bg-info text-white">
        <h1 class="danhsach">Danh sách tài khoản</h1>
        <nav class="navbar navbar-light bg-light">
              <a class="btn btn-danger" href="themtk.php" >
                
                Thêm tài khoản
              </a>
              <a class="btn btn-danger" href="index.php">
                
                Trở lại trang admin
              </a>
        </nav>
        


        <!-- <a href="themtk.php">Thêm tài khoản</a> <br/> <br/> -->
        
        
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr class="p-3 mb-2 bg-primary text-white">
                <td>ID</td>
                <td>Tên Đăng Nhập</td>
                <td>Mật khấu</td>
                <td>Tên</td>
                <td>SĐT</td>
                <td>Level</td>
                <td>Tùy chọn</td>
            </tr>
            <?php foreach ($getdata as $item){ ?>
            <tr>
                <td><?php echo $item['id_tk']; ?></td>
                <td><?php echo $item['tendangnhap']; ?></td>
                <td><?php echo $item['matkhau']; ?></td>
                <td><?php echo $item['ten']; ?></td>
                <td><?php echo $item['sdt']; ?></td>
                <td><?php echo $item['level']; ?></td>
                <td>
                    <form method="post" action="xoatk.php">
                        <input onclick="window.location = 'suatk.php?id=<?php echo $item['id_tk']; ?>'" class="btn btn-danger" type="button" value="Sửa"/>
                        <input type="hidden" name="id" value="<?php echo $item['id_tk']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" class="btn btn-danger" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>

    </div>

            <div class="footer-copyright text-center py-3">© 2020 Designed by 
                    <a href="https://www.facebook.com/Wake.up.the.monster.27" target="_blank"> Đặng Văn Hùng</a>
            </div>
            

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
