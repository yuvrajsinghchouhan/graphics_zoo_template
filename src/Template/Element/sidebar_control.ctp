<?php

use Cake\Routing\Router;
?>
<!-- START SIDE SETTING -->
<div class="right-side-bar">
    <div class="float-xs-left icon-right site-setting-animation how-it-works">
        <div id="site_setting_icon" class="animation">
            <img src="<?= Router::url(THEME_IMAGES . 'site-setting-icon.png'); ?>" alt="" class="icon1" />
            <img src="<?= Router::url(THEME_IMAGES . 'site-setting-icon.png'); ?>" alt="" class="icon2">
            <img src="<?= Router::url(THEME_IMAGES . 'site-setting-icon.png'); ?>" alt="" class="icon3">
        </div>
    </div>

    <div class="right-side-box float-xs-right" data-plugin="custom-scroll" data-height="100%">
        <div class="right-side-inner-box">
            <div class="globle-right-content">
                <h5><span class="icon_box-selected" aria-hidden="true"></span> Colors</h5>
                <div class="settings-sidebox site-color">
                    <div class="color-inner-box default-color color-active" data-color="default"></div>
                    <div class="color-inner-box golden-color" data-color="golden"></div>
                    <div class="color-inner-box soft-orange-color" data-color="soft-orange"></div>
                    <div class="color-inner-box dodger-blue-color" data-color="dodger-blue"></div>
                    <div class="color-inner-box bright-pink-color" data-color="bright-pink"></div>
                    <div class="color-inner-box light-red-color" data-color="light-red"></div>
                    <div class="color-inner-box purple-color" data-color="purple"></div>
                    <div class="color-inner-box spice-color" data-color="spice"></div>
                </div>
            </div>
            <div class="globle-right-content">
                <h5 class="default"><span class="icon_box-selected" aria-hidden="true"></span> Template</h5>
                <div class="settings-sidebox">
                    <span class="dark-color">Light</span>
                    <div class="texture-switch dark-color-switch">
                        <input type="checkbox" class="js-switch site-dark-check" data-plugin="switchery" data-switchery="true" data-size="small"/>
                    </div>
                </div>
            </div>
            <div class="globle-right-content">
                <h5 class="default"><span class="icon_box-selected" aria-hidden="true"></span> Navigation</h5>
                <div class="settings-sidebox">
                    <span class="nav-dark-color">Dark</span>
                    <div class="texture-switch nav-color-switch">
                        <input type="checkbox" class="js-switch nav-dark-check" data-plugin="switchery" data-switchery="true" data-size="small"/>
                    </div>
                </div>
                <div class="settings-sidebox">
                    <span class="nav-fixed-text">Fixed</span>
                    <div class="texture-switch nav-fixed-switch">
                        <input type="checkbox" class="js-switch nav-fixed-check" data-plugin="switchery" data-switchery="true" data-size="small"/>
                    </div>
                </div>
            </div>
            <div class="globle-right-content">
                <h5 class="default"><span class="icon_box-selected" aria-hidden="true"></span> Footer</h5>
                <div class="settings-sidebox">
                    <span class="footer-check-text">Default</span>
                    <div class="texture-switch footer-fixed-switch">
                        <input type="checkbox" class="js-switch footer-fixed-check" data-plugin="switchery" data-switchery="true" data-size="small"/>
                    </div>
                </div>
            </div>
            <div class="globle-right-content">
                <h5><span class="icon_box-selected" aria-hidden="true"></span> Fonts</h5>
                <div class="settings-sidebox site-fonts">
                    <div class="font-box">
                        <label for="font-radio-button1">Default</label>
                        <div class="radio-button float-xs-right">
                            <input value="default" id="font-radio-button1" name="font" type="radio" checked>
                            <label class="radio-check" for="font-radio-button1"></label>
                        </div>
                    </div>
                    <div class="font-box">
                        <label for="font-radio-button2">PT Sans</label>
                        <div class="radio-button float-xs-right">
                            <input value="font2" id="font-radio-button2" name="font" type="radio">
                            <label class="radio-check" for="font-radio-button2"></label>
                        </div></div>
                    <div class="font-box">
                        <label for="font-radio-button3">Open Sans</label>
                        <div class="radio-button float-xs-right">
                            <input value="font3" id="font-radio-button3" name="font" type="radio">
                            <label class="radio-check" for="font-radio-button3"></label>
                        </div></div>
                </div>
            </div>
            <div class="globle-right-content">
                <h5><span class="icon_box-selected" aria-hidden="true"></span> System</h5>
                <div class="settings-sidebox">
                    <ul class="list-unstyled">
                        <li>
                            <span class="system-option"><i class="icon_lock"></i> Last Login</span>
                            <span class="time float-xs-right">2h ago</span>
                        </li>
                        <li>
                            <span class="system-option"><i class="icon_calendar"></i> Our Task</span>
                            <span class="time float-xs-right">06</span>
                        </li>
                        <li>
                            <span class="system-option"><i class="icon_cloud_alt"></i> Weather Today</span>
                            <span class="time float-xs-right">32c</span>
                        </li>
                        <li>
                            <span class="system-option"><i class="icon_comment_alt"></i> Notifications</span>
                            <span class="time float-xs-right">10</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SIDE SETTING -->
