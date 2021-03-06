<?php
/** @var FrontendController $this */

$form = new AskQuestionForm();
$contacts = Page::model()->findByPk(16);
?>

<div class="reveal large" id="new-question_header" data-animation-in="slide-in-down" data-animation-out="slide-out-up"
     data-reveal>
    <div class="heading">
        Задать вопрос
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <svg class="icon-close">
                <use xlink:href="#icon-close"></use>
            </svg>
        </button>
    </div>

    <form class="ajax-form" action="/site/askQuestion" novalidate method="post">
        <?= CHtml::activeHiddenField($form, 'pageUrl'); ?>
        <?= CHtml::activeHiddenField($form, 'pageTitle'); ?>
        <?= CHtml::activeHiddenField($form, 'firstName'); ?>
        <input type="hidden" name="subject" value="Вопрос">

        <div class="ajax-form__elements">
            <div class="row">
                <div class="small-6 columns">
                    <div>
                        <label class="input-medium">Имя</label>
                        <div class="input-group margin-small">
                            <?= CHtml::activeTelField($form, 'name', array('class' => 'input-group-field', 'placeholder' => 'Введите Ваше имя')); ?>
                            <div class="input-group-label">
                                <svg class="icon-people">
                                    <use xlink:href="#icon-people"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="form-error"></div>
                    </div>

                    <div>
                        <label class="input-medium">Телефон</label>
                        <div class="input-group margin-small">
                            <?= CHtml::activeTelField($form, 'phone', array('class' => 'input-group-field phone-mask', 'placeholder' => '+7 (906) 627-01-34')); ?>
                            <div class="input-group-label">
                                <svg class="icon-phone">
                                    <use xlink:href="#icon-phone"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="form-error"></div>
                    </div>

                    <div>
                        <label class="input-medium">Почта</label>
                        <div class="input-group margin-small">
                            <?= CHtml::activeTelField($form, 'email', array('class' => 'input-group-field', 'placeholder' => 'Введите Ваш email')); ?>
                            <div class="input-group-label">
                                <svg class="icon-mail">
                                    <use xlink:href="#icon-mail"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="form-error"></div>
                    </div>
                </div>

                <div class="small-6 columns">
                    <div>
                        <label class="input-medium">Ваш вопрос</label>
                        <div class="input-group margin-small">
                            <?= CHtml::activeTextArea($form, 'question', array('class' => 'md-0', 'placeholder' => 'Введите Ваш вопрос', 'style' => 'height: 271px;')); ?>
                        </div>
                        <div class="form-error"></div>
                    </div>
                </div>


                <div class="small-12 columns">
                    <button class="button large alert float-right no-bot-margin mt-15" type="submit">Отправить</button>
                    <div class="button-label-text float-right mt-15 large"><?= $contacts->phoneManager; ?></div>
                </div>
            </div>
        </div>
        <div class="ajax-form__message">
            <div class="extend_h4">Ваше заявка принята</div>
        </div>
    </form>

</div>