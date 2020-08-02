<?php
    $ct=$_POST['ct'];
    
	$conn=new mysqli("localhost","root","","hungphp");
    $data=$conn->query("select * from sanpham where tensp like '%{$ct}%' ");
    $getdata=[];
    $i=0;
    if($data->num_rows>0){
        while($dt=$data->fetch_assoc()){
            $getdata[$i++]=$dt;
        }
    }
    echo "
    <table width='100%' border='1' cellspacing='0' cellpadding='10'>
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Loại</td>
        <td>Giá</td>
        <td>Số lượng còn lại</td>
        
    </tr>
    ";
    foreach($getdata as $key=>$val){
        $item=$getdata[$key];
        echo "
        <tr>
            <td>{$item['id_sp']}</td>
            
            <td>{$item['tensp']}</td>
            
            <td>{$item['loai']}</td>
            <td>{$item['gia']}</td>
            <td>{$item['soluong']}</td>
        </tr>
        ";
    }
    echo "</table>";
	
    
?>