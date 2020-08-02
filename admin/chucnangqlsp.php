<?php
// Biến kết nối toàn cục
global $conn;

// Hàm kết nối database
function connect_db()
{
    global $conn;
    
    
    if (!$conn){
        $conn = mysqli_connect('localhost:3308', 'root','', 'hungphp') or die (' Không thể kết nối tới database');
        
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

// Hàm lấy tất cả sp
function get_all_sp()
{
    
    global $conn;
    
    connect_db();
    
    $sql = "select * from sanpham"; 
    
    $query = mysqli_query($conn, $sql);
    
    $result = array();
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
    return $result;
}

// Hàm lấy sp theo ID
function get_sp_id($sp_id)
{
    
    global $conn;
    
    connect_db();
    
    $sql = "select * from sanpham where id_sp = {$sp_id}";
    
    $query = mysqli_query($conn, $sql);
    
    // Mảng chứa kết quả
    $result = array();
    
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    return $result;
}

// Hàm thêm sp
function add_sp($tensp1, $loai1, $gia1,$sl1)
{
    
    global $conn;
    
    connect_db();
    
    
    
    $sql = "
            INSERT INTO sanpham(tensp, loai, gia, soluong) VALUES 
            ('$tensp1','$loai1','$gia1','$sl1')
    ";
    
    $query = mysqli_query($conn, $sql);
    
    return $query;
}


// Hàm sửa sp
function edit_sp($sp_id, $tensp1, $loai1, $gia1,$sl1)
{
   
    global $conn;
    
    connect_db();
    
    $sql = "
            UPDATE sanpham SET
            tensp = '$tensp1',
            loai = '$loai1',
            gia = '$gia1',
            soluong = '$sl1'
            WHERE id_sp = $sp_id
    ";
    
    $query = mysqli_query($conn, $sql);
    return $query;
}


// Hàm xóa san pham
function delete_sp($id)
{
    global $conn;
    
    connect_db();
    $sql = "
            DELETE FROM sanpham
            WHERE id_sp = $id
    ";
    
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
?>
