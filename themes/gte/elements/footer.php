<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="social-media-container">
    <div class="soc-media-content">
        <div class="row">
            <div class="medium-6 large-6 columns">
                <p>FOLLOW MTBBENDIGO:</p>
            </div>
            <div class="medium-6 large-6 columns">
                <div class="icons-container">
                    <?php
                    //To Edit social media content, goto Stacks in Admin and edit the contents of the social media block.
                    $socialMedia = Stack::getByName('Social Media');
                    $socialMedia->display();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

</div><!-- Content -->
</div><!-- End Main -->
</div><!-- End wrap -->

<div id="footer">
    <div class="row">
        <div class="footer-content large-12 columns">
            <footer>
                <div class="footer-text">
                    <?php
                    $rights = 'All rights reserved&nbsp;&copy;' . date('Y').'&nbsp;';
                    $site = '<a href="'.View::url('/').'/" style="{color: orange;} :hover{color: red;}">'.SITE.'</a>.&nbsp;';
                    $sponsor = 'Facilitated by: <a href="http://www.mtbbendigo.com/index.php">Bendigo Mountain Bike Club Inc.</a>';
                    echo $rights.$site.$sponsor;
                    $u = new User();
                    if($u->isRegistered())
                    {
                        if(Config::get("ENABLE_USER_PROFILES"))
                        {
                            $userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
                        }
                        else
                        {
                            $userName = $u->getUserName();
                        }
                        echo t('Currently logged in as <b>%s</b>.', $userName);
                        echo '<a href="'.$this->url('/login', 'logout').'">'.t('Sign Out').'</a>';
                    }

                    ?>
                </div>
            </footer>
        </div>
    </div>
</div>
<div class="footer-spacer">&nbsp;</div>
</div><!-- Close Background Image -->

<?php
$uinfo = new User();
if(!$uinfo->IsLoggedIn())
{
    echo('<script src="'.$this->getThemePath().'/bower_components/foundation/js/vendor/jquery.js"></script>');
}
?>

<script src="<?php echo $this->getThemePath()?>/bower_components/foundation/js/vendor/fastclick.js"></script>
<script src="<?php echo $this->getThemePath()?>/bower_components/foundation/js/foundation.min.js"></script>

<script>
    $(document).foundation();
</script>



<?php  Loader::element('footer_required'); ?>


</body>
</html>