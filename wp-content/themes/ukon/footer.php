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

<button class="btn-up" id="up-btn">
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
         y="0px"
         viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667; fill:#fff" xml:space="preserve">
        <g>
            <g>
                <path d="M487.552,259.113L252.885,24.446c-4.16-4.16-10.923-4.16-15.083,0L3.136,259.113C1.131,261.118,0,263.827,0,266.665v192
                    c0,4.309,2.603,8.213,6.592,9.856c3.989,1.664,8.555,0.747,11.627-2.304l227.115-227.136l227.115,227.115
                    c2.048,2.048,4.779,3.136,7.552,3.136c1.365,0,2.773-0.256,4.075-0.811c3.989-1.643,6.592-5.547,6.592-9.856v-192
                    C490.667,263.827,489.536,261.118,487.552,259.113z"/>
            </g>
        </g>
    </svg>
</button>

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
                    <?php if (get_field('page_inner_banner')['form']) { ?>
                        <?= get_field('page_inner_banner')['form'] ?>
                    <?php } ?>
                    <div class="response-info hidden" data-response-title="Ваш запрос принят!"
                         data-response-subtitle="Мы с вами свяжемся в ближайшее время">
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
                    <?php if (get_field('question_form', 266)) { ?>
                        <?= get_field('question_form', 266) ?>
                    <?php } ?>
                    <div class="response-info hidden" data-response-title="Ваш запрос принят!"
                         data-response-subtitle="Мы с Вами свяжемся в ближайшее время.">
                        <img src="./img/svg/email.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--End Modal-->

<!-- Modal -->
<div class="modal fade" id="docsModal" tabindex="-1" role="dialog" aria-labelledby="questionModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">

                <div class="form-modal">
                    <h2 class="form-title">Выберите документы</h2>
                    <?php echo do_shortcode('[contact-form-7 id="595" title="Выбрать документы"]'); ?>
                    <div class="response-info hidden" data-response-title="Ваш запрос принят!"
                         data-response-subtitle="Мы с Вами свяжемся в ближайшее время.">
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