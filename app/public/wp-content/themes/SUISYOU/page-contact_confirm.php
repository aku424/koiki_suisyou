<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メイン -->
<main>
    <div class="m-mv">
        <div class="m-mv__inner">
            <div class="m-mv__heading">
                <h1 class="m-mv__headingText"><?php echo get_the_title();?></h1>
                <h1 class="m-mv__headingSubText">CONTACT</h1>
            </div><!-- /.m-mv__heading -->

            <div class="m-mv__text">
                <p class="m-mv__textItem">名古屋コーチンの翠翔へのWebからのお問い合わせは、こちらのフォームよりご連絡ください。</p>
                <p class="m-mv__textItem">LINE公式アカウントからも、お問い合わせが可能です。</p>
            </div><!-- /.m-mv__text -->

        </div><!-- /.m-mv__inner -->
    </div><!-- /.m-mv -->


    <div class="l-content l-content--contact">
        <div class="l-content__inner">
            <div class="l-content__body">
                <form class="un-form">
                    <ul class="un-form__list">
                        <li class="un-form__item">
                            <div class="un-form__label">
                                <span class="un-form__labelText">お名前</span>
                                <span class="un-form__must">必須</span>
                            </div>
                            <div class="un-form__conformInput">翠翔 太郎</div>
                        </li>
                        <li class="un-form__item">
                            <div for="email" class="un-form__label">
                                <span class="un-form__labelText">メールアドレス</span>
                                <span class="un-form__must">必須</span>
                            </div>
                            <div class="un-form__conformInput">suisyooo@xxx.com</div>
                        </li>
                        <li class="un-form__item">
                            <div for="tel" class="un-form__label">
                                <span class="un-form__labelText">お電話番号</span>
                            </div>
                            <div class="un-form__conformInput">090-1234-5678</div>
                        </li>
                        <li class="un-form__item un-form__item--textarea">
                            <div for="textarea" class="un-form__label">
                                <span class="un-form__labelText">お問い合わせ内容</span>
                                <span class="un-form__must">必須</span>
                            </div>
                            <div class="un-form__conformInput">テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト</div>
                        </li>

                    </ul>
                    <div class="un-form__button">
                        <div class="m-button m-button--nonMark m-button--bg">
                            <button type="submit" form="form" href="__dummy__" class="m-button__link">
                                <div class="m-button__inner">
                                    <span class="m-button__text">送信</span>
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
