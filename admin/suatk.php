<?php



require 'chucnangqltk.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_tk_id($id);
}

// Nếu không có dữ liệu tức không tìm thấy tk cần sửa
if (!$data){
   header("location: qltk.php");
}

// Nếu người dùng submit form
if (!empty($_POST['edit_tk']))
{
    // Lay data
    $data['tendangnhap']        = isset($_POST['tentk']) ? $_POST['tentk'] : '';
    $data['matkhau']         = isset($_POST['mk']) ? $_POST['mk'] : '';
    $data['ten']    = isset($_POST['tenuser']) ? $_POST['tenuser'] : '';
    $data['sdt']    = isset($_POST['sdt1']) ? $_POST['sdt1'] : '';
    $data['id_tk']          = isset($_POST['id']) ? $_POST['id'] : '';
    
    // Kiểm tra  thong tin và đưa ra cảnh báo
    $errors = array();
    if (empty($data['tendangnhap'])){
        $errors['tendangnhap'] = 'Chưa nhập tên sinh vien';
    }
    
    if (empty($data['matkhau'])){
        $errors['matkhau'] = 'Chưa nhập mật khấu sinh vien';
    }
    if (empty($data['ten'])){
        $errors['ten'] = 'Vui lòng nhập ngày sinh';
    }
    if (empty($data['sdt'])){
        $errors['sdt'] = 'Vui lòng nhập sdt';
    }
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_tk($data['id_tk'], $data['tendangnhap'], $data['matkhau'], $data['ten'],$data['sdt']);
        // Trở về trang danh sách
        header("location: qltk.php");
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="p-3 mb-2 bg-info text-white">
        <h1>Sửa tài khoản </h1>
        <a href="qltk.php"class="btn btn-danger">Trở về</a> <br/> <br/>
        <form method="post" action="suatk.php?id=<?php echo $data['id_tk']; ?>">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Tên đăng nhập</td>
                    <td>
                        <input type="text" name="tentk" value="<?php echo !empty($data['tendangnhap']) ? $data['tendangnhap'] : ''; ?>"/>
                        <?php if (!empty($errors['tendangnhap'])) echo $errors['tendangnhap']; ?> 
                    </td>
                </tr>
                <tr>
                    <td>Mật khấu</td>
                    <td>
                        <input type="text" name="mk" value="<?php echo !empty($data['matkhau']) ? $data['matkhau'] : ''; ?>"/>
                        <?php if (!empty($errors['matkhau'])) echo $errors['matkhau']; ?> 
                    </td>
                </tr>
                <tr>
                    <td>Họ tên</td>
                    <td>
                        <input type="text" name="tenuser" value="<?php echo !empty($data['ten']) ? $data['ten'] : ''; ?>"/>
                        <!-- đưa ra cảnh báo khi người dùng nhập thiếu birthday -->
                        <?php if (!empty($errors['ten'])) echo $errors['ten']; ?>
                    </td>
                </tr>
                <tr>
                    <td>SĐT</td>
                    <td>
                        <input type="text" name="sdt1" value="<?php echo !empty($data['sdt']) ? $data['sdt'] : ''; ?>"/>
                        <!-- đưa ra cảnh báo khi người dùng nhập thiếu birthday -->
                        <?php if (!empty($errors['sdt'])) echo $errors['sdt']; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id_tk']; ?>"/>
                        <input type="submit" name="edit_tk" class="btn btn-danger"value="Lưu"/>
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
