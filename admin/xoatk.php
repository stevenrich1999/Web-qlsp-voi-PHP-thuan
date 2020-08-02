<?php

require 'chucnangqltk.php';


// Thực hiện xóa

$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
	//gọi hàm xóa tk theo id
    delete_tk($id);
}
//
// Trở về trang danh sách
header("location: qltk.php");