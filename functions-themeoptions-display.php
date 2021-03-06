<div class="wrap" id="greenpark2_admin_styles">
    <h2>Cordobo Green Park 2 Settings</h2>

    <div class="settings-liquid-left" id="settings_container">
        <div class="settings-left">
            <form method="post" name="update_form" target="_self">

                <h3 id="greenpark2_sidebar">General Settings</h3>
                <table class="form-table">
                    <tr>
                        <th>Sidebar:</th>
                        <td>
                            <label><input type="checkbox" name="sidebar_disablesidebar" <?php echo ($data['sidebar']['disablesidebar'] == true ? 'checked="checked"' : ''); ?> value="true" />
                                Disable sidebar on all posts and pages</label>
                        </td>
                    </tr>
                    <tr>
                        <th>Comments:</th>
                        <td>
                            <label><input type="checkbox" name="comments_page_disable" <?php echo ($data['comments']['page_disable'] == 'yes' ? 'checked="checked"' : ''); ?> value="yes" />
                                Disable comments on pages</label>
                        </td>
                    </tr>
                    <tr>
                        <th>Logo:</th>
                        <td>
                            <label><input type="checkbox" name="logo_show" <?php echo ($data['logo']['show'] == 'yes' ? 'checked="checked"' : ''); ?> value="yes" />
                                Show image logo instead of text (<strong>img/logo.png</strong> in your themes folder will be used)</label>
                        </td>
                    </tr>
                    <tr>
                        <th>Accessibility:</th>
                        <td>
                            <fieldset>
                                <legend>Check to hide&hellip;</legend>
                                <label><input type="checkbox" name="accessibility_disable" <?php echo ($data['accessibility']['disable'] == true ? 'checked="checked"' : ''); ?> value="true" />
                                    all accessibility links in the top right corner (this will override all the following functions of this section)</label><br/>
                                <label><input type="checkbox" name="accessibility_home" <?php echo ($data['accessibility']['home'] == true ? 'checked="checked"' : ''); ?> value="true" />
                                    the Home link</label><br/>
                                <label><input type="checkbox" name="accessibility_content" <?php echo ($data['accessibility']['content'] == 'yes' ? 'checked="checked"' : ''); ?> value="yes" />
                                    the Content link</label><br/>
                                <label><input type="checkbox" name="accessibility_feed" <?php echo ($data['accessibility']['feed'] == 'yes' ? 'checked="checked"' : ''); ?> value="yes" />
                                    the Feed link</label><br/>
                                <label><input type="checkbox" name="accessibility_meta" <?php echo ($data['accessibility']['meta'] == 'yes' ? 'checked="checked"' : ''); ?> value="yes" />
                                    the Meta link</label><br/>
                                <label><input type="checkbox" name="accessibility_register" <?php echo ($data['accessibility']['register'] == 'yes' ? 'checked="checked"' : ''); ?> value="yes" />
                                    the Register link</label><br/>
                                <label><input type="checkbox" name="accessibility_loginout" <?php echo ($data['accessibility']['loginout'] == 'yes' ? 'checked="checked"' : ''); ?> value="yes" />
                                    the Login/Logout link</label>
                            </fieldset>
                        </td>
                    </tr>
                </table>
                <br class="clear">

                <h3 id="greenpark2_sidebar">Sidebar Box (About Box)</h3>

                <p>The &quot;Sidebar Box&quot; can be used for pretty anything. Personally, I use it as an &quot;About section&quot; to tell my readers a little bit about myself, but generally it's completely up to you: put your google adsense code in it, describe your website, add your photo etc.</p>

                <table class="form-table">
                    <tr>
                        <th>Title:</th>
                        <td>
                            <input type="text" name="sidebar_about_title" value="<?php echo $data['sidebar']['about_title']; ?>" size="35" />
                        </td>
                    </tr>
                    <tr>
                        <th>Content:</th>
                        <td>
                            <textarea name="sidebar_about_content" rows="10" style="width: 95%;"><?php echo $data['sidebar']['about_content']; ?></textarea>
                        </td>
                    </tr>
                </table>
                <br class="clear">


                <h3 id="greenpark2_twitter">Twitter</h3>
                <table class="form-table">
                    <tr>
                        <th>Twitter URI:</th>
                        <td>
                            http://twitter.com/<input type="text" name="twitter_uri" value="<?php echo $data['twitter']['uri']; ?>" size="24" placeholder="username" />
                            <br />
                            <label><input type="checkbox" name="twitter_enable" <?php echo ($data['twitter']['enable'] == 'yes' ? 'checked="checked"' : ''); ?> value="yes" /> Show Twitter</label>
                        </td>
                    </tr>
                </table>
                <br />


                <h3 id="greenpark2_feedburner">Feedburner</h3>
                <table class="form-table">
                    <tr>
                        <th>Feed URI:</th>
                        <td>
                            http://feeds.feedburner.com/<input type="text" name="feed_uri" value="<?php echo $data['feed']['uri']; ?>" size="24" placeholder="username" />
                            <br /><label><input type="checkbox" name="feed_enable" <?php echo ($data['feed']['enable'] == 'yes' ? 'checked="checked"' : ''); ?> value="yes" /> Use Feedburner</label>
                            <br/>If the checkbox is unchecked, regular WordPress feeds are used.
                        </td>
                    </tr>
                </table>
                <br />


                <h3 id="greenpark2_admanager">Ad Manager</h3>
                <table class="form-table">
                    <tr>
                        <th>Google Adsense:<br />(Bottom of Post)</th>
                        <td>
                            <textarea name="google_adsense_bottom" style="width: 95%;" rows="10" /><?php echo get_option('google_adsense_bottom'); ?></textarea>
                            <br />Paste your Google Adsense Code for the bottom of each post.
                            <br /><strong>Size of 468x60 Recommended.</strong>
                        </td>
                    </tr>
                </table>
                <br />


                <h3 id="greenpark2_analytics">Analytics</h3>
                <table class="form-table">
                    <tr>
                        <th>Google Analytics:</th>
                        <td>
                            <textarea name="google_analytics" style="width: 95%;" rows="10" /><?php echo get_option('google_analytics'); ?></textarea>
                            <br />Paste your Google Analytics code here. It will appear at the end of each page.
                        </td>
                    </tr>
                </table>

                <p class="submit" id="jump_submit">
                    <input name="submitted" type="hidden" value="yes" />
                    <input type="submit" name="Submit" value="<?php _e('Save Changes', 'greenpark') ?>" class="button button-primary" />
                </p>
            </form>

        </div> <!-- END .settings-left -->
    </div> <!-- END .settings-liquid-left -->



    <div class="settings-liquid-right" style="position: fixed; right: 15px;">
        <div class="settings-right">

            <div class="widgets-holder-wrap">

                <div class="sidebar-name"><h3>Menu</h3></div>

                <div class="widget-holder" style="padding: 1px 10px 10px;">
                    <h4 style="margin-bottom: 8px;">Settings</h4>
                    <ul style="list-style-type: none; font-size: 11px; line-height: 13px;">
                        <li><a href="#greenpark2_sidebar">Sidebar (About Box)</a></li>
                        <li><a href="#greenpark2_twitter">Twitter</a></li>
                        <li><a href="#greenpark2_feedburner">FeedBurner</a></li>
                        <li><a href="#greenpark2_admanager">Ad Manager</a></li>
                        <li><a href="#greenpark2_analytics">Analytics</a></li>
                    </ul>

                    <h4 style="margin-bottom: 8px;">Documentation</h4>
                    <ul style="list-style-type: none; font-size: 11px; line-height: 13px;">
                        <li><a href="#greenpark2_about_doc">About this Theme</a></li>
                        <li><a href="#greenpark2_logo_doc">Logo setup</a></li>
                        <li><a href="#greenpark2_tutorials_doc">Tutorials</a></li>
                        <li><a href="#greenpark2_license_doc">License</a></li>
                    </ul>

                    <br/>
                    <small>&uarr; <a href="#wpwrap">Top</a> | <a href="#jump_submit">Goto &quot;Save&quot;</a></small>

                    <br/><br/>
                    Like it? Buy me a coffee ;-)
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="5976565" />
                        <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!" />
                        <img alt="" src="https://www.paypal.com/de_DE/i/scr/pixel.gif" width="1" height="1" />
                    </form>

                </div>
            </div>

        </div>
    </div>

    <div class="clear"></div>


    <br /><br /><br /><br />

    <h2>Cordobo Green Park 2 Documentation</h2>

    <h3 id="greenpark2_about_doc">About your new theme</h3>
    <p>Thank you for using the Green Park 2 theme, a free premium wordpress theme by <a href="<?php echo esc_url( __('http://cordobo.com/about/', 'greenpark'));?>">Andreas Jacob</a></p>
    <p>If you need any support or want some tips, please visit <a href="<?php echo esc_url( __('http://cordobo.com/', 'greenpark'));?>">Cordobo Green Park 2 project page</a></p>


    <h3 id="greenpark2_logo_doc">Logo Setup</h3>
    <ul>
        <li>Check the checkbox on this page (Logo section)</li>
        <li>Replace the file "logo.png" within the sub-folder "img" in your themes directory with your own logo.</li>
    </ul>


    <h3 id="greenpark2_tutorials_doc">Tutorials</h3>
    <p>
        List of tutorials based on this theme.
    </p>
    <p>
    <ul>
        <li><a href="<?php echo esc_url( __('http://cordobo.com/1119-provide-visual-feedback-css/', 'greenpark'));?>">Provide visual feedback using CSS</a> &mdash; An introduction to the themes usage of CSS3</li>
        <li><a href="<?php echo esc_url( __('http://cordobo.com/1381-green-park-2-beta-5-pre/', 'greenpark'));?>">Green Park 2 for translators</a> &mdash; Help translating Green Park 2 into your language</li>
    </ul>
</p>


<h3 id="greenpark2_license_doc">Licence</h3>
<p>
    Released under the <a target="_blank" href="http://www.gnu.org/licenses/gpl.html">GPL License</a> (<a target="_blank" href="http://en.wikipedia.org/wiki/GNU_General_Public_License">What is the GPL</a>?)
</p>
<p>
    Free to download, free to use, free to customize. Basically you can do whatever you want :)
</p>



</div> <!-- .wrap -->
