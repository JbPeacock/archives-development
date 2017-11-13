<?php
include '../header.php';
?>
<div class="col-xs-12">
<div class='container-fluid' style='padding-top:5%;padding-bottom:15%'>
    <h1 class='text-center'>First Trouble Scenario:</h1><h2 class='text-center'> Google Cloud Web Server will not Serve to Web</h2>
    <hr>
    <h3>Details:</h3>
    <ul>
        <li><h4>Successfully installed LAMP on a Debian 8 VM. (Used SSH: Added server to "hosts" file.) </h4></li>
        <li><h4>Configured Apache with Virtual Host info.</h4></li>
        <li><h4>Made sure the DNS options in G.C.P. had an "A" entry and "CNAME"</h4></li> 
        <h4 class="text-error text-center">Still no service to the web!</h4>
    </ul><hr>

    <h3>Diagnosis:</h3>
    <ul>
        <h4 class="text-info">This is a classic works on my machine scenario</h4>
        <li><h4>I can look the page up on my browser no problem, which is deceptive because:
                <ol>
                    <li><h5>The page is cached on my local machine</h5></li>
                    <li><h5>I have the IP assigned to the domain in my hosts file (as mentioned previously)</h5></li>
                </ol>
        <hr>
        <li><h4>From the CentOS 7 VM on my local machine, I get my ISP splash page when I type in the URL</h4></li>
        <hr><li><h4><code>dig [mywebsite.com]</code><p>Outputs the Google cloud nameserver, no ip</p></h4></li>
        <hr><li><h4><code>nslookup [mywebsite.com]</code><p>Can't find the site</p></h4></li>   
        <hr><li><h4><code>dig @8.8.8.8 [mywebsite.com]</code><p>Specifying the Google public DNS server reports nothing more useful</p></h4></li>
        <hr><li><h4><code>nslookup [mywebsite.com] 8.8.8.8</code><p>Specifying the Google public DNS server says the domain is registered</p></h4></li>
        <hr><h4 class="text-info">I conclude that there is a DNS error somewhere</h4>
    </ul>
    <hr><h3>Resolution:</h3>
    <ul>
        <li><h4>I peruse the Internet, especially Server Fault
                <p>There, and then in the G.C.P. guides, I find that the error has to do with DNS at the registrar</p>
            </h4>
        </li>
        <li><h4>I go to the Google Domains page, there I discover that the DNS servers do not match the Google Cloud DNS entries</h4></li>
        <li><h4>I attempt to change the Google Cloud DNS entries to match the Google Domain entries, which are in a different zone.
                <p>When that doesn't work...</p>
            </h4>
        </li>
        <hr><li><h4 class="text-info">I change the Google Domains DNS servers to match the Cloud DNS entries
                <p>Which consists of changing the "a" to a "d" (denoting the zone) in each of the four server names</p>
            </h4>
        <hr><li><h4 class="text-success">Success!</h4> 
            <h4>The VM and a friend's computer can now access the web page</h4> 
        </li>
    
    </ul>
</div>
</div>
