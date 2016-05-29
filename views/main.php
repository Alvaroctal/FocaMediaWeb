<div id="page-front" class="no-overflow">

    <h1 style="font-size: 4.5rem; line-height: 1" class="text-shadow metro-title text-light">Foca MediaCenter</h1>
    <h2 class="padding30 sub-leader text-light fg-grayLighter">
        A graphical easy to use media library, that tags and streams your movies / tvshows to your mobile.
    </h2>

    <div class="grid">
        <div class="row cells2">
            <div class="cell">
                <div class="panel warning">
                    <div class="heading">
                        <span class="icon mif-display bg-darkOrange"></span>
                        <span class="title">Desktop / Server</span>
                    </div>
                    <div class="content padding10">
                        <p>A graphical electron based application that crawls through your media library, recognises and compares the data with <a href="https://themoviedb.org">The Movie Database</a> API.<br />&nbsp<a href="server/" class="place-right">more info...</a></p>
                        <button href="#" onclick="showDownloadDialog('/foca/download/FocaMediaCenter-win32-x64.zip')" class="image-button primary">
                            Windows
                            <span class="icon mif-windows bg-darkCobalt"></span>
                        </button>
                        <a href="#" class="image-button primary">
                            Mac OSX
                            <span class="icon mif-apple bg-darkCobalt"></span>
                        </a>
                        <a href="#" class="image-button primary">
                            Linux
                            <span class="icon mif-linux bg-darkCobalt"></span>
                        </a>
                        <a href="https://github.com/Alvaroctal/FocaMediaServer" class="image-button bg-indigo fg-white place-right">
                            GitHub
                            <span class="icon mif-github bg-darkIndigo"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cell">
                <div class="panel success">
                    <div class="heading">
                        <span class="icon mif-tablet bg-emerald"></span>
                        <span class="title">Mobile app</span>
                    </div>
                    <div class="content padding10">
                        <p>A ionic implementation for client side, allows you to see in streaming your content.<br /><br />&nbsp<a href="/foca/client/" class="place-right">more info...</a></p>
                        <a href="#" class="image-button primary">
                            Android
                            <span class="icon mif-android bg-darkCobalt"></span>
                        </a>
                        <a href="#" class="image-button primary">
                            iPhone
                            <span class="icon mif-apple bg-darkCobalt"></span>
                        </a>
                        <a href="https://github.com/Alvaroctal/FocaMedia" class="image-button bg-indigo fg-white place-right">
                            GitHub
                            <span class="icon mif-github bg-darkIndigo"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="row-donation" class="row margin40">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="9ZUNTXTD9VQV4">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="donate" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
        </form>
    </div>
</div>

<!-- Dialogs -->

<div data-role="dialog" id="dialog-download" class="padding20 dialog" data-close-button="true" data-windows-style="true" style="left: 0px; right: 0px; width: auto; height: auto; visibility: hidden; top: 286px;">
    <div class="container">
        <h1>This is a very under development version.</h1>
        <p>
            This software comes is it is, without any warranty. If you proceed you understand the risks.
        </p>
        <a id="dialog-download-btn" class="button danger place-right" href="#">Download</a>
    </div>
<span class="dialog-close-button"></span></div>