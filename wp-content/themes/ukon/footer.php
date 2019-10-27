<section class="question">
    <div class="container">

        <div class="question__text">
            <p>Остались вопросы?</p>
            <a href="#" class="btn">Консультация</a>
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

<script src="/src/js/shortcode/shortcode.js"></script>
<?php wp_footer(); ?>
</body>
</html>