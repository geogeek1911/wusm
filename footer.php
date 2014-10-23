<?php
// Required for mobile nav on Event Organiser search results page.
// I'd prefer to have this in the WUSM Event Organiser Skin plugin.
if (isset($_GET['post_type']) && $_GET['post_type'] == 'event' && is_search()) {
    ?>
        </div>
    </div>
<?php
}
?>

<footer>

    <?php include_once(get_stylesheet_directory() . '/site-footer.php') ?>

    <div id="wusm-footer">

        <div class="wrapper clearfix">

            <div id="wusm-footer-left">
                <a onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','http://medicine.wustl.edu/']);" href="http://medicine.wustl.edu/"><img width="147" height="31" src="<?php echo get_template_directory_uri(); ?>/_/img/wusm-logo-footer.svg" onerror="this.src='<?php echo get_template_directory_uri(); ?>/_/img/wusm-logo-footer.png';this.onerror=null;" alt="Washington University School of Medicine in St. Louis"></a>
                <div id="copyright"><a href="http://www.wustl.edu/policies/copyright.html">&copy; <?php echo date("Y") ?> Washington University in St. Louis</a></div>
            </div>

            <div id="wusm-footer-right">
                <div id="wusm-social">
                    <a onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','Facebook']);" id="wusm-facebook" title="Facebook" href="https://www.facebook.com/WUSTLmedicine.health"><img src="<?php echo get_template_directory_uri(); ?>/_/img/facebook.svg" width="23" height="23" onerror="this.src='<?php echo get_template_directory_uri(); ?>/_/img/facebook.png';this.onerror=null;"></a><a onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','Twitter']);" id="wusm-twitter" title="Twitter" href="http://twitter.com/WUSTLmed"><img src="<?php echo get_template_directory_uri(); ?>/_/img/twitter.svg" width="23" height="23" onerror="this.src='<?php echo get_template_directory_uri(); ?>/_/img/twitter.png';this.onerror=null;"></a><a onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','Google+']);" id="wusm-google-plus" title="Google+" href="https://plus.google.com/106914955616933360045/"><img src="<?php echo get_template_directory_uri(); ?>/_/img/google-plus.svg" width="23" height="23" onerror="this.src='<?php echo get_template_directory_uri(); ?>/_/img/google-plus.png';this.onerror=null;"></a>
                </div>

                <nav>
                    <a class="first-child" onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','http://emergency.wustl.edu']);" href="http://emergency.wustl.edu">Emergency</a>
                    <a onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','http://medicine.wustl.edu/policies']);" href="http://medicine.wustl.edu/policies">Policies</a>
                    <a class="last-child" onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','http://news.wustl.edu/mh/Pages/MedicineHealthcare.aspx']);" href="http://news.wustl.edu/mh/Pages/MedicineHealthcare.aspx">News</a>
                </nav>
            </div>

        </div>

    </div>

</footer>



<?php
   /* Always have wp_footer() just before the closing </body>
	* tag of your theme, or you will break many plugins, which
	* generally use this hook to reference JavaScript files.
	*/
	wp_footer();
?>
</body>
</html>