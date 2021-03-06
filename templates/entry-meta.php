<span class="post-meta d-block mb-3 mt-3">
    <span class="post-meta-time ml-1">
        <time class="updated" datetime="<?= get_post_time('c', true); ?>">
            <i class="far fa-calendar-alt fa-14 mr-1"></i>
            <?= get_the_date(); ?>
        </time>
    </span>

    <span  class="post-meta-category ml-1">
        <span class="post-meta-divider ml-1 mr-1">|</span>
        <i class="far fa-folder fa-14 mr-1"></i>
        <?= get_the_category_list('、') ?>
    </span>

    <?php $tag_list = get_the_tag_list('<span class="badge badge-pill badge-light">','</span> <span class="badge badge-pill badge-light">', '</span>'); ?>

    <?php if($tag_list): ?>
    <span  class="post-meta-tags ml-1">
        <span class="post-meta-divider ml-1 mr-1">|</span>
        <i class="fas fa-tags fa-14 mr-1"></i>
        <?= $tag_list ?>
    </span>
    <?php endif;?>
    
    <span  class="post-meta-count"></span>
</span>
