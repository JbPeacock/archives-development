<?php include 'header.php'; ?>
<div class="container-fluid" id="main" role="main">
    <div class="row">
        <div class="span8 offset2">
            <h2 class="text-center">Debian 8 Security Hardening V.1</h2>
            <p> Note: This guide is written with the intention of validating the
                guides I find on LAMP server security.</p>
            <p> The development of this guide is a process in research and
                refinement. Therefore, it will likely change over time. I'm
                discovering that not many guides more current than a few years ago. This first
                version is being written as of April 22, 2017.
            <p class="text-center"> I hope this guide helps others as much as
                others have helped me</p>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="span8 offset2" id="text" role="main">
            <h2 class="text-center">
                The Debian 8 server is a virtual machine. Installed are Apache,MySQL and PHP.
                Using the guide found here:
                <a href="http://www.tecmint.com/apache-security-tips/">
                    <label>Tecmint's Apache Security Tips</label>
                </a>
                <p>First, I set up servertokens and the headers information.</p>
                <p>I followed the instructions provided, but recieved this
                    output when I got to testing my http config:</p>
                <br>
                <code>sudo apache2 -t
                </code>
                <p>Note: In the guide the command refers to httpd, but it didn't
                     work for me</p>
                <br>
                <code> [Sat Apr 22 07:47:12.679651 2017] [core:warn] [pid 2946] AH00111: Config variable ${APACHE_LOCK_DIR} is not defined
                    [Sat Apr 22 07:47:12.679832 2017] [core:warn] [pid 2946] AH00111: Config variable ${APACHE_PID_FILE} is not defined
                    [Sat Apr 22 07:47:12.679881 2017] [core:warn] [pid 2946] AH00111: Config variable ${APACHE_RUN_USER} is not defined
                    [Sat Apr 22 07:47:12.679919 2017] [core:warn] [pid 2946] AH00111: Config variable ${APACHE_RUN_GROUP} is not defined
                    [Sat Apr 22 07:47:12.679970 2017] [core:warn] [pid 2946] AH00111: Config variable ${APACHE_LOG_DIR} is not defined
                    [Sat Apr 22 07:47:12.698635 2017] [core:warn] [pid 2946] AH00111: Config variable ${APACHE_LOG_DIR} is not defined
                </code>
                <br>

</div>
</body>
</html>
