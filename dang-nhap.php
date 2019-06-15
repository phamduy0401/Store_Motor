<?php
require_once __DIR__."/autoload/autoload.php";
?>

<?php require_once __DIR__."/layouts/header.php"; ?>
<div class="col-md-9 bor">

    <section class="box-main1">
        <div class="logIn-form">
            <div class="product-title">
                <h2>
                    <a href="#">
                        Đăng nhập
                    </a>
                </h2>
                <div class="title_hr_office">
                    <div class="title_hr_icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="form-custom">
                <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail" placeholder="Nhập email">
                    </div>

                    <div class="form-group">
                        <label for="name">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" id="exampleInputName" placeholder="Nhập mật khẩu">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Đăng nhập </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Nội dung -->
    </section>
</div>
<?php require_once __DIR__."/layouts/footer.php"; ?>


