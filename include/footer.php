            </div>
        </div>
    </div>
    <!-- /container -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <hr>
            <p class="pull-left">&copy; <?php tl($config["general"]["title"]); ?> 2016</p>
            <div class="pull-right">
                <ul class="list-inline">
                    <li> <!-- Please respect the amount of work we've put for free into this project and leave the authors in the footer. Thank you. -->
                        <p>
                            <a href="https://github.com/Wruczek/ts-website">ts-website</a> v 1.3.3 &mdash; &copy; <a href="http://wruczek.top">Wruczek</a> 2016
                        </p>

                        <p>
                            <?php tl($lang["footer"]["css"]); ?> <a href="https://flamespersecond.de">NothingTV</a>, <?php tl($lang["footer"]["background"]); ?> &copy;
                            <a href="https://twitter.com/MrSanman98">NabulsiGraphix</a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ################ -->
    <!-- #  JAVASCRIPT  # -->
    <!-- ################ -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Twitter Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Readmore.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Readmore.js/2.2.0/readmore.min.js"></script>

    <?php if (isset($bansPage)) { ?>
    <script>var datatablesUrl = "<?php tl($lang["banlist"]["datatablesurl"]); ?>";</script>

    <!-- DataTables for Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="js/bans.js"></script>
    <?php } ?>

    <!-- Custom JS -->
    <script>
        var apiurl = "api/status<?php echo $htalink; ?>";
    </script>

    <script src="js/script.js"></script>
    <script src="js/status.js"></script>
</body>

</html>
<?php
$end = microtime(true);
$creationtime = ($end - $start);
printf("<!-- Page generated " . date('d-m-Y H:i:s') . " in %.6f seconds. -->", $creationtime);
?>
