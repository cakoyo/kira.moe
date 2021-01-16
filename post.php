<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php include('meta.php'); ?>

<div id="body">
    <!-- re-limit the size to content area -->
    <div class="post-container">
        <div class="post-row">

            <div id="main-expand">
                <article class="post-expand">
                    <!-- cover and title -->
                    <?php if ($this->fields->previewImage && $this->fields->previewImage !== ""): ?>
                    <div class="cover">
                        <div class="cover-image" style="background-image:url(<?php $this->fields->previewImage(); ?>)">
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="post-title-expand">
                        <a href="<?php $this->permalink() ?>">
                            <span><?php $this->title() ?></span>
                        </a>
                    </div>
                    <div class="post-meta">
                        <?php echo timestampToDate($this->created) ?>
                    </div>

                    <!-- content -->
                    <div class="post-content-expand">
                        <?php $this->content('<- Read ->'); ?>
                    </div>
                </article>

                <?php $this->need('comments.php'); ?>

                <ul class="post-near">
                    <li>上一篇： <?php $this->thePrev('%s','-'); ?></li>
                    <li>下一篇： <?php $this->theNext('%s','-'); ?></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>