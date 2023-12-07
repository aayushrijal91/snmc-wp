<?php
/*
 * Template Name: Front Page
 * The front page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
?>

<main class="homepage">
    <section class="banner relative overflow-hidden w-full h-screen">
        <div class="video_container absolute start-0 top-0 w-full h-full">
            <video class="w-full h-full object-cover" autoPlay loop muted>
                <source src="<?= get_template_directory_uri() ?>/assets/images/banner.mp4" type="video/mp4" />
            </video>
        </div>

        <div class="banner-content absolute w-full h-full top-0 start-0 text-center bg-black/50">
            <div class="container flex items-center justify-center w-full h-full">
                <div class="lg:w-8/12">
                    <h1 class='text-5xl md:text-6xl 2xl:text-7xl font-extrabold leading-none drop-shadow-lg text-white'>Welcome to SNMC</h1>
                    <p class='text-2xl md:text-3xl font-bold pt-8 drop-shadow-lg text-white'>Sydney Nepalese Multicultural Center</p>
                    <p class='text-lg md:text-xl font-semibold pt-8 drop-shadow-lg text-white'>Embracing Diversity, Celebrating Culture: The Heart of Nepalese Community in Sydney</p>

                    <div class="flex flex-col md:flex-row items-center justify-center gap-5 pt-12">
                        <button class="flex flex-row items-center justify-center gap-x-3 h-[64px]  bg-secondary hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full w-full md:w-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" stroke="currentColor" class="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            View Recent Events</button>
                        <a href="<?= home_url() ?>/membership" class="flex flex-row items-center justify-center gap-x-3 h-[64px] bg-primary hover:bg-red-700 text-white font-bold py-3 px-6 rounded-full w-full md:w-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" stroke="currentColor" class="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                            Become A Member
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-20 xl:py-36">
        <?php $about = get_field('about'); ?>
        <section class="lg:w-11/12 mx-auto text-center">
            <p class='text-xl md:text-2xl font-semibold text-primary'><?= $about['subtitle'] ?></p>
            <h3 class='text-3xl md:text-6xl leading-none font-bold mt-6'><?= $about['title'] ?></h3>

            <article class='mt-10 text-grey text-xl leading-relaxed description'>
                <?= $about['description'] ?>
            </article>

            <div class="flex flex-wrap justify-center gap-4 md:gap-6 mt-12 md:mt-20">
                <div class='py-3 px-10 md:px-16 rounded-full bg-secondary text-white text-center'>
                    <p class='font-bold leading-none mb-1 text-sm md:text-base'>Est.</p>
                    <p class='font-extrabold text-2xl md:text-3xl leading-none'>2023</p>
                </div>
                <div class='py-3 px-10 md:px-16 rounded-full bg-primary text-white text-center'>
                    <p class='font-bold leading-none mb-1 text-sm md:text-base'>Members</p>
                    <p class='font-extrabold text-2xl md:text-3xl leading-none'>100+</p>
                </div>
            </div>
        </section>

        <?php $mission = get_field('mission'); ?>
        <section class="lg:w-11/12 mx-auto text-center mt-16 md:mt-64">
            <p class='text-xl md:text-2xl font-semibold text-primary text-center'><?= $mission['subtitle'] ?></p>
            <h4 class='text-3xl md:text-6xl leading-none font-bold mt-6 text-center'><?= $mission['title'] ?></h4>
            <article class="description mt-10 text-grey text-center text-xl leading-relaxed">
                <?= $mission['description'] ?>
            </article>
        </section>

        <section id="mission-cards-slider" class="pt-16 md:pt-32">
            <?php if (have_rows('mission')) :
                while (have_rows('mission')) : the_row();
                    if (have_rows('mission_cards')) :
                        $index = 0;
                        while (have_rows('mission_cards')) : the_row();
            ?>
                            <div>
                                <div class="border border-black  rounded-lg shadow-lg relative overflow-hidden h-[400px] <?= $index % 2 ? 'xl:mt-10' : '' ?>">
                                    <div class="absolute left-0 top-0 w-full h-full -z-10">
                                        <img src="<?= get_sub_field('image')['url'] ?>" class='w-full h-full object-cover' alt="<?= get_sub_field('image')['alt'] ?>">
                                    </div>
                                    <article class="absolute bg-black/40 h-full w-full capitalize text-white flex items-end p-5">
                                        <?= get_sub_field('title') ?>
                                    </article>
                                </div>
                            </div>
            <?php
                            $index++;
                        endwhile;
                    endif;
                endwhile;
            endif;
            ?>
        </section>
    </div>

    <?php $verdict = get_field('verdict'); ?>
    <div class="container py-20 xl:py-36">
        <div class="flex justify-center gap-x-20 text-center">
            <div class="lg:w-9/12">
                <p class='text-xl md:text-2xl font-semibold mb-8 text-center text-primary'><?= $verdict['subtitle'] ?></p>
                <h4 class='text-3xl md:text-6xl leading-none font-bold mb-16 md:mb-28 text-center'><?= $verdict['title'] ?></h4>
            </div>
        </div>

        <?php if (have_rows('verdict')) :
            while (have_rows('verdict')) : the_row();
                if (have_rows('members')) :
                    $index = 0;
                    while (have_rows('members')) : the_row();
                        $image = get_sub_field('image');
                        $name = get_sub_field('name');
                        $position = get_sub_field('position');
                        $description = get_sub_field('description');
        ?>
                        <div class="flex flex-wrap lg:flex-row lg:flex-nowrap gap-x-10 gap-y-5 <?= $index > 0 ? 'mt-20 md:mt-32' : '' ?>">
                            <div class="w-full lg:w-1/2 <?= !($index % 2) ? 'order-2 lg:order-1' : 'order-2' ?>">
                                <img src="<?= $image['url'] ?>" class='w-full h-full object-cover rounded-xl' alt="<?= $image['alt'] ?>">
                            </div>

                            <article class="w-full lg:w-1/2  <?= !($index % 2) ? 'order-1 lg:order-2' : 'order-1' ?>">
                                <svg width="82" height="62" viewBox="0 0 82 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.994 1.04715C17.3524 1.2229 15.3679 1.82045 13.8011 2.61051C6.723 6.17997 0.935128 15.4485 0.110503 24.5345C0.0523996 25.1747 0.0219924 31.7566 0.0217383 43.7399L0.0214844 61.9712H17.8082H35.5949V44.1845V26.3978H25.418H15.2411L15.2983 25.1319C15.5433 19.7038 17.0799 15.7965 19.8934 13.4484C21.3957 12.1945 23.1654 11.4041 24.9491 11.1903L25.4411 11.1314L27.9772 6.05978L30.5132 0.988281L24.9019 1.00183C21.8155 1.00929 19.157 1.0297 18.994 1.04715ZM64.7312 1.04715C63.0896 1.2229 61.1052 1.82045 59.5383 2.61051C52.4602 6.17997 46.6724 15.4485 45.8477 24.5345C45.7896 25.1747 45.7592 31.7566 45.759 43.7399L45.7587 61.9712H63.5454H81.3321V44.1845V26.3978H71.1552H60.9784L61.0355 25.1319C61.2805 19.7038 62.8172 15.7965 65.6306 13.4484C67.1329 12.1945 68.9026 11.4041 70.6863 11.1903L71.1784 11.1314L73.7144 6.05978L76.2505 0.988281L70.6391 1.00183C67.5528 1.00929 64.8942 1.0297 64.7312 1.04715Z" fill="#BA1C1C" />
                                </svg>

                                <h3 class="text-3xl md:text-5xl font-bold pt-10"><?= $name ?></h3>
                                <p class="py-4 text-base text-primary"><?= $position ?></p>
                                <article class="description text-grey leading-relaxed text-lg">
                                    <?= $description ?>
                                </article>
                            </article>
                        </div>
        <?php
                        $index++;
                    endwhile;
                endif;
            endwhile;
        endif; ?>
    </div>

    <section class="bg-light-grey py-20 md:py-32">
        <?php $membership = get_field('membership'); ?>
        <div class="container">
            <div class="flex flex-wrap justify-between items-center gap-y-7">
                <div class="w-full lg:w-1/3">
                    <p class='text-xl md:text-2xl font-semibold text-primary'><?= $membership['subtitle'] ?></p>
                    <h4 class='text-3xl md:text-6xl leading-none font-bold mt-3 md:mt-6'><?= $membership['title'] ?></h4>
                </div>
                <div class="w-full lg:w-7/12">
                    <article class='description text-grey leading-relaxed text-lg'>
                        <?= $membership['description'] ?>
                    </article>
                </div>
            </div>

            <div class="relative mt-20 rounded-xl overflow-hidden">
                <img src="<?= $membership['hero_image']['url'] ?>" alt="<?= $membership['hero_image']['alt'] ?>" class="h-full w-full object-cover absolute" />
                <div class="bg-black/30 hover:bg-black/60 duration-150 h-[350px] md:h-[700px] w-full relative p-10 md:p-20 flex justify-end items-end">
                    <a href="<?= $membership['button']['url'] ?>" target="<?= $membership['button']['target'] ?>" class="text-white text-base md:text-xl font-bold flex items-center leading-none gap-x-5 border-2 rounded-full px-5 py-2">
                        <?= $membership['button']['title'] ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-32 relative">
        <?php $milestone = get_field('milestone'); ?>

        <div class="wave absolute md:top-0">
            <img class="w-full" src="<?= get_template_directory_uri() ?>/assets/images/lib/wavebfl.svg" alt="" />
        </div>

        <div class="container relative">
            <section class="lg:w-11/12 mx-auto">
                <p class='text-xl md:text-2xl font-semibold mb-8 text-center text-primary'><?= $milestone['subtitle'] ?></p>
                <h4 class='text-3xl md:text-6xl leading-none font-bold text-center'><?= $milestone['title'] ?></h4>
                <article class="description mt-10 text-grey text-center text-xl leading-relaxed">
                    <?= $milestone['description'] ?>
                </article>

                <div class="flex flex-wrap gap-y-16 md:gap-y-20 pt-16">
                    <?php if (have_rows('milestone')) :
                        while (have_rows('milestone')) : the_row();
                            if (have_rows('events')) :
                                while (have_rows('events')) : the_row();
                    ?>
                                    <div class="w-full md:w-1/2 lg:w-1/3 px-3">
                                        <article class="h-full">
                                            <div class="h-[300px] rounded-md overflow-hidden">
                                                <img class="h-full w-full object-cover object-top" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['url'] ?>" />
                                            </div>
                                            <p class="text-xl font-bold pt-7 pb-3"><?= get_sub_field('title') ?></p>
                                            <p class="text-grey leading-relaxed"><?= get_sub_field('description') ?></p>
                                        </article>
                                    </div>
                    <?php
                                endwhile;
                            endif;
                        endwhile;
                    endif; ?>
                </div>
            </section>
    </section>

    <?php $form = get_field('form'); ?>
    <section class="bg-secondary/20 py-20 md:py-32" id="contact-us">
        <div class="container">
            <div class="bg-white px-3 py-10 md:p-10 xl:p-20 rounded-xl drop-shadow-2xl flex flex-wrap gap-y-10">
                <div class="w-full xl:w-5/12">
                    <div class="px-3">
                        <p class='text-xl md:text-2xl font-semibold text-primary'><?= $form['subtitle'] ?></p>
                        <h4 class="text-3xl md:text-5xl leading-none font-bold mt-7"><?= $form['title'] ?></h4>
                        <?php if (!empty($form['content'])) : ?>
                            <article class="description mt-8 text-grey text-xl leading-relaxed">
                                <?= $form['content'] ?>
                            </article>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="w-full xl:w-7/12">
                    <div class="px-1.5 gap-y-3 md:gap-y-5 hidden"></div>
                    <?= do_shortcode('[contact-form-7 id="fcbb1d4" title="Contact Us Form"]') ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>