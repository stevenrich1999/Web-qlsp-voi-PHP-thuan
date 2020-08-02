<?php

require '../admin/chucnangqlsp.php';

// Nếu người dùng submit form
if (!empty($_POST['add_sp']))
{
    // Lay data
    $data['tensp']        = isset($_POST['tensp']) ? $_POST['tensp'] : '';
    $data['loai']         = isset($_POST['loai1']) ? $_POST['loai1'] : '';
    $data['gia']    = isset($_POST['gia1']) ? $_POST['gia1'] : '';
    $data['soluong']    = isset($_POST['sl1']) ? $_POST['sl1'] : '';
    
    // Kiểm tra thong tin và cảnh báo 
    $errors = array();
    if (empty($data['tensp'])){
        $errors['tensp'] = 'Chưa nhập tên sp';
    }
    
    if (empty($data['loai'])){
        $errors['loai'] = 'Chưa nhập loai sp';
    }
    if (empty($data['gia'])){
        $errors['gia'] = 'Vui lòng nhập giá';
    }
    if (empty($data['soluong'])){
        $errors['soluong'] = 'Vui lòng nhập số lượng';
    }
    // Neu ko co loi thi insert
    if (!$errors){
        add_sp($data['tensp'], $data['loai'], $data['gia'],$data['soluong']);
        // Trở về trang quan li
        header("location: qlsp.php");
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="p-3 mb-2 bg-info text-white">
        <h1>Thêm sản phẩm</h1>
        <a href="qlsp.php" class="btn btn-danger">Trở về</a> <br/> <br/>
        <form method="post" action="themsp.php">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td >Tên sản phẩm</td>
                    <td>
                        <input type="text" name="tensp" value="<?php echo !empty($data['tensp']) ? $data['tensp'] : ''; ?>"/>
                        <?php if (!empty($errors['tensp'])) echo $errors['tensp']; ?> 
                    </td>
                </tr>
                <tr>
                    <td>Loại</td>
                    <td>
                        <input type="text" name="loai1" value="<?php echo !empty($data['loai']) ? $data['loai'] : ''; ?>"/>
                        <?php if (!empty($errors['loai'])) echo $errors['loai']; ?> 
                    </td>
                </tr>
                <tr>
                    <td>Giá</td>
                    <td>
                        <input type="text" name="gia1" value="<?php echo !empty($data['gia']) ? $data['gia'] : ''; ?>"/>
                        <!-- đưa ra cảnh báo khi người dùng nhập thiếu  -->
                        <?php if (!empty($errors['gia'])) echo $errors['gia']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Số lượng</td>
                    <td>
                        <input type="text" name="sl1" value="<?php echo !empty($data['soluong']) ? $data['soluong'] : ''; ?>"/>
                        <!-- đưa ra cảnh báo khi người dùng nhập thiếu -->
                        <?php if (!empty($errors['soluong'])) echo $errors['soluong']; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="add_sp"class="btn btn-danger" value="Lưu"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Designed by 
                    <a href="https://www.facebook.com/Wake.up.the.monster.27" target="_blank"> Đặng Văn Hùng</a>
            </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
