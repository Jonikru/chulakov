<?php
/* @var ArticleController $this */
/* @var ActiveDataProvider|InfiniteActiveDataProvider $dataProvider */
/* @var Article[] $loop */
?>

<div class="loop"
     data-pagination="<?= $dataProvider->pagination->currentPage; ?>/<?= $dataProvider->pagination->pageCount; ?>"
     data-scroll="<?= $dataProvider->pagination->currentPage; ?>"
     data-url="<?= $dataProvider->pagination->getCurrentPageUrl($this); ?>"
>

    <?php
    foreach ($loop as $model) {
        $this->renderPartial('_item', array('model' => $model));
    }
    ?>

</div>