<section class="question">
    <div class="container">

        <div class="question__text">
            <p><?= get_the_title(266); ?></p>
            <button type="button" class="btn" data-toggle="modal" data-target="#questionModal">Консультация</button>
        </div>

    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer__info">
            <div class="copyright">2014 - <?= date('Y'); ?></div>
            <div class="policy">
                <a href="/policy/" class="link"><?= get_field('privacy_policy', 125)['text']; ?></a>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">

                <div class="form-modal">
                    <h2 class="form-title">Консультация</h2>
                    <?php if (get_field('page_inner_banner')['form']) {?>
                        <?= get_field('page_inner_banner')['form']?>
                    <?php } ?>
                    <div class="response-info hidden" data-response-title="Ваш запрос принят!" data-response-subtitle="Мы с вами свяжемся в ближайшее время">
                        <img src="./img/svg/email.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--End Modal-->

<!-- Modal -->
<div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">

                <div class="form-modal">
                    <h2 class="form-title">Обратный звонок</h2>
                    <?php if (get_field('question_form', 266)) {?>
                        <?= get_field('question_form', 266)?>
                    <?php } ?>
                    <div class="response-info hidden" data-response-title="Ваш запрос принят!" data-response-subtitle="Мы с Вами свяжемся в ближайшее время.">
                        <img src="./img/svg/email.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--End Modal-->

<script src="/src/js/shortcode/shortcode.js"></script>
<?php wp_footer(); ?>
</body>
</html>