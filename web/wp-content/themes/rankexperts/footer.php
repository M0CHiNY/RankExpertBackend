<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rankexperts
 */

?>

<dialog class="dialog" data-ui-dialog id="my-dialog" hidden>
    <div data-ui-dialog-backdrop class="dialog-backdrop"></div>
    <div data-ui-dialog-content class="dialog-content">
        <button type="button" class="btn-modal btn--close" data-ui-dismiss aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" stroke-width="2"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <img class="modal-form__img" src="images/modal-img.png" alt="modal img" />
        <form class="modal-form">
            <label class="modal-form__box">
                First Name<span>*</span>
                <input type="text" class="modal-form__input" />
            </label>
            <label class="modal-form__box">
                Last Name
                <input type="text" class="modal-form__input" />
            </label>
            <label class="modal-form__box">
                Email<span>*</span>
                <input type="email" class="modal-form__input" />
            </label>
            <label class="modal-form__box">
                Your website
                <input type="text" class="modal-form__input" />
            </label>
            <label class="modal-form__box">
                What can we help you with?
                <textarea class="modal-form__textarea" placeholder="Your message"></textarea>
            </label>
            <label class="modal-form__box modal-form__box--file">
                Attach files
                <input type="file" class="modal-form__input" />
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                    <g clip-path="url(#clip0_519_8726)">
                        <path
                            d="M18 10.5L10.324 18.176C9.25848 19.2142 7.82691 19.7909 6.33927 19.7812C4.85164 19.7715 3.42768 19.1763 2.37574 18.1243C1.32381 17.0724 0.72855 15.6484 0.71887 14.1608C0.70919 12.6732 1.28586 11.2416 2.32402 10.176L10.2294 2.27071C10.9366 1.56346 11.8958 1.16614 12.896 1.16614C13.8962 1.16614 14.8554 1.56346 15.5627 2.27071C16.2699 2.97795 16.6673 3.93718 16.6673 4.93737C16.6673 5.93757 16.2699 6.8968 15.5627 7.60404L7.88536 15.2814C7.53174 15.635 7.05212 15.8337 6.55202 15.8337C6.05193 15.8337 5.57231 15.635 5.21869 15.2814C4.86507 14.9278 4.66641 14.4481 4.66641 13.948C4.66641 13.4479 4.86507 12.9683 5.21869 12.6147L12.6667 5.16671"
                            stroke="#F5F6F0" stroke-width="1.66667" />
                    </g>
                    <defs>
                        <clipPath id="clip0_519_8726">
                            <rect width="20" height="20" fill="white" transform="translate(0 0.5)" />
                        </clipPath>
                    </defs>
                </svg>
            </label>
            <button class="modal-form__button btn" type="submit">
                Book a consultation
            </button>
            <a class="modal-form__condition" href="#">
                By submitting this form, you are agree to the terms outlined in our
                privacy policy.
            </a>
        </form>
    </div>
</dialog>
</main>
<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__logo-wrap">
                <a class="footer__logo" href="#">
                    <img class="footer__logo-img" src="images/footer-logo.png" alt="logo" />
                </a>
            </div>
            <div class="footer__wrap-menu">
                <div class="footer__inner-menu">

                    <!-- footer left menu start -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu-left',
                        'menu_class' => 'footer__menu',
                        'container' => '',
                        'depth' => 1,
                        'walker' => new Footer_Walker_Nav_Menu(),
                    )); ?>
                    <!-- footer left menu end-->

                   <!-- footer right menu start -->
                   <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu-right',
                        'menu_class' => 'footer__menu',
                        'container' => '',
                        'depth' => 1,
                        'walker' => new Footer_Walker_Nav_Menu(),
                    )); ?>
                    <!-- footer right menu end-->

                </div>

                <div class="footer__social">
                    <ul class="footer__link-list">
                        <li class="footer__link-item">
                            <a class="footer__link-icon footer__link-icon--tg" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.23503 17.5252C7.28874 17.5431 7.34396 17.5561 7.40003 17.564C7.75368 18.3973 8.10535 19.2315 8.45503 20.0665C9.08378 21.569 9.71753 23.1165 9.85628 23.5615C10.03 24.109 10.2125 24.4815 10.4125 24.7365C10.5163 24.8665 10.635 24.9815 10.775 25.069C10.848 25.1146 10.926 25.1515 11.0075 25.179C11.4075 25.329 11.7725 25.2665 12.0013 25.1902C12.1355 25.1444 12.2632 25.0814 12.3813 25.0027L12.3875 25.0002L15.92 22.7977L20.0013 25.9252C20.0613 25.9715 20.1263 26.0102 20.1963 26.0415C20.6863 26.254 21.1613 26.329 21.6088 26.269C22.0538 26.2065 22.4075 26.0202 22.6713 25.809C22.9741 25.5649 23.2156 25.2532 23.3763 24.899L23.3875 24.8715L23.3913 24.8615L23.3938 24.8565V24.854L23.395 24.8527C23.4168 24.799 23.4335 24.7433 23.445 24.6865L27.17 5.90523C27.1818 5.84511 27.1877 5.78399 27.1875 5.72273C27.1875 5.17273 26.98 4.64898 26.4938 4.33273C26.0763 4.06148 25.6125 4.04898 25.3188 4.07148C25.0038 4.09648 24.7113 4.17398 24.515 4.23648C24.4052 4.2713 24.2967 4.31049 24.19 4.35398L24.1763 4.36023L3.28378 12.5552L3.28128 12.5565C3.21059 12.5825 3.14095 12.6112 3.07253 12.6427C2.90685 12.7172 2.74793 12.8059 2.59753 12.9077C2.31378 13.1015 1.66003 13.634 1.77128 14.514C1.85878 15.214 2.33878 15.6452 2.63253 15.8527C2.79253 15.9665 2.94503 16.0477 3.05753 16.1015C3.10753 16.1265 3.21503 16.169 3.26128 16.189L3.27378 16.1927L7.23503 17.5252ZM24.9075 6.08523H24.905C24.8943 6.09 24.8834 6.09459 24.8725 6.09898L3.95503 14.3052C3.94427 14.3096 3.93343 14.3137 3.92253 14.3177L3.91003 14.3215C3.87182 14.3365 3.83428 14.3532 3.79753 14.3715C3.83232 14.3914 3.86821 14.4093 3.90503 14.4252L7.83253 15.7477C7.90271 15.7714 7.96985 15.8033 8.03253 15.8427L21.0038 8.24898L21.0163 8.24273C21.0667 8.21211 21.1184 8.18375 21.1713 8.15773C21.2613 8.11148 21.405 8.04398 21.5675 7.99398C21.68 7.95898 22.0138 7.86023 22.3738 7.97648C22.5647 8.03666 22.7349 8.14934 22.8649 8.30163C22.9948 8.45392 23.0794 8.63969 23.1088 8.83773C23.1553 9.01117 23.1566 9.19365 23.1125 9.36773C23.025 9.71148 22.785 9.97898 22.565 10.184C22.3775 10.359 19.9463 12.704 17.5475 15.019L14.2813 18.169L13.7 18.7315L21.04 24.359C21.1391 24.4006 21.2467 24.4177 21.3538 24.409C21.4077 24.4017 21.4585 24.3791 21.5 24.344C21.5507 24.3012 21.5942 24.2506 21.6288 24.194L21.6313 24.1927L25.2438 5.97648C25.13 6.00385 25.0184 6.03978 24.91 6.08398L24.9075 6.08523ZM14.3313 21.5777L12.8663 20.4552L12.5113 22.7115L14.3313 21.5777ZM11.5225 18.2277L12.9788 16.8215L16.245 13.669L17.4613 12.4965L9.31128 17.2677L9.35503 17.3702C9.86903 18.5845 10.3774 19.8012 10.88 21.0202L11.2338 18.7702C11.2658 18.5615 11.3676 18.3711 11.5225 18.2277Z"
                                        fill="#F5F6F0" />
                                </svg>
                            </a>
                        </li>
                        <li class="footer__link-item">
                            <a class="footer__link-icon footer__link-icon--tw" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none">
                                    <path
                                        d="M23.8125 6.13757C22.6665 4.97998 21.3015 4.06216 19.797 3.43764C18.2926 2.81312 16.6789 2.4944 15.05 2.50007C8.225 2.50007 2.6625 8.06257 2.6625 14.8876C2.6625 17.0751 3.2375 19.2001 4.3125 21.0751L2.5625 27.5001L9.125 25.7751C10.9375 26.7626 12.975 27.2876 15.05 27.2876C21.875 27.2876 27.4375 21.7251 27.4375 14.9001C27.4375 11.5876 26.15 8.47507 23.8125 6.13757ZM15.05 25.1876C13.2 25.1876 11.3875 24.6876 9.8 23.7501L9.425 23.5251L5.525 24.5501L6.5625 20.7501L6.3125 20.3626C5.28468 18.7213 4.73893 16.8241 4.7375 14.8876C4.7375 9.21257 9.3625 4.58757 15.0375 4.58757C17.7875 4.58757 20.375 5.66257 22.3125 7.61257C23.2719 8.56753 24.0321 9.7034 24.5492 10.9544C25.0664 12.2053 25.33 13.5465 25.325 14.9001C25.35 20.5751 20.725 25.1876 15.05 25.1876ZM20.7 17.4876C20.3875 17.3376 18.8625 16.5876 18.5875 16.4751C18.3 16.3751 18.1 16.3251 17.8875 16.6251C17.675 16.9376 17.0875 17.6376 16.9125 17.8376C16.7375 18.0501 16.55 18.0751 16.2375 17.9126C15.925 17.7626 14.925 17.4251 13.75 16.3751C12.825 15.5501 12.2125 14.5376 12.025 14.2251C11.85 13.9126 12 13.7501 12.1625 13.5876C12.3 13.4501 12.475 13.2251 12.625 13.0501C12.775 12.8751 12.8375 12.7376 12.9375 12.5376C13.0375 12.3251 12.9875 12.1501 12.9125 12.0001C12.8375 11.8501 12.2125 10.3251 11.9625 9.70007C11.7125 9.10007 11.45 9.17507 11.2625 9.16257H10.6625C10.45 9.16257 10.125 9.23757 9.8375 9.55007C9.5625 9.86257 8.7625 10.6126 8.7625 12.1376C8.7625 13.6626 9.875 15.1376 10.025 15.3376C10.175 15.5501 12.2125 18.6751 15.3125 20.0126C16.05 20.3376 16.625 20.5251 17.075 20.6626C17.8125 20.9001 18.4875 20.8626 19.025 20.7876C19.625 20.7001 20.8625 20.0376 21.1125 19.3126C21.375 18.5876 21.375 17.9751 21.2875 17.8376C21.2 17.7001 21.0125 17.6376 20.7 17.4876Z"
                                        fill="#F5F6F0" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <button class="footer__btn btn" type="button" data-ui-toggle="my-dialog">Get
                        started</button>
                </div>
            </div>
        </div>
        <div class="footer__coppy">Copyright © <?php echo date('Y') ?> Rankexperts</div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>