<?php
/**
 * VFM - veno file manager: include/reset.php
 * password reset
 *
 * PHP version >= 5.3
 *
 * @category  PHP
 * @package   VenoFileManager
 * @author    Nicola Franchini <support@veno.it>
 * @copyright 2013-2015 Nicola Franchini
 * @license   Standard License http://codecanyon.net/licenses/standard
 * @link      http://filemanager.veno.it/
 */
 ?>
     <section class="vfmblock">
        <div class="login">
            <noscript>
                <div class="alert alert-danger">Please activate JavaScript</div>
            </noscript>
    <?php
    if ($getusr && $resetter->checkTok($getrp, $getusr) == true) : ?>
        <form role="form" method="post" id="rpForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">

                    <input type="hidden" name="getrp" value="<?php print $getrp; ?>">
                    <input type="hidden" name="userh" value="<?php print $getusr; ?>">

                    <label for="reset_pwd">
                        <?php print $encodeExplorer->getString("new_password"); ?>
                    </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input name="reset_pwd" id="rep" type="password" 
                        class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm_pwd">
                        <?php print $encodeExplorer->getString("new_password")
                        ." (".$encodeExplorer->getString("confirm").")"; ?>
                    </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input name="reset_conf" id="repconf" type="password" 
                        class="form-control" value="">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-refresh"></i>
                    <?php print $encodeExplorer->getString("reset_password"); ?>
                </button>
            </div>
        </div>
        </form>
        <?php   
    endif;

    if (!$getusr || $resetter->checkTok($getrp, $getusr) !== true) : 

    if ($getusr && $resetter->checkTok($getrp, $getusr) !== true) {
        print "<div class=\"alert alert-danger\">";
        print $encodeExplorer->getString("key_not_valid");
        print "</div>";
    } 
        $url  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
        $url .= $_SERVER['HTTP_HOST'];
        $url .= htmlspecialchars($_SERVER['PHP_SELF']);
        $pulito = dirname($url);
        ?>
            <div class="sendresponse">
            </div>

            <form role="form" method="post" id="sendpwd">

            <div class="panel panel-default">
                <div class="panel-body">
                    <label class="sr-only" for="user_email"><?php print $encodeExplorer->getString("email"); ?></label>
                    <div class="form-group">
                        <input name="cleanurl" type="hidden" value="<?php print $pulito; ?>">
                        <input name="thislang" type="hidden" value="<?php print $encodeExplorer->lang; ?>">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input name="user_email" id="reqmail" type="email" 
                            placeholder="<?php print $encodeExplorer->getString("email"); ?>" 
                            class="form-control" value="">
                        </div>
                    </div>
            <?php 
            /* ************************ CAPTCHA ************************* */
    if ($setUp->getConfig("show_captcha_reset") == true ) { 
        $capath = "vfm-admin/";
        include "vfm-admin/include/captcha.php";
    }   ?>

                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-arrow-circle-right"></i>
                        <?php print $encodeExplorer->getString("send"); ?>
                    </button>

                </div>

                <div class="panel-footer">
                    <?php print $encodeExplorer->getString("enter_email_receive_link"); ?>
                </div>

                <div class="mailpreload"></div>
            </div>
            </form>
                
                <script type="text/javascript">
                    $( "#sendpwd" ).on( "submit", function( event ) {
                        event.preventDefault();
                        $(".mailpreload").fadeIn(function(){
                            $.ajax({
                                type: "POST",
                                url: "vfm-admin/sendpwd.php",
                                data: $( "#sendpwd" ).serialize()
                                })
                                .done(function( msg ) {
                                    $('.sendresponse').html(msg).fadeIn();
                                    $(".mailpreload").fadeOut();
                                    $('#captcha-sm').attr('src', 'vfm-admin/captcha.php?'+(new Date).getTime());
                                    $('#inputc-sm').val('');
                                })
                                .fail(function() {
                                    $(".mailpreload").fadeOut();
                                    $('.sendresponse').html('Error').fadeIn();
                                    $('#captcha-sm').attr('src', 'vfm-admin/captcha.php?'+(new Date).getTime());
                                    $('#inputc-sm').val('');
                            });
                        });
                    });
                </script>
    <?php 
    endif; ?>
           <a href="?dir="><?php print $encodeExplorer->getString("log_in"); ?></a>

        </div>
    </section>