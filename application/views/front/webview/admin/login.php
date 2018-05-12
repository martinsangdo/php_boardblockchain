<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Admin Login</title>
    <?php require_once('common_head.php'); ?>
    <script src="/public/admin/js/login_1.js"></script>
</head>

<body>
<main>
    <!-- Login -->
    <section class="container g-py-100">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-5">
                <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
                    <header class="text-center mb-4">
                        <h2 class="h2 g-color-black g-font-weight-600">Login</h2>
                    </header>

                    <!-- Form -->
                    <form class="g-py-15">
                        <div class="mb-4">
                            <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Account (*):</label>
                            <input id="txt_account" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" />
                        </div>

                        <div class="g-mb-35">
                            <div class="row justify-content-between">
                                <div class="col align-self-center">
                                    <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Password (*):</label>
                                </div>
                            </div>
                            <input id="txt_password" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 mb-3" type="password"/>
                            <div class="mb-4">
                                <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Captcha (*):</label>
                                    <span id="captcha_container"><?php echo $captcha; ?></span> &nbsp;&nbsp;
                                <a class="u-link-v5 g-color-lightblue-v3 g-color-primary--hover" href="javascript:void(0);" onclick="loginPage.refresh_captcha();">
                                    <i class="hs-admin-reload g-font-size-18"></i>
                                    <span class="g-hidden-sm-down g-ml-10">Refresh</span>
                                </a>
                                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 g-mt-10" type="text" id="txt_captcha"/>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-4 align-self-center text-right">
                                    <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25" type="button" onclick="loginPage.process_login();">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
                    <div id="label_message" class="form_mess"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login -->

    <!-- Copyright Footer -->
    <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
                    <div class="d-lg-flex">
                        <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2018 &copy; Blockbod</small>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- End Copyright Footer -->
</main>

<div class="u-outer-spaces-helper"></div>


</body>

</html>
