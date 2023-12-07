<?php
/*
 * Template Name: Membership
 * The membership page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
?>

<main class="membershipPage mt-24">
    <?php $introduction = get_field('introduction'); ?>
    <div class="container relative py-20 md:py-32">
        <section class="lg:w-11/12 mx-auto">
            <p class='text-xl md:text-2xl font-semibold mb-8 text-center text-primary capitalize'><?= $introduction['subtitle'] ?></p>
            <h4 class='text-3xl md:text-5xl lg:text-6xl leading-none font-bold text-center capitalize'><?= $introduction['title'] ?></h4>
            <article class="description mt-10 text-grey text-center text-xl leading-relaxed">
                <?= $introduction['description'] ?>
            </article>

            <div class="flex flex-wrap justify-center gap-y-7 pt-16">
                <?php if (have_rows('introduction')) :
                    while (have_rows('introduction')) : the_row();
                        if (have_rows('membership_plans')) :
                            $bgColors = array('quaternary', 'orange', 'green');
                            $index = 0;
                            while (have_rows('membership_plans')) : the_row();
                ?>
                                <div class="w-full md:w-1/2 lg:w-1/3 px-3">
                                    <div class="bg-green bg-quaternary bg-orange hidden"></div>
                                    <article class="h-full bg-<?= $bgColors[$index % 3] ?> px-5 py-10 text-white flex flex-col">

                                        <div class="h-[150px]">
                                            <img src="<?= get_sub_field('image')['url'] ?>" class="h-full" alt="<?= get_sub_field('image')['alt'] ?>">
                                        </div>

                                        <div class="grow">
                                            <h4 class=" pt-10 text-2xl font-bold"><?= get_sub_field('name') ?></h4>
                                            <article class="description pt-5">
                                                <?= get_sub_field('description') ?>
                                            </article>
                                        </div>
                                        <p class="text-5xl font-bold pt-10">$<?= get_sub_field('fees') ?> <span class="text-base"><?= get_sub_field('fees_type') ?></span></p>
                                        <a href="#localForm" class="membershipTypeSelect h-[60px] mt-10 text-center bg-primary flex items-center justify-center" data-val="<?= get_sub_field('name') ?>">Join Now</a>
                                    </article>
                                </div>
                <?php
                                $index++;
                            endwhile;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </section>
    </div>

    <section class="bg-light-grey py-20 md:py-32" id="localForm">
        <?php $form = get_field('form'); ?>
        <div class="container">
            <div class="bg-white px-3 py-10 md:p-10 xl:p-20 rounded-xl drop-shadow-2xl flex flex-wrap gap-y-10">
                <div class="w-full xl:w-5/12">
                    <div class="px-3">
                        <p class='text-xl md:text-2xl font-semibold text-primary'><?= $form['subtitle'] ?></p>
                        <h4 class="text-3xl md:text-5xl leading-none font-bold mt-7"><?= $form['title'] ?></h4>
                        <article class="description mt-8 text-grey text-xl leading-relaxed">
                            <?= $form['description'] ?>
                        </article>
                    </div>
                </div>
                <div class="w-full xl:w-7/12">
                    <div class="px-1.5 gap-y-3 md:gap-y-5 text-sm text-red-500 text-xl font-bold hidden md:w-1/3"></div>
                    <?= do_shortcode('[contact-form-7 id="ba26812" title="Membership Form"]') ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>