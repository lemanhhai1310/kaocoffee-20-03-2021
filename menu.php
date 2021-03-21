<?php $data["title"] = "Menu"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-xsmall uk-background-muted" uk-height-viewport="offset-bottom: true;offset-top: true">
    <div class="uk-container">
        <div class="uk-grid-5 uk-margin" uk-grid>
            <div>
                <span uk-icon="icon: location; ratio: 1"></span>
            </div>
            <div>
                <span class="menu__txt1">KAO Coffee, Phường Điện Bàn, Đà Nẵng</span>
            </div>
        </div>
        <div class="menu__card1 uk-margin uk-card uk-card-default uk-card-body uk-border-rounded uk-padding-small">
            <span class="menu__txt2">Nhập mã VANPHONGVUI: Giảm giá 10,000đ các sản phẩm</span>
        </div>
        <div class="uk-grid-small uk-grid-20-m" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-background-default uk-border-rounded menu__content">
                    <div class="uk-grid-divider uk-grid-small uk-grid-match" uk-grid>
                        <div class="uk-width-1-4@m">
                            <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top">
                                <div class="uk-section-xsmall">
                                    <h3 class="uk-h3 menu__titleThucdon">Thực đơn</h3>
                                    <ul class="uk-nav uk-nav-default menu__nav1">
                                        <li class="uk-active"><a href="#">Coffee & More</a></li>
                                        <li><a href="#">Tea & Another</a></li>
                                        <li><a href="#">Snacks</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top">
                                <div class="uk-section-xsmall">
                                    <div class="uk-margin">
                                        <form class="uk-search uk-search-default menu__boxSearch">
                                            <span uk-search-icon></span>
                                            <input class="uk-search-input" type="search" placeholder="Tìm món nhanh">
                                        </form>
                                    </div>
                                    <h3 class="uk-h3 menu__title1">Coffee & More</h3>
                                    <div class="uk-overflow-auto uk-height-max-large menu__overflow">
                                        <div class="uk-grid-small uk-grid-20-m" uk-grid>
                                            <?php for($i=0;$i<=10;$i++): ?>
                                            <div class="uk-width-1-1">
                                                <div class="uk-card menu__card2 uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                                                    <div class="uk-flex-middle" uk-grid>
                                                        <div class="uk-width-auto@m">
                                                            <div>
                                                                <img src="images/mug_coffee_PNG168241.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div>Coffee Cappuccino</div>
                                                            <div>VNĐ</div>
                                                            <div><del>50.000đ</del></div>
                                                            <div>50.000đ</div>
                                                        </div>
                                                        <div class="uk-width-auto@m">
                                                            <a href="" uk-icon="icon: plus-circle; ratio: 1"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@m">

            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>