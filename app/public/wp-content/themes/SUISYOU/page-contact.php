<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メイン -->
<main>

<?php get_template_part('./templates/template-mv'); ?>

    <div class="l-content l-content--contact">
        <div class="l-content__inner">
            <div class="l-content__body">
                <form class="un-form" id="form" action="">
                    <ul class="un-form__list">
                        <li class="un-form__item">
                            <label for="name" class="un-form__label">
                                <span class="un-form__labelText">お名前</span>
                                <span class="un-form__must">必須</span>
                            </label>
                            <input type="text" name="name" id="name" class="un-form__input" placeholder="例）翠翔 太郎">
                        </li>
                        <li class="un-form__item">
                            <label for="email" class="un-form__label">
                                <span class="un-form__labelText">メールアドレス</span>
                                <span class="un-form__must">必須</span>
                            </label>
                            <input type="text" name="email" id="email" class="un-form__input" placeholder="例）suisyooo@xxx.com">
                        </li>
                        <li class="un-form__item">
                            <label for="tel" class="un-form__label">
                                <span class="un-form__labelText">お電話番号</span>
                            </label>
                            <input type="tel" name="tel" id="tel" class="un-form__input" placeholder="例）090-1234-5678">
                        </li>
                        <li class="un-form__item un-form__item--textarea">
                            <label for="textarea" class="un-form__label">
                                <span class="un-form__labelText">お問い合わせ内容</span>
                                <span class="un-form__must">必須</span>
                            </label>
                            <textarea class="un-form__textarea" name="textarea" id="textarea" cols="30" rows="10"></textarea>
                        </li>
                        <li class="un-form__item un-form__item--checkbox">
                            <input class="un-form__input" type="checkbox" id="checkbox">
                            <label for="checkbox" class="un-form__label" name="checkbox">
                                <span class="un-form__labelText">弊社規定<a href="__dummy__">プライバシーポリシー</a> に同意する</span>
                            </label>
                        </li>

                    </ul>
                    <div class="un-form__button">
                        <div class="m-button m-button--nonMark m-button--bg">
                            <button type="submit" form="form" href="__dummy__" class="m-button__link">
                                <div class="m-button__inner">
                                    <span class="m-button__text">確認</span>
                                </div> 
                            </button>
                        </div><!-- /.m-button -->
                    </div><!-- /.un-form__button -->
                </form>

                <div class="m-cta">
                    <div class="m-cta-layout">
                        <div class="m-cta__item contact grid03">
                            <div class="m-cta__itemInner">
                                <div class="m-cta__itemContents">
                                    <div class="m-cta__contactTitle"><img src="<?php echo get_template_directory_uri()?>/common/img/icon_common_03.svg" alt="LINE" class="m-cta__contactIcon">からのご予約・お問い合わせ</div>
                                    <div class="m-cta__contactContents">
                                        <div class="m-cta__contactText">翠翔LINE公式<img src="<?php echo get_template_directory_uri()?>/common/img/icon_common_13.svg" alt="LINE"></div>
                                    </div><!-- /.m-cta__contactContents -->
                                </div><!-- /.m-cta__itemContents -->
                            </div><!-- /.m-cta__itemInner -->
                        </div><!-- /.m-cta__item -->
                    </div><!-- /.m-cta-layout -->
                </div><!-- /.m-cta -->
            </div>
        </div>
    </div><!-- /.l-content -->

    <?php get_template_part('./templates/template-breadcrumb'); ?>
</main>

<!-- フッター -->
<?php get_footer(); ?>
