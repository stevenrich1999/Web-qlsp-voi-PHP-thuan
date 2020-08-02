
<?php

global $conn;



// Hàm kết nối database
function connect_db()
{
    
    global $conn;
    
    
    if (!$conn){
        $conn = mysqli_connect('localhost:3308', 'root','', 'hungphp') or die ('Không thể kết nối database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
    }
}

// Hàm ngắt kết nối
function disconnect_db()
{
    
    global $conn;
    
    
    if ($conn){
        mysqli_close($conn);
    }
}

// Hàm lấy tất cả tk
function get_all_tk()
{
    
    global $conn;
    
    connect_db();
    
    $sql = "select * from taikhoan";
    
    $query = mysqli_query($conn, $sql);
    
    $result = array();
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
    return $result;
}


// Hàm lấy tk theo ID
function get_tk_id($tk_id)
{
    global $conn;
    
    connect_db();
    
    $sql = "select * from taikhoan where id_tk = {$tk_id}";
    
    $query = mysqli_query($conn, $sql);
    
    $result = array();
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    return $result;
}




// Hàm thêm tk
function add_tk($tendangnhap1, $mk1, $ten1, $sdt1)
{
    
    global $conn;
    
    connect_db();
    
    
    $sql = "
            INSERT INTO taikhoan(tendangnhap, matkhau, ten,sdt,level) VALUES 
            ('$tendangnhap1','$mk1','$ten1','$sdt1','2')
    ";
    
    $query = mysqli_query($conn, $sql);
    
    return $query;
}


// Hàm sửa tk
function edit_tk($id,$tendangnhap1, $mk1, $ten1, $sdt1)
{
    
    global $conn;
    
   
    connect_db();
    
    
    $sql = "
            UPDATE taikhoan SET
            tendangnhap = '$tendangnhap1',
            matkhau = '$mk1',
            ten = '$ten1',
            sdt = '$sdt1'
            WHERE id_tk = $id
    ";
    
    $query = mysqli_query($conn, $sql);
    
    return $query;
}


// Hàm xóa tk
function delete_tk($tk_id)
{
    global $conn;
    
    connect_db();
    
    $sql = "
            DELETE FROM taikhoan
            WHERE id_tk = $tk_id
    ";
    
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
?>
