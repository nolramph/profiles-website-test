<div id="breadcrumbs">
    <a id="mainBreadcrumbsPage" class="btn btn-breadcrumbs" href="<?php echo $result['sub_page_url']; ?>"><?php echo $result['sub_page_name']; ?></a>
    <?php if(!$isMain) { ?>
    <i class="fa fa-angle-right"></i>
    <a id="subBreadcrumbsPage" class="btn btn-breadcrumbs disabled"><?php echo $result['page_name']; ?></a>
    <?php } ?>
</div>