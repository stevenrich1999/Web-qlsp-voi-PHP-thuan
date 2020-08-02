<?php
require '../admin/chucnangqlsp.php';
$getdata = get_all_sp();
disconnect_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Quản lý sản phẩm</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
    </head>
    <body>
      <div class="p-3 mb-2 bg-dark text-white">
        <h1>Danh sách sản phẩm</h1>
        <nav class="navbar navbar-light bg-light">
              <a href="themsp.php" class="btn btn-info" role="button">Thêm sản phẩm</a> 
              <a href="index.php" class="btn btn-info" role="button">Trở lại trang nhân viên</a>
              
        </nav>
        </div>
                        <table class="table table-dark">
                            <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Tên sản phẩm</th>
                              <th scope="col">Loại</th>
                              <th scope="col">Giá</th>
                              <th scope="col">Số lượng còn lại</th>
                              <th scope="col">Tùy chọn</th>
                            </tr>
                            <?php foreach ($getdata as $item){ ?>
                                <tr>
                                    <td><?php echo $item['id_sp']; ?></td>
                                    <td><?php echo $item['tensp']; ?></td>
                                    <td><?php echo $item['loai']; ?></td>
                                    <td><?php echo $item['gia']; echo "đ"; ?></td>
                                    <td><?php echo $item['soluong']; ?></td>
                                    
                                    <td>
                                        <form method="post" action="xoasp.php">
                                            <input onclick="window.location = 'suasp.php?id=<?php echo $item['id_sp']; ?>'" class="btn btn-info" type="button" value="Sửa"/>
                                            <input type="hidden" name="id" value="<?php echo $item['id_sp']; ?>"/>
                                            <input onclick="return confirm('Bạn có chắc muốn xóa không?');"  class="btn btn-info" type="submit" name="delete" value="Xóa"/>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                          </thead>
                          <tbody>
                            
                          </tbody>
                        </table>


            
            <div class="footer-copyright text-center py-3">© 2020 Designed by 
                    <a href="https://www.facebook.com/Wake.up.the.monster.27" target="_blank"> Đặng Văn Hùng</a>
            </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    </body>
</html>
