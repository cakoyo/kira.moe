<?php
/**
 * The plain theme for typecho
 * @package Plain
 * @author Sotr
 * @version 1.0.0
 * @link https://kira.moe
 */
  if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>

<?php include('meta.php'); ?>
<?php include('header.php'); ?>

<div id="body">
    <!-- re-limit the size to content area -->
    <div class="container">
        <div class="row">

            <!-- announcement -->
            <?php if ($this->options->announcement): ?>
            <div class="announcement">
                <svg style="width:22px;height:22px" viewBox="0 0 24 24">
                    <path fill="#fff"
                        d="M10,4A4,4 0 0,1 14,8A4,4 0 0,1 10,12A4,4 0 0,1 6,8A4,4 0 0,1 10,4M10,14C14.42,14 18,15.79 18,18V20H2V18C2,15.79 5.58,14 10,14M20,12V7H22V12H20M20,16V14H22V16H20Z" />
                </svg>
                <span>
                    &nbsp;&nbsp;<?php $this->options->announcement() ?>
                </span>
            </div>
            <?php endif; ?>

            <div class="col-mb-12 col-9" id="main" role="main">
                <!-- article -->
                <?php while($this->next()): ?>
                <article class="post">
                    <!-- bar -->
                    <div class="post-side-info">
                        <div class="avatar">
                            <a href="<?php $this->author->permalink(); ?>">
                                <?php $this->author->gravatar(64);?>
                            </a>
                        </div>

                        <div class="panel">
                            <div class="time item">
                                <?php echo time2Units(time() - $this->created) ?>前
                            </div>

                            <a class="comments item" href="<?php $this->permalink() ?>#comments">
                                <svg style="width:15px;height:15px" viewBox="0 0 24 24">
                                    <path fill="#000000"
                                        d="M12,23A1,1 0 0,1 11,22V19H7A2,2 0 0,1 5,17V7C5,5.89 5.9,5 7,5H21A2,2 0 0,1 23,7V17A2,2 0 0,1 21,19H16.9L13.2,22.71C13,22.9 12.75,23 12.5,23V23H12M13,17V20.08L16.08,17H21V7H7V17H13M3,15H1V3A2,2 0 0,1 3,1H19V3H3V15Z" />
                                </svg>
                                <span>
                                    &nbsp;<?php $this->commentsNum(_t(' -'), _t(' 1'), _t(' %d')); ?>
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- cover image -->
                    <?php if ($this->fields->previewImage && $this->fields->previewImage !== ""): ?>
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

                    <!-- content -->
                    <div class="post-content">
                        <?php $this->content('<- Read ->'); ?>
                    </div>
                </article>
                <?php endwhile; ?>

                <!-- pages -->
                <?php $this->pageNav('<', '>'); ?>
            </div>

        </div>
    </div>
</div>

<?php include('footer.php'); ?>