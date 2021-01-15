<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE HTML>
<!-- used to handle js support, the tag would got removed if js is enabled -->
<html class="no-js">

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>
        <?php $this->archiveTitle([
            'category' =>  _t('分类 %s'),
            'search'   =>  _t('搜寻 %s'),
            'tag'      =>  _t('标签 %s'),
            'author'   =>  _t('@%s')
        ], '', ' - '); ?>
        <?php $this->options->title(); ?>
    </title>

    <link rel="stylesheet" href="https://cdn.bootcss.com/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/nav.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/post.css'); ?>">
    <script src="<?php $this->options->themeUrl('theme.js'); ?>"></script>

    <!--[if lt IE 9]>
    <script src="//cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--[if lt IE 8]>
    <div class="browsehappy" role="dialog">
        <?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>
    </div>
    <![endif]-->

<!-- end meta -->