<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php include('meta.php'); ?>
<?php include('header.php'); ?>

<div id="body">
    <!-- re-limit the size to content area -->
    <div class="container">
        <div class="row">

            <div class="col-mb-12 col-9" id="main" role="main">
                <article class="post" itemscope itemtype="http://schema.org/BlogPosting">

                    <?php if ($this->fields->previewImage && $this->fields->previewImage!==""): ?>
                    <div class="cover">
                        <div class="cover-image" style="background-image:url(<?php $this->fields->previewImage(); ?>)">
                        </div>
                        <a href="<?php $this->permalink() ?>">
                            <div class="title"><?php $this->title(); ?></div>
                        </a>
                    </div>
                    <?php else: ?>
                        <h2 class="post-title">
                        <a href="<?php $this->permalink() ?>">
                            <span><?php $this->title() ?></span>
                        </a>
                    </h2>
                    <?php endif; ?>
                    <div class="post-content" itemprop="articleBody">
                        <?php $this->content(); ?>
                    </div>
                </article>
                <?php $this->need('comments.php'); ?>
            </div><!-- end #main-->

        </div>
    </div>
</div>

<?php include('footer.php'); ?>