<header class='fixed w-full mx-auto z-20 h-[80px] md:h-[100px] bg-primary border-b-2 border-b-blue-200'>
    <nav class="flex flex-row justify-between h-full">
        <div class="w-fit h-full grow">
            <div class="flex flex-wrap justify-between items-center h-full">
                <div class="w-fit h-full">
                    <a href="<?= home_url() ?>">
                        <img src="<?= get_field('logo', 'options')['url'] ?>" class='h-full' alt="<?= get_field('logo', 'options')['alt'] ?>">
                    </a>
                </div>
                <div class="w-fit grow hidden xl:flex flex-wrap xl:justify-between items-center p-3 md:px-10">
                    <?php wp_nav_menu(array(
                        'menu' => 'Primary',
                        'item_class' => 'nav-item py-2',
                        'link_class' => 'text-white text-lg',
                        'menu_class' => 'navbar-nav flex flex-wrap gap-x-5 justify-between'
                    )); ?>
                </div>
            </div>
        </div>

        <div class="w-fit hidden xl:block">
            <a href="<?= home_url() ?>/contact-us" class="flex items-center justify-center text-white bg-quaternary hover:bg-quaternary-dark duration-150 font-bold py-3 px-3 lg:px-6 h-full w-[80px] lg:w-auto">Contact Us</a>
        </div>

        <div class="flex flex-row h-full xl:hidden">
            <button class="flex items-center justify-center bg-red-600 hover:bg-red-500 text-white font-bold py-3 px-3 lg:px-6 h-full w-[80px] lg:w-auto lg:hidden">
                <svg id="menuIcon" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="top transition-all duration-300 ease-in-out" d="M19 15H1" stroke="currentcolor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"></path>
                    <path class="middle transition-all duration-300 ease-in-out" d="M19 1H1" stroke="currentcolor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"></path>
                    <path class="bottom transition-all duration-300 ease-in-out" d="M19 8L1 8" stroke="currentcolor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"></path>
                </svg>
            </button>
        </div>
    </nav>
</header>