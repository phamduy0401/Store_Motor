<?php
require_once __DIR__."/autoload/autoload.php";
/*
 * Lấy ra tất cả các danh mục sản phẩm được active - hiển thị
 * */
$sqlHomecate = "SELECT * FROM category_product WHERE  home = 1 ORDER BY updated_at";
$CategoryProductHome = $db->fetchsql($sqlHomecate);
_debug($CategoryProductHome);

/*
 * Lấy ra tất cả các danh mục tin tức được active - hiển thị
 * */
$sqlHomecateNew = "SELECT * FROM category_post WHERE  home = 1 ORDER BY updated_at";
$CategoryPostHome = $db->fetchsql($sqlHomecateNew);

/*
 * Lấy ra tất cả các sản phẩm được active - hiển thị
 * */
$sqlHomeProduct = "SELECT * FROM product WHERE  home = 1 ORDER BY updated_at";
$ProductHome = $db->fetchsql($sqlHomeProduct);

/*
 * Lấy ra tất cả các tin tức được active - hiển thị
 * */
$sqlHomePost = "SELECT * FROM product WHERE  home = 1 ORDER BY updated_at";
$PostHome = $db->fetchsql($sqlHomePost);


?>

<?php require_once __DIR__."/layouts/header.php"; ?>
<div class="col-md-9 bor">
    <section id="slide" class="text-center" >
        <img src="images/slide/sl3.jpg" class="img-thumbnail">
    </section>

    <section class="box-main1">
        <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> Máy Canong </a> </h3>

        <div class="showitem">
            <div class="col-md-3 item-product bor">
                <a href="">
                    <img src="images/anh1.png" class="" width="100%" height="180">
                </a>
                <div class="info-item">
                    <a href="">Lorem ipsum dolor sit amet</a>
                    <p><strike class="sale">19.000.000 đ</strike> <b class="price">11.000.000 đ</b></p>
                </div>
                <div class="hidenitem">
                    <p><a href=""><i class="fa fa-search"></i></a></p>
                    <p><a href=""><i class="fa fa-heart"></i></a></p>
                    <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                </div>
            </div>
            <div class="col-md-3  item-product bor">
                <a href="">
                    <img src="images/anh2.png" class="" width="100%" height="180">
                </a>
                <div class="info-item">
                    <a href="">Lorem ipsum dolor sit amet</a>
                    <p><strike class="sale">19.000.000 đ</strike> <b class="price">11.000.000 đ</b></p>
                </div>
                <div class="hidenitem">
                    <p><a href=""><i class="fa fa-search"></i></a></p>
                    <p><a href=""><i class="fa fa-heart"></i></a></p>
                    <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                </div>
            </div>
            <div class="col-md-3  item-product bor">
                <a href="">
                    <img src="images/anh4.png" class="" width="100%" height="180">
                </a>
                <div class="info-item">
                    <a href="">Lorem ipsum dolor sit amet</a>
                    <p><strike class="sale">19.000.000 đ</strike> <b class="price">11.000.000 đ</b></p>
                </div>
                <div class="hidenitem">
                    <p><a href=""><i class="fa fa-search"></i></a></p>
                    <p><a href=""><i class="fa fa-heart"></i></a></p>
                    <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                </div>
            </div>
            <div class="col-md-3  item-product bor">
                <a href="">
                    <img src="images/anh3.png" class="" width="100%" height="180">
                </a>
                <div class="info-item">
                    <a href="">Lorem ipsum dolor sit amet</a>
                    <p><strike class="sale">19.000.000 đ</strike> <b class="price">11.000.000 đ</b></p>
                </div>
                <div class="hidenitem">
                    <p><a href=""><i class="fa fa-search"></i></a></p>
                    <p><a href=""><i class="fa fa-heart"></i></a></p>
                    <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                </div>
            </div>

            <div class="col-md-3 item-product bor">
                <a href="">
                    <img src="images/anh1.png" class="" width="100%" height="180">
                </a>
                <div class="info-item">
                    <a href="">Lorem ipsum dolor sit amet</a>
                    <p><strike class="sale">19.000.000 đ</strike> <b class="price">11.000.000 đ</b></p>
                </div>
                <div class="hidenitem">
                    <p><a href=""><i class="fa fa-search"></i></a></p>
                    <p><a href=""><i class="fa fa-heart"></i></a></p>
                    <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                </div>
            </div>
            <div class="col-md-3  item-product bor">
                <a href="">
                    <img src="images/anh2.png" class="" width="100%" height="180">
                </a>
                <div class="info-item">
                    <a href="">Lorem ipsum dolor sit amet</a>
                    <p><strike class="sale">19.000.000 đ</strike> <b class="price">11.000.000 đ</b></p>
                </div>
                <div class="hidenitem">
                    <p><a href=""><i class="fa fa-search"></i></a></p>
                    <p><a href=""><i class="fa fa-heart"></i></a></p>
                    <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                </div>
            </div>
            <div class="col-md-3  item-product bor">
                <a href="">
                    <img src="images/anh4.png" class="" width="100%" height="180">
                </a>
                <div class="info-item">
                    <a href="">Lorem ipsum dolor sit amet</a>
                    <p><strike class="sale">19.000.000 đ</strike> <b class="price">11.000.000 đ</b></p>
                </div>
                <div class="hidenitem">
                    <p><a href=""><i class="fa fa-search"></i></a></p>
                    <p><a href=""><i class="fa fa-heart"></i></a></p>
                    <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                </div>
            </div>
            <div class="col-md-3  item-product bor">
                <a href="">
                    <img src="images/anh3.png" class="" width="100%" height="180">
                </a>
                <div class="info-item">
                    <a href="">Lorem ipsum dolor sit amet</a>
                    <p><strike class="sale">19.000.000 đ</strike> <b class="price">11.000.000 đ</b></p>
                </div>
                <div class="hidenitem">
                    <p><a href=""><i class="fa fa-search"></i></a></p>
                    <p><a href=""><i class="fa fa-heart"></i></a></p>
                    <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once __DIR__."/layouts/footer.php"; ?>


