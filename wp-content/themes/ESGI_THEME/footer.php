<footer>
    <div class="footer-container">
        <div class="footer-top-content">
            <div class="footer-left-content">
                <img src="<?php the_field("footer-logo") ?>" />
            </div>
            <div class="footer-right-content">
                <ul> 
                    <p><?php the_field("footer-section-1-title") ?></p>
                    <li><?php the_field("footer-section-1-text-1") ?></li>
                    <li><?php the_field("footer-section-1-text-2") ?></li>
                </ul>
                <ul> 
                    <p><?php the_field("footer-section-2-title") ?></p>
                    <li><?php the_field("footer-section-2-text-1") ?></li>
                    <li><?php the_field("footer-section-2-text-2") ?></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom-content">
            <div class="footer-copyright">
                <p>2022 Figma Template by ESGI</p>
            </div>
            <div class="footer-reseaux-icons"> 
                <img src="<?php the_field("icon-reseau-1") ?>" />
                <img src="<?php the_field("icon-reseau-2") ?>" />
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
