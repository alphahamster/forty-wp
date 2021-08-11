<!-- * The Footer for page.php
This is the template that displays all of the Footer section and everything up until main.
Port from https://html5up.net/forty
2021/08/11 https://github.com/alphahamster
 */
-->
    <section id="contact">
        <div class="inner">
            <section>
                <?php if ( is_active_sidebar( 'footer_sidebar_left' ) ) {
                    dynamic_sidebar('footer_sidebar_left'); } ?>
            </section>
            <?php if ( is_active_sidebar( 'footer_sidebar_right' ) ) {
                dynamic_sidebar('footer_sidebar_right'); } ?>
        </div>
    </section>
    <footer id="footer">
        <div class="inner">
           <ul class="copyright">
                <li>
                    <a href="https://www.needs-contact-page.here/kontakt/">Kontakt</a>
                </li>
                <li>
                    <a href="https://www.needs-privacy-page.here/datenschutzerklaerung/">Datenschutz</a>
                </li>
                <li>
                    <a href='https://www.needs-impressum-page.here/impressum/'>Impressum</a>
                </li>
            </ul>
        </div>
    </footer>
</div> <!-- Wrapper closed -->
<!-- Might need rework in position, inside footer maybe -->
<?php wp_footer(); ?>
</body>
</html>