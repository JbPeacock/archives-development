<?php include '../header.php'; ?>
<div class="container-fluid" id="main" role="main">
    <div class="row">
        <div class="span8 offset2">
            <h3 class="text-center" style="padding-top:15%">Debian 8 Security
                 Hardening V.1</h3>
            <h5> Note: This guide is written with the intention of validating
                the guides I find on LAMP server security.</h5>
            <p> The development of this guide is a process in research and
                refinement. Therefore, it will likely change over time. I'm
                discovering that not many guides more current than a few years
                ago. This first version is being written as of April 22, 2017.
            </p>
            <p class="text-center"> I hope this guide helps others as much as
                others have helped me</p>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="span8 offset2" id="text" role="main" style="padding-bottom:10%">
            <h5 class="text-center">
                The Debian 8 server is a virtual machine. Installed are Apache,
                MySQL and PHP.
                <br>
            </h5>
                <p> I am following the tips on the guide found here:</p>

                <a href="http://www.tecmint.com/apache-security-tips/">
                    <label>Tecmint's Apache Security Tips</label>
                </a>
            <p> and in this one:</p>
                <a href="https://www.cyberciti.biz/tips/php-security-best-practices-tutorial.html">
                    <label>nixCraft's Linux: 25 PHP Security Best Practices For
                         Sys Admins</label>
                     </a>
                <hr>
                <p>First, I set up servertokens and the headers information.</p>
                <p>I followed the instructions TecMint provided, but recieved this
                    output when I got to testing my http config:</p>
                <br>
                <p >Note: In the guide the command refers to httpd, but it didn't
                     work for me</p>
                <code>[localhost] ~ $ sudo apache2 -t</code>
                <pre> [Sat Apr 22 07:47:12.679651 2017] [core:warn] [pid 2946] AH00111: Config variable ${APACHE_LOCK_DIR} is not defined
                 [Sat Apr 22 07:47:12.679832 2017] [core:warn] [pid 2946] AH00111: Config variable ${APACHE_PID_FILE} is not defined
                 [Sat Apr 22 07:47:12.679881 2017] [core:warn] [pid 2946] AH00111: Config variable ${APACHE_RUN_USER} is not defined
                 [Sat Apr 22 07:47:12.679919 2017] [core:warn] [pid 2946] AH00111: Config variable ${APACHE_RUN_GROUP} is not defined
                 [Sat Apr 22 07:47:12.679970 2017] [core:warn] [pid 2946] AH00111: Config variable ${APACHE_LOG_DIR} is not defined
                 [Sat Apr 22 07:47:12.698635 2017] [core:warn] [pid 2946]  AH00111: Config variable ${APACHE_LOG_DIR} is not defined
                </pre>
                <br>
                <p> Looking in apache2.conf:</p>
                <code>sudo nano /etc/apache2/apache2.conf</code>
                <p>I discover:</p>
                <pre> {Line 72-74:}
                    # The accept serialization lock file MUST BE STORED ON A LOCAL DISK.
                    #
                    Mutex file:${APACHE_LOCK_DIR} default
                </pre>
</div>
</body>
</html>
