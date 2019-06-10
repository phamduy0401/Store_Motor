<?php
$open = "categorPost";
require_once __DIR__."/../../autoload/autoload.php";

$id = intval(getInput('id'));

$EditPost = $db->fetchID("category_post", $id);
//_debug($EditPost);die;
if(empty($EditPost))
{
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin("categoryPost");
}


$home = $EditCategory['home'] == 0 ? 1 : 0;

$update = $db->update("category_post", array("home" => $home), array("id" => $id));

if($update > 0)
{
    $_SESSION['success'] = "Cập nhật thành công";
    redirectAdmin("categoryPost");
}
else
{
    $_SESSION['error'] = "Dữ liệu không thay đổi";
    redirectAdmin("categoryPost");
}

?>