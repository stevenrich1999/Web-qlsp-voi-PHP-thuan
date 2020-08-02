<?php

require 'chucnangqlsp.php';



// Thực hiện xóa

$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
	//gọi hàm xóa sp theo id
    delete_sp($id);
}
//
// Trở về trang danh sách
header("location: qlsp.php");