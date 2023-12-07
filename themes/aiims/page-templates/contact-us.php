<?php
/*
 * Template Name: Contact Us
 * The contact us page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
?>

<?php $form = get_field('form'); ?>
<main class="contactUsPage mt-24">
    <div class="container relative py-20 md:py-32">
        <div class="flex flex-wrap gap-y-10">
            <div class="w-full lg:w-5/12">
                <div class="px-3">
                    <p class='text-xl md:text-2xl font-semibold text-primary'><?= $form['subtitle'] ?></p>
                    <h4 class="text-3xl md:text-5xl leading-none font-bold mt-7"><?= $form['title'] ?></h4>
                    <?php if (!empty($form['description'])) : ?>
                        <article class="description my-8 text-grey text-xl leading-relaxed">
                            <?= $form['description'] ?>
                        </article>
                    <?php endif; ?>

                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-grey text-lg leading-relaxed flex flex-row items-center gap-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <?= get_field('phone_number', 'options') ?>
                    </a>

                    <a href="mailto:<?= get_field('admin_email', 'options') ?>" class="text-grey text-lg leading-relaxed flex flex-row items-center gap-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                        <?= get_field('admin_email', 'options') ?>
                    </a>

                    <p class="text-grey text-lg leading-relaxed flex flex-row items-center gap-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z" />
                            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                        </svg>
                        <?= get_field('address', 'options') ?>
                    </p>
                    <div class="pt-5 flex items-center gap-2 md:gap-4">
                        <?php if (have_rows('socials', 'options')) :
                            while (have_rows('socials', 'options')) : the_row();
                                if (!empty(get_sub_field('link'))) :
                        ?>
                                    <a href="<?= get_sub_field('link') ?>" class='text-white hover:text-blue'>
                                        <img src="<?= get_sub_field('icon_dark')['url'] ?>" alt="<?= get_sub_field('icon_dark')['alt'] ?>" />
                                    </a>
                        <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-7/12">
                <div class="px-1.5 gap-y-3 md:gap-y-5 hidden"></div>
                <?= do_shortcode('[contact-form-7 id="fcbb1d4" title="Contact Us Form"]') ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>