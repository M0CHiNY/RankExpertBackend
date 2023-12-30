<?php if (function_exists('yoast_breadcrumb')): ?>
    <div class="bread-crumb">
        <div class="container">
            <ul class="bread-crumb__box">
                <?php
                yoast_breadcrumb('<li class="bread-crumb__iterm id="breadcrumbs">', '</li>');
                ?>
            </ul>
        </div>
    </div>
<?php endif; ?>



