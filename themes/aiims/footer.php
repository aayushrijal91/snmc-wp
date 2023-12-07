<footer class='bg-quaternary text-white'>
    <div class="container px-4">
        <div class="flex flex-wrap items-center justify-between pt-20 gap-y-10">
            <div class="w-full md:w-4/12 lg:w-1/2">
                <p class="text-xl font-bold">Join our newsletter</p>
                <p class="font-thin pt-3">Join our mailing list to be among the first to receive updates about our activities.</p>
            </div>
            <div class="w-full md:w-7/12 lg:w-1/3">
                <div class="hidden w-full grow bg-transparent outline-none shadow-none px-7 h-full bg-white/10 bg-secondary hover:bg-primary duration-150 w-fit rounded-full px-5 h-[60px]"></div>
                <?= do_shortcode('[contact-form-7 id="9737f80" title="Newsletter"]') ?>
            </div>
        </div>

        <div class="flex flex-wrap py-20 gap-y-10">
            <div class="w-full lg:w-1/3">
                <img src="<?= get_field('footer_logo', 'options')['url'] ?>" alt="<?= get_field('footer_logo', 'options')['alt'] ?>" class="w-[230px]" />
                <article class="pt-5 md:w-10/12 font-thin">Sydney Nepalese MultiCultural Center inc. (SNMC) is a non-for-profit, non-raical and apolitical association whose general purpose is to promote the culture, goodwil.</article>
            </div>

            <div class="w-full lg:w-2/3 flex flex-wrap gap-y-6">
                <div class="w-1/2 md:w-1/4">
                    <p class="font-bold text-lg">Quick Links</p>
                    <?php wp_nav_menu(array(
                        'menu' => 'Quick Links',
                        'item_class' => 'nav-item',
                        'link_class' => 'text-white text-base',
                        'menu_class' => 'navbar-nav flex flex-col gap-y-2 pt-5'
                    )); ?>
                </div>
                <div class="w-1/2 md:w-1/4">
                    <p class="font-bold text-lg">Resources</p>
                    <?php wp_nav_menu(array(
                        'menu' => 'Resources',
                        'item_class' => 'nav-item',
                        'link_class' => 'text-white text-base',
                        'menu_class' => 'navbar-nav flex flex-col gap-y-2 pt-5'
                    )); ?>
                </div>
                <div class="w-1/2 md:w-1/4">
                    <p class="font-bold text-lg">Contacts</p>
                    <ul class="font-thin pt-5 flex flex-col gap-y-2">
                        <li><a href="tel:<?= get_field('phone_number', 'options') ?>"><?= get_field('phone_number', 'options') ?></a></li>
                        <li><a href="mailto:<?= get_field('admin_email', 'options') ?>"><?= get_field('admin_email', 'options') ?></a></li>
                        <li><?= get_field('address', 'options') ?></li>
                    </ul>
                </div>
                <div class="w-1/2 md:w-1/4">
                    <p class="font-bold text-lg">Socials</p>
                    <div class="pt-5 flex items-center gap-2 md:gap-4">
                        <?php if (have_rows('socials', 'options')) :
                            while (have_rows('socials', 'options')) : the_row();
                                if (!empty(get_sub_field('link'))) :
                        ?>
                                    <a href="<?= get_sub_field('link') ?>" class='text-white hover:text-blue'>
                                        <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['alt'] ?>" />
                                    </a>
                        <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap items-center justify-between text-center gap-y-5 pb-10">
            <div class="w-full md:w-fit">
                <p>Copyright © 2023 SNMC. All Rights Reserved.</p>
            </div>
            <div class="w-full md:w-fit">
                <div class="flex flex-wrap justify-center items-center gap-y-3 gap-x-2 md:gap-x-3">
                    <span class="w-full md:w-fit">Designed & Developed By:</span>
                    <a href="https://aayushrijal.info" class="w-fit text-sm bg-quaternary-dark hover:bg-red-500 text-white font-bold py-2 px-4 rounded-full">AR</a>
                    <div class="w-fit text-sm bg-quaternary-dark hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">AK</div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
    document.addEventListener('wpcf7mailsent', function(event) {
        if ('80' == event.detail.contactFormId || '65' == event.detail.contactFormId) {
            location = '/thank-you';
        }
    }, false);
</script>

</body>

</html>