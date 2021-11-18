


    <!DOCTYPE html>
    <html lang="vi" class="theme-agoda " prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#  place: http://ogp.me/ns/place#">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,viewport-fit=cover">
        <meta name="agoda:siteid" content="mspa">
        <link rel="SHORTCUT ICON" href="/favicon.ico" />
        <link rel="apple-touch-icon" href="/favicon.ico" />

<style>
    .theme-agoda .loader > span:nth-child(1) {
        background-color: #ff2938;
    }

    .theme-agoda .loader > span:nth-child(2) {
        background-color: #fdb812;
    }

    .theme-agoda .loader > span:nth-child(3) {
        background-color: #00b057;
    }

    .theme-agoda .loader > span:nth-child(4) {
        background-color: #af38b1;
    }

    .theme-agoda .loader > span:nth-child(5) {
        background-color: #00aae0;
    }
</style>
<style>
        html,
        body,
        #agoda-spa {
            display: flex;
            display: -webkit-flex;
            flex: 1;
            -webkit-flex: 1;
            flex-direction: column;
            -webkit-flex-direction: column;
        }

        html {
            height: 100%;
        }

            html.hideAddressBar {
                min-height: 100%;
            }
            .hideAddressBar body {
                overflow-x: hidden;
                max-width: 100vw;
                min-height: 100%;
            }
            .hideAddressBar #agoda-spa {
                min-height: 100%;
            }
            
        * {
            touch-action: manipulation;
        }

        #agoda-splash {
            display: flex;
            display: -webkit-flex;
            flex: 1;
            -webkit-flex: 1;
            flex-direction: column;
            -webkit-flex-direction: column;
            justify-content: center;
            -webkit-justify-content: center;
            align-items: center;
            -webkit-align-items: center;
            background-color: white;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            transition: opacity 0.4s ease-out;
            transition-delay: 0.2s;
            z-index: 100;
        }

        #agoda-splash.hide {
            opacity: 0;
        }

        #agoda-splash.display-none {
            display: none;
        }

        .loader {
            display: flex;
            display: -webkit-flex;
            margin-top: 3px;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

            .loader span {
                width: 16px;
                height: 16px;
                margin: 0 4px;
                opacity: 0;
                border-radius: 50%;
                -webkit-animation: loaderFade 1s infinite;
                -moz-animation: loaderFade 1s infinite;
                -o-animation: loaderFade 1s infinite;
                -ms-animation: loaderFade 1s infinite;
                animation: loaderFade 1s infinite;
            }

        .loader > span:nth-child(1) {
            background-color: #e44746;
            -webkit-animation-delay: -0.5s;
            -moz-animation-delay: -0.5s;
            -o-animation-delay: -0.5s;
            -ms-animation-delay: -0.5s;
            animation-delay: -0.5s;
        }

        .loader > span:nth-child(2) {
            background-color: #ffa726;
            -webkit-animation-delay: -0.4s;
            -moz-animation-delay: -0.4s;
            -o-animation-delay: -0.4s;
            -ms-animation-delay: -0.4s;
            animation-delay: -0.4s;
        }

        .loader > span:nth-child(3) {
             background-color: #85c150;
            -webkit-animation-delay: -0.3s;
            -moz-animation-delay: -0.3s;
            -o-animation-delay: -0.3s;
            -ms-animation-delay: -0.3s;
            animation-delay: -0.3s;
        }

        .loader > span:nth-child(4) {
            background-color: #8c69ca;
            -webkit-animation-delay: -0.2s;
            -moz-animation-delay: -0.2s;
            -o-animation-delay: -0.2s;
            -ms-animation-delay: -0.2s;
            animation-delay: -0.2s;
        }

        .loader > span:nth-child(5) {
            background-color: #488bf8;
            -webkit-animation-delay: -0.1s;
            -moz-animation-delay: -0.1s;
            -o-animation-delay: -0.1s;
            -ms-animation-delay: -0.1s;
            animation-delay: -0.1s;
        }

        .no-touch {
            touch-action: none;
            pointer-events: none;
        }

        @keyframes logoAnim {
            0%, 100% {
                opacity: 0.2;
            }

            50% {
                opacity: 1;
            }
        }

        .whiteLabelLogo {
            animation-name: logoAnim;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
        }

        @-webkit-keyframes loaderFade { 0% { opacity: 1; } 20% { opacity: 1; } 50% { opacity: 0; } 80% { opacity: 1; } 100% { opacity: 1; } } @-moz-keyframes loaderFade { 0% { opacity: 1; } 20% { opacity: 1; } 50% { opacity: 0; } 80% { opacity: 1; } 100% { opacity: 1; } } @keyframes loaderFade { 0% {opacity: 1;} 20% {opacity: 1; } 50% { opacity: 0; } 80% { opacity: 1; } 100% { opacity: 1; }
        }
</style>


    <script type="text/javascript">
        var dictatorParams = dictatorParams || {};
        dictatorParams.feMessagingUrl = '/js/assets/cronos/Assets/mcjs-worker.js';
        dictatorParams.polyFillFeMessagingUrl = '/js/assets/cronos/Assets/mcjs-polyfills.js';
        dictatorParams.cid = 1744603;
        dictatorParams.aid = 82364;
        dictatorParams.sessionId = "oim1i1wzwjzauw5yrxeecoul";
        dictatorParams.redirectModel = {"overlayBanner":null,"promoOverlay":null,"whiteBanner":null,"tallBanner":null,"showPulseCarousel":false,"redirectProperties":{"devicePlatform":"DESKTOP","mobileDeviceType":"NOTMOBILE","browserName":"Chrome","origin":"VN","isLogin":"False","trafficType":"User"},"showAppPrices":false};
        dictatorParams.machineName = "hk-crspa-2002";
        dictatorParams.cttp = 4;
        dictatorParams.userId = "b1aaea44-26cf-40bb-a19e-0bddb11ef2bf";
        dictatorParams.mseSearchDetails = [];
        dictatorParams.isWhiteLabel = true;
        dictatorParams.searchEngineClicks = {};
        dictatorParams.isFlightPhaseExperimentActive = true;
        dictatorParams.isHideFlightsMenu = false;
        dictatorParams.gwUrl= 'www.agoda.com/api/gw';
        dictatorParams.gwPciUrl= 'gwpci.agoda.com';
        dictatorParams.webgateUrl = '//www.agoda.com';
        dictatorParams.isCcpaPolicyMenuLink = false;
        dictatorParams.isMspaHideAddressBar = false;
        dictatorParams.isLandingHotel = false;
        dictatorParams.isFixNavigation = false;
        dictatorParams.isPackagesMSPA = true;
        dictatorParams.isMultiHotels =  true;
        dictatorParams.enableAccessibilityTheme = false;
        dictatorParams.fontSSR = false;
        dictatorParams.isBundleOptimized = true;
        dictatorParams.asqLosTooltipsMspa = false;
        dictatorParams.asqLosConfiguration = {"132":[7,14,21]};
        dictatorParams.iswebVitalsV2Enabled =  false;
        dictatorParams.asqAllowedCitiesConfiguration = {"16056":{"config":{"losConfig":[],"badgeCmsId":130223}},"17198":{"config":{"losConfig":[],"badgeCmsId":130223}},"17402":{"config":{"losConfig":[],"badgeCmsId":130223}},"17389":{"config":{"losConfig":[],"badgeCmsId":130223}},"14865":{"config":{"losConfig":[],"badgeCmsId":130223}},"15878":{"config":{"losConfig":[],"badgeCmsId":130223}},"79632":{"config":{"losConfig":[],"badgeCmsId":130223}},"102461":{"config":{"losConfig":[],"badgeCmsId":130223}},"17191":{"config":{"losConfig":[],"badgeCmsId":130223}},"2570":{"config":{"losConfig":[],"badgeCmsId":130223}}};

    </script>
    <script type="text/javascript">
        var dictatorParams = dictatorParams || {};
        dictatorParams.whiteLabelBrandLogo = "https://cdn6.agoda.net/images/MVC/default/agoda-logo-v2.png";
        dictatorParams.isMaintenanceMode = false;
        dictatorParams.isEmergencyMode = false;
        dictatorParams.isBookingForMaintenanceModeEnabled = false;
    </script>
    <script type="text/javascript">
        var dictatorParams = dictatorParams || {};
        dictatorParams.shouldShowDomesticName = false;
    </script>

        <script type="text/javascript">
            window.prerender = {
                mandatoryComponentsFeatureEnabled: true,
                mandatoryComponentsFinishedRendering: function () {
                    return false;
                },
            };
        </script>
            <link href="https://cdn6.agoda.net/js/mspa/theme-agoda.67136fb4d59a2448eeb3.css" rel="stylesheet">
            <link href="https://cdn6.agoda.net/js/mspa/bfPackages.94181a56e8279109f2a5.css" rel="stylesheet">
            <script type="text/javascript">
                sessionStorage.setItem('mspaConsulRetry', null);
            </script>
    </head>
    <body class="theme-agoda OWL-MMB-MOBILE OWL-INTER OWL-748 OWL-808 OWL-810 DEXP-221">
        <input id="requestVerificationToken"
               name="requestVerificationToken"
               type="hidden"
               value="CfDJ8Dkuqwv-0VhLoFfD8dw7lYw5UOeaGvmONF1pSobAxVugpnXvzARESNY4gZtzT1w6sp4rrZY00K8zTrmJr4BPV5AwWFX6cd3XdeWUhhmp0EsylmjupsY4jA2ONKwI79cc-SHCvMuJE9RelpUC_faKRrc" />



<script>
    var agoda = agoda || {};
    agoda.reactHeader = {};
    agoda.reactHeader.menuViewModel = {};
    agoda.reactHeader.experiments = {
        isOWL177: true,
        isShouldUpdateGCBalance: false,
        isCmaEnabled: true,
        useFeaturesOnHomePage: true,
        useFeaturesChinaMarket: false,
    };
    agoda.reactHeader.culture = 'vi-vn';
    agoda.reactHeader.menuViewModel = {"languageMenuViewModel":{"cms":{"suggestedLanguagesText":"Ngôn ngữ gợi ý","allLanguagesText":"Tất cả ngôn ngữ"},"languageFlag":"vn","languageTranslation":"Tiếng Việt"},"userMenuViewModel":null,"cms":{"signInText":"Đăng nhập","signUpText":"Tạo tài khoản","signOutText":"Thoát","loginHeader":"Đăng nhập","settingsHeader":"Cài đặt","myBookingsText":"Đơn đặt chỗ của tôi\n","listYourPlaceText":"Đăng ký cho thuê nhà","listingYourPlaceTitleText":"Ghi danh nơi bạn ở trên Agoda","listingYourPlaceDetailText":"Hãy kiếm tiền để trả cho chuyến đi của bạn!","listingYourPlaceLinkText":"Ghi danh nơi bạn ở Ngay Hôm Nay","listingYourPlaceTooltipText":" Trong 24 giờ qua, đã có {0} du khách tìm đặt một chỗ ở giống như chỗ của bạn. Hãy ghi danh ngay!","listingYourPlaceTooltipDismissText":"Đừng hiện lại.","myBookingsPopUpIntentHeader":"Booked before 1 Jan 2020?","myBookingsPopUpWarningContent":"<p>※ Regarding your booking on or before December 15, 2019, please contact JAPANiCAN Customer Support on and after Jun 23, 2020. Click <a href=\"https://www.japanican.com/content/faq/?#6-1\" target=\"_blank\">here</a> for details.</p>\n","myBookingsPopUpHeader":"Booked on or after December 9, 2019?","myBookingsPopUpText":"Please check your booking confirmation email. You can easily access your booking from the link inside that email.","myBookingsPopUpButtonDividerText":"hoặc","myBoookigsPopUpCloseButtonLabel":"Đóng","signInPopupHeaderText":null,"signInPopupContentText":null,"signInPopupWithEmailText":null,"termsOfUseAndPrivacySentence":"Khi đăng nhập, tôi đồng ý với các {0} và {1} của Agoda.","termsOfUse":"Điều khoản sử dụng","privacyPolicy":"Chính sách bảo mật"},"links":{"agodaHostnameWithLocale":"//www.agoda.com/vi-vn","myAgodaHostNameWithLocale":"//my.agoda.com/vi-vn","customerSupportLink":"/vi-vn/info/agoda_faq.html","contactLink":"/vi-vn/info/contact.html","openSearchLink":"/vi-vn/opensearch.xml","forgetPasswordUrl":"/vi-vn/account/signin.html?option=reset-password","signupUrl":"/vi-vn/account/signin.html?option=signup","myProfileLink":"/vi-vn/account/profile.html","manageBookingsUrl":"/vi-vn/account/bookings.html","inboxUrl":"/vi-vn/account/inbox.html","myReviewsUrl":"/vi-vn/account/reviews.html","myBookingPage":"/vi-vn/account/bookings.html","myFlightsBookingPage":"/vi-vn/flights/account/bookings","myCreditCardPage":"/vi-vn/account/ccof.html","giftCardUrl":"/vi-vn/account/giftcards.html","giftCardMigrationUrl":"//www.agoda.com/vi-vn/mybookings.html?migration=2","referAFriendUrl":"/vi-vn/account/refer-a-friend.html","aboutusAgodaLink":"/vi-vn/info/about-agoda.html","aboutusAgodaChinaLicense":"","aboutusAgodaInNewsLink":"/vi-vn/info/agoda-news.html","aboutusAgodaPrivacyLink":"/vi-vn/info/privacy.html","aboutusAgodaTermOfUseLink":"/vi-vn/info/termsofuse.html","aboutusTravelBlogLink":"//travelblog.agoda.com","aboutusMediaRoomLink":"//mediaroom.agoda.com","aboutusPressLink":"/vi-vn/press","aboutusWorldLink":"//www.agoda.com/vi-vn/world.html","aboutusBlogLink":"/vi-vn/blog","forYouPropertyPartnersLink":"////ycs.agoda.com/vi-vn","forYouPartnerSolutionsLink":"//connect.agoda.com/","forYouPartnerHubLink":"//partnerhub.agoda.com/","advertiseHubLink":"//partnerhub.agoda.com/hotel-solutions/ad-solutions/","forYouAffiliatePartnersLink":"////partners.agoda.com/vi-vn/index.html","forYouConnectivityPartnersLink":"//www.agodaconnectivity.com/home","forYouCareersLink":"//careersatagoda.com","forYouHelpLink":"//www.agoda.com/vi-vn/info/agoda-faq.html","forYouPriusLink":"//www.agoda.com/vi-vn/pointsmax.html","copyRightVeriSignLink":"//verisign.com/","mobileAppDownloadLink":"http://agoda.onelink.me/1640755593?pid=direct&c=hotel_page_menu&af_dp=agoda%3A%2F%2Fhome&site_id=1716632&af_siteid=1716632&af_sub1=mobile_web","mobileAppsAppleLink":"//app.appsflyer.com/id440676901?pid=direct&c=hotel_page_footer&af_siteid=1716632&site_id=1716632&af_sub1=desktop","mobileAppsAndroidLink":"//app.appsflyer.com/com.agoda.mobile.consumer?pid=direct&c=hotel_page_footer&af_siteid=1716632&site_id=1716632&af_sub1=desktop","mobileAppsWindowsPhoneLink":"//www.windowsphone.com/en-us/store/app/agoda/2ddd154d-1b1a-4e50-bf12-481f0c2109a8","recommendedDestinationLink":"//www.agoda.com/vi-vn/cities.html","favoriteLink":"/vi-vn/favorite.html","listYourPlaceLink":"/homes//vi-vn?cid=1828703","listYourPlaceBtnLink":"/homes//vi-vn?cid=1828701","listYourPlaceOldLink":"/homes//vi-vn?cid=1828702","agodaVipUrl":"/vi-vn/account/vip.html","faqsLink":"/vi-vn/info/contact.html","siteMaintenanceLink":"/vi-vn/content/maintenance","aboutusTermOfUseLink":"/vi-vn/content/terms-of-use/","aboutusPrivacyLink":"/vi-vn/content/privacy-policy/","japanicanCorporateLink":"//www.jtbcorp.jp/en/","japanicanFacebookLink":"//facebook.com/JAPANiCAN","japanicanWeiboLink":"//www.weibo.com/japanican","japanicanTwitterLink":"//twitter.com/jtbjapanican","japanicanYoutubeLink":"//youtube.com/user/JTBJAPANiCAN","travelAgencyClausesLink":"/content/yakkan","travelRequirementsLink":"/content/jyoken","rurubuCorporateLink":"//www.jtbcorp.jp/jp/","rurubuNewsReleaseLink":"//www.jtbcorp.jp/jp/press_release/index.asp?cmd=&page=&method_check=2&keyword=%82%E9%82%E9%82%D4%83g%83%89%83x%83%8B&company_kanji=&=%83j%83%85%81%5B%83X%83%8A%83%8A%81%5B%83X%82%F0%8C%9F%8D%F5%82%B7%82%E9","rurubuRegisterYourPropertyLink":"//info.rurubu.travel/n_question/entry/mailform.asp","rurubuFacebookLink":"//facebook.com/rurubu.travel/","rurubuTwitterLink":"//twitter.com/RurubuTravel","ccpaLink":"/vi-vn/ccpa.html","remainingPointsLink":null,"tMobilePrivacyPolicy":"//www.t-mobile.com/privacy-center/our-practices/privacy-policy","tMobilePrivacyCenter":"//www.t-mobile.com/privacy-center"},"currencyMenuViewModel":{"cms":{"priceViewText":"XEM GIÁ","perNightBasePriceText":"Giá mỗi đêm","perNightWithTaxesAndFeesText":"Thuế & phí mỗi đêm","suggestedCurrenciesText":"Tiền tệ được đề nghị","topCurrenciesText":"Tiền tệ phổ biến","allCurrenciesText":"Tất cả loại tiền tệ"},"finalPriceView":1,"currency":{"id":78,"code":"VND","text":"Đồng Việt Nam","isTopCurrency":false,"isSuggested":false,"noDecimal":0,"display":"₫"}},"wysiwyp":{"page":"","currentPriceView":1},"applyGiftcardMenuText":"","downloadWechatApp":null,"followWechat":null,"cegInfo":null,"isApplyGiftcard":false};
	agoda.reactHeader.logoAndLinksMenu = {
  "homeUrl": "/vi-vn/?cid=1744603&tag=948fa426-9b1b-7d50-bc56-4a4be86624a5",
  "agodaLogo": "https://cdn6.agoda.net/images/MVC/default/agoda-logo-v2.png",
  "agodaSecondaryLogoPath": "https://pix6.agoda.net/images/MVC/default/logo-{}.svg",
  "isThemed": false,
  "logoText": "Agoda",
  "links": [
    {
      "productType": 11,
      "link": "/vi-vn/packages?cid=1744603&tag=948fa426-9b1b-7d50-bc56-4a4be86624a5",
      "target": "_blank",
      "dataSelenium": "header-packages",
      "dataElementName": "header-flight-hotel-packages-links",
      "selected": false,
      "linkItems": {
        "text": "Máy bay + K.sạn",
        "icon": ""
      },
      "className": "",
      "showTag": true,
      "tagText": "Đặt gói để tiết kiệm!",
      "tagType": 1
    },
    {
      "productType": -1,
      "link": "/vi-vn/?cid=1744603&tag=948fa426-9b1b-7d50-bc56-4a4be86624a5",
      "target": null,
      "dataSelenium": "header-hotels",
      "dataElementName": "header-hotels-links",
      "selected": false,
      "linkItems": {
        "text": "Chỗ ở",
        "icon": ""
      },
      "className": "",
      "showTag": false,
      "tagText": "",
      "tagType": 0
    },
    {
      "productType": 10,
      "link": "/vi-vn/flights?cid=1744603&tag=948fa426-9b1b-7d50-bc56-4a4be86624a5",
      "target": "_blank",
      "dataSelenium": "header-flights",
      "dataElementName": "header-flights-links",
      "selected": false,
      "linkItems": {
        "text": "Chuyến bay",
        "icon": ""
      },
      "className": "",
      "showTag": false,
      "tagText": "Mới!",
      "tagType": 0
    },
    {
      "productType": 0,
      "link": "/vi-vn/deals?cid=1744603&tag=948fa426-9b1b-7d50-bc56-4a4be86624a5",
      "target": "_blank",
      "dataSelenium": "header-deals",
      "dataElementName": "header-deals-links",
      "selected": false,
      "linkItems": {
        "text": "Ưu đãi cho hôm nay",
        "icon": ""
      },
      "className": "",
      "showTag": false,
      "tagText": "",
      "tagType": 0
    },
    {
      "productType": 0,
      "link": "/vi-vn/apartments?cid=1744603&tag=948fa426-9b1b-7d50-bc56-4a4be86624a5",
      "target": "_blank",
      "dataSelenium": "header-apartments",
      "dataElementName": "header-apartments-links",
      "selected": false,
      "linkItems": {
        "text": "Căn hộ",
        "icon": "ficon ficon-18 ficon-agoda-homes"
      },
      "className": "",
      "showTag": false,
      "tagText": "",
      "tagType": 0
    }
  ],
  "ellipsisLinks": [
    {
      "productType": 0,
      "link": "https://agoda.mozio.com/vi-vn/?currency={currency}&ref=agoda&utm_campaign=1793794&utm_source=1793794",
      "target": "_blank",
      "dataSelenium": "header-taxi",
      "dataElementName": "header-taxi-links",
      "selected": false,
      "linkItems": {
        "text": "Taxi sân bay",
        "icon": ""
      },
      "className": "",
      "showTag": false,
      "tagText": "",
      "tagType": 0
    },
    {
      "productType": 0,
      "link": "https://www.rentalcars.com/?affiliateCode=agoda633&prefcurrency=VND&preflang=vi&adplat=web&adcamp=1802440&popularLoc=true&utm_source=web&utm_medium=whitelabel-linkout&utm_campaign=home-header-cars-links",
      "target": "_blank",
      "dataSelenium": "header-rental-cars",
      "dataElementName": "header-cars-links",
      "selected": false,
      "linkItems": {
        "text": "Thuê xe",
        "icon": ""
      },
      "className": "",
      "showTag": false,
      "tagText": "",
      "tagType": 0
    },
    {
      "productType": 0,
      "link": "https://thingstodo-agoda.viator.com/?utm_source=web&utm_medium=whitelabel-linkout&utm_campaign=home-header-thingstodo-links",
      "target": "_blank",
      "dataSelenium": "header-thingstodo",
      "dataElementName": "header-thingstodo-links",
      "selected": false,
      "linkItems": {
        "text": "Làm gì đi đâu",
        "icon": ""
      },
      "className": "",
      "showTag": false,
      "tagText": "",
      "tagType": 0
    }
  ],
  "bltLogo": null
};
	agoda.reactHeader.experiments = {"isOWL177":false,"isShouldUpdateGCBalance":false,"isJagermeister":true,"fullFunnelBannerBelowHeader":false,"fullFunnelBannerRefresh":false,"isFixSecondaryLogo":false,"isNewProfileMenu":false,"isLOY5878":false,"isLOY5879":false,"isSkywl1515":true,"isMigrateToKiteLogo":false};

         agoda.reactHeader.menuViewModel.userMenuViewModel = null;

        agoda.RewardsMember = {
            IsLogin: false,
            IsL1LoggedIn: false,
            IsProfilePicture: false,
            userIconIndex: 0
        };
        </script>


        <div id="agoda-spa"></div>
        <div id="agoda-splash">
                    <img class="whiteLabelLogo" src="https://cdn6.agoda.net/images/MVC/default/agoda-logo-v2.png" height="36" />
        </div>

    <div id="baymax-stamp"><!-- Baymax Allo  --></div>
    </body>

        <script src='https://cdn6.agoda.net/js/mspa/svg.3af201f105d03fcc7211.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-japanican.c32d21f3f85c3003ef72.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-agoda.c0c33690a9013b737c19.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-priceline.7ef85e9f5988f46b0332.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-rurubu.a381ac9d3ec301b2f395.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/initialVendor.2bc44ea102a30e069686.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-jtb.c603eaf22cbcf2bcea7f.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/bfPackages.3baaeb2b31b9e54aa212.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/vendor.00a7c42305c15db0179c.js' crossorigin="anonymous"></script>
        <script src='https://cdn6.agoda.net/js/mspa/theme-rmtmobiletravel.9687a6ebf8970be1ea69.js' crossorigin="anonymous"></script>

    <script>
        var agoda = agoda || {};
        agoda.isCronosSpa = true;
    </script>

<script type="text/javascript" id="messagingClientLite">
!function(t,n){if("object"==typeof exports&&"object"==typeof module)module.exports=n();else if("function"==typeof define&&define.amd)define([],n);else{var e=n();for(var r in e)("object"==typeof exports?exports:t)[r]=e[r]}}("undefined"!=typeof self?self:this,function(){return function(t){var n={};function e(r){if(n[r])return n[r].exports;var i=n[r]={i:r,l:!1,exports:{}};return t[r].call(i.exports,i,i.exports,e),i.l=!0,i.exports}return e.m=t,e.c=n,e.d=function(t,n,r){e.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:r})},e.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},e.t=function(t,n){if(1&n&&(t=e(t)),8&n)return t;if(4&n&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(e.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&n&&"string"!=typeof t)for(var i in t)e.d(r,i,function(n){return t[n]}.bind(null,i));return r},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},e.p="",e(e.s=150)}({12:function(t,n,e){"use strict";function r(t,n,e){for(var r=e.length,i=0;i<r;i++){var o=e[i];if(o)for(var u in o)o.hasOwnProperty(u)&&t(u,o[u])}}e.d(n,"a",function(){return r})},150:function(t,n,e){"use strict";e.r(n);var r=e(29),i=e(17),o=function(){function t(){this.buffer={items:[]},this.contextData={}}return t.prototype.send=function(n){var e=this.buffer.items,r=t.MaxBufferSize-e.length;r>0&&(n instanceof Array?(r<n.length&&(n=n.slice(0,r)),this.buffer.items=n.concat(e)):this.buffer.items.push(n))},t.prototype.dispose=function(t){this.buffer.items.length=0,t&&t()},t.prototype.environment=function(t){},t.prototype.context=function(t){var n=this.contextData;n.sessionId=t.sessionId||n.sessionId,n.userId=t.userId||n.userId},t.MaxBufferSize=15e3,t}(),u=e(42);e.d(n,"MessagingClient",function(){return f});var f=function(){function t(t){this._test=t}return t.create=function(n){return t.instantiate(n)},t.instantiate=function(n){return(new t).instantiate(n)},t.environment=function(n){return new t(n)},t.prototype.instantiate=function(t){var n=i.a.get();if(n.environment=n.environment||t,n.test=n.test||this._test,n.messagingClient)return n.messagingClient;var e=new o,f=new u.a(e,new r.a);return n.buffer=e.buffer,n.context=e.contextData,n.messagingClient=f,f},t}()},17:function(t,n,e){"use strict";e.d(n,"a",function(){return o});var r=e(4),i="MessagingClient-LiteData",o=function(){function t(){}return t.get=function(){var t=r.a.current();return t[i]||(t[i]={})},t.clear=function(){delete r.a.current()[i]},t}()},18:function(t,n){var e;e=function(){return this}();try{e=e||new Function("return this")()}catch(t){"object"==typeof window&&(e=window)}t.exports=e},20:function(t,n,e){"use strict";e.d(n,"a",function(){return r});var r=function(){function t(){}return t.current=function(){return window&&window.__MCJS_EXTENSION_DATA__||{}},t}()},29:function(t,n,e){"use strict";e.d(n,"a",function(){return r});var r=function(){function t(){}return t.prototype.now=function(){return+new Date},t}()},4:function(t,n,e){"use strict";(function(t){e.d(n,"a",function(){return r});var r=function(){function n(){}return n.current=function(){var n="undefined"!=typeof window?window:"undefined"!=typeof self?self:void 0!==t?t:null;if(!n)throw new Error("Unsupported environment.");return n},n}()}).call(this,e(18))},42:function(t,n,e){"use strict";var r=e(20),i=e(12);e.d(n,"a",function(){return o});var o=function(){function t(t,n){this.sender=t,this._time=n}return t.prototype.create=function(t,n){var e={_meta:{type:t}};return n&&function(t){for(var n=[],e=1;e<arguments.length;e++)n[e-1]=arguments[e];t||(t={}),Object(i.a)(function(n,e){void 0===t[n]&&(t[n]=e)},t,n)}(e,n),e},t.prototype.send=function(t,n){if(!t||!t._meta)throw new Error("Message or message type is undefined");(t=JSON.parse(JSON.stringify(t)))._meta.timestamp=this._time.now(),t._meta.tabId=r.a.current().tabId,this.sender.send(t,n)},t.prototype.debug=function(t){this.sender.environment({debug:t})},t.prototype.context=function(t){this.sender.context(t)},t}()}})});
</script>
<script>
    var rtag = {"countryId":0,"countryOrigin":"VN","stateOrigin":"","cityId":0,"cid":1744603,"tag":"948fa426-9b1b-7d50-bc56-4a4be86624a5","sid":0,"pageTypeId":5502,"languageId":24,"languageCode":"vi-vn","isDev":false,"isQA":false,"isLive":true,"isRealUser":true,"userVipLevel":-1,"adult":0,"children":0,"deviceType":"d","attributionViewModel":{"hasSessionFirstClick":true,"sessionFirstClickAttributionCID":"1744603","sessionFirstClickAttributionTag":"948fa426-9b1b-7d50-bc56-4a4be86624a5","sessionFirstClickAttributionModelID":"19","sessionFirstClickAttributionClickDate":"2021-10-05T20:39:38","sessionFirstClickAttributionAdditionalData":"{\u0022IsPaid\u0022:True,\u0022gclid\u0022:\u0022\u0022}","hasCookieLastClick":true,"cookieLastClickAttributionCID":"1744603","cookieLastClickAttributionTag":"948fa426-9b1b-7d50-bc56-4a4be86624a5","cookieLastClickAttributionModelID":"20","cookieLastClickAttributionClickDate":"2021-10-05T20:39:39","cookieLastClickAttributionAdditionalData":"{\u0022IsPaid\u0022:True,\u0022gclid\u0022:\u0022\u0022}"},"bltId":0,"currencyCode":"VND","tax":0,"totalPriceTaxExc":0,"totalPriceTaxInc":0,"trafficGroup":0,"trafficSubGroup":0,"isMspa":false,"defaultTealiumUrl":"//tags.tiqcdn.com/utag/agoda/main2018/prod/utag.js","tealiumProfile":"main2018","experimentManager":{"seenExperiments":{"SKYWL-1515":{"experimentId":1044457,"experimentRunId":1189949,"variant":"B"},"MONEY-EXP-1":{"experimentId":1037030,"experimentRunId":1165469,"variant":"Z"},"PER-7555":{"experimentId":1044444,"experimentRunId":1190704,"variant":"B"},"LOY-5878":{"experimentId":1042356,"experimentRunId":1186482,"variant":"Z"},"LOY-5879":{"experimentId":1042357,"experimentRunId":1178571,"variant":"Z"},"MKTBB-5389-D":{"experimentId":1036920,"experimentRunId":1179231,"variant":"Z"},"CH-1932":{"experimentId":1042435,"experimentRunId":1184114,"variant":"B"},"BAY-AGODA-THEME":{"experimentId":1043764,"experimentRunId":1188106,"variant":"B"},"JB-126":{"experimentId":1045355,"experimentRunId":1190297,"variant":"A"},"AT-3434":{"experimentId":1044809,"experimentRunId":1190536,"variant":"Z"},"SKYWL-US":{"experimentId":1044942,"experimentRunId":1188437,"variant":"Z"}},"experimentState":{"activeIds":[1043545,1045541,1042361,1036665,1026993,1044384,1045396,1038410,1039392,1039824,1044152,1035810,1036123,1033239,1042435,1042828,1033585,1022827,1041725,1045279,1045326,1041259,1009896,1043163,1033166,1024118,1027640,1045228,1032698,1042956,1045474,1031350,1039741,1043475,1038606,1044503,1045231,1044479,1043881,1027641,1044443,1045547,1045171,1029208,1027462,1042479,1045024,1043105,1039118,1020626,1022118,1044142,1034362,1038920,1029061,1027595,1043447,1044000,1043913,1035075,1044696,1041244,1038691,1045458,1042658,1037465,1045437,1024270,1036341,1039042,1044059,1041415,1045014,1031851,1022210,1044814,1041746,1040032,1014596,1038764,1044118,1044594,1039417,1045299,1044694,1039593,1044914,1042778,1037141,1045491,1043370,1027451,1033132,1042562,1033019,1044528,1036382,1044053,1038283,1041226,1045072,1044744,1036999,1039728,1044184,1035818,1043430,1041315,1042005,1036905,1033007,1041516,1045011,1041553,1035638,1043899,1027468,1043722,1045448,1045415,1025179,1042857,1042583,1034972,1045078,1045272,1044919,1027551,1045157,1041963,1031368,1044903,1040690,1027511,1041087,1027635,1045115,1044276,1026933,1040375,1042502,1027627,1038513,1045048,1044445,1027545,1044447,1044048,1043810,1043773,1042993,1027520,1042120,1042866,1040534,1042077,1039735,1045538,1040110,1043865,1044697,1044746,1043237,1039036,1041444,1027542,1042902,1045561,1037486,1035703,1036584,1040188,1044666,1039457,1044173,1045025,1040718,1044771,1027637,1045000,1035422,1043160,1039173,1044671,1036673,1026363,1045390,1042142,1043721,1044195,1045393,1041346,1039813,1043345,1045216,1044826,1027471,1030716,1038319,1044239,1041913,1027512,1043856,1023112,1045476,1045201,1039786,1031169,1045429,1045019,1042708,1043182,1045193,1044851,1028599,1043329,1027600,1044715,1045469,1027580,1039397,1041062,1044050,1045249,1036216,1044769,1040541,1038872,1027313,1042740,1040114,1037277,1039546,1043783,1039412,1027589,1033620,1036188,1041748,1043033,1033842,1039997,1037309,1044469,1044611,1030457,1045416,1027532,1027608,1021369,1038763,1031369,1041435,1027611,1043933,1039599,1045004,1042860,1043746,1035829,1043648,1034715,1038958,1027494,1020763,1045366,1041068,1035778,1027519,1020717,1027614,1030099,1027586,1036375,1044091,1045251,1041658,1043682,1044281,1042430,1044390,1045080,1044525,1035878,1045348,1027479,1044857,1043320,1045221,1036124,1034773,1035052,1045494,1045099,1045341,1042807,1027553,1044282,1043708,1043640,1044821,1042835,1022628,1044916,1041033,1045327,1036128,1020536,1042080,1035989,1044757,1044782,1043837,1038268,1038723,1039909,1031416,1034357,1020262,1042836,1044768,1043731,1027554,1042833,1027643,1045267,1041320,1043971,1043736,1042730,1040818,1045347,1044444,1044778,1044191,1045497,1045487,1044462,1040058,1027505,1027590,1045194,1037597,1041372,1033961,1044737,1045026,1034265,1040089,1045388,1045154,1043955,1041445,1045091,1033545,1045340,1044726,1045442,1042459,1044937,1045141,1045413,1042550,1027485,1041773,1045208,1045297,1027560,1038774,1039246,1044279,1038183,1042269,1044338,1042007,1044260,1029039,1027557,1043482,1036765,1033371,1045444,1016814,1037090,1045507,1043107,1027579,1045403,1045084,1045515,1036422,1042865,1034612,1044306,1022188,1037299,1027631,1044133,1044457,1044278,1027454,1036160,1040318,1044315,1045248,1045021,1045128,1026622,1043767,1042391,1044161,1045419,1027613,1044685,1042749,1029417,1044703,1027523,1040719,1044310,1042392,1035351,1045270,1040834,1032690,1038871,1044825,1043854,1040366,1043788,1042863,1040399,1044852,1039415,1044626,1041300,1044498,1038238,1045116,1043413,1027503,1041183,1044583,1040374,1038429,1038418,1042245,1031116,1039127,1045029,1044475,1042854,1032785,1020980,1043197,1045239,1045537,1040113,1044235,1039964,1040602,1038975,1027578,1044454,1044610,1044687,1035981,1045190,1038558,1044421,1038938,1044775,1037934,1045035,1045153,1044845,1043992,1044398,1043421,1039894,1026738,1045291,1042097,1027527,1044799,1044874,1032277,1041521,1034801,1022752,1040100,1027487,1044327,1044136,1041922,1040360,1026688,1045420,1045434,1028057,1043013,1043742,1041361,1038890,1044419,1030335,1044909,1036131,1037812,1028965,1042314,1027585,1033810,1045514,1045202,1040645,1035560,1042098,1038523,1040349,1032784,1043630,1043505,1042217,1041855,1044788,1044147,1045384,1031754,1034554,1038396,1042280,1045170,1045408,1045522,1043675,1042853,1043889,1036907,1008599,1043835,1044578,1031801,1043663,1042556,1043713,1043842,1044397,1040699,1042558,1043051,1037755,1037707,1039375,1035111,1045276,1045077,1045421,1042788,1037271,1045222,1044593,1024423,1044780,1027597,1033278,1045369,1045508,1044976,1035637,1044955,1027518,1045238,1039823,1045323,1043437,1040966,1043792,1044467,1044673,1043689,1044383,1044155,1027584,1044923,1037549,1045210,1044932,1027522,1039626,1044724,1038331,1027499,1043795,1045232,1041498,1043979,1038247,1043405,1039123,1040925,1041829,1042856,1024785,1045470,1045391,1041652,1044460,1042190,1042804,1041344,1044351,1029119,1044622,1035272,1044786,1040407,1044510,1015460,1040192,1044496,1045404,1044357,1045191,1034771,1034033,1024531,1045199,1036135,1043901,1027492,1044848,1044602,1045252,1039134,1042020,1038646,1035944,1044271,1027566,1045512,1044847,1040774,1045033,1039418,1045308,1027513,1044985,1044869,1036876,1041756,1045195,1040352,1039486,1027526,1040417,1041026,1042614,1044907,1042894,1041988,1020617,1045359,1040092,1044893,1045287,1039645,1042360,1045506,1036130,1044167,1044066,1043615,1042074,1038116,1043957,1035113,1044137,1034756,1037909,1039845,1044798,1043601,1043832,1044839,1038411,1044256,1045057,1041639,1044313,1045211,1041749,1039757,1039184,1045493,1045321,1043099,1045288,1043650,1038210,1040729,1045244,1028152,1044502,1040084,1041414,1037235,1040815,1042916,1037374,1041778,1035551,1036852,1039980,1044193,1020683,1043184,1044146,1034190,1044116,1043829,1043751,1041806,1045298,1027620,1044097,1041313,1027621,1039160,1044418,1027486,1043760,1041503,1040095,1042402,1027547,1041382,1027570,1042891,1030528,1034336,1034532,1041417,1045041,1044307,1042147,1038560,1044999,1040098,1040115,1024783,1037375,1034603,1043891,1044054,1044992,1027555,1030752,1034200,1045180,1043444,1044698,1043961,1038433,1039156,1042008,1044662,1037004,1044823,1044272,1043711,1044101,1045427,1038545,1038214,1042231,1045234,1039579,1035172,1044632,1039580,1044304,1042573,1045453,1033378,1040107,1045198,1044269,1041563,1042056,1027610,1039863,1042500,1027563,1044555,1034946,1043001,1041938,1043684,1027506,1031784,1027548,1044533,1039142,1044321,1042851,1016688,1043807,1045362,1023593,1042102,1044747,1038093,1044801,1044430,1045118,1044135,1045361,1019283,1041054,1045028,1035984,1038863,1041803,1041348,1035623,1045345,1026804,1043503,1040411,1044634,1043756,1045264,1037754,1039371,1027574,1045278,1044571,1042843,1041460,1045162,1037116,1044093,1045010,1037639,1043422,1043010,1043267,1045392,1042844,1040320,1044854,1027450,1044770,1024786,1044963,1044952,1027459,1035763,1041425,1044915,1045387,1043906,1044288,1042324,1044320,1044284,1025591,1044646,1019358,1027615,1042795,1033579,1044472,1040096,1037710,1035325,1028132,1041921,1044601,1044336,1040400,1027612,1045451,1045266,1042890,1040191,1028796,1041108,1044911,1027473,1045496,1044237,1045400,1039400,1044972,1040046,1027604,1027507,1043984,1016823,1044446,1033699,1045122,1041090,1045425,1040963,1040846,1044764,1044733,1044688,1036500,1045481,1045460,1038537,1039594,1044079,1041378,1044837,1040470,1040596,1044598,1038627,1027469,1027491,1041874,1045376,1040680,1045365,1035156,1039775,1041564,1042560,1027642,1034425,1041673,1034869,1044074,1045163,1042600,1044395,1045258,1032159,1045332,1044422,1027538,1041923,1037044,1020964,1044428,1023753,1027622,1041671,1045551,1040099,1030432,1044480,1035715,1043415,1039332,1042953,1035355,1045457,1027496,1045237,1035904,1044880,1041696,1045439,1044109,1027510,1035870,1039776,1041020,1044811,1045105,1039730,1039750,1035986,1044064,1027546,1041575,1044689,1042858,1045143,1040464,1044917,1041126,1036522,1040356,1027475,1043862,1044800,1042022,1044252,1035286,1040189,1031575,1044131,1041813,1044572,1034969,1042976,1045274,1045417,1037310,1045088,1036922,1045018,1037520,1044401,1043720,1045056,1039804,1044707,1041944,1036968,1038240,1041473,1045181,1037324,1042492,1019540,1039940,1032492,1045081,1039147,1044086,1026032,1043696,1043867,1042752,1045468,1042720,1039200,1045480,1042837,1045023,1027498,1039274,1043898,1044681,1045044,1027591,1045060,1033123,1035985,1027568,1044787,1044346,1040405,1045546,1033367,1042428,1044492,1036576,1044371,1035114,1010688,1045354,1035589,1036252,1043018,1045525,1027549,1024594,1041592,1030850,1045554,1042654,1045189,1036355,1042847,1045207,1027634,1043346,1044522,1040734,1027537,1039583,1042852,1044855,1044605,1044608,1044311,1044877,1037190,1045517,1044603,1019307,1027517,1041009,1036352,1034647,1043135,1033685,1029030,1045002,1045151,1044900,1014577,1045316,1039365,1042135,1040383,1044100,1043431,1042948,1039065,1041235,1044850,1045003,1035282,1043936,1045051,1042234,1041368,1045378,1045399,1027452,1044186,1038134,1041490,1042256,1044732,1043920,1039464,1040255,1035570,1027606,1043509,1045027,1036663,1044477,1039542,1029648,1043825,1041070,1038246,1033819,1042569,1044547,1045401,1045268,1027474,1041779,1044438,1038778,1044500,1045543,1027463,1024784,1027531,1041554,1042589,1038722,1042661,1027248,1043900,1037739,1012733,1044417,1044128,1042989,1038719,1044581,1044815,1041840,1015851,1039989,1045385,1045114,1045130,1039604,1035564,1044863,1043468,1044941,1042357,1044319,1042209,1042568,1044317,1037900,1034957,1043902,1031370,1038628,1027556,1045521,1022313,1021408,1044873,1044377,1044895,1042505,1027550,1027616,1044930,1044964,1021287,1027625,1033935,1029160,1040582,1044722,1039769,1036921,1044693,1044756,1043697,1030498,1040094,1042378,1038032,1023894,1045545,1039803,1042518,1045454,1044404,1044474,1039857,1041827,1044063,1044431,1029447,1045466,1040789,1044836,1039671,1045320,1044736,1020116,1045311,1035833,1043036,1043744,1036963,1035951,1045449,1039992,1027489,1040257,1044012,1043406,1038172,1037191,1040244,1010416,1042830,1041064,1044372,1044630,1045087,1035471,1044846,1027598,1026838,1041337,1036545,1041482,1042706,1043768,1017015,1045075,1044812,1027639,1043067,1045485,1031481,1044046,1039482,1044008,1037272,1041955,1045289,1043932,1034893,1044409,1027477,1039732,1045370,1044222,1044396,1027390,1042198,1045093,1031490,1035891,1037824,1039242,1044953,1042100,1035289,1041501,1027593,1044316,1044653,1040324,1029996,1035000,1039404,1041350,1044623,1043236,1044910,1041505,1045169,1037903,1038982,1042099,1038180,1027599,1044497,1033106,1035676,1040489,1030121,1041961,1036127,1042967,1043565,1045549,1043234,1045226,1043377,1039912,1043716,1045438,1040317,1043589,1045098,1041644,1045150,1043908,1044192,1034586,1040601,1044158,1040681,1043863,1043983,1036965,1040190,1044564,1041556,1045284,1045243,1044285,1044853,1045245,1038636,1018170,1040412,1037553,1035209,1040112,1041781,1031110,1027535,1043949,1043781,1027464,1044805,1040109,1044017,1045447,1017047,1035174,1043261,1045307,1045472,1043910,1035177,1044334,1040018,1044085,1045255,1029989,1025073,1043561,1027572,1044246,1036969,1041577,1029257,1044827,1027461,1044962,1020355,1044781,1027633,1041916,1045502,1044481,1039405,1018871,1044441,1027467,1039406,1044822,1030704,1044896,1041005,1035956,1037917,1045068,1045273,1039128,1045526,1045263,1026398,1043558,1042457,1028896,1044277,1039509,1040552,1040228,1037053,1041979,1034175,1032545,1034021,1044274,1041110,1043416,1043337,1045089,1044783,1042233,1041420,1044971,1027626,1026820,1042842,1035931,1045235,1033932,1039012,1045172,1044796,1036764,1037603,1040415,1042118,1037890,1043956,1032322,1035912,1044484,1041106,1042359,1037248,1045364,1043137,1041269,1042713,1040007,1043877,1043611,1044763,1040316,1045360,1043511,1041782,1027516,1045402,1041757,1042846,1043488,1045443,1041434,1044809,1039907,1045499,1027569,1044520,1045022,1040992,1038911,1044802,1038880,1027514,1044813,1024575,1040798,1037288,1043924,1035296,1043000,1042004,1034170,1038769,1044108,1039271,1044751,1044828,1030150,1024354,1038585,1018167,1044961,1039419,1042834,1045293,1045241,1039999,1042570,1038487,1043049,1044582,1027476,1044600,1043730,1045061,1034870,1034717,1038910,1045516,1045092,1043976,1042126,1012975,1044965,1036133,1039679,1040444,1041541,1038996,1043276,1040790,1043698,1040528,1040395,1037275,1030079,1043917,1044607,1022375,1044926,1042831,1044973,1042919,1043106,1045085,1038368,1037709,1040103,1043848,1039564,1042308,1037777,1039393,1045124,1034915,1042849,1039206,1034880,1044649,1044767,1033970,1045312,1044789,1037627,1036129,1030069,1044461,1043486,1045007,1041669,1042879,1027592,1037689,1043047,1027617,1043922,1044663,1043803,1043516,1013784,1045313,1045164,1039049,1044609,1045334,1039150,1044293,1044257,1039850,1036491,1027453,1041710,1041250,1034650,1040097,1043280,1039916,1034817,1043748,1039414,1041797,1044148,1044740,1040556,1034914,1043963,1033732,1044633,1032734,1027618,1041465,1045269,1044216,1040236,1045336,1044171,1045213,1037038,1036566,1042968,1045488,1031290,1037840,1045405,1044927,1044868,1045125,1043508,1045121,1045377,1044638,1044832,1044149,1044415,1045225,1042515,1040185,1040747,1027490,1044588,1044738,1041517,1031170,1039933,1045510,1043127,1041335,1042297,1044223,1027628,1040408,1018435,1043515,1034354,1043466,1044549,1038419,1042784,1037874,1045492,1041702,1040015,1044270,1038738,1043948,1043287,1031675,1044289,1041776,1044432,1044244,1042082,1044924,1044565,1036637,1044672,1040258,1043875,1027381,1041990,1042197,1029082,1038400,1040325,1044954,1043715,1021360,1044402,1044162,1044949,1040659,1044820,1041340,1044745,1027460,1026361,1034901,1041525,1031374,1027644,1023246,1043546,1044042,1045069,1027636,1045375,1045309,1031616,1041613,1042309,1045389,1040626,1041628,1044933,1036672,1027455,1024046,1044328,1027482,1043492,1040267,1045015,1031804,1044049,1037217,1027508,1045349,1044901,1044758,1041222,1043754,1044700,1045197,1014248,1044449,1044092,1036867,1016497,1039403,1038403,1038673,1045305,1024251,1043953,1016168,1041063,1044361,1045386,1041050,1038770,1027561,1044530,1045430,1044587,1038927,1041260,1018793,1039610,1041928,1043665,1040980,1043097,1032839,1043978,1044604,1041693,1043973,1045398,1045529,1038480,1033439,1041477,1044283,1023195,1044902,1040105,1044904,1042578,1044683,1037716,1027466,1038700,1045422,1040913,1042545,1043035,1038885,1039936,1036536,1044563,1026362,1040078,1043459,1039777,1034653,1021094,1043266,1045372,1042920,1043334,1037110,1041699,1037273,1027497,1024562,1027541,1037708,1044807,1044179,1042944,1045539,1044408,1042298,1045450,1031976,1038409,1035825,1043883,1039059,1043879,1034763,1034238,1034663,1027536,1039519,1044264,1042362,1024787,1038994,1040455,1045020,1041077,1043745,1045286,1044494,1045395,1043562,1042838,1043323,1038521,1043637,1023200,1044369,1044138,1045182,1040106,1034643,1041918,1027515,1044268,1039023,1040024,1034812,1041949,1042285,1042067,1027528,1044730,1045511,1044753,1042565,1045412,1043654,1044945,1041632,1045524,1044779,1044367,1039555,1044943,1041936,1040016,1041670,1044643,1036125,1042095,1041713,1045310,1040410,1044860,1042848,1045483,1043290,1043673,1044695,1027114,1045236,1044544,1044375,1043483,1040286,1041761,1043778,1044478,1044047,1043878,1042083,1045382,1043247,1044014,1041612,1040754,1039871,1041805,1045446,1042547,1037855,1044134,1038635,1044144,1044892,1041596,1042639,1034423,1042195,1034068,1035072,1044642,1043764,1027559,1044433,1044784,1045383,1043032,1042356,1044228,1031414,1041271,1044838,1042733,1027311,1044514,1045152,1026392,1037596,1028906,1027583,1044675,1043890,1040299,1044624,1034911,1044349,1021293,1045012,1040398,1045519,1042223,1027594,1039032,1027534,1036885,1044889,1043155,1040705,1043951,1045009,1044660,1045254,1032838,1039600,1044803,1043980,1043836,1043201,1043884,1041700,1039575,1045424,1044027,1045200,1043779,1037884,1043620,1044739,1044114,1038941,1043322,1042591,1045355,1044871,1045441,1039614,1034368,1045409,1032354,1038592,1035015,1044181,1039811,1043427,1045351,1031808,1040284,1043303,1038308,1044635,1044841,1044627,1043417,1041662,1044385,1042751,1043758,1042829,1043399,1045017,1043543,1017709,1039334,1042790,1044636,1045294,1039960,1043895,1044951,1045070,1043478,1043048,1044355,1045563,1041912,1045261,1027501,1044679,1041472,1043666,1041413,1045214,1045317,1041376,1035019,1045353,1031725,1039524,1045433,1043527,1036346,1045111,1036739,1044704,1041157,1039791,1038879,1043752,1042943,1037959,1027509,1045192,1043200,1036132,1039805,1041562,1036447,1018169,1042861,1044938,1043605,1040870,1042839,1027587,1039019,1045090,1045179,1043845,1027624,1037348,1045319,1043892,1043844,1030092,1045071,1027500,1038253,1043394,1044482,1045459,1045504,1041245,1038901,1027573,1045557,1044267,1027558,1042497,1040995,1037346,1041657,1045086,1021177,1039670,1036883,1039697,1036776,1035499,1043950,1039425,1045139,1044527,1032265,1045471,1041069,1044051,1040948,1045271,1045337,1045394,1042845,1038207,1045486,1045168,1044075,1042905,1045368,1031372,1044678,1044405,1036920,1036773,1027543,1030216,1043388,1027609,1026399,1044817,1042841,1043827,1042867,1039273,1041412,1044772,1044220,1040082,1042649,1044899,1035819,1045136,1044098,1043688,1043840,1022052,1038391,1042390,1044942,1044725,1039038,1044381,1038395,1033721,1044468,1038931,1027524,1044095,1036251,1045418,1044006,1044628,1041128,1044806,1043981,1018885,1044488,1044323,1034988,1042286,1036878,1036851,1009602,1045220,1045527,1042566,1045102,1040006,1020016,1044921,1045358,1034632,1027581,1039056,1027588,1045242,1044156,1041883,1040838,1039613,1037242,1045302,1045196,1043747,1027480,1038311,1044389,1043224,1044717,1034905,1033507,1043882,1027603,1027582,1037015,1043110,1043903,1042783,1040575,1041772,1030577,1040278,1030077,1044872,1045540,1039481,1042302,1035030,1027438,1041793,1044912,1044163,1027525,1045513,1036994,1042850,1026295,1038718,1034531,1045426,1019362,1027493,1044516,1032649,1037521,1044989,1044584,1044741,1021390,1045530,1027456,1035268,1036701,1029383,1044692,1032938,1045335,1042840,1039734,1040895,1037355,1036586,1044331,1041280,1044657,1027529,1041430,1040817,1043461,1043230,1045343,1037561,1035202,1040026,1044928,1037129,1043804,1045094,1039740,1037030,1021424,1037878,1043066,1039018,1035388,1044024,1039584,1027502,1039239,1041676,1044429,1043921,1044254,1035226,1045303,1041856,1038969,1041365,1038215,1031366,1043690,1042194,1027457,1045542,1037803,1039487,1045528,1039608,1040564,1022379,1044524,1034809,1045112,1043769,1041216,1042759,1042824,1044026,1044585,1044866,1040499,1027567,1024222,1041512,1020935,1043750,1045282,1038671,1044399,1027458,1045553,1044888,1043130,1027488,1042079,1044045,1044721,1039854,1041161,1045548,1044797,1019360,1044720,1039567,1027465,1041158,1041140,1044920,1019132,1040251,1037870,1028818,1042091,1041586,1027623,1038785,1044876,1039521,1041764,1040111,1027533,1043294,1044625,1043513,1040093,1043657,1018168,1045473,1042143,1045047,1045428,1042202,1045066,1040990,1044207,1039040,1035655,1027540,1045505,1043847,1044060,1028560,1044661,1041277,1028693,1045042,1041734,1045296,1044804,1045167,1038189,1039717,1027596,1022319,1045379,1042722,1045467,1044931,1043263,1045315,1027521,1026901,1027575,1036492,1032663,1041980,1045423,1039937,1027504,1044978,1043121,1045030,1039642,1042351,1044761,1027481,1040104,1044580,1034260,1045331,1027539,1040319,1031326,1044706,1043958,1045055,1039139,1040946,1044342,1040102,1038483,1044183,1044227,1039317,1043585,1044309,1027564,1044096,1044043,1041342,1044925,1044041,1027632,1037852,1043914,1041213,1044245,1045431,1045277,1041940,1042832,1043298,1042016,1045461,1045117,1044667,1037633,1038475,1042204,1040657,1045046,1042334,1045224,1034363,1045187,1022613,1042240,1038613,1043104,1045219,1027478,1039653,1042076,1026320,1039915,1027638,1027630,1040800,1018597,1043145,1044370,1038610,1043982,1035809,1036126,1039398,1045518,1045177,1027602,1035451,1045265,1020969,1034918,1024237,1038297,1043321,1044352,1040289,1036772,1009603,1045204,1045333,1033896,1042092,1042538,1038287,1042000,1040048,1045498,1027571,1039222,1029446,1045186,1044948,1044465,1044834,1045328,1043894,1043199,1033673,1044785,1041040,1044121,1027629,1045203,1041974,1032967,1023131,1038749,1039433,1039688,1044959,1038787,1044493,1042301,1027530,1035681,1044463,1044221,1044882,1030938,1043011,1038638,1034792,1044886,1043977,1044862,1027484,1044249,1039739,1020668,1044303,1039399,1044127,1043349,1041227,1042333,1044368,1044640,1040108,1041406,1040335,1037247,1027449,1043628,1035365,1045283,1039402,1040981,1044977,1043741,1045414,1043465,1043706,1041497,1027495,1044957,1035194,1022274,1043772,1044145,1044153,1040409,1044343,1038884,1044710,1045281,1034262,1044286,1043156,1041650,1027577,1045300,1044466,1040101,1043853,1044918,1045318,1043709,1037136,1044374,1041919,1045227,1044233,1032161,1027552,1038337,1038420,1045440,1037025,1036164,1044890,1039011,1042855,1041272,1045079,1044236,1036347,1033613,1045256,1028591,1044760,1035317,1037197,1039515,1044255,1024894,1040646,1044194,1045119,1044378,1044005,1038120,1022374]}},"isTealiumEnableForWhiteLabel":true,"isCCPAEnabled":false,"tealiumWhitelabelLanguageId":0,"tealiumAccount":"agoda","productId":0,"stopTealium":false,"tealiumExperiments":{"MKTBB-5389-M":"Z","MKTBB-5389-D":"Z","REMARKETING-TEST-1":"Z","REMARKETING-TEST-2":"Z","REMARKETING-TEST-3":"Z","REMARKETING-TEST-4":"Z","REMARKETING-TEST-5":"Z","MONEY-EXP-1":"Z","MONEY-EXP-2":"Z","MONEY-EXP-3":"Z","MONEY-EXP-4":"Z","MONEY-EXP-5":"Z"},"whiteLabelId":1,"supplierHotelId":0};

var tealiumUrl = "//tags.tiqcdn.com/utag/agoda/main2018/prod/utag.js";
    var isCCPAEnable = false;
    var appSettingsPreferences = JSON.parse(localStorage.getItem("AppSettings.preferences"));
    var cookieBanner = JSON.parse(localStorage.getItem("cookie-setting"));
    var shouldTealiumEnable = (!isCCPAEnable || appSettingsPreferences == null || appSettingsPreferences.ccpa_status === "opt-in")
                                      && (cookieBanner == null || cookieBanner === true || cookieBanner.isMarketingSelected === true);

    function setCookie(cname, cvalue) {
      var date = new Date();
      date.setTime(date.getTime() + 86400000);
      var expires = "expires=" + date.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + "; path=/; domain=.agoda.com;";
    }


        setCookie("tealiumEnable", shouldTealiumEnable, 1);
        
    if(shouldTealiumEnable){


                isMockMode = document.getElementById("mockDataEnabled")
                    ? document.getElementById("mockDataEnabled").value === "True"
                    : false;

                    if (!isMockMode) {
                    var utag_data = { };

                   window.utag_cfg_ovrd = window.utag_cfg_ovrd || {};
                   window.utag_cfg_ovrd.waittimer = 3000;

                           (function(a, b, c, d) {
                            a = tealiumUrl;
                            b = document;
                            c = 'script';
                            d = b.createElement(c);
                            d.src = a;
                            d.type = 'text/java' + c;
                            d.async = true;
                            a = b.getElementsByTagName(c)[0];
                            a.parentNode.insertBefore(d, a);
                        })();;
                       
               var sessionStatus = "parsingcookiefailed";
               var sessionId = 0;
               var isNewSession = 0;

               try {
                   var tealiumCookie = document.cookie.match('(^|;) ?utag_main=([^;]*)(;|$)')[2].split("$");
                   sessionId = tealiumCookie.filter(function (x) { return x.startsWith("ses_id"); })
                       .map(function (x) { return x.split(":"); })
                       .map(function (x) { return parseInt(x[1].split("%3B")[0]); })
                       .map(function (x) { return x == NaN ? 0 : x; })[0];
                   sessionStatus = sessionId == 0 ? "invalid" : "valid";

                   isNewSession = tealiumCookie.filter(function (x) { return x.startsWith("_ss"); })
                       .map(function (x) { return x.split(":"); })
                       .map(function (x) { return parseInt(x[1]); })
                       .map(function (x) { return x == NaN ? 0 : x; })[0];
               } catch (err) {}
            }
            }
</script>

    <script type="text/javascript">
        var _ga = _ga || {};
        _ga.source = "MSN_S_Brand_EN_US_CA_2_B";
        _ga.medium = "Brand - MSN";
    </script>

    <script>
        footerProps = {"seoWhiteLabelLinksGroups":[],"linksGroups":[{"title":"Trợ giúp","dataSelenium":"footer-help-column","className":"","list":[{"text":"Trung tâm trợ giúp","link":"/vi-vn/info/contact.html","id":"footer-contact-us","rel":"nofollow","target":"","data":{"selenium":"footer-contact-us","elementName":"contact-us-footer"}},{"text":"Câu hỏi thường gặp","link":"/vi-vn/info/contact.html","id":"footer-faqs","rel":"nofollow","target":"","data":{"selenium":"footer-faqs","elementName":""}},{"text":"Chính sách Bảo mật","link":"/vi-vn/info/privacy.html","id":"footer-privacy-policy","rel":"nofollow","target":"_blank","data":{"selenium":"footer-privacy-policy","elementName":""}},{"text":"Chính sách về cookie","link":"/vi-vn/info/privacy.html#cookies","id":"footer-cookie-policy","rel":"nofollow","target":"_blank","data":{"selenium":"footer-cookie-policy","elementName":""}},{"text":"Điều khoản sử dụng","link":"/vi-vn/info/termsofuse.html","id":"footer-terms-of-service","rel":"nofollow","target":"_blank","data":{"selenium":"footer-terms-of-service","elementName":""}}]},{"title":"Về chúng tôi","dataSelenium":"footer-about-us-column","className":"","list":[{"text":"PointsMAX","link":"//www.agoda.com/vi-vn/pointsmax.html","id":"footer-points-max","rel":"nofollow","target":"","data":{"selenium":"footer-pointsmax","elementName":""}},{"text":"Tuyển dụng","link":"//careersatagoda.com","id":"footer-careers","rel":"nofollow","target":"_blank","data":{"selenium":"footer-careers","elementName":""}},{"text":"Báo chí","link":"//mediaroom.agoda.com","id":"footer-media","rel":"nofollow","target":"_blank","data":{"selenium":"footer-media","elementName":""}},{"text":"Nhật ký mạng","link":"/vi-vn/blog","id":"footer-blog","rel":"nofollow","target":"_blank","data":{"selenium":"footer-blog","elementName":""}}]},{"title":"Điểm du lịch","dataSelenium":"footer-destinations-column","className":"","list":[{"text":"Quốc gia","link":"//www.agoda.com/vi-vn/world.html","id":"","rel":"","target":"","data":{"selenium":"footer-destination-countries","elementName":""}},{"text":"Thành phố","link":"//www.agoda.com/vi-vn/cities.html","id":"","rel":"","target":"","data":{"selenium":"footer-destination-cities","elementName":""}}]},{"title":"Đối tác của chúng tôi","dataSelenium":"footer-partner-with-us-column","className":"","list":[{"text":"Cổng thông tin đối tác YCS","link":"////ycs.agoda.com/vi-vn","id":"","rel":"nofollow","target":"_blank","data":{"selenium":"footer-partner-hotels","elementName":""}},{"text":"Partner Hub","link":"//partnerhub.agoda.com/","id":"","rel":"nofollow","target":"_blank","data":{"selenium":"footer-partner-hub","elementName":""}},{"text":"Quảng cáo trên Agoda","link":"//partnerhub.agoda.com/hotel-solutions/ad-solutions/","id":"","rel":"nofollow","target":"_blank","data":{"selenium":"footer-partner-advertise","elementName":""}},{"text":"Đối tác liên kết","link":"////partners.agoda.com/vi-vn/index.html","id":"","rel":"nofollow","target":"_blank","data":{"selenium":"footer-partner-affiliates","elementName":""}},{"text":"Đối tác kết nối","link":"//www.agodaconnectivity.com/home","id":"","rel":"nofollow","target":"_blank","data":{"selenium":"footer-partner-affiliates","elementName":""}}]},{"title":"Tải ứng dụng","dataSelenium":"footer-mobile-app-column","className":"","list":[{"text":"Ứng dụng iOS","link":"//app.appsflyer.com/id440676901?pid=direct&c=hotel_page_footer&af_siteid=1716632&site_id=1716632&af_sub1=desktop","id":"","rel":"nofollow","target":"","data":{"selenium":"footer-mobile-app-ios","elementName":""}},{"text":"Ứng dụng Android","link":"//app.appsflyer.com/com.agoda.mobile.consumer?pid=direct&c=hotel_page_footer&af_siteid=1716632&site_id=1716632&af_sub1=desktop","id":"","rel":"nofollow","target":"","data":{"selenium":"footer-mobile-app-andriod","elementName":""}}]}],"copyrights":{"material":"Mọi nội dung tại đây © 2005 – 2021 Công ty TNHH Tư nhân Agoda. Bảo Lưu Mọi Quyền.","priceline":"Agoda.com là thành viên của Tập đoàn Booking Holdings, nhà cung cấp dịch vụ du lịch trực tuyến & các dịch vụ có liên quan hàng đầu thế giới.","travel":" ","machineName":"hk-crspa-2002","showMachineNameBelow":true,"brands":["agoda","priceline","kayak","rental-cars","booking-com","open-table"],"chinaICP":null},"chinaQr":null,"chinaContactUsMessage":null,"cookiePolicy":null,"cookiePopup":null,"seoLinksGroups":[],"topDestinations":null};
    </script>
    <div id="react-footer"></div>
     </html>
