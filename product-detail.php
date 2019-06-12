<?php
require_once __DIR__."/autoload/autoload.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $db = new Database();
    $detail_product = $db->fetchID('product', $id);
}
?>

<?php require_once __DIR__."/layouts/header.php"; ?>
<div class="col-md-9 bor">
    <div class="product-detail-page">
        <section class="box-main1" >
            <div class="col-md-6 text-center">
                <img src="<?php echo uploads() ?>/product/<?php echo $detail_product['thumbar'] ?>" class="img-responsive bor" id="imgmain" width="100%" height="370" data-zoom-image="images/16-270x270.png">
            </div>
            <div class="col-md-6 bor" style="margin-top: 20px;padding: 30px;">
                <ul id="right">
                    <li><h3><?php echo $detail_product['name'] ?></h3></li>
                    <li class="short-description"><?php echo $detail_product['short_description'] ?></li>
                    <li><p><strike class="sale"><?php echo formatPrice($detail_product['price']) ?></strike> <b class="price"><?php echo formatpricesale($detail_product['price'],$detail_product['sale']) ?></b</li>
                    <li><a href="" class="btn btn-default"> <i class="fa fa-shopping-basket"></i>Mua hàng</a></li>
                </ul>
            </div>

        </section>
        <div class="col-md-12" id="tabdetail">
            <div class="row">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Thông tin sản phẩm </a></li>
                    <li><a data-toggle="tab" href="#menu1">Bình luận</a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>Xe: <?php echo $detail_product['name'] ?></h3>
                        <div class="product-detail-content">
                            <?php echo $detail_product['content'] ?>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3> Thông tin khác </h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__."/layouts/footer.php"; ?>


