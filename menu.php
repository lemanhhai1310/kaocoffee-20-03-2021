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
                            <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top" uk-sticky="offset: 80">
                                <div class="uk-section-xsmall">
                                    <h3 class="uk-h3 menu__titleThucdon">Thực đơn</h3>
                                    <ul class="uk-nav uk-nav-default menu__nav1" uk-scrollspy-nav="closest: li; scroll: true;offset: 80;">
                                        <li class="uk-active"><a href="#coffee-more1">Coffee & More</a></li>
                                        <li><a href="#tea-another1">Tea & Another</a></li>
                                        <li><a href="#snack1">Snacks</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-padding-small menu__padding1 uk-padding-remove-bottom uk-padding-remove-top">
                                <div class="uk-section-xsmall">
                                    <div class="uk-margin">
                                        <form class="uk-search uk-search-default menu__boxSearch">
                                            <span uk-search-icon></span>
                                            <input class="uk-search-input" type="search" placeholder="Tìm món nhanh">
                                        </form>
                                    </div>
                                    <div class="uk-margin-medium" id="coffee-more1">
                                        <h3 class="uk-h3 menu__title1" id="coffee-more" uk-sticky="bottom: #tea-another;offset: 100;">Coffee & More</h3>
                                        <div class="uk-grid-small uk-grid-20-m" uk-grid>
                                            <?php for($i=0;$i<=10;$i++): ?>
                                                <div class="uk-width-1-1">
                                                    <div class="uk-card menu__card2 uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                                                        <div class="uk-flex-middle" uk-grid>
                                                            <div class="uk-width-auto@m">
                                                                <div class="menu__card2__bg">
                                                                    <img class="uk-responsive-height uk-responsive-width" src="images/mug_coffee_PNG168241.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="uk-width-expand">
                                                                <div class="menu__card2__title">Coffee Cappuccino</div>
                                                                <div class="menu__card2__txt">VNĐ</div>
                                                                <div class="menu__card2__price menu__card2__price__old"><del>50.000đ</del></div>
                                                                <div class="menu__card2__price menu__card2__price__new">50.000đ</div>
                                                            </div>
                                                            <div class="uk-width-auto@m">
                                                                <a href="" class="menu__card2__link" uk-icon="icon: plus-circle; ratio: 1"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="uk-margin-medium" id="tea-another1">
                                        <h3 class="uk-h3 menu__title1" id="tea-another" uk-sticky="bottom: #snack;offset: 100;">Tea  & Another</h3>
                                        <div class="uk-grid-small uk-grid-20-m" uk-grid>
                                            <?php for($i=0;$i<=2;$i++): ?>
                                                <div class="uk-width-1-1">
                                                    <div class="uk-card menu__card2 uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                                                        <div class="uk-flex-middle" uk-grid>
                                                            <div class="uk-width-auto@m">
                                                                <div class="menu__card2__bg">
                                                                    <img class="uk-responsive-height uk-responsive-width" src="images/mug_coffee_PNG168241.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="uk-width-expand">
                                                                <div class="menu__card2__title">Coffee Cappuccino</div>
                                                                <div class="menu__card2__txt">VNĐ</div>
                                                                <div class="menu__card2__price menu__card2__price__old"><del>50.000đ</del></div>
                                                                <div class="menu__card2__price menu__card2__price__new">50.000đ</div>
                                                            </div>
                                                            <div class="uk-width-auto@m">
                                                                <a href="" class="menu__card2__link" uk-icon="icon: plus-circle; ratio: 1"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="uk-margin-medium" id="snack1">
                                        <h3 class="uk-h3 menu__title1" id="snack" uk-sticky="offset: 100;">Snacks</h3>
                                        <div class="uk-grid-small uk-grid-20-m" uk-grid>
                                            <?php for($i=0;$i<=2;$i++): ?>
                                                <div class="uk-width-1-1">
                                                    <div class="uk-card menu__card2 uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                                                        <div class="uk-flex-middle" uk-grid>
                                                            <div class="uk-width-auto@m">
                                                                <div class="menu__card2__bg">
                                                                    <img class="uk-responsive-height uk-responsive-width" src="images/mug_coffee_PNG168241.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="uk-width-expand">
                                                                <div class="menu__card2__title">Coffee Cappuccino</div>
                                                                <div class="menu__card2__txt">VNĐ</div>
                                                                <div class="menu__card2__price menu__card2__price__old"><del>50.000đ</del></div>
                                                                <div class="menu__card2__price menu__card2__price__new">50.000đ</div>
                                                            </div>
                                                            <div class="uk-width-auto@m">
                                                                <a href="" class="menu__card2__link" uk-icon="icon: plus-circle; ratio: 1"></a>
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