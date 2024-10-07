<!DOCTYPE html>
<html lang="ru" itemscope itemtype="https://schema.org/WebPage">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta name="cmsmagazine" content="921a64a15847ed2b8bbfe9d762cb5577"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="google-site-verification" content="-QjHbl3_SdhnBwao49Ywys6uIZMmNiuB2e56-2WUye4"/>
    <meta name='yandex-verification' content='4302692b47a9582c'/>
    <meta name="robots" content="noodp"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/favicon-16x16.png">
    <link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/build/scripts/main.js"></script>
	<?php

	$APPLICATION->ShowProperty("og_image");
	\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/build/styles/main.css');
	if($APPLICATION->GetCurPage(false) == '/' || $APPLICATION->GetCurPage(false) == '/quiz/'){
		\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/main_page_assets/css/style.css');
		\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/main_page_assets/css/mfp.css');
		\Bitrix\Main\Page\Asset::getInstance()->addCss('//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

		\Bitrix\Main\Page\Asset::getInstance()->addJs('//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',true);
		\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/main_page_assets/js/jq.js',true);
		\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/main_page_assets/js/jquery.inputmask.min.js',true);
		\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/main_page_assets/js/mfp.js',true);
		\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/main_page_assets/js/script.js',true);
	}
	//Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/build/scripts/main.js',true);
	if (SHOW_BITRIX_PANEL === true) {

	}
	$APPLICATION->ShowHead();
	global $USER;


	$APPLICATION->SetPageProperty('canonical', 'https://www.franshiza-info.ru' . $APPLICATION->GetCurPage(false));
	global $dir;
	global $bundleName;
	?>
    <meta name="yandex-verification" content="89db12a365ed253f"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .done-page .main__content, .main--catalog .main__content {
            overflow: hidden;
            width: -webkit-fill-available;
        }
    </style>
</head>

<body>
<div class="menu-bg"></div>
<?
$APPLICATION->ShowPanel();
?>
<!-- Google tag (gtag.js) -->
<script data-skip-moving="true" async src="https://www.googletagmanager.com/gtag/js?id=G-9SDS5LEE81"></script>
<script data-skip-moving="true">   window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}

	gtag('js', new Date());
	gtag('config', 'G-9SDS5LEE81');
</script>
<header id="header" class="header">
    <a href="#main" class="btn btn--btn btn--primary skip-link">
      <span class="btn__text ">
        Перейти к главному разделу
      </span>
    </a>
    <div class="container">
        <div class="header__inner">
            <div class="header__top">
                <a class="logo header__logo" href="/">
                    <span class="visually-hidden">Главная страница</span>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/images/logo.png" alt="" width="198" height="46">
                </a>

				<?if($APPLICATION->GetCurPage(false) == '/'):?>
                    <div class="catalog-menu-new">
                        <a href="#" class="btn btn--btn btn--secondary header__catalog-btn">
                            <svg class="icon btn__icon" aria-hidden="true">
                                <use href="<?=SITE_TEMPLATE_PATH?>/main_page_assets/assets/sprites/sprite-mono.svg#four_squares"></use>
                            </svg>

                            <span class="btn__text ">
                  Каталог франшиз
                </span>
                        </a>
                        <div class="catalog-dropdown-menu">
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"main-header",
								Array(
									"DISPLAY_DATE" => "N",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "N",
									"DISPLAY_PREVIEW_TEXT" => "N",
									"AJAX_MODE" => "N",
									"IBLOCK_TYPE" => "landing2017",
									"IBLOCK_ID" => "20",
									"NEWS_COUNT" => "1000",
									"SORT_BY1" => "SORT",
									"SORT_ORDER1" => "ASC",
									"SORT_BY2" => "NAME",
									"SORT_ORDER2" => "ASC",
									"FILTER_NAME" => $arParams["FILTER_NAME"],
									"FIELD_CODE" => array("={$arParams["LIST_FIELD_CODE"]}"),
									"PROPERTY_CODE" => array("={$arParams["LIST_PROPERTY_CODE"]}"),
									"CHECK_DATES" => "N",
									"DETAIL_URL" => "/katalog-franshiz/#ELEMENT_CODE#/",
									"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
									"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
									"SET_TITLE" => "N",
									"SET_BROWSER_TITLE" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_LAST_MODIFIED" => "N",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"ADD_SECTIONS_CHAIN" => "N",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"INCLUDE_SUBSECTIONS" => "Y",
									"CACHE_TYPE" => "A",
									"CACHE_TIME" => 3600,
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "N",
									"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
									"DISPLAY_TOP_PAGER" => "N",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"PAGER_TITLE" => $arParams["PAGER_TITLE"],
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
									"PAGER_SHOW_ALL" => "N",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"SET_STATUS_404" => "N",
									"SHOW_404" => "N",
									"MESSAGE_404" => $arParams["MESSAGE_404"],
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"AJAX_OPTION_HISTORY" => "N",
									"COMPOSITE_FRAME_MODE" => "A",
									"COMPOSITE_FRAME_TYPE" => "AUTO"
								),
								$component
							);?>
							<?$APPLICATION->IncludeComponent(
								"bitrix:menu",
								"katalog-dop",
								Array(
									"ROOT_MENU_TYPE" => "katalog_dop",
									"MAX_LEVEL" => "1",
									"CHILD_MENU_TYPE" => "",
									"USE_EXT" => "N",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N",
									"MENU_CACHE_TYPE" => "N",
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => array()
								),
								false
							);?>
							<?php
							$APPLICATION->ShowViewContent('landing-sub-elems');
							?>
                        </div>

                    </div>


				<?else:?>
                    <a href="/katalog-franshiz/" class="btn btn--btn btn--secondary header__catalog-btn">
                        <svg class="icon btn__icon" aria-hidden="true">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/sprites/sprite-mono.svg#four_squares"></use>
                        </svg>
                        <span class="btn__text ">
              Каталог франшиз
            </span>
                    </a>
				<?endif;?>

                <form class="search header__search" action="/franchises/search/" method="get">
                    <div class="input-block search__input-block">
                        <input class="input-block__input search__input" type="search" name="q"
                               placeholder="Поиск, например, магазин">
                        <button class="btn search__btn" type='submit' aria-label='Отправить'>
                            <svg class="icon btn__icon search__icon" aria-hidden="true">
                                <use href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/sprites/sprite-mono.svg#search"></use>
                            </svg>
                        </button>
                    </div>
                </form>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"main-menu",
					Array(
						"ROOT_MENU_TYPE" => "main",
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "",
						"USE_EXT" => "N",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array()
					),
					false
				);?>

                <button class="btn burger" aria-expanded='false' aria-label='Открыть' aria-controls='burger_menu'>
                    <svg class="icon btn__icon burger__icon" aria-hidden="true">
                        <use href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/sprites/sprite-mono.svg#burger"></use>
                    </svg>
                </button>
            </div>
            <div class="header__bottom">
                <div class="header__tel-block">
                    <p class="header__tel-text">
                        Ваш каталог франшиз №1
                    </p>
                    <a href="tel:+74951855663" class="btn header__tel">
                        <svg class="icon btn__icon header__tel-icon" aria-hidden="true">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/sprites/sprite-mono.svg#phone"></use>
                        </svg>
                        <span class="btn__text ">
                +7 (495) 185-56-63
              </span>
                    </a>
                </div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"top-menu",
					Array(
						"ROOT_MENU_TYPE" => "top",
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "",
						"USE_EXT" => "N",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array()
					),
					false
				);?>

                <a href="/reklama/" class="btn btn--btn btn--primary header__franchise-btn">
            <span class="btn__text ">
              Добавить франшизу в каталог
            </span>
                </a>
                <div class="mobile-search">
                    <button class="btn mobile-search__open-btn" aria-label='Открыть поиск'>
                        <svg class="icon btn__icon mobile-search__open-icon" aria-hidden="true">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/sprites/sprite-mono.svg#search"></use>
                        </svg>
                    </button>
                    <form class="search mobile-search__search" action="/franchises/search/" method="get">
                        <div class="input-block search__input-block">
                            <input class="input-block__input search__input" type="search" name="q"
                                   placeholder="Поиск, например, магазин">
                            <button class="btn search__btn" type='submit'>
                                <svg class="icon btn__icon search__icon" aria-hidden="true">
                                    <use href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/sprites/sprite-mono.svg#search"></use>
                                </svg>
                            </button>
                        </div>
                    </form>
                    <button class="btn mobile-search__close-btn" aria-label='Закрыть поиск'>
                        <svg class="icon btn__icon mobile-search__close-icon" aria-hidden="true">
                            <use href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/sprites/sprite-mono.svg#close"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="burger_menu" class="burger-menu">
        <div class="burger-menu__content">
            <div class="burger-menu__header">
                <button class="btn burger-menu__search" aria-label='Открыть поиск'>
                    <svg class="icon btn__icon burger-menu__icon" aria-hidden="true">
                        <use href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/sprites/sprite-mono.svg#search"></use>
                    </svg>
                </button>
                <button class="btn burger-menu__close" aria-label='Закрыть меню'>
                    <svg class="icon btn__icon burger-menu__icon" aria-hidden="true">
                        <use href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/sprites/sprite-mono.svg#close"></use>
                    </svg>
                </button>
            </div>
            <a href="tel:+74951855663" class="btn header__tel burger-menu__tel">
                <svg class="icon btn__icon header__tel-icon" aria-hidden="true">
                    <use href="<?= SITE_TEMPLATE_PATH ?>/assets/build/assets/sprites/sprite-mono.svg#phone"></use>
                </svg>
                <span class="btn__text ">
            +7 (495) 185-56-63
          </span>
            </a>
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"top-toggle-menu",
				array(
					"ROOT_MENU_TYPE" => "top-toggle",
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "",
					"USE_EXT" => "Y",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(
					),
					"COMPONENT_TEMPLATE" => "top-toggle-menu",
					"COMPOSITE_FRAME_MODE" => "A",
					"COMPOSITE_FRAME_TYPE" => "AUTO"
				),
				false
			);?>
			<?if(!$USER->IsAuthorized()):?>
                <ul class="burger-menu__entry-list">
                    <li class="burger-menu__entry-item">
                        <a href="/personal/" class="btn burger-menu__entry-link">
              <span class="btn__text ">
                Войти
              </span>
                        </a>
                    </li>
                    <li class="burger-menu__entry-item">
                        <a href="/registration/" class="btn burger-menu__entry-link">
              <span class="btn__text ">
                Зарегистрироваться
              </span>
                        </a>
                    </li>
                </ul>
			<?else:?>
                <ul class="burger-menu__entry-list">
                    <li class="burger-menu__entry-item">
                        <a href="#" class="btn burger-menu__entry-link">
              <span class="btn__text ">
                Личный кабинет
              </span>
                        </a>
                    </li>
                    <li class="burger-menu__entry-item">
                        <a href="?logout=yes" class="btn burger-menu__entry-link">
              <span class="btn__text ">
                Выйти
              </span>
                        </a>
                    </li>
                </ul>
			<?endif;?>
            <a href="/reklama/" class="btn btn--btn btn--primary burger-menu__btn">
          <span class="btn__text ">
            Добавить франшизу
          </span>
            </a>
        </div>
    </div>
</header>
<main id="main" class="main <?=$APPLICATION->ShowProperty('main_class')?>" tabindex="-1">
    <?
    if ($APPLICATION->GetCurPage(false) != '/') {
    if ($APPLICATION->GetCurPage(false) != '/quiz/' && $APPLICATION->GetCurPage(false) != '/quiz/done/') {
        // Боковые баннеры
        global $BRAND_ID;
        // fppr($BRAND_ID, __FILE__.' BRAND_ID before side');
        $APPLICATION->IncludeComponent(
            "ra:adv.branding",
            ".default",
            array(
                "IBLOCK_TYPE" => "services",
                "IBLOCK_ID" => GetIblockIdByCode('branding'),
                "COMPONENT_TEMPLATE" => ".default",
                "POSITION" => "SIDE",
                "BRAND_ID" => $BRAND_ID,
            ),
            false
        );
    }

    ?>

    <div class="container main__container">
        <?
        if (!CSite::InDir('/personal/manager/')): ?>
        <div class="main__inner">
            <div class="main__content">
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb", "franshiza", array(
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => "-"
                ),
                    false,
                    array('HIDE_ICONS' => 'Y')
                ); ?>
                <?= $APPLICATION->ShowProperty('mobile_landings') ?>
                <?
                if (!CSite::InDir('/personal/manager/') && !CSite::InDir('/quiz/')): ?>
                    <h1 class="title title--h1">
                        <?
                        $APPLICATION->ShowTitle(false); ?>
                    </h1>
                <?
                endif; ?>

                <?
                endif; ?>
<?
} ?>
