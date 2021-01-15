<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<header id="header"
    class="<?php if (!$this->is('index') || !$this->_currentPage == 1) { echo "index-clear "; } ?>clearfix">
    <!-- reserve the full screen size for background and put the black shadow above -->
    <div class="screen">
        <div class="site-title">
            <p class="title"><?php $this->options->title() ?></p>
            <p class="description"><?php $this->options->description() ?></p>
        </div>

        <!-- limit the size to content area -->
        <div class="container">

            <!-- set for flex style and bottom height -->
            <div class="nav col-mb-12">

                <div class="menu clearfix">
                    <!-- mark for current and only set url for others -->
                    <a <?php if ($this->is('index')): ?> class="current" <?php else: ?>
                        href="<?php $this->options->siteUrl(); ?>" <?php endif; ?>>
                        文章
                    </a>

                    <!-- collect pages -->
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>

                    <!-- mark for current and only set url for others -->
                    <?php while ($pages->next()): ?>
                    <a <?php if ($this->is('page', $pages->slug)): ?> class="current" <?php else: ?>
                        href="<?php $pages->permalink(); ?>" <?php endif; ?>>
                        <?php $pages->title(); ?>
                    </a>
                    <?php endwhile; ?>

                </div>

                <div class="col-3 kit-hidden-tb">
                    <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                        <input type="text" id="s" name="s" class="text" placeholder='' />
                        <button type="submit" class="submit">
                            <svg style="width:21px;height:21px" viewBox="0 0 24 24">
                                <path fill="#cfcfcf" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                            </svg>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</header>

<!-- end header -->