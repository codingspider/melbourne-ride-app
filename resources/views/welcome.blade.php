<!DOCTYPE html>
<html>

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MRFQEYKFZX"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-MRFQEYKFZX');
    </script>
    
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="description"
            content="Fastercryptoss is a cryptocurrency faucet.Earn free cryptos every 5 minutes .">

        </body>

    </html>
    <meta name="surfe.pro" content="80115fe54b9e1e6fea7f002757caf3cf">


    <meta name="seobility" content="2bb65e55df29cb83776f1d690378be1b">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php
    if (isset($data['headers'])) {
        echo $data['headers'];
    }
    ?>
    <title><?php echo strip_tags($data["name"]); ?></title>
    <?php
    if (!empty($_GET['p'])) {
    ?>
    <link rel="canonical"
        href="<?php echo 'http' . (($_SERVER['SERVER_PORT'] == 80) ? '' : 's') . '://' . $_SERVER['HTTP_HOST'] . '/?p=' . urlencode($_GET['p']); ?>" />
    <?php
    } else {
    ?>
    <link rel="canonical"
        href="<?php echo 'http' . (($_SERVER['SERVER_PORT'] == 80) ? '' : 's') . '://' . $_SERVER['HTTP_HOST'] . '/'; ?>" />
    <?php
    }
    ?>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap/3.3.4/css/bootstrap.min.css" />
    <script src="//cdn.jsdelivr.net/jquery/2.1.4/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <?php
    switch ($data["custom_palette"]):
        case 'amelia':
        case 'cerulean':
        case 'cyborg':
        case 'flatly':
        case 'journal':
        case 'lumen':
        case 'readable':
        case 'simplex':
        case 'slate':
        case 'spacelab':
        case 'superhero':
        case 'united':
        case 'yeti':
    ?>
    <link rel="stylesheet" href="templates/default/palettes/<?php echo $data["custom_palette"]; ?>.css" />
    <?php
            break;
        default:
            /*
?>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
    <?php
*/
            break;
    endswitch;
    ?>
    <style type="text/css">
    html {
        position: relative;
        min-height: 100%;
    }

    body .footer {
        position: absolute;
        bottom: 0px;
        padding: 5px 0;
    }

    .row>div {
        padding: 30px;
    }

    .bg-black {
        background: #000;
    }

    .bg-white {
        background: #fff;
    }

    .text-black {
        color: #000;
    }

    .text-white {
        color: #fff;
    }

    .admin_link {
        position: fixed;
        bottom: 0px;
        right: 0px;
        z-index: 2;
        text-shadow: 0px -1px 0px rgba(0, 0, 0, .5), 0px 1px 0px rgba(255, 255, 255, .5);
    }

    #recaptcha_area {
        margin: 0 auto;
    }

    #captchme_widget_div {
        margin: 0 auto;
        width: 315px;
    }

    #adcopy-outer {
        margin: 0 auto !important;
    }

    .g-recaptcha {
        width: 304px;
        margin: 0 auto;
    }

    .ablinksgroup {
        text-align: center;
    }

    .ablinksgroup div {
        display: inline-block;
    }

    .shortlink {
        margin-left: auto;
        margin-right: auto;
        background-image: url(templates/default/shortlink.png);
        background-position: right center;
        background-repeat: no-repeat;
    }

    .step1,
    .step2 {
        padding: 5px;
        margin-bottom: 20px;
    }

    .step_head {
        font-weight: bold;
        font-size: 20px;
    }

    .step2_in,
    .step1_in {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        min-height: 100%;
        text-align: center;
        border: 2px solid #000000;
        border-radius: 10px;
        background: repeating-linear-gradient(45deg, rgba(222, 222, 222, 0.6), rgba(222, 222, 222, 0.6) 20px, rgba(111, 111, 111, 0.9) 20px, rgba(111, 111, 111, 0.9) 40px);
        font-size: 30px;
        padding-top: 1px;
        text-shadow: 1px 1px 5px #FFFFFF;
    }

    .step1_in {
        text-shadow: 1px 1px 10px #FFFFFF;
        background: rgba(255, 128, 128, 0.9);
        font-size: 18px;
    }

    #recent-payouts,
    #referred-users {
        margin-bottom: 10px;
    }

    #recent-payouts h3,
    #referred-users h3 {
        color: #999999;
        font-weight: bold;
    }

    .recent-payouts,
    .referred-users {
        width: 100%;
        border: 1px solid #AAAAAA;
    }

    .recent-payouts th,
    .referred-users th {
        padding: 3px;
        background-color: rgba(160, 160, 160, 0.2);
    }

    .list-odd td {
        background-color: rgba(240, 240, 240, 0.2);
        padding: 3px;
        border-top: 1px solid #AAAAAA;
    }

    .list-even td {
        background-color: rgba(180, 180, 180, 0.2);
        padding: 3px;
        border-top: 1px solid #AAAAAA;
    }

    .list-left {
        width: 28%;
        text-align: left;
    }

    .list-center {
        width: 50%;
        text-align: center;
        overflow: hidden;
    }

    .list-right {
        width: 22%;
        text-align: right;
    }

    span.line {
        display: inline-block;
    }

    <?php echo $data["custom_css"];
    ?>
    </style>
    <script>
    $(function() {
        $('form[method="POST"]').submit(function() {
            var el = $('form[method="POST"] input[type=text][name!=address]:first');
            var addr = el.val();
            if (((addr.length < 1) || (addr.length > 110)) && (addr.indexOf('EC-UserId-') != 0)) {
                el.focus();
                return false;
            }
        });
        setTimeout(function() {
            $('input[type=text]').keypress(function(e) {
                if (e.which == 13) {
                    return false;
                }
            });
        }, 1000);
    });
    </script>
    <?php
    # AntiBotLinks START
    $antibotlinks->get_js();
    # AntiBotLinks END
    ?>
</head>

<body class=" <?php echo $data["custom_body_bg"] . ' ' . $data["custom_body_tx"]; ?>">
    <?php if (!empty($data["user_pages"])) : ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <iframe data-aa='2296088' src='//ad.a-ads.com/2296088?size=728x90'
        style='width:728px; height:90px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
            </div>
            <div class="col-md-6">
            <iframe data-aa='2297315' src='//ad.a-ads.com/2297315?size=468x60'
        style='width:468px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-fixed navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">
                    <?php echo $data["name"]; ?>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php foreach ($data["user_pages"] as $page) : ?>
                    <li><a href="?p=<?php echo $page["url_name"]; ?>"><?php echo $page["name"]; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 <?php echo $data["custom_box_top_bg"] . ' ' . $data["custom_box_top_tx"]; ?>">
                <?php echo $data["custom_box_top"]; ?></div>
        </div>
        <div class="row">
            <div
                class="col-xs-12 col-md-6 col-md-push-3 <?php echo $data["custom_main_box_bg"] . ' ' . $data["custom_main_box_tx"]; ?>">
                <?php if ($data["page"] != 'user_page') : ?>
                <h1><?php echo $data["name"]; ?></h1>
                <h2><?php echo $data["short"]; ?></h2>
                <!DOCTYPE html>
                <html>

                <head>
                    <style>
                    body {
                        background-image: url('images (3).jpeg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-size: 100% 100%;
                    }
                    </style>


</body>

</html>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

<p class="alert alert-info">[<?php echo $data["currency"]; ?>] Balance:
    <?php echo $data["balance"] . " " . $data["unit"]; ?></p>
<p class="alert alert-success"><?php echo $data["rewards"]; ?> <?php echo $data['unit']; ?> every
    <?php echo $data["timer"]; ?> minutes.<br /><?php echo $data["claims_left"]; ?></p>
<h6>Kindly also click on the advertisements so that the faucet alive and pay you continuously Thankyou Happy Earnings
    <html>

    </style>

    <body>

        <span style='font-size:30px;'>&#128578;</span>

    </body>

    </html>
</h6>

<?php endif;
                if ($data["error"]) echo $data["error"]; ?>
<?php if ($data["safety_limits_end_time"]) : ?>
<p class="alert alert-warning">This faucet exceeded it's safety limits and may not payout now!</p>
<?php endif; ?>
<?php switch ($data["page"]):
                    case "disabled": ?>
<p class="alert alert-danger">FAUCET DISABLED. Go to <a href="admin.php">admin page</a> and fill all required data!</p>
<?php break;
                    case "paid":
                        echo $data["paid"];
                        echo $data["referred_users"];
                        break;
                    case "eligible": ?>
<form method="POST" class="form-horizontal" role="form">
    <div class="step1">
        <?php echo $data["shortlink"]; ?>
    </div>

    <div class="step2">
        <div class="form-group">
            <label class="col-sm-4 col-md-offset-1 col-lg-3 control-label">Your address:</label>
            <div class="col-sm-8 col-md-7" style="min-width: 270px;">
                <input type="text" name="<?php echo $data["address_input_name"]; ?>"
                    placeholder="i.e. <?php echo $data['address_placeholder']; ?>" class="form-control"
                    value="<?php echo $data["address"]; ?>" />
            </div>
        </div>
        <div class="form-group">
            <?php echo $data["captcha"]; ?>
            <div class="text-center">
                <?php
                                        if (count($data['captcha_info']['available']) > 1) {
                                            foreach ($data['captcha_info']['available'] as $c) {
                                                if ($c == $data['captcha_info']['selected']) {
                                                    echo '<b>' . $c . '</b> ';
                                                } else {
                                                    echo '<a href="?cc=' . $c . ((!empty($_GET['r'])) ? '&r=' . $_GET['r'] : '') . '">' . $c . '</a> ';
                                                }
                                            }
                                        }
                                        ?>
            </div>
        </div>
        <?php
                                # AntiBotLinks START
                                ?>
        <?php echo $antibotlinks->show_info(); ?>
        <?php
                                # AntiBotLinks END
                                ?>
        <div class="ablinksgroup">
            <?php
                                    # AntiBotLinks START
                                    ?>
            <div class="antibotlinks"></div>
            <?php
                                    # AntiBotLinks END
                                    ?>
            <?php
                                    # AntiBotLinks START
                                    ?>
            <div class="antibotlinks"></div>
            <?php
                                    # AntiBotLinks END
                                    ?>
            <?php
                                    # AntiBotLinks START
                                    ?>
            <div class="antibotlinks"></div>
            <?php
                                    # AntiBotLinks END
                                    ?>
            <?php
                                    # AntiBotLinks START
                                    ?>
            <div class="antibotlinks"></div>
            <?php
                                    # AntiBotLinks END
                                    ?>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
                <input type="submit" class="btn btn-primary btn-lg claim-button" value="Get reward!">
            </div>
        </div>
    </div>
    <?php echo $data["recent_payouts"]; ?>
</form>
<?php break;
                    case "visit_later": ?>
<p class="alert alert-info">You have to wait <?php echo $data["time_left"]; ?></p>
<?php break;
                    case "user_page": ?>
<?php echo $data["user_page"]["html"]; ?>
<?php break;
                endswitch; ?>
<?php if ($data["reflink"]) : ?>
<blockquote class="text-left">
    <p>
        Reflink: <code><?php echo $data["reflink"]; ?></code>
    </p>
    <footer>Share this link with your friends and earn <?php echo $data["referral"]; ?>% referral commission<br />
        <!-- AddToAny BEGIN -->
        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_email"></a>
            <a class="a2a_button_pinterest"></a>
            <a class="a2a_button_whatsapp"></a>
            <a class="a2a_button_linkedin"></a>
            <a class="a2a_button_telegram"></a>
            <a class="a2a_button_facebook_messenger"></a>
            <a class="a2a_button_google_gmail"></a>
            <a class="a2a_button_reddit"></a>
            <a class="a2a_button_sms"></a>
            <a class="a2a_button_skype"></a>
            <a class="a2a_button_copy_link"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_x"></a>
            <a class="a2a_button_yahoo_mail"></a>
            <a class="a2a_button_viber"></a>
        </div>
        <script async src="https://static.addtoany.com/menu/page.js"></script>
        <!-- AddToAny END -->
        &#x1F4D2; Total referred users: <?php echo $data['ref_users']; ?>
    </footer>
</blockquote>
<!DOCTYPE html>
<html>

<body>

    <h4>What is Litecoin?</h4>

</body>

</html>

<!DOCTYPE html>
<html>

<body>

    <meta http-equiv="content-language" content="en">

    <p>Litecoin (Abbreviation: LTC; sign: Ł) is a decentralized peer-to-peer cryptocurrency and open-source software
        project released under the MIT/X11 license. Inspired by Bitcoin, Litecoin was among the earliest altcoins,
        starting in October 2011. In technical details, the Litecoin main chain shares a slightly modified Bitcoin
        codebase. The practical effects of those codebase differences are lower transaction fees,faster transaction
        confirmations, and faster mining difficulty retargeting. Due to its underlying similarities to Bitcoin, Litecoin
        has historically been referred to as the "silver to Bitcoin's gold."In 2022, Litecoin added optional privacy
        features via soft fork through the MWEB (MimbleWimble extension block) upgrade.</p>


    <p>By 2011, Bitcoin mining was largely performed by GPUs. This raised concern in some users that mining now had a
        high barrier to entry, and that CPU resources were becoming obsolete and worthless for mining. Using code from
        Bitcoin, a new alternative currency was created called Tenebrix (TBX). Tenebrix replaced the SHA-256 rounds in
        Bitcoin's mining algorithm with the scrypt function, which had been specifically designed in 2009 to be
        expensive to accelerate with FPGA or ASIC chips. This would allow Tenebrix to have been "GPU-resistant", and
        utilize the available CPU resources from bitcoin miners. Tenebrix itself was a successor project to an earlier
        cryptocurrency which replaced Bitcoin's issuance schedule with a constant block reward (thus creating an
        unlimited money supply). However, the developers included a clause in the code that would allow them to claim
        7.7 million TBX for themselves at no cost, which was criticized by users.</p>
    <p>Litecoin is different in some ways from Bitcoin:

        The targeted block time is every 2.5 minutes for Litecoin, as opposed to Bitcoin's 10 minutes. This allows
        Litecoin to confirm transactions four times faster than Bitcoin.
        Scrypt, an alternative proof-of-work algorithm, is used for Litecoin. It differs from Bitcoin's SHA-256
        algorithm in part by including a sequential memory-hard function, requiring asymptotically more memory than an
        algorithm which is not memory-hard.[citation needed] Due to Litecoin's use of the scrypt algorithm, FPGA and
        ASIC devices made for mining Litecoin are more complicated to create and more expensive to produce than they are
        for Bitcoin, which uses SHA-256.
        Litecoin is merge mined with another prominent cryptocurrency (Dogecoin), increasing miner compensation and
        network security for both blockchains.
        Litecoin has a maximum circulating supply of Ł84,000,000, which is four times larger than Bitcoin's maximum
        circulating supply of ₿21,000,000.
        Both Litecoin and Bitcoin retarget their mining difficulty every 2016 blocks. However, due to the 4x faster
        block speed for Litecoin, mining difficulty retargets occur approximately every 3.5 days. This compares to
        approximately every 14 days for Bitcoin.
        MWEB optional privacy was added to Litecoin's base layer in May 2022 via soft fork. This allows amounts held
        within wallets and transaction amounts within MWEB to be private.
        Third party vendors providing point of sale infrastructure for Litecoin include companies such as Verifone,
        BitPay, and Coingate.BitPay added support for Litecoin in 2021, with Litecoin initially accounting for less than
        3% of BitPay transactions. As of June 2023, Litecoin surpassed Bitcoin as the #1 most used method for
        transactions by payment count with 34.9%.</p>
    Wikipedia.



</body>

</html>
<?php endif; ?>
<iframe data-aa='2296088' src='//ad.a-ads.com/2296088?size=728x90'
    style='width:728px; height:90px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
<iframe data-aa='2297315' src='//ad.a-ads.com/2297315?size=468x60'
    style='width:468px; height:60px; border:0px; padding:0; overflow:hidden; background-color: transparent;'></iframe>
</div>

<div
    class="col-xs-6 col-md-3 col-md-pull-6 <?php echo $data["custom_box_left_bg"] . ' ' . $data["custom_box_left_tx"]; ?>">
    <?php echo $data["custom_box_left"]; ?></div>
<div class="col-xs-6 col-md-3 <?php echo $data["custom_box_right_bg"] . ' ' . $data["custom_box_right_tx"]; ?>">
    <?php echo $data["custom_box_right"]; ?></div>
</div>
<div class="row">
    <div class="col-xs-20 <?php echo $data["custom_box_bottom_bg"] . ' ' . $data["custom_box_bottom_tx"]; ?>">
        <?php echo $data["custom_box_bottom"]; ?></div>
    <div> <a href="https://faucetpay.io/?r=4076197" target="_blank">Like Us</a></div>
    <h5>Contact Us:admin@fastercryptoss.com </h5>
    <?php if (!$data['disable_admin_panel'] && $data["custom_admin_link"] == 'true') : ?>

    <?php endif; ?>
</div>
</div>
<div class="footer text-center col-xs-12 <?php echo $data["custom_footer_bg"] . ' ' . $data["custom_footer_tx"]; ?>">
    <?php echo $data["custom_footer"]; ?>
</div>
<?php if ($data['button_timer']) : ?>
<script type="text/javascript" src="libs/button-timer.js"></script>
<script>
startTimer(<?php echo $data['button_timer']; ?>);
</script>
<?php endif; ?>
<?php if ($data['block_adblock'] == 'on') : ?>
<script type="text/javascript"
    src="libs/advertisement.js?ad_ids=<?php echo mt_rand(100, 999); ?>&amp;show_ad=<?php echo mt_rand(100, 999); ?>&amp;banner_id=<?php echo mt_rand(100, 999); ?>">
</script>
<script type="text/javascript" src="libs/check.js"></script>
<?php endif; ?>
</body>

</html>
