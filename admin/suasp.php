<?php


require 'chucnangqlsp.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_sp_id($id);
}

// Nếu không có dữ liệu tức không tìm thấy sp cần sửa
if (!$data){
   header("location: qlsp.php");
}

// Nếu người dùng submit form
if (!empty($_POST['edit_sp']))
{
    // Lay data
    $data['tensp']        = isset($_POST['tensp']) ? $_POST['tensp'] : '';
    $data['loai']         = isset($_POST['loai1']) ? $_POST['loai1'] : '';
    $data['gia']    = isset($_POST['gia1']) ? $_POST['gia1'] : '';
    $data['soluong']    = isset($_POST['sl1']) ? $_POST['sl1'] : '';
    $data['id_sp']          = isset($_POST['id']) ? $_POST['id'] : '';
    
    // Kiểm tra  thong tin và đưa ra cảnh báo
    $errors = array();
    if (empty($data['tensp'])){
        $errors['tensp'] = 'Chưa nhập tên sản phẩm';
    }
    
    if (empty($data['loai'])){
        $errors['loai'] = 'Chưa nhập loai sản phẩm';
    }
    if (empty($data['gia'])){
        $errors['gia'] = 'Vui lòng nhập giá';
    }
    if (empty($data['soluong'])){
        $errors['soluong'] = 'Vui lòng nhập số lượng';
    }
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_sp($data['id_sp'], $data['tensp'], $data['loai'], $data['gia'],$data['soluong']);
        // Trở về trang danh sách
        header("location: qlsp.php");
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sản phẩm</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="p-3 mb-2 bg-info text-white">
        <h1>Sửa sản phẩm </h1>
        <a href="qlsp.php"class="btn btn-danger">Trở về</a> <br/> <br/>
        <form method="post" action="suasp.php?id=<?php echo $data['id_sp']; ?>">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Tên sản phẩm</td>
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
                        <!-- đưa ra cảnh báo khi người dùng nhập thiếu birthday -->
                        <?php if (!empty($errors['gia'])) echo $errors['gia']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Số lượng</td>
                    <td>
                        <input type="text" name="sl1" value="<?php echo !empty($data['soluong']) ? $data['soluong'] : ''; ?>"/>
                        <!-- đưa ra cảnh báo khi người dùng nhập thiếu birthday -->
                        <?php if (!empty($errors['soluong'])) echo $errors['soluong']; ?>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id_sp']; ?>"/>
                        <input type="submit" name="edit_sp" class="btn btn-danger" value="Lưu"/>
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
